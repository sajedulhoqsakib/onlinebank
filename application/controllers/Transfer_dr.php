<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transfer_dr extends CI_Controller {
	public function __construct(){
		parent::__construct();
        if(!$this->session->userdata('logged_in')){
			redirect('login');
			exit;
		}
		
		$this->load->model('Common_model','cm',true);
	}
    
    public function index(){
        $where['type']=3;
        $data['datas']=$this->cm->common_result("transaction_history",'*',$where);
        $data['page']='transferdr/index.php';
        $this->load->view('master',$data);
    }

    public function create(){
        $this->form_validation->set_error_delimiters('<span class="text-danger">','</span>');
		
		$this->form_validation->set_rules('transfer_amount','Amount','trim|required');
		$this->form_validation->set_rules('from_account','From Account','trim|required|callback_check_account_from');
		if($this->form_validation->run()==FALSE){
			$data['page']='transferdr/add.php';
            $this->load->view('master',$data);
		}else{
            $data['amount_dr']=$this->input->post('transfer_amount',true);
            $data['account_no']=$this->input->post('from_account',true);
            $data['type']=3;
            $data['trans_at']=date('Y-m-d H:i:s');
			$data['note']="Bank debited customer account "; // add note by shahajahan
			
            $insert=$this->cm->common_insert('transaction_history',$data);
            if($insert){
                /* from account balance deduction */
                $fwhere['account_no']=$this->input->post('from_account',true);
                $fcheck=$this->cm->common_row('customer','*',$fwhere);
                $fdata['balance']=($fcheck->balance - $this->input->post('transfer_amount',true));
                $insert=$this->cm->common_update('customer',$fdata,$fwhere);

                $this->session->set_flashdata('message','<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert">&time;</a> Data save success.</div>');
            }else{
                $this->session->set_flashdata('message','<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert">&time;</a> Data save fail. Please Try agian.</div>');
            }
            redirect('transferdr');
        }

    } /*
    // for cr transfer
    function check_account_from($from){
        $where['account_no']=$from;
        $check=$this->cm->common_row('customer','*',$where);
        if($check){
			return TRUE;
        }else{
            $this->form_validation->set_message('check_account_from','Customer not found');
			return FALSE;
        }
    } 
   */
    
    //for dr transfer
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
            $this->form_validation->set_message('check_account_from','Customer not found hh');
			return FALSE;
        }
    }

}
