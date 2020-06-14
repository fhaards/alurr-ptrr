<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Laporan extends CI_Controller {
	function __construct(){
		parent::__construct();
		redirectIfNotLogin();
		$this->load->model('m_laporan');
		$this->load->model('m_laporanNa');
		$this->load->model('m_produk');
		$this->load->model('m_cetak');
		$this->load->model('m_datalist');
		$this->load->model('m_dataexist');
		$this->load->helper('form');
		$this->load->helper('date');
		$this->load->helper('array');
		$this->load->library('form_validation');
		$this->load->helper('url');
	}

	public function index(){
		$data['title'] = 'Laporan Uji - ' . APP_NAME;
		$data['content']='laporan/l_read';
		$data['f_sertisna']=$this->m_laporanNa->readLaporan();
		$data['f_sertis']=$this->m_laporan->readLaporan();
		$this->load->view('master',$data);
	}

	public function tambahLaporan(){

		//DATALIST
			$data['dtlst1'] =$this->m_datalist->dtlst1();
			$data['dtlst2a']=$this->m_datalist->dtlst2a();
			$data['dtlst2b']=$this->m_datalist->dtlst2b();
			$data['dtlst2c']=$this->m_datalist->dtlst2c();
			$data['dtlst2d']=$this->m_datalist->dtlst2d();
			$data['dtlst2e']=$this->m_datalist->dtlst2e();
			$data['dtlst2f']=$this->m_datalist->dtlst2f();
			$data['dtlst2g']=$this->m_datalist->dtlst2g();
			$data['dtlst2h']=$this->m_datalist->dtlst2h();
			$data['dtlst3'] =$this->m_datalist->dtlst3();
		//
		$this->crumbs->add('Laporan', base_url().'laporan');  
  		$this->crumbs->add('Form Tambah', base_url().'laporan/tambah-laporan'); 
  		$data['breadcrumb']=$this->crumbs->output();
		$data['title'] = 'Tambah Laporan - ' . APP_NAME;
		$data['content']='laporan/form_tambah/ft_lap_identitas';
		$data['cekStatusProduk']=$this->m_laporan->cekStatusProduk();
		$this->form_validation->set_rules('no_lap', 'No. Laporan', 'required|is_unique[tb_serti.no_lap]');
		if($this->form_validation->run() === FALSE){
			$this->load->view('master',$data);
		}
		else
		{
			$this->m_laporan->inputLaporan();
			$this->session->set_flashdata('InputMsg', 'Data berhasil ditambahkan');
			redirect('laporan');
		}
		
	}

	public function hapusLaporan($id){
		$this->m_laporan->sHapusLaporan($id);
		$this->session->set_flashdata('deleteMsg', 'Data berhasil ditambahkan');
		redirect('laporan');
	}
	public function detailLaporan($id){
		$this->crumbs->add('Laporan', base_url().'laporan');  
  		$this->crumbs->add('Detail Laporan', base_url().'laporan/detail-laporan'); 
  		$data['breadcrumb']=$this->crumbs->output();
		$data['title'] = 'Detail Laporan - ' . APP_NAME;
		$data['content']='laporan/l_detail';
		$data['ffsu']=$this->m_laporan->sDetailLaporan($id);
		$this->load->view('master',$data);
	}

	//-------------------- Ubah Lap -----------//
	public function ubahLaporan($id){	
		$this->form_validation->set_rules('no_lap', 'No. Laporan', 'required');
		if($this->form_validation->run() === FALSE){
			$this->crumbs->add('Laporan', base_url().'laporan');  
  			$this->crumbs->add('Ubah Laporan', base_url().'laporan/ubah-laporan'); 
  			$data['breadcrumb']=$this->crumbs->output();
			$data['title'] = 'Ubah Laporan - ' . APP_NAME;
			$data['content']='laporan/form_ubah/fu_lap_identitas';
			$data['ffsu']=$this->m_laporan->sDetailLaporan($id);
			$data['ffsus']=$this->m_laporan->cekModelproduk();
			$this->load->view('master',$data);
		}
		else{
			$this->m_laporan->ubahLaporan_a($id);
			$this->session->set_flashdata('editMsg', 'Data berhasil ditambahkan');
			redirect('laporan');
		}
	}





	////////////////////// LAPORAN NON AKTIF //////////////////////////////////////////////////////////

	public function tambahLaporanNa(){
		//DATALIST
			$data['dtlstNa1'] =$this->m_datalist->dtlstNa_1();
			$data['dtlstNa2'] =$this->m_datalist->dtlstNa_2();
			$data['dtlstNa3'] =$this->m_datalist->dtlstNa_3();
			$data['dtlstNa4'] =$this->m_datalist->dtlstNa_4();
			$data['dtlstNa5'] =$this->m_datalist->dtlstNa_5();
			$data['dtlstNa6'] =$this->m_datalist->dtlstNa_6();
			$data['dtlstNa7'] =$this->m_datalist->dtlstNa_7();
			$data['dtlstNa8'] =$this->m_datalist->dtlstNa_8();
			$data['dtlstNa9'] =$this->m_datalist->dtlstNa_9();
			$data['dtlstNa10'] =$this->m_datalist->dtlstNa_10();
			$data['dtlstNa11'] =$this->m_datalist->dtlstNa_11();
			$data['dtlstNa12'] =$this->m_datalist->dtlstNa_12();
			$data['dtlstNa13'] =$this->m_datalist->dtlstNa_13();

		$this->crumbs->add('Laporan', base_url().'laporan');  
  		$this->crumbs->add('Form Tambah', base_url().'laporan/tambah-laporan-na'); 
  		$data['breadcrumb']=$this->crumbs->output();

		$this->form_validation->set_rules('no_lap_na', 'No. Laporan', 'required|is_unique[tb_serti_na.no_lap_na]');
		if($this->form_validation->run() === FALSE){
			$data['title'] = 'Laporan Uji - ' . APP_NAME;
			$data['content']='laporan/form_tambah/naft_lap_identitas';
			$data['cekStatusProduk']=$this->m_laporanNa->cekStatusProduk();
			$this->load->view('master',$data);
		}
		else{
			$this->m_laporanNa->inputLaporan();
			$this->session->set_flashdata('InputMsg', 'Data berhasil ditambahkan');
			redirect('laporan');
		}
	}

	public function hapusLaporanNa($id){
		$this->m_laporanNa->sHapusLaporan($id);
		$this->session->set_flashdata('deleteMsg', 'Data berhasil ditambahkan');
		redirect('laporan');
	}

	public function ubahLaporanNa($id){	
		$this->form_validation->set_rules('no_lap_na', 'No. Laporan', 'required');
		if($this->form_validation->run() === FALSE){
			$this->crumbs->add('Laporan', base_url().'laporan');  
  			$this->crumbs->add('Form Ubah', base_url().'laporan/ubah-laporan-na'); 
  			$data['breadcrumb']=$this->crumbs->output();
			
			$data['title'] = 'Laporan Uji - ' . APP_NAME;
			$data['content']='laporan/form_ubah/nafu_lap_identitas';
			$data['ffsu']=$this->m_laporanNa->sDetailLaporan($id);
			$data['ffsus']=$this->m_laporanNa->cekModelproduk();
			$this->load->view('master',$data);
		}
		else{
			$this->m_laporanNa->ubahLaporan_a($id);
			$this->session->set_flashdata('editMsg', 'Data berhasil ditambahkan');
			redirect('laporan');
		}
	}

	public function detailLaporanNa($id){
		$this->crumbs->add('Laporan', base_url().'laporan');  
  		$this->crumbs->add('Detail Laporan', base_url().'laporan/detail-laporan-na'); 
  		$data['breadcrumb']=$this->crumbs->output();
		
		$data['title'] = 'Laporan Uji - ' . APP_NAME;
		$data['content']='laporan/l_detail_na';
		$data['ffsu']=$this->m_laporanNa->sDetailLaporan($id);
		$this->load->view('master',$data);
	}

}
