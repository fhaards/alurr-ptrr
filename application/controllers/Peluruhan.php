<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peluruhan extends CI_Controller {
	function __construct(){
		parent::__construct();
		redirectIfNotLogin();
		$this->load->model('m_peluruhan');
		$this->load->model('m_produk');
		$this->load->helper('array');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->library('qmenu');
	}
	public function index()
	{

		$data['title'] = 'Tabel Peluruhan - ' . APP_NAME;
		$data['content']='tpeluruhan/tpel_read';
		$data['f_sertis']=$this->m_peluruhan->mread_lap();
		$this->load->view('master',$data);
	}

	public function form($id){
		$this->crumbs->add('Tabel Peluruhan', base_url().'tabel-peluruhan');  
    	$this->crumbs->add('Pilih Format Cetak', base_url().'tabel-peluruhan/pilih-data/'.$id);
    	$data['breadcrumb']=$this->crumbs->output();

		$data['title'] = 'Tabel Peluruhan - ' . APP_NAME;
		$data['content']='tpeluruhan/tpel_form';
		$data['ffsu']=$this->m_peluruhan->mdetail($id);
		$this->form_validation->set_rules('jmlData', 'Total Data', 'required');
		if($this->form_validation->run() === FALSE){
			$this->load->view('master',$data);
		}
		else{
			$id=$id;
		    $jmlData = $this->input->post("jmlData");
		    $satuanPr = $this->input->post("satuanPr");
      		redirect('tabel-peluruhan/detail-peluruhan/'.$id.'/'.$jmlData.'/'.$satuanPr);
		}
	}
	public function detail($id,$jmlData,$satuanPr){
		$this->crumbs->add('Tabel Peluruhan', base_url().'tabel-peluruhan');  
    	$this->crumbs->add('Pilih Format Cetak', base_url().'tabel-peluruhan/pilih-data/'.$id); 
    	$this->crumbs->add('Detail Tabel Peluruhan', base_url().'tabel-peluruhan/peluruhan/detail-peluruhan'); 
    	$data['breadcrumb']=$this->crumbs->output();

		$data['ffsu']=$this->m_peluruhan->mdetail($id);
		$data['jmlData']=$jmlData;
      	$data['satuanPr']=$satuanPr;
		$data['title'] = 'Tabel Peluruhan - ' . APP_NAME;
		$data['content']='tpeluruhan/tpel_detail';
		$this->load->view('master',$data);
	}

	public function cetakPdf($id,$jmlData,$satuanPr){
		$data['jmlData']=$jmlData;
      	$data['satuanPr']=$satuanPr;
		$data['ffsu']=$this->m_peluruhan->mdetail($id);

		$this->load->library('pdf');
      	$this->pdf->setPaper('A4', 'potrait');
      	$sekarang=date("d:F:Y:h:m:s");
      	$this->pdf->filename = "laporan_ $sekarang.pdf";
      	$this->pdf->load_view('tpeluruhan/tpel_cetak',$data);
	}
}
