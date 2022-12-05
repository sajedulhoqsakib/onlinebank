<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {
	public function __construct(){
		parent::__construct();
        if(!$this->session->userdata('logged_in')){
			redirect('login');
			exit;
		}
		if($this->session->userdata('logged_in')['type']=='employee'){
			$this->session->set_flashdata('message','<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert">X</a> You are not allowed to visit this page.</div>');
			redirect('dashboard');
			exit;
		}
		
		$this->load->model('Common_model','cm',true);
	}
    
    public function index(){
        $con['status != ']=0;
        $data['datas']=$this->cm->common_result("employee");
        $data['page']='employee/index.php';
        $this->load->view('master',$data);
    }

    public function create(){
        $this->form_validation->set_error_delimiters('<span class="text-danger">','</span>');
		
		$this->form_validation->set_rules('name','Name','trim|required');
		if($this->form_validation->run()==FALSE){
			$data['page']='employee/add.php';
            $this->load->view('master',$data);
		}else{
            $data['name']=$this->input->post('name',true);
            $data['father_name']=$this->input->post('father_name',true);
            $data['email']=$this->input->post('email',true);
            $data['password']=$this->input->post('password',true);
            $data['mobile']=$this->input->post('mobile',true);
            $data['nid_no']=$this->input->post('nid_no',true);
            $data['dob']=$this->input->post('dob',true);
            $data['address']=$this->input->post('address',true);
            $data['city']=$this->input->post('city',true);
            $data['district']=$this->input->post('district',true);
            $data['division']=$this->input->post('division',true);
			
			if(!empty($_FILES['image']['name'])){
				$this->load->library('upload');
				$con['upload_path']='upload/employee';
				//$con['file_name']=str_replace(' ','_',$this->input->post('name',true)).time();
				$con['allowed_types']='*';
				$con['overwrite']=false;
				$dir="upload";
				$dir1="upload/employee";
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
			
            $insert=$this->cm->common_insert('employee',$data);
            if($insert){
                $this->session->set_flashdata('message','<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert">&time;</a> Data save success.</div>');
            }else{
                $this->session->set_flashdata('message','<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert">&time;</a> Data save fail. Please Try agian.</div>');
            }
            redirect('employee');
        }

    }

    public function update($id){
        $this->form_validation->set_error_delimiters('<span class="text-danger">','</span>');
		$this->form_validation->set_rules('name','Name','trim|required');
		if($this->form_validation->run()==FALSE){
			$con['id']=$id;
            $data['data']=$this->cm->common_row("employee","*",$con);
			$data['page']='employee/update.php';
            $this->load->view('master',$data);
		}else{
            $data['name']=$this->input->post('name',true);
            $data['father_name']=$this->input->post('father_name',true);
            $data['email']=$this->input->post('email',true);
            $data['password']=$this->input->post('password',true);
            $data['mobile']=$this->input->post('mobile',true);
            $data['nid_no']=$this->input->post('nid_no',true);
            $data['dob']=$this->input->post('dob',true);
            $data['address']=$this->input->post('address',true);
            $data['city']=$this->input->post('city',true);
            $data['district']=$this->input->post('district',true);
            $data['division']=$this->input->post('division',true);
			
			if(!empty($_FILES['image']['name'])){
				$this->load->library('upload');
				$con['upload_path']='upload/employee';
				//$con['file_name']=str_replace(' ','_',$this->input->post('name',true)).time();
				$con['allowed_types']='*';
				$con['overwrite']=false;
				$dir="upload";
				$dir1="upload/employee";
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
			
			
            $con['id']=$id;
            $up=$this->cm->common_update('employee',$data,$con);
                
            if($up)
                $this->session->set_flashdata('message','<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert">&time;</a> Data update success.</div>');
            else
                $this->session->set_flashdata('message','<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert">&time;</a> Data update fail. Please Try agian.</div>');

            redirect('employee');
        }

    }

    Public function delete_data($id){
        $con['id']=$id;
        if($this->cm->common_delete('employee',$con))
            $this->session->set_flashdata('message','<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert">&time;</a> Data delete success.</div>');
        else
            $this->session->set_flashdata('message','<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert">&time;</a> Data delete fail. Please Try agian.</div>');
        
        redirect('employee');
    }
}
