<?php

class Song extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Song_model');


	}

	public function index(){
		$data['judul'] = 'Song';
		$this->load->view('template/sidebar', $data);
		$data['song'] = $this->Song_model->getSong();
		$this->load->view('Song/ViewSong', $data);

	}



}