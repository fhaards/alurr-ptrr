<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_laporan extends CI_Model{	
	public function __construct(){
		//$this->load->helper('url_helper');
   		$this->load->database();
  	}

	public function readLaporan(){		
		$this->db->select('*');	
		$this->db->from('tb_serti');	
		$this->db->join('tb_bahan','tb_bahan.id_bahan=tb_serti.id_bahan','inner');
		$this->db->order_by('id_lap','DESC');
		$query=$this->db->get();
	    return $query->result_array();
	}	

	public function cekStatusProduk(){
		$status = 1;
		$this->db->select('*');	
		$this->db->from('tb_bahan');	
		$this->db->where('status',$status);
		$query=$this->db->get();
	    return $query->result_array();	
	}	
	public function inputLaporan(){
		$dateNow  = date('Y-m-d H:i:s'); 
		$idbahan  = $this->input->post('id_bahan');
		$rwpel    = $this->input->post('r_w_pel');
		$no_lap   = $this->input->post('no_lap');
		$this->db->select('satuan,waktu');    
        $this->db->from('tb_bahan');
        $this->db->where('id_bahan', $idbahan);    
        $query=$this->db->get();
        $satuanWkt=$query->row_array()['satuan'];
        $waktu=$query->row_array()['waktu'];
        
        if($satuanWkt=='Jam'){
        	$waktuNew=$waktu;
        }
        else if($satuanWkt=='Hari'){
        	$waktuNew=$waktu*24;
        }

        $fdeca=exp(-(0.69315*($rwpel/$waktuNew)));
        $fdecay=number_format($fdeca,4,".","");
        
		$data = array(
			'no_lap'=>$no_lap, 'pemilik'=>$this->input->post('pemilik'),
			'akt_awal'=>$this->input->post('akt_awal'),'akt_kal'=>$this->input->post('akt_kal'),
			'id_bahan'=>$idbahan,
			'no_batch'=>$this->input->post('no_batch'),
			'no_batch_kf'=>$this->input->post('no_batch_kf'),'jumlah_smpl'=>$this->input->post('jumlah_smpl'),
			'k_ling'=>$this->input->post('k_ling'),'k_rdk'=>$this->input->post('k_rdk'),
			'volume'=>$this->input->post('volume'),'t_akt'=>$this->input->post('t_akt'),
			'ktdk_akt'=>$this->input->post('ktdk_akt'),'kejernihan'=>$this->input->post('kejernihan'),
			'der_keas'=>$this->input->post('der_keas'),'ktdk_der'=>$this->input->post('ktdk_der'),
			'kem_rdnu'=>$this->input->post('kem_rdnu'),'ktdk_k_rdnu'=>$this->input->post('ktdk_k_rdnu'),
			'kem_rdkm'=>$this->input->post('kem_rdkm'),'ktdk_k_rdkm'=>$this->input->post('ktdk_k_rdkm'),
			'fraksi'=>$this->input->post('fraksi'),'pengguna'=>$this->input->post('pengguna'),
			'tgl_akt_kal'=>$this->input->post('tgl_akt_kal'),'tgl_pn'=>$this->input->post('tgl_pn'),
			'tgl_an'=>$this->input->post('tgl_an'),'tgl_peng'=>$this->input->post('tgl_peng'),
			'jenis_smpl'=>$this->input->post('jenis_smpl'),'r_w_pel'=>$this->input->post('r_w_pel'),
			'tgl_in'=>$dateNow,'f_decay'=>$fdecay
		);
		
		$this->db->insert('tb_serti',$data);
		$getIdBahan=$this->db->insert_id();
	    if($this->db->affected_rows() > 0)
		{
		 	actLogLaporan($getIdBahan, "Ditambah", $no_lap);
		 	return true;
		}
		else
		{
		 	return false;
		}
		
	}

	public function sDetailLaporan($id){
		$this->db->select('*');	
		$this->db->from('tb_serti');	
		$this->db->join('tb_bahan','tb_bahan.id_bahan=tb_serti.id_bahan','inner');
		$this->db->where('id_lap',$id);
		$query=$this->db->get();
		return $query->row_array();
	}	
	public function sHapusLaporan($id){
		$this->db->select('no_lap');    
        $this->db->from('tb_serti');
        $this->db->where('id_lap', $id);    
        $query=$this->db->get();
        $no_lap=$query->row_array()['no_lap'];
		$this->db->delete('tb_serti', array('id_lap' => $id));
		if($this->db->affected_rows() > 0)
		{
		 	actLogLaporan($id, "Dihapus", $no_lap);
		 	return true;
		}
		else
		{
		 	return false;
		}
	}

	public function cekModelproduk(){		
		$this->db->select('*');	
		$this->db->from('tb_bahan');	
		$query=$this->db->get();
	    return $query->result_array();
	}

	public function ubahLaporan_a($id){

		$idbahan  = $this->input->post('id_bahan');
		$rwpel    = $this->input->post('r_w_pel');
		$no_lap   = $this->input->post('no_lap');
		$this->db->select('satuan,waktu');    
        $this->db->from('tb_bahan');
        $this->db->where('id_bahan', $idbahan);    
        $query=$this->db->get();
        $satuanWkt=$query->row_array()['satuan'];
        $waktu=$query->row_array()['waktu'];
        
        if($satuanWkt=='Jam'){
        	$waktuNew=$waktu;
        }
        else if($satuanWkt=='Hari'){
        	$waktuNew=$waktu*24;
        }

        $fdeca=exp(-(0.69315*($rwpel/$waktuNew)));
        $fdecay=number_format($fdeca,4,".","");
        
		$data = array(
			'no_lap'=>$no_lap, 'pemilik'=>$this->input->post('pemilik'),
			'akt_awal'=>$this->input->post('akt_awal'),'akt_kal'=>$this->input->post('akt_kal'),
			'id_bahan'=>$idbahan,
			'no_batch'=>$this->input->post('no_batch'),
			'no_batch_kf'=>$this->input->post('no_batch_kf'),'jumlah_smpl'=>$this->input->post('jumlah_smpl'),
			'k_ling'=>$this->input->post('k_ling'),'k_rdk'=>$this->input->post('k_rdk'),
			'volume'=>$this->input->post('volume'),'t_akt'=>$this->input->post('t_akt'),
			'ktdk_akt'=>$this->input->post('ktdk_akt'),'kejernihan'=>$this->input->post('kejernihan'),
			'der_keas'=>$this->input->post('der_keas'),'ktdk_der'=>$this->input->post('ktdk_der'),
			'kem_rdnu'=>$this->input->post('kem_rdnu'),'ktdk_k_rdnu'=>$this->input->post('ktdk_k_rdnu'),
			'kem_rdkm'=>$this->input->post('kem_rdkm'),'ktdk_k_rdkm'=>$this->input->post('ktdk_k_rdkm'),
			'fraksi'=>$this->input->post('fraksi'),'pengguna'=>$this->input->post('pengguna'),
			'tgl_akt_kal'=>$this->input->post('tgl_akt_kal'),'tgl_pn'=>$this->input->post('tgl_pn'),
			'tgl_an'=>$this->input->post('tgl_an'),'tgl_peng'=>$this->input->post('tgl_peng'),
			'jenis_smpl'=>$this->input->post('jenis_smpl'),'r_w_pel'=>$rwpel,'f_decay'=>$fdecay
		);
		$this->db->where('id_lap', $id);
	    $this->db->update('tb_serti', $data);
	   	if($this->db->affected_rows() > 0)
		{
		 	actLogLaporan($id, "Diubah", $no_lap);
		 	return true;
		}
		else
		{
		 	return false;
		}
	    
	}
	public function dataexist($nolap)
	{
	    $this->db->select('*'); 
	    $this->db->from('tb_serti');
	    $this->db->where('no_lap', $nolap);
	    $query = $this->db->get();
	    $result = $query->result_array();
	    return $result;
	}
}