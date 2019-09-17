<?php

Class akses extends CI_controller{

	function  __construct(){
		parent::__construct();


		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('My_model');
		$this->load->library('session');
	}

	function index(){
		$this->load->view('login');

	}

	function proses_login (){
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('My_model');
		$this->load->library('session');
	
		$user=$this->input->post('user_name');
		$pass=$this->input->post('password');
		
		$ceklogin = $this->My_model->login($user,$pass);

		if ($ceklogin ) {
			foreach ($ceklogin as $row);
			$this->session->set_userdata('user_name', $row->user_name);
			$this->session->set_userdata('level', $row->level);

			if ($this->session->userdata('level')=="kominfo"){
				redirect ('kominfo/index');
			} elseif ($this->session->userdata('level')=="kadis"){
				redirect ('kadis/index');
			}

		}else{
			$data['pesan']="Username dan Password tidak sesuai.";
			$this->load->view('login',$data);

		}

	}

}


