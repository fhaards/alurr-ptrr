<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_produk extends CI_Model{	
	public function __construct(){
   		$this->load->database();
  	}

	public function read_tbl_prdk(){		
		$this->db->select('*');	
		$this->db->from('tb_bahan');	
		$this->db->order_by('id_bahan','DESC');	
		$query=$this->db->get();
	    return $query->result_array();
	}

	public function t_prdk(){
		
		//GETPOST
		$nm_bhn   	  = $this->input->post('nm_bhn');
		$alias    	  = $this->input->post('alias');
		$waktu    	  = $this->input->post('waktu');
		$satuan       = $this->input->post('satuan');
		$der_keas 	  = $this->input->post('der_keas');
		$k_rdk    	  = $this->input->post('k_rdk');
		$kem_rdnu_bhn = $this->input->post('kem_rdnu_bhn');
		$kem_rdkm_bhn = $this->input->post('kem_rdkm_bhn');
		$nosop_bhn    = $this->input->post('nosop_bhn');

		$data = array(
			'nm_bahan'=>$nm_bhn,
			'alias'=>$alias,
			'waktu'=>$waktu,
			'satuan'=>$satuan,
			'derajat_keasaman_bhn'=>$der_keas,
			'konsentrasi_radioaktif_bhn'=>$k_rdk,
			'kem_rdnu_bhn'=>$kem_rdnu_bhn,
			'kem_rdkm_bhn'=>$kem_rdkm_bhn,
			'nosop_bhn'=>$nosop_bhn,
			'status'=>'1');

	    $query = $this->db->insert('tb_bahan',$data);
	    $getIdBahan=$this->db->insert_id();
	    if($this->db->affected_rows() > 0)
		{
		 	actLogBahan($getIdBahan, "Ditambah", $nm_bhn);
		 	return true;
		}
		else
		{
		 	return false;
		}


	}	

	public function cekTersedia($id){
		$this->db->select('tb_serti.id_bahan');	
		$this->db->from('tb_serti');	
		$this->db->join('tb_bahan','tb_bahan.id_bahan=tb_serti.id_bahan','inner');
		$this->db->where('tb_serti.id_bahan', $id);
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

	public function hapus_prdk($id){
		$this->db->select('id_bahan,nm_bahan');	
		$this->db->from('tb_bahan');	
		$this->db->where('id_bahan', $id);
		$query2=$this->db->get();
    	$getBahan=$query2->row_array()['nm_bahan'];
		if($this->db->affected_rows() > 0)
		{
		 	actLogBahan($id, "Dihapus",$getBahan);
		 	$this->db->delete('tb_bahan', array('id_bahan' => $id));
		 	return true;
		}
		else
		{
		 	return false;
		}
	}

	public function ubah_Sprdk($id){
		$this->db->select('status,nm_bahan');	
		$this->db->from('tb_bahan');	
		$this->db->where('id_bahan', $id);
		$query=$this->db->get();

	    foreach ($query->result() as $row)
		{
        	$st  = $row->status;
        	$stn = $row->nm_bahan;
        	if($st=='2'){
        		$sts=1;
        		$stk='Status changed : Enabled';
        	}
        	else if($st=='1'){
        		$sts=2;
        		$stk='Status changed : Disabled';
        	}
		}	   		
	    $this->db->set('status',$sts, false);
		$this->db->where('id_bahan', $id);
		$this->db->update('tb_bahan');	
		if($this->db->affected_rows() > 0)
		{
		 	actLogBahan($id, $stk,$stn);
		 	return true;
		}
		else
		{
		 	return false;
		}
	}
	
	public function u_prdk($id){
		$query = $this->db->get_where('tb_bahan', array('id_bahan' => $id));
    	return $query->row_array();
	}

	public function u_prdk_a($id){
		$nm_bhn=$this->input->post('nm_bhn');
		$data = array(
			'nm_bahan'=>$nm_bhn,
			'alias'=>$this->input->post('alias'),
			'waktu'=>$this->input->post('waktu'),
			'satuan'=>$this->input->post('satuan'),
			'derajat_keasaman_bhn'=>$this->input->post('der_keas'),
			'konsentrasi_radioaktif_bhn'=>$this->input->post('k_rdk'),
			'kem_rdnu_bhn'=>$this->input->post('kem_rdnu_bhn'),
			'kem_rdkm_bhn'=> $this->input->post('kem_rdkm_bhn'),
			'nosop_bhn'=> $this->input->post('nosop_bhn')
		);

	    $this->db->where('id_bahan', $id);
	    $this->db->update('tb_bahan', $data);
	    if($this->db->affected_rows() > 0)
		{
		 	actLogBahan($id, "Diubah",$nm_bhn);
		 	return true;
		}
		else
		{
		 	return false;
		}
	}	

}