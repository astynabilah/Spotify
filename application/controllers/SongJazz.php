	<?php


class SongJazz extends CI_Controller{

		public function __construct()
	{
		parent::__construct();
		$this->load->model('Song_model');

	}
	public function index(){

		$data['judul']= 'Jazz';
		$genre['genre']= 'Genre';
		$this->load->view('template/sidebar', $data);
		$data['song'] = $this->Song_model->getJazz('Genre');
		$this->load->view('Song/ViewSong', $data);
		
	}
}