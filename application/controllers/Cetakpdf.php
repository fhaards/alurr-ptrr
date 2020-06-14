<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetakpdf extends CI_Controller {
  function __construct(){
    parent::__construct();
    redirectIfNotLogin();
    $this->load->model('m_cetak');
    $this->load->model('m_penandatangan');
    $this->load->helper('date');
    $this->load->helper('array');
    $this->load->library('form_validation');
    $this->load->helper('form');
    $this->load->helper('url');
  }
  public function index() {
     redirect('laporan');
  }
  public function pilih($id) {
    $this->crumbs->add('Laporan', base_url().'laporan');  
    $this->crumbs->add('Pilih Format Cetak', base_url().'laporan/pilih'); 
    $data['breadcrumb']=$this->crumbs->output();
    
    $data['title'] = 'Cetak Laporan - ' . APP_NAME;
    $data['content']='cetakPdf/Aktif/a_pilih';
    $data['Cpdf']=$this->m_cetak->mCetak($id);
    $this->form_validation->set_rules('jenisPr', 'No. Laporan', 'required');
    if($this->form_validation->run() === FALSE){
      $this->load->view('master',$data);
    }
    else{
      $id=$id;
      $nolap=$this->input->post("nolap");
      $jenisPr = $this->input->post("jenisPr");
      $satuanPr = $this->input->post("satuanPr");
      redirect('cetakpdf/cetak/'.$id.'/'.$jenisPr.'/'.$satuanPr.'/'.$nolap);
    }
  }

  public function cetak($id,$jenisPr,$satuanPr,$nolap) {
      $CetakPdf['jenisPr']=$jenisPr;
      $CetakPdf['satuanPr']=$satuanPr;
      $CetakPdf['pny']=$this->m_penandatangan->detail();
      $CetakPdf['Cpdf']=$this->m_cetak->mCetak($id);
      $this->load->library('pdf');
      $this->pdf->setPaper('A4', 'potrait');
      $sekarang=date("d:F:Y:h:m:s");
      $this->pdf->filename = "laporan_$nolap.pdf";
      $this->pdf->load_view('cetakPdf/Aktif/a_cetak',$CetakPdf);
  }

  ////////////////////////////////////// CETAK NON AKTIF ////////////////////////////////////////////

  public function cetaknonaktif($id,$jenislap,$nolap) {
      $CetakPdf['jenislap']=$jenislap;
      $CetakPdf['pny']=$this->m_penandatangan->detail();
      $CetakPdf['Cpdf']=$this->m_cetak->mCetakNa($id);
      $this->load->library('pdf');
      $this->pdf->setPaper('A4', 'potrait');
      $sekarang=date("d:F:Y:h:m:s");
      $this->pdf->filename = "laporan_$nolap.pdf";
      $this->pdf->load_view('cetakPdf/NonAktif/na_cetak',$CetakPdf);
  }

}