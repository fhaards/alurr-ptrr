<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_cetak extends CI_Model{	
	public function __construct(){
   		$this->load->database();
  	}

	public function mCetak($id){		
		$this->db->select('*');	
		$this->db->from('tb_serti');	
		$this->db->join('tb_bahan','tb_bahan.id_bahan=tb_serti.id_bahan','inner');
		$this->db->order_by('tgl_in','DESC');
		$this->db->where('id_lap',$id);
		$query=$this->db->get();
		return $query->row_array();
	}	
	public function mCetakNa($id){		
		$this->db->select('*');	
		$this->db->from('tb_serti_na');	
		$this->db->join('tb_bahan_na','tb_bahan_na.id_bahan_na=tb_serti_na.id_bahan_na','inner');
		$this->db->where('id_lap_na',$id);
		$query=$this->db->get();
		return $query->row_array();
	}	
}