<?php

class YourCollection extends CI_Controller{

	public function index(){
		$data['judul'] = 'Your Collection';
		$this->load->view('template/sidebar', $data);
    $this->load->view('template/yourcollection', $data);
    $this->load->model('yourcollection_model');
  }
    
  public function getplaylist(){
  }

  public function createplaylist(){
    $this->load->helper('url');
    $this->load->view('template/formPlaylist');
    $playlistname  = $this->input->post('playlistname');
    $data = array(
        'playlist_name' => $playlistname
    );
    //$this->db->insert('playlist', $data);
    $created = $this->yourcollection_model->newplaylist($data);
    redirect('YourCollection');
    //redirect('template/YourCollection',refresh);
   }
}