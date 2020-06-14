<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {
	function __construct(){
		parent::__construct();
		redirectIfNotLogin();
		$this->load->database();
		$this->load->model('m_produk');
		$this->load->model('m_laporan');
		$this->load->model('m_produkNa');
		$this->load->helper('form');
		$this->load->helper('date');
		$this->load->helper('array');
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->library('qmenu');
	}

	public function index()
	{
		$data['f_bhn_na']=$this->m_produkNa->read_tbl_prdk();
		$data['f_bhns']	=$this->m_produk->read_tbl_prdk();
		$data['title'] = 'Produk - ' . APP_NAME;
		$data['content']='produk/p_read';
		$this->load->view('master',$data);
	}

	public function tambahProduk()
	{	

  		$this->crumbs->add('Produk', base_url().'produk');  
  		$this->crumbs->add('Form Tambah', base_url().'produk/tambah-produk'); 
  		$data['breadcrumb']=$this->crumbs->output();

		$data['title'] = 'Tambah Produk - ' . APP_NAME;
		$data['content']='produk/ft_prdk';

		$this->form_validation->set_rules('alias', 'Nama Produk', 'required');
		if($this->form_validation->run() === FALSE){
			$this->load->view('master',$data);
		}
		else{
			$this->m_produk->t_prdk();
			$this->session->set_flashdata('InputMsg', 'Data berhasil ditambahkan');
			redirect('produk');
		}
	}

	public function hapusProduk($id){
		$getTersedia=$this->m_produk->cekTersedia($id);
		if($getTersedia=='1'){
			$this->m_produk->hapus_prdk($id);
			$this->session->set_flashdata('deleteMsg', 'Data tidak berhasil Dihapus');
			redirect('produk');
		}
		else{
			$this->session->set_flashdata('cannotDelete', 'Data berhasil Dihapus');
			redirect('produk');
		}

	}
	public function ubahStatus($id){
		$this->m_produk->ubah_Sprdk($id);
		$this->session->set_flashdata('editMsg', 'Data berhasil ditambahkan');
		redirect('produk');
	}
	public function ubahProduk($id){
		$this->crumbs->add('Produk', base_url().'produk');  
  		$this->crumbs->add('Form Ubah', base_url().'produk/ubah-produk'); 
  		$data['breadcrumb']=$this->crumbs->output();

		$data['title'] = 'Ubah Produk - ' . APP_NAME;
		$data['content']='produk/fu_prdk';
		//$this->load->view('master',$data);	
		$this->form_validation->set_rules('alias', 'Nama Produk', 'required');
		if($this->form_validation->run() === FALSE){
			$data['f_f_u']=$this->m_produk->u_prdk($id);
			$this->load->view('master',$data);
		}
		else{
			$this->m_produk->u_prdk_a($id);
			$this->session->set_flashdata('editMsg', 'Data berhasil ditambahkan');
			redirect('produk');
		}
	}

	////////////////// PRODUK NON AKTIF

	public function tambahProdukNa()
	{	
		$this->crumbs->add('Produk', base_url().'produk');  
  		$this->crumbs->add('Form Tambah', base_url().'produk/tambah-produk-na'); 
  		$data['breadcrumb']=$this->crumbs->output();

		$data['title'] = 'Tambah Produk - ' . APP_NAME;
		$data['content']='produk/na_ft_prdk';
		//$this->load->view('master',$data);
		$this->form_validation->set_rules('nm_bahan_na', 'Nama Produk', 'required');
		if($this->form_validation->run() === FALSE){
			$this->load->view('master',$data);
		}
		else{
			$this->m_produkNa->t_prdk();
			$this->session->set_flashdata('InputMsg', 'Data berhasil ditambahkan');
			redirect('produk');
		}
	}
	public function ubahStatusNa($idna){
		$this->m_produkNa->ubah_Sprdk($idna);
		$this->session->set_flashdata('editMsg', 'Data berhasil ditambahkan');
		redirect('produk/');
	}
	public function ubahProdukNa($id,$jproduk){	
		$this->crumbs->add('Produk', base_url().'produk');  
  		$this->crumbs->add('Form Ubah', base_url().'produk/ubah-produk-na'); 
  		$data['breadcrumb']=$this->crumbs->output();
  		
		$data['title'] = 'Ubah Produk - ' . APP_NAME;
		$data['content']='produk/na_fu_prdk';
		$this->form_validation->set_rules('nm_bahan_na', 'Nama Produk', 'required');
		if($this->form_validation->run() === FALSE){
			$data['fna']=$this->m_produkNa->u_prdk($id);
			$data['jproduk']=$jproduk;
			$this->load->view('master',$data);
		}
		else{
			$this->m_produkNa->u_prdk_a($id,$jproduk);
			$this->session->set_flashdata('editMsg', 'Data berhasil ditambahkan');
			redirect('produk');
		}
	}

	public function hapusProdukNa($id){
		$getTersedia=$this->m_produkNa->cekTersediaNa($id);
		if($getTersedia=='1'){
			$this->m_produkNa->hapus_prdkna($id);
			$this->session->set_flashdata('deleteMsg', 'Data tidak berhasil Dihapus');
			redirect('produk');
		}
		else{
			$this->session->set_flashdata('cannotDelete', 'Data berhasil Dihapus');
			redirect('produk');
		}
	}
}
