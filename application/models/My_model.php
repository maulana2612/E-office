<?php
			class My_model extends CI_Model {


		function login ($user,$pass){

		$this->db-> select('user_name,password,level');
		$this->db-> from ('anggota');
		$this->db-> where ('user_name',$user);
		$this->db-> where ('password',$pass);
		$this->db->limit(1);

		$query = $this->db->get();
			if ($query->num_rows()==1) {
				return $query->result ();
			}

			else{
				return false;
			}

	}

}
