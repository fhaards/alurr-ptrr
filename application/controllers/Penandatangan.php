<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penandatangan extends CI_Controller {

	function __construct(){
		parent::__construct();
		redirectIfNotLogin();
		$this->load->model('m_penandatangan');
		$this->load->helper('url_helper');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->helper('date');
		$this->load->helper('array');
		$this->load->helper('url');
	}


	public function index(){
		redirect('penandatangan/read');
	}
	public function read()
	{
		$data['title'] = 'Penandatangan - ' . APP_NAME;
		$data['content']='penandatangan/read';
		$data['pny']=$this->m_penandatangan->read();
		$this->load->view('master',$data);
	}
	public function ubah($id){
		$this->m_penandatangan->ubah($id);
		$this->session->set_flashdata('editMsg', 'Data berhasil diubah');
		redirect('penandatangan/read');
	}
}	