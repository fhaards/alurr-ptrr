<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_penandatangan extends CI_Model{	
	public function __construct(){
   		$this->load->database();
  	}
  	public function read(){	
  		$this->db->select('*');	
		$this->db->from('tb_penandatangan');
		$query=$this->db->get();
	    return $query->result();
  	}
  	public function detail(){	
  		$this->db->select('*');	
		$this->db->from('tb_penandatangan');
		$query=$this->db->get();
	    return $query->row();
  	}
  	public function ubah($id){	
  		$data = array(
			'nama'=>$this->input->post('nama'), 
			'jabatan'=>$this->input->post('jabatan'),
			'nip'=>$this->input->post('nip')
		);
  		$this->db->where('id_p', $id);
	    $this->db->update('tb_penandatangan', $data);
  	}
}