<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {
	function __construct(){
		parent::__construct();
		redirectIfNotLogin();
		$this->load->model('m_homepage');
		$this->load->model('m_produk');
		$this->load->model('m_produkNa');
		// $this->load->model('m_user');
		$this->load->helper('form');
		$this->load->helper('date');
		$this->load->helper('array');
		$this->load->library('form_validation');
		$this->load->helper('url');
	}

	public function index()
	{
		// isAdmin();
		$data['f_sertis']=$this->m_homepage->read_tbl_lap();
		$data['f_sertis2']=$this->m_homepage->read_tbl_lap2();
		$data['title'] = 'Homepage - ' . APP_NAME;
		$data['content']='homepage';
		$this->load->view('master',$data);
	}

}
