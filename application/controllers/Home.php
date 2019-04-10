<?php

class Home extends CI_Controller{
	public function index(){
		$data['judul'] = 'Home';
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/home', $data);

	}

}