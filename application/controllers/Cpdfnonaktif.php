<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cpdfnonaktif extends CI_Controller {
  function __construct(){
    parent::__construct();
      if($this->session->userdata('status') != "login"){
        redirect(base_url("login"));
      }
    $this->load->model('m_cetak');
    $this->load->helper('date');
    $this->load->helper('array');
    $this->load->library('form_validation');
    $this->load->helper('form');
    $this->load->helper('url');
  }
  public function index() {
     redirect('laporan');
  }
  public function cetak($id, $jenisPr, $satuanPr) {
      $CetakPdf['jenisPr']=$jenisPr;
      $CetakPdf['satuanPr']=$satuanPr;
      $CetakPdf['Cpdf']=$this->m_cetak->mCetak($id);
      $this->load->library('pdf');
      $this->pdf->setPaper('A4', 'potrait');
      $sekarang=date("d:F:Y:h:m:s");
      $this->pdf->filename = "laporan_ $sekarang.pdf";
      $this->pdf->load_view('cetakPdf/hasilCetak',$CetakPdf);
  }

  public function cetaknonaktif($id,$jenislap) {
      $CetakPdf['jenislap']=$jenislap;
      $CetakPdf['Cpdf']=$this->m_cetak->mCetakNa($id);
      var_dump($cetakPdf);
      exit;
      
      $this->load->library('pdf');
      $this->pdf->setPaper('A4', 'potrait');
      $sekarang=date("d:F:Y:h:m:s");
      $this->pdf->filename = "laporan_ $sekarang.pdf";
      $this->pdf->load_view('cetakPdf/NonAktif/',$CetakPdf);
  }
}