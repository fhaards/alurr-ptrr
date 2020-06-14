<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clog extends CI_Controller {
  function __construct(){
    parent::__construct();
    redirectIfNotLogin();
    show404IfNotAdmin();
    $this->load->helper('date');
    $this->load->helper('array');
    $this->load->library('form_validation');
    $this->load->helper('form');
    $this->load->helper('url');
    $this->load->model('m_log');
  }
  public function index() {
    $data['title'] = 'Log Activity - ' . APP_NAME;
    $data['content']='_log/read';
  
    $jenisLog = $this->input->get('jenisLog');

    $optionData = [
      [
        'value'=>'p-aktif',
        'wording'=>'Produk Aktif'
      ],
      [
        'value'=>'p-nonaktif',
        'wording'=>'Produk Non Aktif'
      ],
      [
        'value'=>'l-aktif',
        'wording'=>'Laporan Aktif'
      ],
      [
        'value'=>'l-nonaktif',
        'wording'=>'Laporan Non Aktif'
      ]
    ];

    $optionData = array_map(function($option) use ($jenisLog) {
      $option['selectedStatus'] =  $option['value'] == $jenisLog ? 'selected' : null;
      return $option;
    }, $optionData);

    $hasSelectedStatus=array_reduce($optionData, function($carry,$item){
      if($carry) return true;

      return $item['selectedStatus'] == 'selected' ;
    },false);
    
    $optionData['2']['selectedStatus'] = ! $hasSelectedStatus ?  'selected' :  null;
    
    $data['optionData']=$optionData;

    switch ($jenisLog) {
      case 'p-aktif':
        $data['logBhn']=$this->m_log->readLogBahan();
        $data['contentTable']='_log/read/read-bahan';
        $data['contentTableName']='<label>Log Activity :</label> Tabel Bahan - Aktif';
        break;
      
      case 'p-nonaktif':
        $data['logBhnNa']=$this->m_log->readLogBahanNa();
        $data['contentTable']='_log/read/read-bahan-na';
        $data['contentTableName']='<label>Log Activity :</label> Tabel Bahan - Non Aktif';
        break;

      case 'l-nonaktif':
        $data['logLapNa']=$this->m_log->readLogLapNa();
        $data['contentTable']='_log/read/read-lap-na';
        $data['contentTableName']='<label>Log Activity :</label> Tabel Laporan - Non Aktif';
        break;
        
      default:
        $data['logLap']=$this->m_log->readLogLap();
        $data['contentTable']='_log/read/read-lap';
        $data['contentTableName']='<label>Log Activity :</label> Tabel Laporan - Aktif';
        break;
    }

    $this->load->view('master',$data);
    
  }

  public function logFilter(){
    $data['title']  = 'Log Activity - ' . APP_NAME;
    $data['content']='_log/read';
    $data['logBhn']=$this->m_log->readLogBahan();
  }

  public function detailLogBahan($id) {
    $this->crumbs->add('Log Activity', base_url().'log-activity');  
    $this->crumbs->add('Detail Log Bahan', base_url().'log-activity/detail-bahan/'); 
    $data['breadcrumb']=$this->crumbs->output();

    $data['title'] = 'Detail Log Bahan - ' . APP_NAME;
    $data['content']='_log/detail/detail-bahan';
    $data['dataDitambah']=$this->m_log->ditambahLogBahan($id);
    $data['logBhn']=$this->m_log->detailLogBahan($id);
    $data['getCekLogBahan']=$this->m_log->cekLogBahan($id);
    $this->load->view('master',$data);
  }

  public function detailLogBahanNa($id) {
    $this->crumbs->add('Log Activity', base_url().'log-activity');  
    $this->crumbs->add('Detail Log Bahan', base_url().'log-activity/detail-bahan/'); 
    $data['breadcrumb']=$this->crumbs->output();

    $data['title'] = 'Detail Log Bahan - ' . APP_NAME;
    $data['content']='_log/detail/detail-bahan-na';
    $data['dataDitambah']=$this->m_log->ditambahLogBahanNa($id);
    $data['logBhnNa']=$this->m_log->detailLogBahanNa($id);
    $data['getCekLogBahan']=$this->m_log->cekLogBahanNa($id);
    $this->load->view('master',$data);
  }

  public function detailLogLap($id) {
    $this->crumbs->add('Log Activity', base_url().'log-activity');  
    $this->crumbs->add('Detail Log Laporan', base_url().'log-activity/detail-bahan/'); 
    $data['breadcrumb']=$this->crumbs->output();

    $data['title'] = 'Detail Log Activity - ' . APP_NAME;
    $data['content']='_log/detail/detail-lap';
    $data['dataDitambah']=$this->m_log->ditambahLogLap($id);
    $data['dataDiubah']=$this->m_log->diubahLogLap($id);
    $data['getCekLog']=$this->m_log->cekLogLap($id);
    $this->load->view('master',$data);
  }

  public function detailLogLapNa($id) {
    $this->crumbs->add('Log Activity', base_url().'log-activity');  
    $this->crumbs->add('Detail Log Laporan', base_url().'log-activity/detail-bahan/'); 
    $data['breadcrumb']=$this->crumbs->output();

    $data['title'] = 'Detail Log Activity - ' . APP_NAME;
    $data['content']='_log/detail/detail-lap-na';
    $data['dataDitambah']=$this->m_log->ditambahLogLapNa($id);
    $data['dataDiubah']=$this->m_log->diubahLogLapNa($id);
    $data['getCekLog']=$this->m_log->cekLogLapNa($id);
    $this->load->view('master',$data);
  }

}