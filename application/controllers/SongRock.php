	<?php


class SongRock extends CI_Controller{

		public function __construct()
	{
		parent::__construct();
		$this->load->model('Song_model');

	}
	public function index(){

		$data['judul']= 'Rock';
		$genre['genre']= 'Genre';
		$this->load->view('template/sidebar', $data);
		$data['song'] = $this->Song_model->getRock('Genre');
		$this->load->view('Song/ViewSong', $data);
		
	}
}