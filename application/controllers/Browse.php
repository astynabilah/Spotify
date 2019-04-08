<?php

class Browse extends CI_Controller{

	

	public function index(){
		$data['judul'] = 'Browse';
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/Browse', $data);
		
	}


}