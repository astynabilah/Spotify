<?php

class Browse extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Song_model');

	}

		public function index()
	{

		$data['judul'] = 'Browse';
		$data['song'] = $this->Song_model->getSong();
		if ($this->input->post('keyword')) {
			//$data['song'] = $this->Song_model->getBrowse();
		$this->load->view('template/sidebar', $data);
		$dataa['song'] = $this->Song_model->getBrowse();
	

		}
		$this->load->view('template/sidebar', $data);
		//$this->load->view('template/browse', $data);
		//$this->load->view('Song/BrowseSong',$data);
		
		
	}
}