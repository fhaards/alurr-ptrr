<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){
		parent::__construct();
		redirectIfNotLogin();
		$this->load->helper('form');
		$this->load->helper('date');
		$this->load->helper('array');
		$this->load->helper('url_helper');
		$this->load->model('m_user');
		$this->load->library('form_validation');
		$this->load->helper('url');
	}

	public function index()
	{	
		$data['title'] = ' User ' . APP_NAME;
		if(isAdmin()){
			$data['fuser']	=$this->m_user->read();
			$data['content']='user/su-user/read';
		}
		else{
			redirect('user/op/read');
		}
		$this->load->view('master',$data);
	}

	// IS SUPER USER
		public function suTambahUser(){
			show404IfNotAdmin();
			$this->crumbs->add('User', base_url().'user');  
	  		$this->crumbs->add('Form Tambah', base_url().'user/su/tambah-user'); 
	  		$data['breadcrumb']=$this->crumbs->output();

			$data['title'] = 'Tambah User - ' . APP_NAME;
			$data['content']='user/su-user/form_tambah';

			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			if($this->form_validation->run() === FALSE){
				$this->load->view('master',$data);
			}
			else{
				$this->m_user->tambahUser();
				$this->session->set_flashdata('InputMsg', 'Data berhasil ditambahkan');
				redirect('user');
			}
		}

		public function suUbahUser($id){
			show404IfNotAdmin();
			$this->crumbs->add('User', base_url().'user');  
	  		$this->crumbs->add('Form Ubah', base_url().'user/su/ubah-user/'); 
	  		$data['breadcrumb']=$this->crumbs->output();
			$data['title'] = 'Ubah User - ' . APP_NAME;
			$data['content']='user/su-user/form_ubah';
			$data['getU']=$this->m_user->getUbah($id);

			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			if($this->form_validation->run() === FALSE){
				$this->load->view('master',$data);
			}
			else{
				$this->m_user->setUbah($id);
				$this->session->set_flashdata('editMsg', 'Data berhasil ditambahkan');
				redirect('user');
			}
		}

		public function suHapusUser($id){
			show404IfNotAdmin();
			$this->m_user->hapus_user($id);
			$this->session->set_flashdata('deleteMsg', 'Data berhasil Dihapus');
			redirect('user');
		}

	// IS OPERATOR
		public function opRead(){
			$data['title'] = ' User ' . APP_NAME;
			$data['content']='user/op-user/read';
			$this->load->view('master',$data);
		}

		public function opUbahData($id){
			$this->crumbs->add('User', base_url().'user');  
	  		$this->crumbs->add('Form Ubah', base_url().'user/op/ubah-data/'); 
	  		$data['breadcrumb']=$this->crumbs->output();
			$data['title'] = 'Ubah Data - ' . APP_NAME;
			$data['content']='user/op-user/form_ubah';
			$data['getU']=$this->m_user->getUbah($id);
			$this->form_validation->set_rules('email', 'Email', 'required');
			if($this->form_validation->run() === FALSE){
				$this->load->view('master',$data);
			}
			else{
				$this->m_user->setUbah($id);
				$this->session->set_userdata(['email'=>$this->input->post('email')]);
				$this->session->set_flashdata('editMsg', 'Data berhasil ditambahkan');
				redirect('user');
			}
		}
}
