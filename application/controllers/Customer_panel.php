<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_panel extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Common_model','cm',true);
	}

    function login(){
		if($this->session->userdata('customer_logged_in')){
			redirect('customer_panel/customer_dashboard');
			exit;
		}
		$this->form_validation->set_error_delimiters('<span class="text-danger">','</span>');
		
		$this->form_validation->set_rules('account_no','Account No','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required|callback_check_user');
		if($this->form_validation->run()==FALSE){
			//echo $this->db->last_query();
			$data['setting']=$this->cm->common_row('tbl_settings');
			$this->load->view('customer_panel/login',$data);
		}else{
			redirect('customer_panel/customer_dashboard');
		}
	}

	function check_user($pass){
		$con['account_no']=$this->input->post('account_no',true);
		$con['password']=sha1($pass);
		$rs=$this->cm->common_row('customer','*',$con);
		if($rs){
			$sess_arr=array(
				'id'=>$rs->id,
				'account_no'=>$rs->account_no,
				'name'=>$rs->first_name.' '.$rs->last_name,
				'image'=>$rs->image
			);
			$this->session->set_userdata('customer_logged_in',$sess_arr);
			return TRUE;
		}else{
			$this->form_validation->set_message('check_user','Account No or password invalid.');
			return FALSE;
		}
	}

    public function logout(){
		$this->session->sess_destroy();
		redirect('customer_panel/login');
	}

    public function customer_dashboard(){
        $data['datas']=$this->cm->common_result("customer");
        $data['page']='customer_panel/customer_dashboard.php';
        $this->load->view('customer_panel/master',$data);
    }


    public function transfer(){
        $exw="type=1";
        $con['account_no']= $this->session->userdata('customer_logged_in')['account_no'];
        $data['datas']=$this->cm->common_result("transaction_history",'*',$con,'id','DESC',$exw);
        $data['page']='customer_panel/transfer/index.php';
        $this->load->view('customer_panel/master',$data);
    }

    public function transferadd(){
        $this->form_validation->set_error_delimiters('<span class="text-danger">','</span>');
		
		$this->form_validation->set_rules('transfer_amount','Amount','trim|required');
		$this->form_validation->set_rules('from_account','From Account','trim|required|callback_check_account_from');
		$this->form_validation->set_rules('to_account','To Account','trim|required|callback_check_account_to');
		if($this->form_validation->run()==FALSE){
			$data['page']='customer_panel/transfer/add.php';
            $this->load->view('customer_panel/master',$data);
		}else{
			/* to account balance add */
            $ttdata['amount_cr']=$this->input->post('transfer_amount',true);
            $ttdata['account_no']=$this->input->post('to_account',true);
            $ttdata['type']=2;
            $ttdata['trans_at']=date('Y-m-d H:i:s');
			$ttdata['note']="Transfer from ".$this->input->post('from_account',true);
			$insert=$this->cm->common_insert('transaction_history',$ttdata);
			/* from account balance deduction */
			$tfdata['amount_dr']=$this->input->post('transfer_amount',true);
            $tfdata['account_no']=$this->input->post('from_account',true);
            $tfdata['type']=1;
            $tfdata['trans_at']=date('Y-m-d H:i:s');
			$tfdata['note']="Transfer to ".$this->input->post('to_account',true);
			
            $insert=$this->cm->common_insert('transaction_history',$tfdata);
            if($insert){
                /* to account balance add */
                $twhere['account_no']=$this->input->post('to_account',true);
                $tcheck=$this->cm->common_row('customer','*',$twhere);
                $tdata['balance']=($tcheck->balance + $this->input->post('transfer_amount',true));
                $insert=$this->cm->common_update('customer',$tdata,$twhere);
                /* from account balance deduction */
                $fwhere['account_no']=$this->input->post('from_account',true);
                $fcheck=$this->cm->common_row('customer','*',$fwhere);
                $fdata['balance']=($fcheck->balance - $this->input->post('transfer_amount',true));
                $insert=$this->cm->common_update('customer',$fdata,$fwhere);

                $this->session->set_flashdata('message','<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert">&time;</a> Data save success.</div>');
            }else{
                $this->session->set_flashdata('message','<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert">&time;</a> Data save fail. Please Try agian.</div>');
            }
            redirect('customer_panel/transfer');
        }

    }

    function check_account_from($from){
        $amount=$this->input->post('transfer_amount');
        $where['account_no']=$from;
        $check=$this->cm->common_row('customer','*',$where);
        if($check){
            if($amount>$check->balance){
                $this->form_validation->set_message('check_account_from','Customer dont have enough balance');
			    return FALSE;
            }else{
			    return TRUE;
            }
        }else{
            $this->form_validation->set_message('check_account_from','Customer not found');
			return FALSE;
        }
    }

    function check_account_to($to){
        $where['account_no']=$to;
        $check=$this->cm->common_row('customer','*',$where);
        if($check){
			return TRUE;
        }else{
            $this->form_validation->set_message('check_account_to','Customer not found');
			return FALSE;
        }
    }
}