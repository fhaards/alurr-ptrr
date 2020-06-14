<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url_helper');
		$this->load->helper('form');
		$this->load->helper('date');
		$this->load->helper('array');
		$this->load->model('m_user');
		$this->load->library('form_validation');
		$this->load->helper('url');
	}


	public function index()
	{	
		$data['title'] = 'Welcome - ' . APP_NAME;
		$data['content']='login-form';
		if($this->session->userdata('status') == "login"){
			redirect(base_url("homepage"));
		}	
		else{
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			if($this->form_validation->run() === FALSE){
				$this->load->view('master-login',$data);
			}
			else{
				$email=$this->input->post('email');
				$password=$this->input->post('password');
				
				$cek=$this->m_user->cekLogin($email,$password);
				if($cek){
					$userData=$this->m_user->findBy('email',$email);
					$data_session=array('email' => $email,'status' =>"login",'level'=>$userData['level']);
					$this->session->set_userdata($data_session);
					$this->session->set_flashdata('loginMsg', 'Data berhasil ditambahkan');
					redirect(base_url("homepage"));
				}
				else{
					$this->session->set_flashdata('errloginMsg', 'Data berhasil ditambahkan');
					redirect(base_url("login"));
				}
			}
			
		}
	}
	

	public function logout(){
		$this->session->sess_destroy();
		redirect();
	}
}