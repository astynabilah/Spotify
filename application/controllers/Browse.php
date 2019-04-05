<?php

class Browse extends CI_Controller{

	

	public function index(){
		$data['judul'] = 'Browse';
		$this->load->view('template/myheader', $data);
		$this->load->view('template/Browse', $data);
		
	}


}