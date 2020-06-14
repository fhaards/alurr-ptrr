<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_homepage extends CI_Model{	
	public function __construct(){
		//$this->load->helper('url_helper');
   		$this->load->database();
  	}

	public function read_tbl_lap(){		
		$this->db->select('*');	
		$this->db->from('tb_serti');	
		$this->db->join('tb_bahan','tb_bahan.id_bahan=tb_serti.id_bahan','inner');
		$this->db->order_by('tgl_in','DESC');
		$this->db->limit(4);
		$query=$this->db->get();
	    return $query->result_array();
	}	
	public function read_tbl_lap2(){		
		$this->db->select('*');	
		$this->db->from('tb_serti_na');	
		$this->db->join('tb_bahan_na','tb_bahan_na.id_bahan_na=tb_serti_na.id_bahan_na','inner');
		$this->db->order_by('tgl_in_na','DESC');
		$this->db->limit(4);
		$query=$this->db->get();
	    return $query->result_array();
	}	
}