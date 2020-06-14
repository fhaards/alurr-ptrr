<?php

	function isAdmin(){
		$ci=& get_instance();
		return $ci->session->level=='admin';	
	}

	function show404IfNotAdmin(){
		if(!isAdmin()){
			redirect('error404');
		}
	}

	function redirectIfNotLogin(){
		$ci=& get_instance();
		if($ci->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	function getUserData(){
		$ci=& get_instance();
		$ci->load->model('m_user');
		return $ci->m_user->findBy('email',$ci->session->email);
	}

	////////////////////////// DATE INTERVAL ///////////////////////

	function myDateInterval($dateToCompare){
		$dateInterval = '';
		$dateToCompare = new DateTime($dateToCompare);
	    $dateNow  = new DateTime( date( 'Y-m-d H:i:s', time() )) ; 
	    $interval = $dateToCompare->diff($dateNow);

	    $years    = (int)$interval->format('%Y');
	    $months   = (int)$interval->format('%m');
	    $days     = (int)$interval->format('%d');
	    $hours    = (int)$interval->format('%H');
	    $minutes  = (int)$interval->format('%i');

	    if($years >= 1){
			$dateInterval.= $years.' years';    	
	    }
	    if($months >= 1){
	    	$dateInterval.= ' '.$months.' months';    	
	    }
	    if($days >= 1){
	    	$dateInterval.= ' '.$days.' days';    	
	    }
	    if(empty($dateInterval)){
	    	if($hours == 0 && $minutes <= 5){
	    		$dateInterval.= 'now';
	    	}
	    	else{
			    if($hours >= 1){
			    	$dateInterval.= ' '.$hours.' hours';    	
			    }

			    if($minutes >= 1){
			    	$dateInterval.= ' '.$minutes.' minutes';    	
			    }
	    	}
	    }

	    return trim($dateInterval);
	}

	////////////////////////// LOG-ACTIVITY ///////////////////////

	function actLogBahan($idBahan, $aksi, $item){
	    $ci =& get_instance();
	    $islogAct['log_user'] 	  = getUserData()['nama_user'];
	    $islogAct['log_id_bahan'] = $idBahan; //asset, asesoris, komponen, inventori
	    $islogAct['log_aksi'] 	  = $aksi; //membuat, menambah, menghapus, mengubah,
	    $islogAct['log_item'] 	  = $item; //nama item
	    $islogAct['log_date'] 	  = date('Y-m-d H:i:s');
	    $ci->load->model('m_log');
	    $ci->m_log->saveLogBahan($islogAct);
	}

	function actLogBahanNa($idBahan, $aksi, $item){
	    $ci =& get_instance();
	    $islogAct['log_user'] 	  = getUserData()['nama_user'];
	    $islogAct['log_id_bahanNa'] = $idBahan; //asset, asesoris, komponen, inventori
	    $islogAct['log_aksi'] 	  = $aksi; //membuat, menambah, menghapus, mengubah,
	    $islogAct['log_item'] 	  = $item; //nama item
	    $islogAct['log_date'] 	  = date('Y-m-d H:i:s');
	    $ci->load->model('m_log');
	    $ci->m_log->saveLogBahanNa($islogAct);
	}

	function actLogLaporan($idLap, $aksi, $item){
	    $ci =& get_instance();
	    $islogAct['log_user'] 	  = getUserData()['nama_user'];
	    $islogAct['log_id_lap'] = $idLap; //asset, asesoris, komponen, inventori
	    $islogAct['log_aksi'] 	  = $aksi; //membuat, menambah, menghapus, mengubah,
	    $islogAct['log_item'] 	  = $item; //nama item
	    $islogAct['log_date'] 	  = date('Y-m-d H:i:s');
	    $ci->load->model('m_log');
	    $ci->m_log->saveLogLaporan($islogAct);
	}

	function actLogLaporanNa($idLap, $aksi, $item){
	    $ci =& get_instance();
	    $islogAct['log_user'] 	  = getUserData()['nama_user'];
	    $islogAct['log_id_lapNa'] = $idLap; //asset, asesoris, komponen, inventori
	    $islogAct['log_aksi'] 	  = $aksi; //membuat, menambah, menghapus, mengubah,
	    $islogAct['log_item'] 	  = $item; //nama item
	    $islogAct['log_date'] 	  = date('Y-m-d H:i:s');
	    $ci->load->model('m_log');
	    $ci->m_log->saveLogLaporanNa($islogAct);
	}