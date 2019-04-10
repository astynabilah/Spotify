<?php

class SignUp extends CI_Controller{
	public function index(){
		$data['judul'] = 'SignUp';
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/signup', $data);

	}

}