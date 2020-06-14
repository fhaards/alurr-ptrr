<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_produkNa extends CI_Model{	
	public function __construct(){
		//$this->load->helper('url_helper');
   		$this->load->database();
  	}

	public function read_tbl_prdk(){		
		$this->db->select('*');	
		$this->db->from('tb_bahan_na');	
		$this->db->order_by('id_bahan_na','DESC');	
		$query=$this->db->get();
	    return $query->result_array();
	}

	public function t_prdk(){

		//GETPOST
		$statusb=1;
		$steril 	 = $this->input->post('steril');
		$pirogenitas = $this->input->post('pirogenitas');
		$nm_bhnNa=$this->input->post('nm_bahan_na');
		$krdkm=$this->input->post('kem_rdkm_na');
		$kemRdkm=htmlentities($krdkm);
		if(!empty($steril)){
			$jenis=2;
			$steril=$steril;
		}
		else if(!empty($pirogenitas)){
			$jenis=3;
			$pirogenitas=$pirogenitas;
		}
		//(!empty($_POST["myvar"]) && !empty($_POST["myvar2"])) 
		else if(empty($steril) && empty($pirogenitas)){
			$jenis=1;
			$steril="";
			$pirogenitas="";
		}
		else{}

		$data = array(
			'nm_bahan_na'=>$nm_bhnNa,
			'bentuk_fisik'=>$this->input->post('bentuk_fisik'),
			'der_keas_na'=>$this->input->post('der_keas_na'),
			'kem_rdkm_na'=>$kemRdkm,
			'sterilitas'=>$steril,
			'pirogenitas'=>$pirogenitas,
			'pemerian'=>$this->input->post('pemerian'),
			'endotoksin'=>$this->input->post('endotoksin'),
			'ditambahi'=>$this->input->post('tambahi'),
			'status_na'=>$statusb,
			'jenis_produk'=>$jenis
		);
	    $this->db->insert('tb_bahan_na',$data);
	   	$getIdBahan=$this->db->insert_id();
	    if($this->db->affected_rows() > 0)
		{
		 	actLogBahanNa($getIdBahan, "Ditambah", $nm_bhnNa);
		 	return true;
		}
		else
		{
		 	return false;
		}


	}	

	public function cekTersediaNa($id){
		$this->db->select('tb_serti_na.id_bahan_na');	
		$this->db->from('tb_serti_na');	
		$this->db->join('tb_bahan_na','tb_bahan_na.id_bahan_na=tb_serti_na.id_bahan_na','inner');
		$this->db->where('tb_serti_na.id_bahan_na', $id);
		$query=$this->db->get();
		$row = $query->num_rows();
		if (empty($row))
		{	
			$getTersedia='1';
		}
		else{
			$getTersedia='0';
		}
		return $getTersedia;
	}

	public function hapus_prdkna($id){
		$this->db->select('id_bahan_na,nm_bahan_na');	
		$this->db->from('tb_bahan_na');	
		$this->db->where('id_bahan_na', $id);
		$query2=$this->db->get();
    	$getBahan=$query2->row_array()['nm_bahan_na'];
		if($this->db->affected_rows() > 0)
		{
		 	actLogBahanNa($id, "Dihapus",$getBahan);
		 	$this->db->delete('tb_bahan_na', array('id_bahan_na' => $id));
		 	return true;
		}
		else
		{
		 	return false;
		}
		
	}
	public function ubah_Sprdk($idna){
		$this->db->select('status_na');	
		$this->db->from('tb_bahan_na');	
		$this->db->where('id_bahan_na', $idna);
		$query=$this->db->get();

	    foreach ($query->result() as $row)
		{
        	$st =  $row->status_na;
        	if($st=='2'){
        		$sts=1;
        		$stn='diganti ke Enabled';
        	}
        	else if($st=='1'){
        		$sts=2;
        		$stn='diganti ke Disabled';
        	}
		}	   		
	    $this->db->set('status_na',$sts, false);
		$this->db->where('id_bahan_na', $idna);
		$this->db->update('tb_bahan_na');	
		if($this->db->affected_rows() > 0)
		{
		 	actLogBahanNa($idna, "Ubah Status",$stn);
		 	return true;
		}
		else
		{
		 	return false;
		}
	}
	public function u_prdk($id){
		$query = $this->db->get_where('tb_bahan_na', array('id_bahan_na' => $id));
    	return $query->row_array();
	}

	public function u_prdk_a($id,$jproduk){
		$nm_bhnNa=$this->input->post('nm_bahan_na');
		$krdkm=$this->input->post('kem_rdkm_na');
		$kemRdkm=htmlentities($krdkm);
		$data = array(
			'nm_bahan_na'=>$nm_bhnNa,
			'bentuk_fisik'=>$this->input->post('bentuk_fisik'),
			'der_keas_na'=>$this->input->post('der_keas_na'),
			'kem_rdkm_na'=>$kemRdkm,
			'pemerian'=>$this->input->post('pemerian'),
			'endotoksin'=>$this->input->post('endotoksin'),
			'ditambahi'=>$this->input->post('tambahi'),
			'sterilitas'=>$this->input->post('steril'),
			'pirogenitas'=>$this->input->post('pirogenitas')
		);

		$this->db->where('id_bahan_na', $id);
	    $this->db->update('tb_bahan_na', $data);
	   	if($this->db->affected_rows() > 0)
		{
		 	actLogBahanNa($id, "Diubah",$nm_bhnNa);
		 	return true;
		}
		else
		{
		 	return false;
		}
	}	
}