<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataexist extends CI_Controller {
  function __construct(){
    parent::__construct();
    redirectIfNotLogin();
    $this->load->model('m_dataexist');
    $this->load->helper('date');
    $this->load->helper('array');
    $this->load->library('form_validation');
    $this->load->helper('form');
    $this->load->helper('url');
  }

  public function data_exist(){
    if($this->m_dataexist->data_exists($_POST['no_lap'])){
      echo'<span class="text-danger">
          <i class="fa fa-times" aria-hidden="true"></i> Nomor Laporan sudah digunakan
        </span>';
    } 
    else {
      echo '<span class="text-success">
          <i class="fa fa-check-circle-o" aria-hidden="true"></i> Nomor belum digunakan
        </span>';
    }
  }

  public function data_exist2(){
    if($this->m_dataexist->data_exists2($_POST['no_lap'])){
      echo'<span class="text-danger">
          <i class="fa fa-times" aria-hidden="true"></i> Nomor Laporan sudah digunakan
        </span>';
    } 
    else {
      echo '<span class="text-success">
          <i class="fa fa-check-circle-o" aria-hidden="true"></i> Nomor belum digunakan
        </span>';
    }
  }

}

