<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model{	
	protected $table='tb_user';

	public function __construct(){
   		$this->load->database();
  	}

  	// IS SUPER USER
	  	public function read(){
	  		$this->db->select('*');	
			$this->db->from('tb_user');	
			$this->db->like('level', 'operator');
			$query=$this->db->get();
		    return $query->result_array();
	  	}

	  	public function tambahUser(){
			$nmU  	= $this->input->post('nama_user');
			$emU  	= $this->input->post('email');
			$pwdU 	= $this->input->post('password');
			$levelU = 'operator';
			$pwUb	= password_hash($pwdU, PASSWORD_DEFAULT);

			$data = array(
				'nama_user'=>$nmU,
				'email'=>$emU,
				'password'=>$pwUb,
				'level'=>$levelU
			);
		    $this->db->insert('tb_user',$data);
	  	}

	  	public function getUbah($id){
			$this->db->select('*');	
			$this->db->from('tb_user');	
			$this->db->where('id_user',$id);
			$query=$this->db->get();
			return $query->row_array();
		}

	  	public function setUbah($id){

			$nmU  	= $this->input->post('nama_user');
			$emU  	= $this->input->post('email');
			$pwdU 	= $this->input->post('password');
			$oldPw 	= $this->input->post('oldpassword');

			$this->db->select('password');    
	        $this->db->from('tb_user');
	        $this->db->where('id_user', $id);    
	        $query=$this->db->get();
	        $getPw=$query->row_array()['password'];
	        
	        if($getPw==$pwdU){
	            $newPw = $oldPw;
	        }
	        else{
	        	$newPw = password_hash($pwdU, PASSWORD_DEFAULT);
	        }

			$data = array(
				'nama_user'=>$nmU,
				'email'=>$emU,
				'password'=>$newPw
			);
			
		    $this->db->where('id_user', $id);
		    $this->db->update('tb_user', $data);
		}
		
		public function hapus_user($id){
			$this->db->delete('tb_user', array('id_user' => $id));
		}

	// IS OPERATOR

		public function readOp($id){
			$this->db->select('*');	
			$this->db->from('tb_user');	
			$this->db->where('id_user',$id);
			$query=$this->db->get();
			return $query->row_array();
	  	}

	// OTHER FUNCTION

	function cekLogin($email, $password){		
		$userData= $this->db->get_where($this->table,['email'=>$email])->row_array();
		if(is_null($userData)){
			return false;
		}
		else{
			return password_verify($password, $userData['password']);
		}
	}	

	function getLevelByEmail($email){
		$this->db->select('*');	
		$this->db->from('tb_user');	
		$this->db->where('email',$email);
		$query=$this->db->get();
		return $query->row_array()['level'];
	}
	
	function findBy($fieldName, $value){
		$this->db->select('*');	
		$this->db->from('tb_user');	
		$this->db->where($fieldName,$value);
		$query=$this->db->get();
		return $query->row_array();
	}
}