	<?php


class SongPop extends CI_Controller{

		public function __construct()
	{
		parent::__construct();
		//load model "Mahasiswa_model"
		$this->load->model('Song_model');
		//load library form validation

	}
	public function index(){
		$data['judul']= 'Pop';
		$genre['genre']= 'Genre';
		$this->load->view('template/sidebar', $data);
		$data['song'] = $this->Song_model->getPop('Genre');
		$this->load->view('Song/ViewSong', $data);
		
	}
}