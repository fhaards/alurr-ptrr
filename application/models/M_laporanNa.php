<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_laporanNa extends CI_Model{	
	public function __construct(){
		//$this->load->helper('url_helper');
   		$this->load->database();
  	}
                
	public function readLaporan(){		
		$this->db->select('*');	
		$this->db->from('tb_serti_na');	
		$this->db->join('tb_bahan_na','tb_bahan_na.id_bahan_na=tb_serti_na.id_bahan_na','inner');
		$this->db->order_by('id_lap_na','DESC');
		$query=$this->db->get();
	    return $query->result_array();
	}	

	public function cekStatusProduk(){
		$status = 1;
		$this->db->select('*');	
		$this->db->from('tb_bahan_na');	
		$this->db->where('status_na',$status);
		$this->db->order_by('nm_bahan_na','ASC');
		$query=$this->db->get();
	    return $query->result_array();	
	}	
	public function inputLaporan(){
		$dateNow  = date('Y-m-d H:i:s'); 
		$idbahan  = $this->input->post('id_bahan_na');
		$no_lap   = $this->input->post('no_lap_na');
		$data= array(
			'no_lap_na'=>$no_lap, 
			'pemilik_na'=>$this->input->post('pemilik_na'),
			'id_bahan_na'=>$idbahan, 
			'no_batch_na'=>$this->input->post('no_batch_na'),
			'no_batchkf_na'=>$this->input->post('no_batchkf_na'),
			'tgl_pn_na'=>$this->input->post('tgl_pn_na'),
			'tgl_an_na'=>$this->input->post('tgl_an_na'),
			'jumlah_smpl_na'=>$this->input->post('jumlah_smpl_na'),
			'k_ling_na'=>$this->input->post('k_ling_na'),
			'tgl_in_na'=>$dateNow,
			'jenis_na_lp'=>$this->input->post('jenisLap'),
			'bentuk_fisik_lp'=>$this->input->post('bentuk_fisik'),
		  	'der_keas_na_lp'=>$this->input->post('der_keas_na'),
		  	'kem_rdkm_na_lp'=>$this->input->post('kem_rdkm_na'),
		  	'sterilitas_lp'=>$this->input->post('steril'),
		  	'pirogenitas_lp'=>$this->input->post('pirogenitas'),
		  	'ktdk_bntg_rdkm'=>$this->input->post('ktdk_bntg_rdkm'),
		  	'ktdk_bntg_der'=>$this->input->post('ktdk_bntg_der')
		);
		$this->db->insert('tb_serti_na',$data);
		$getIdBahan=$this->db->insert_id();
	    if($this->db->affected_rows() > 0)
		{
		 	actLogLaporanNa($getIdBahan, "Ditambah", $no_lap);
		 	return true;
		}
		else
		{
		 	return false;
		}
	}

	public function sDetailLaporan($id){
		$this->db->select('*');	
		$this->db->from('tb_serti_na');	
		$this->db->join('tb_bahan_na','tb_bahan_na.id_bahan_na=tb_serti_na.id_bahan_na','inner');
		$this->db->where('id_lap_na',$id);
		$query=$this->db->get();
		return $query->row_array();
	}	
	public function sHapusLaporan($id){
		$this->db->select('no_lap_na');    
        $this->db->from('tb_serti_na');
        $this->db->where('id_lap_na', $id);    
        $query=$this->db->get();
        $no_lap=$query->row_array()['no_lap_na'];
        
		$this->db->delete('tb_serti_na', array('id_lap_na' => $id));
		if($this->db->affected_rows() > 0)
		{
		 	actLogLaporanNa($id, "Dihapus", $no_lap);
		 	return true;
		}
		else
		{
		 	return false;
		}
	}

	public function cekModelproduk(){		
		$this->db->select('*');	
		$this->db->from('tb_bahan_na');
		$this->db->order_by('nm_bahan_na','ASC');
		$query=$this->db->get();
	    return $query->result_array();
	}

	public function ubahLaporan_a($id){
		$idbahan  = $this->input->post('id_bahan_na');
		$no_lap   = $this->input->post('no_lap_na');
		$data= array(
			'no_lap_na'=>$this->input->post('no_lap_na'), 
			'pemilik_na'=>$this->input->post('pemilik_na'),
			'id_bahan_na'=>$idbahan, 
			'no_batch_na'=>$this->input->post('no_batch_na'),
			'no_batchkf_na'=>$this->input->post('no_batchkf_na'),
			'tgl_pn_na'=>$this->input->post('tgl_pn_na'),
			'tgl_an_na'=>$this->input->post('tgl_an_na'),
			'jumlah_smpl_na'=>$this->input->post('jumlah_smpl_na'),
			'k_ling_na'=>$this->input->post('k_ling_na'),
			'jenis_na_lp'=>$this->input->post('jenisLap'),
			'bentuk_fisik_lp'=>$this->input->post('bentuk_fisik'),
		  	'der_keas_na_lp'=>$this->input->post('der_keas_na'),
		  	'kem_rdkm_na_lp'=>$this->input->post('kem_rdkm_na'),
		  	'sterilitas_lp'=>$this->input->post('steril'),
		  	'pirogenitas_lp'=>$this->input->post('pirogenitas'),
		  	'ktdk_bntg_rdkm'=>$this->input->post('ktdk_bntg_rdkm'),
		  	'ktdk_bntg_der'=>$this->input->post('ktdk_bntg_der')
		);
		$this->db->where('id_lap_na', $id);
	    $this->db->update('tb_serti_na', $data);
	   	if($this->db->affected_rows() > 0)
		{
		 	actLogLaporanNa($id, "Diubah", $no_lap);
		 	return true;
		}
		else
		{
		 	return false;
		}
	}
}