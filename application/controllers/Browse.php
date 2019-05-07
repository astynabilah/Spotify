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
<<<<<<< HEAD
		$this->load->view('template/sidebar',$data);
		$this->load->view('template/browse',$data);
 
		
=======
		$this->load->view('template/sidebar', $data);

>>>>>>> 0474582d8a908c5aa23e7f9a074f3db78b177417
	}
}