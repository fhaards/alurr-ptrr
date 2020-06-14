<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_log extends CI_Model{	
	public function __construct(){
   		$this->load->database();
  	}

  	//////////////////////////////////// LOG PRODUK AKTIF//////////////////////////////////
		public function saveLogBahan($islogAct){
			$sql  = $this->db->insert_string('_log_bahan',$islogAct);
	        $ex   = $this->db->query($sql);
	        return $this->db->affected_rows($sql);
		}
		public function readLogBahan(){
			$this->db->select('*');	
			$this->db->from('_log_bahan');	
			$this->db->group_by('log_id_bahan');	
			$this->db->order_by('id_log','DESC');	
			$query=$this->db->get();
		    return $query->result_array();
		}
		public function ditambahLogBahan($id){
			$this->db->select('*');	
			$this->db->from('_log_bahan');	  
			$this->db->where('log_id_bahan',$id);   
			$this->db->like('log_aksi','Ditambah');
			$query=$this->db->get();
			return $query->row_array();
		}
		public function detailLogBahan($id){
			$this->db->select('*');	
			$this->db->from('_log_bahan');	  
			$this->db->where('log_id_bahan',$id);   
			$this->db->like('log_aksi','Diubah');	
			$this->db->order_by('id_log','DESC');
			$query=$this->db->get();
		    return $query->result_array();
		}
		public function cekLogBahan($id){
			$this->db->select('id_bahan');	
			$this->db->from('tb_bahan');	  
			$this->db->where('id_bahan',$id);
			$query=$this->db->get();
			$row = $query->num_rows();
			if(!empty($row))
			{
				$getCekLogBahan='';
			}
			else{
				$multipleWhere=['log_id_bahan' => $id, 'log_aksi' =>'Dihapus'];
				$this->db->select('log_user,log_date');	
				$this->db->from('_log_bahan');	  
				$this->db->where($multipleWhere);
				$query2=$this->db->get();
				$row2 = $query2->num_rows();
        		$deleteByWho=$query2->row_array()['log_user'];
        		$deleteDate=$query2->row_array()['log_date'];
        		$getdeleteDate=date('d/M/Y H:i ', strtotime($deleteDate));
        		if(!empty($row2)){
					$getCekLogBahan='<div class="alert alert-danger text-center"><span class="fa fa-exclamation"></span> Data Telah Dihapus oleh : <b> '.$deleteByWho.'</b> | Tanggal : <b>'.$getdeleteDate.'</b> </div>';
        		}
        		else{
        			$getCekLogBahan='<div class="alert alert-danger text-center"><span class="fa fa-exclamation"></span> Data tidak ada atau Telah dihapus manual dengan database </div>';
        		}
				
			}
			return $getCekLogBahan;
		}


	//////////////////////////////////// LOG PRODUK AKTIF//////////////////////////////////	

		public function saveLogBahanNa($islogAct){
			$sql  = $this->db->insert_string('_log_bahan-na',$islogAct);
	        $ex   = $this->db->query($sql);
	        return $this->db->affected_rows($sql);
		}
		public function readlogBahanNa(){
			$this->db->select('*');	
			$this->db->from('_log_bahan-na');	
			$this->db->group_by('log_id_bahanNa');	
			$this->db->order_by('id_log','DESC');	
			$query=$this->db->get();
		    return $query->result_array();
		}
		public function ditambahlogBahanNa($id){
			$this->db->select('*');	
			$this->db->from('_log_bahan-na');	  
			$this->db->where('log_id_bahanNa',$id);   
			$this->db->like('log_aksi','Ditambah');
			$query=$this->db->get();
			return $query->row_array();
		}
		public function detaillogBahanNa($id){
			$this->db->select('*');	
			$this->db->from('_log_bahan-na');	  
			$this->db->where('log_id_bahanNa',$id);   
			$this->db->like('log_aksi','Diubah');	
			$this->db->order_by('id_log','DESC');
			$query=$this->db->get();
		    return $query->result_array();
		}
		public function ceklogBahanNa($id){
			$this->db->select('id_bahan_na');	
			$this->db->from('tb_bahan_na');	  
			$this->db->where('id_bahan_na',$id);
			$query=$this->db->get();
			$row = $query->num_rows();
			if(!empty($row))
			{
				$getCekLog='';
			}
			else{
				$multipleWhere=['log_id_bahanNa' => $id, 'log_aksi' =>'Dihapus'];
				$this->db->select('log_user,log_date');	
				$this->db->from('_log_bahan-na');	  
				$this->db->where($multipleWhere);
				$query2=$this->db->get();
				$row2 = $query2->num_rows();
        		$deleteByWho=$query2->row_array()['log_user'];
        		$deleteDate=$query2->row_array()['log_date'];
        		$getdeleteDate=date('d/M/Y H:i ', strtotime($deleteDate));
        		if(!empty($row2)){
					$getCekLog='<div class="alert alert-danger text-center"><span class="fa fa-exclamation"></span> Data Telah Dihapus oleh : <b> '.$deleteByWho.'</b> | Tanggal : <b>'.$getdeleteDate.'</b> </div>';
        		}
        		else{
        			$getCekLog='<div class="alert alert-danger text-center"><span class="fa fa-exclamation"></span> Data tidak ada atau Telah dihapus manual dengan database </div>';
        		}
				
			}
			return $getCekLog;

		}


	//////////////////////////////////// LOG LAPORAN AKTIF//////////////////////////////////
		public function saveLogLaporan($islogAct){
			$sql  = $this->db->insert_string('_log_serti',$islogAct);
	        $ex   = $this->db->query($sql);
	        return $this->db->affected_rows($sql);
		}
		public function readLogLap(){
			//$this->db->select('_log_serti.log_id_lap,_log_serti.log_user,_log_serti.log_date,_log_serti.log_item');	
			$this->db->select('*');	
			$this->db->from('_log_serti');	
			$this->db->where('log_aksi','Ditambah'); 
			$this->db->group_by('log_id_lap');	  
			$this->db->order_by('id_log','DESC');	
			$query=$this->db->get();
		    return $query->result_array();
		}

		public function ditambahLogLap($id){
			$this->db->select('*');	
			$this->db->from('_log_serti');	  
			$this->db->where('log_id_lap',$id);   
			$this->db->like('log_aksi','Ditambah');
			$query=$this->db->get();
			return $query->row_array();
		}

		public function diubahLogLap($id){
			$this->db->select('*');	
			$this->db->from('_log_serti');	  
			$this->db->where('log_id_lap',$id);   
			$this->db->like('log_aksi','Diubah');	
			$this->db->order_by('id_log','DESC');
			$query=$this->db->get();
		    return $query->result_array();
		}

		public function cekLogLap($id){
			$this->db->select('id_lap');	
			$this->db->from('tb_serti');	  
			$this->db->where('id_lap',$id);
			$query=$this->db->get();
			$row = $query->num_rows();
			if(!empty($row))
			{
				$getCekLog='';
			}
			else{
				$multipleWhere=['log_id_lap' => $id, 'log_aksi' =>'Dihapus'];
				$this->db->select('log_user,log_date');	
				$this->db->from('_log_serti');	  
				$this->db->where($multipleWhere);
				$query2=$this->db->get();
				$row2 = $query2->num_rows();
        		$deleteByWho=$query2->row_array()['log_user'];
        		$deleteDate=$query2->row_array()['log_date'];
        		$getdeleteDate=date('d/M/Y H:i ', strtotime($deleteDate));
        		if(!empty($row2)){
					$getCekLog='<div class="alert alert-danger text-center"><span class="fa fa-exclamation"></span> Data Telah Dihapus oleh : <b> '.$deleteByWho.'</b> | Tanggal : <b>'.$getdeleteDate.'</b> </div>';
        		}
        		else{
        			$getCekLog='<div class="alert alert-danger text-center"><span class="fa fa-exclamation"></span> Data tidak ada atau Telah dihapus manual dengan database </div>';
        		}
				
			}
			return $getCekLog;
		}

	//////////////////////////////////// LOG LAPORAN NON-AKTIF//////////////////////////////////
		public function saveLogLaporanNa($islogAct){
			$sql  = $this->db->insert_string('_log_sertina',$islogAct);
	        $ex   = $this->db->query($sql);
	        return $this->db->affected_rows($sql);
		}
		public function readLogLapNa(){
			$this->db->select('*');	
			$this->db->from('_log_sertina');	
			$this->db->group_by('log_id_lapNa');	
			$this->db->order_by('id_log','DESC');	
			$query=$this->db->get();
		    return $query->result_array();
		}

		public function ditambahLogLapNa($id){
			$this->db->select('*');	
			$this->db->from('_log_sertina');	  
			$this->db->where('log_id_lapNa',$id);   
			$this->db->like('log_aksi','Ditambah');
			$query=$this->db->get();
			return $query->row_array();
		}

		public function diubahLogLapNa($id){
			$this->db->select('*');	
			$this->db->from('_log_sertina');	  
			$this->db->where('log_id_lapNa',$id);   
			$this->db->like('log_aksi','Diubah');	
			$this->db->order_by('id_log','DESC');
			$query=$this->db->get();
		    return $query->result_array();
		}

		public function cekLogLapNa($id){
			$this->db->select('id_lap_na');	
			$this->db->from('tb_serti_na');	  
			$this->db->where('id_lap_na',$id);
			$query=$this->db->get();
			$row = $query->num_rows();
			if(!empty($row))
			{
				$getCekLog='';
			}
			else{
				$multipleWhere=['log_id_lapNa' => $id, 'log_aksi' =>'Dihapus'];
				$this->db->select('log_user,log_date');	
				$this->db->from('_log_sertina');	  
				$this->db->where($multipleWhere);
				$query2=$this->db->get();
				$row2 = $query2->num_rows();
        		$deleteByWho=$query2->row_array()['log_user'];
        		$deleteDate=$query2->row_array()['log_date'];
        		$getdeleteDate=date('d/M/Y H:i ', strtotime($deleteDate));
        		if(!empty($row2)){
					$getCekLog='<div class="alert alert-danger text-center"><span class="fa fa-exclamation"></span> Data Telah Dihapus oleh : <b> '.$deleteByWho.'</b> | Tanggal : <b>'.$getdeleteDate.'</b> </div>';
        		}
        		else{
        			$getCekLog='<div class="alert alert-danger text-center"><span class="fa fa-exclamation"></span> Data tidak ada atau Telah dihapus manual dengan database </div>';
        		}
				
			}
			return $getCekLog;
		}
}