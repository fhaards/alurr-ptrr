<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_peluruhan extends CI_Model{	
	public function __construct(){
		//$this->load->helper('url_helper');
   		$this->load->database();
   		$this->load->helper('date');
  	}

	public function mread_lap(){		
		$this->db->select('*');	
		$this->db->from('tb_serti');	
		$this->db->join('tb_bahan','tb_bahan.id_bahan=tb_serti.id_bahan','inner');
		$this->db->order_by('tgl_in','DESC');
		$query=$this->db->get();
	    return $query->result_array();
	}
	public function mread_pel($id){		
		$this->db->select('*');	
		$this->db->from('tb_pel');
		$this->db->where('id_lap', $id);	
		$query=$this->db->get();
	    return $query->result_array();
	}
	public function mdetail($id){
		$this->db->select('*');	
		$this->db->from('tb_serti');	
		$this->db->join('tb_bahan','tb_bahan.id_bahan=tb_serti.id_bahan','inner');
		$this->db->where('id_lap',$id);
		$query=$this->db->get();
		return $query->row_array();
	}


}	