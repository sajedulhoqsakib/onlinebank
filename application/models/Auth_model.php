<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	public function login($table,$email,$password){
		$this->db->where('password',$password);
		$this->db->where('email',$email);
		$query=$this->db->get($table);
		return $query->row();
	}
	
	public function register($table_name,$data){
		$this->db->insert($table_name,$data);
		return $this->db->insert_id();
	}
}