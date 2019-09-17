<?php
	Class kadis extends CI_controller {

		function __construct(){

		parent::__construct();

		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('My_model');
		$this->load->library('session');
							


		}
		function index (){

			$this->load->view('kadis');
		}

	}





	

