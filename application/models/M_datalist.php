<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_datalist extends CI_Model{	
	public function __construct(){
   		$this->load->database();
  	}
	
	// DATALIST AKTIF 

		public function dtlst1(){
			$this->db->select('id_lap,no_lap,no_batch,k_ling,ktdk_akt,der_keas,ktdk_der,kem_rdnu,ktdk_k_rdnu,kem_rdkm,ktdk_k_rdkm');
			$this->db->from('tb_serti');	
			$this->db->order_by('id_lap','desc');
			$this->db->LIMIT(3);
			$query=$this->db->get();
		    return $query->result_array();	
		}

		public function dtlst2a(){
			$query=$this->db->query("select id_lap,pemilik from tb_serti  ORDER BY id_lap DESC LIMIT 3");
			return $query->result_array();
		}	
		public function dtlst2b(){
			$query=$this->db->query("select id_lap,jumlah_smpl from tb_serti ORDER BY id_lap DESC LIMIT 3");
			return $query->result_array();
		}	
		public function dtlst2c(){
			$query=$this->db->query("select id_lap,jenis_smpl from tb_serti  ORDER BY id_lap DESC LIMIT 5");
			return $query->result_array();
		}	
		public function dtlst2d(){
			$query=$this->db->query("select id_lap,fraksi from tb_serti ORDER BY id_lap DESC LIMIT 3");
			return $query->result_array();
		}	
		public function dtlst2e(){
			$query=$this->db->query("select id_lap,pengguna from tb_serti  ORDER BY id_lap DESC LIMIT 3");
			return $query->result_array();
		}
		public function dtlst2f(){
			$query=$this->db->query("select id_lap,kejernihan from tb_serti  ORDER BY id_lap DESC LIMIT 3");
			return $query->result_array();
		}
		public function dtlst2g(){
			$query=$this->db->query("select id_lap,akt_awal from tb_serti  ORDER BY id_lap DESC LIMIT 3");
			return $query->result_array();
		}
		public function dtlst2h(){
			$query=$this->db->query("select id_lap,k_rdk from tb_serti  ORDER BY id_lap DESC LIMIT 3");
			return $query->result_array();
		}
		public function dtlst3(){
			$query=$this->db->query("select no_batch_kf,tgl_in from tb_serti where no_batch_kf <> '' order by tgl_in desc limit 3");
			return $query->result_array();
		}

	// DATALIST NONAKTIF
		public function dtlstNa_1(){
			$query=$this->db->query("select id_lap_na,no_lap_na from tb_serti_na ORDER BY id_lap_na DESC LIMIT 3");
			return $query->result_array();
		}
		public function dtlstNa_2(){
			$query=$this->db->query("select id_lap_na,pemilik_na from tb_serti_na  ORDER BY id_lap_na DESC LIMIT 3");
			return $query->result_array();
		}
		public function dtlstNa_3(){
			$query=$this->db->query("select id_lap_na,jumlah_smpl_na from tb_serti_na  ORDER BY id_lap_na DESC LIMIT 3");
			return $query->result_array();
		}
		public function dtlstNa_4(){
			$query=$this->db->query("select id_lap_na,no_batch_na from tb_serti_na  ORDER BY id_lap_na DESC LIMIT 3");
			return $query->result_array();
		}
		public function dtlstNa_5(){
			$query=$this->db->query("select id_lap_na,no_batchkf_na from tb_serti_na  ORDER BY id_lap_na DESC LIMIT 3");
			return $query->result_array();
		}
		public function dtlstNa_6(){
			$query=$this->db->query("select id_lap_na,k_ling_na from tb_serti_na ORDER BY id_lap_na DESC LIMIT 3");
			return $query->result_array();
		}
		// HASIL

		public function dtlstNa_7(){
			$query=$this->db->query("select id_lap_na,bentuk_fisik_lp from tb_serti_na  ORDER BY id_lap_na DESC LIMIT 3");
			return $query->result_array();
		}
		public function dtlstNa_8(){
			$query=$this->db->query("select id_lap_na,der_keas_na_lp from tb_serti_na ORDER BY id_lap_na DESC LIMIT 3");
			return $query->result_array();
		}
		public function dtlstNa_9(){
			$query=$this->db->query("select id_lap_na,ktdk_bntg_der from tb_serti_na g ORDER BY id_lap_na DESC LIMIT 3");
			return $query->result_array();
		}
		public function dtlstNa_10(){
			$query=$this->db->query("select id_lap_na,kem_rdkm_na_lp from tb_serti_na  ORDER BY id_lap_na DESC LIMIT 3");
			return $query->result_array();
		}
		public function dtlstNa_11(){
			$query=$this->db->query("select id_lap_na,ktdk_bntg_rdkm from tb_serti_na  ORDER BY id_lap_na DESC LIMIT 3");
			return $query->result_array();
		}
		public function dtlstNa_12(){
			$query=$this->db->query("select id_lap_na,sterilitas_lp from tb_serti_na ORDER BY id_lap_na DESC LIMIT 3");
			return $query->result_array();
		}
		public function dtlstNa_13(){
			$query=$this->db->query("select id_lap_na,pirogenitas_lp from tb_serti_na  ORDER BY id_lap_na DESC LIMIT 3");
			return $query->result_array();
		}
}

/*
	$this->db->select('id_lap,pemilik');	
	$this->db->from('tb_serti');	
	$this->db->order_by('id_lap','desc');
	$this->db->group_by('pemilik');
	$this->db->LIMIT(3);
	$query=$this->db->get();
    return $query->result_array();

	$this->db->select('id_lap,jenis_smpl');	
	$this->db->from('tb_serti');	
	$this->db->order_by('id_lap','desc');
	$this->db->group_by('jenis_smpl');
	$this->db->LIMIT(3);
	$query2=$this->db->get();
    return $query2->result_array();
*/

/*
	for($i=1; $i<=12;){
		$month=array("","01","2","3","4","5","6","7","8","9","10","11","12");
		$m = $month[$i];
		$query2=$this->db->query("select count(*) as trans_email from trans_email where lup LIKE '2014-$m%' ");
    	$i++;
    }
	return $query2->result();
*/

/*

	select id_lap,pemilik from tb_serti group by pemilik ORDER BY id_lap DESC LIMIT 3 
	select id_lap,jenis_smpl from tb_serti group by jenis_smpl ORDER BY id_lap DESC LIMIT 5 
	select id_lap,jumlah_smpl from tb_serti group by jumlah_smpl ORDER BY id_lap DESC LIMIT 3 
	select id_lap,fraksi from tb_serti group by fraksi ORDER BY id_lap DESC LIMIT 3 
	select id_lap,pengguna from tb_serti group by pengguna ORDER BY id_lap DESC LIMIT 3 
	select id_lap,kejernihan from tb_serti group by kejernihan ORDER BY id_lap DESC LIMIT 3

*/