<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Radpro extends CI_Controller {
	function __construct(){
		parent::__construct();
	    redirectIfNotLogin();
		$this->load->helper('form');
		$this->load->helper('date');
		$this->load->helper('array');
		$this->load->helper('url');

	}

	public function index()
	{
		$data['title'] = 'Rad Pro Calculator - ' . APP_NAME;
		$data['content']='radpro/calc';
		$this->load->view('master',$data);
	}

}
