<?php

class Top5Indonesia extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		//load model "Mahasiswa_model"
		$this->load->model('Top5Indonesia_model');
		//load library form validation

	}

	public function index(){
		$data['judul'] = 'Top5Indonesia';
		$this->load->view('template/sidebar', $data);
		$data['song'] = $this->Top5Indonesia_model->getTop5Indonesia();
		$this->load->view('Song/Top5Indonesia', $data);
		
	}


}