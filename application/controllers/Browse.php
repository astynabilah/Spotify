<?php

class Browse extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Song_model');
		$this->load->model('Browse_model');

	}

		public function index()
	{

		$data['judul'] = 'Browse';
		$data['song'] = $this->Song_model->getSong();
		if ($this->input->post('keyword')) {
			$data['SongBrowse'] = $this->Browse_model->BrowseSong_model();
		}
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/browse', $data);
		$this->load->view('Song/ViewSong', $data);
		
	}
}