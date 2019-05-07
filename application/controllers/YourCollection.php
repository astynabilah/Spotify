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
    if (isset($username)){
      $userid = $this->yourcollection_model->getid($username);
      $data = array(
        'playlist_name' => $playlistname,
        'user_id' => $userid
      );
    //$this->db->insert('playlist', $data);
    $created = $this->yourcollection_model->newplaylist($data);
    redirect('YourCollection');
    //redirect('template/YourCollection',refresh);
    } else {
      $this->session->set_flashdata('flash','Please log in to create playlist!');
    }
   }
}