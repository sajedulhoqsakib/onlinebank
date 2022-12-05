<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Common_model','cm',true);
		if(!$this->session->userdata('logged_in')){
			redirect('login');
			exit;
		}
	}
	
	function index(){
		$data['page']="dashboard.php";
		$this->load->view('master',$data);
	}
	
	function search_customer(){
		$id=$_GET['account_no'];
		$con['account_no']=$id;
		$data['data']=$this->cm->common_row("customer","*",$con);
        $conacc['account_no']=$id;
		$data['trans']=$this->cm->common_result("transaction_history","*",$conacc);
        $data['page']='customer_view.php';
        $this->load->view('master',$data);
	}
}