<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transfer extends CI_Controller {
	public function __construct(){
		parent::__construct();
        if(!$this->session->userdata('logged_in')){
			redirect('login');
			exit;
		}
		
		$this->load->model('Common_model','cm',true);
	}
    
    public function index(){
        $exw="type=1 or type=2";
        $data['datas']=$this->cm->common_result("transaction_history",'*',false,'id','DESC',$exw);
        $data['page']='transfer/index.php';
        $this->load->view('master',$data);
    }

    public function create(){
        $this->form_validation->set_error_delimiters('<span class="text-danger">','</span>');
		
		$this->form_validation->set_rules('transfer_amount','Amount','trim|required');
		$this->form_validation->set_rules('from_account','From Account','trim|required|callback_check_account_from');
		$this->form_validation->set_rules('to_account','To Account','trim|required|callback_check_account_to');
		if($this->form_validation->run()==FALSE){
			$data['page']='transfer/add.php';
            $this->load->view('master',$data);
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
            redirect('transfer');
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
