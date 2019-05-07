<?php

class Browse extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Song_model');

	}

		public function index()
	{
		$data['song'] = $this->Song_model->getSong();
		$keyword    =   $this->input->post('keyword');
		if ($this->input->post('keyword')) {
			$data['song'] = $this->Browse_model->getBrowse('keyword');
		}
		$this->load->view('template/sidebar',$data);
		$this->load->view('template/browse',$data);
 
		
	}
}