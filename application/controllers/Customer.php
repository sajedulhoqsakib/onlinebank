<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {
	public function __construct(){
		parent::__construct();
        if(!$this->session->userdata('logged_in')){
			redirect('login');
			exit;
		}
		
		$this->load->model('Common_model','cm',true);
	}
    
    public function index(){
        
        $data['datas']=$this->cm->common_result("customer");
        $data['page']='customer/index.php';
        $this->load->view('master',$data);
    }

    public function create(){
        $this->form_validation->set_error_delimiters('<span class="text-danger">','</span>');
		
		$this->form_validation->set_rules('first_name','Name','trim|required');
		if($this->form_validation->run()==FALSE){
			$data['page']='customer/add.php';
            $this->load->view('master',$data);
		}else{
            $data['first_name']=$this->input->post('first_name',true);
            $data['father_name']=$this->input->post('father_name',true);
            $data['last_name']=$this->input->post('last_name',true);
            $data['email_address']=$this->input->post('email_address',true);
            $data['mobile_no']=$this->input->post('mobile_no',true);
            $data['account_no']=$this->input->post('account_no',true);            
            $data['nid_no']=$this->input->post('nid_no',true);
            $data['address']=$this->input->post('address',true);
            $data['city']=$this->input->post('city',true);
            $data['district']=$this->input->post('district',true);
            $data['division']=$this->input->post('division',true);
            $data['dob']=$this->input->post('dob',true);
            $data['pincode']=$this->input->post('pincode',true);
            $data['image']=$this->input->post('image',true);
            $data['gender']=$this->input->post('gender',true);
            $data['password']=sha1($this->input->post('password',true));
			
            
			if(!empty($_FILES['image']['name'])){
				$this->load->library('upload');
				$con['upload_path']='upload/customer';
				//$con['file_name']=str_replace(' ','_',$this->input->post('name',true)).time();
				$con['allowed_types']='*';
				$con['overwrite']=false;
				$dir="upload";
				$dir1="upload/customer";
				if(!file_exists($dir)){
					mkdir($dir);
				}
				if(!file_exists($dir1)){
					mkdir($dir1);
				}
				$this->upload->initialize($con);
				if($this->upload->do_upload('image')){
					$imgdata=$this->upload->data();
					$data['image']=$imgdata['file_name'];
				}
			}
			
            $insert=$this->cm->common_insert('customer',$data);
            if($insert){
                $this->session->set_flashdata('message','<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert">&time;</a> Data save success.</div>');
            }else{
                $this->session->set_flashdata('message','<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert">&time;</a> Data save fail. Please Try agian.</div>');
            }
            redirect('customer');
        }

    }

    public function update($id){
        $this->form_validation->set_error_delimiters('<span class="text-danger">','</span>');
		$this->form_validation->set_rules('first_name','Name','trim|required');
		if($this->form_validation->run()==FALSE){
			$con['id']=$id;
            $data['data']=$this->cm->common_row("customer","*",$con);
			$data['page']='customer/update.php';
            $this->load->view('master',$data);
		}else{
            $data['first_name']=$this->input->post('first_name',true);
            $data['father_name']=$this->input->post('father_name',true);
            $data['last_name']=$this->input->post('last_name',true);
            $data['email_address']=$this->input->post('email_address',true);
            $data['mobile_no']=$this->input->post('mobile_no',true);
            $data['account_no']=$this->input->post('account_no',true);            
            $data['nid_no']=$this->input->post('nid_no',true);
            $data['address']=$this->input->post('address',true);
            $data['city']=$this->input->post('city',true);
            $data['district']=$this->input->post('district',true);
            $data['division']=$this->input->post('division',true);
            $data['dob']=$this->input->post('dob',true);
            $data['pincode']=$this->input->post('pincode',true);
            
            $data['gender']=$this->input->post('gender',true);
            if($this->input->post('password',true))
            $data['password']=sha1($this->input->post('password',true));

			if(!empty($_FILES['image']['name'])){
				$this->load->library('upload');
				$conf['upload_path']='upload/customer';
				//$con['file_name']=str_replace(' ','_',$this->input->post('name',true)).time();
				$conf['allowed_types']='*';
				$conf['overwrite']=false;
				$dir="upload";
				$dir1="upload/customer";
				if(!file_exists($dir)){
					mkdir($dir);
				}
				if(!file_exists($dir1)){
					mkdir($dir1);
				}
				$this->upload->initialize($conf);
				if($this->upload->do_upload('image')){
					$imgdata=$this->upload->data();
					$data['image']=$imgdata['file_name'];
				}
			}
			
			
            $con['id']=$id;
            $up=$this->cm->common_update('customer',$data,$con);
                
            if($up)
                $this->session->set_flashdata('message','<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert">&time;</a> Data update success.</div>');
            else
                $this->session->set_flashdata('message','<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert">&time;</a> Data update fail. Please Try agian.</div>');

            redirect('customer');
        }

    }

    Public function delete_data($id){
        $con['id']=$id;
        if($this->cm->common_delete('customer',$con))
            $this->session->set_flashdata('message','<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert">&time;</a> Data delete success.</div>');
        else
            $this->session->set_flashdata('message','<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert">&time;</a> Data delete fail. Please Try agian.</div>');
        
        redirect('customer');
    }
	
	Public function view_data($id){
        $con['id']=$id;
		$data['data']=$this->cm->common_row("customer","*",$con);
        $data['page']='customer/view.php';
        $this->load->view('master',$data);
    }
	
	Public function transaction_history($id){
        $con['account_no']=$id;
		$data['data']=$this->cm->common_row("customer","*",$con);
        $conacc['account_no']=$id;
		$data['trans']=$this->cm->common_result("transaction_history","*",$conacc);
		$data['page']='customer/transaction_history.php';
        $this->load->view('master',$data);
    }
}
