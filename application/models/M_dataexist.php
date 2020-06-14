<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dataexist extends CI_Model{	
	public function __construct(){
		//$this->load->helper('url_helper');
   		$this->load->database();
  	}
	public function data_exists($no_lap){
	    $this->db->where('no_lap' , $no_lap);
	    $query = $this->db->get('tb_serti');

	    if($query->num_rows()>0){
	      return true;
	    }
	    else {
	      return false;
	    }
  	}
	public function data_exists2($no_lap){
	    $this->db->where('no_lap_na' , $no_lap);
	    $query = $this->db->get('tb_serti_na');

	    if($query->num_rows()>0){
	      return true;
	    }
	    else {
	      return false;
	    }
  	}
}