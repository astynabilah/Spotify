<?php

class YourCollection extends CI_Controller{

	public function index(){
		$data['judul'] = 'Your Collection';
		$this->load->view('template/sidebar', $data);
    $this->load->view('template/yourcollection', $data);
    $this->load->model('yourcollection_model');
  }
    
  public function showplaylist(){
    $data['judul']= 'Rock';
		$genre['genre']= 'Genre';
		$this->load->view('template/sidebar', $data);
		$data['song'] = $this->Song_model->getplaylist('Genre');
		$this->load->view('Song/ViewSong', $data);
  }

  public function createplaylist(){
    $this->load->helper('url');
    $this->load->view('template/formPlaylist');
    $playlistname  = $this->input->post('playlistname');
    // if (isset($username)){
    //   $userid = $this->yourcollection_model->getid($username);
    //   $data = array(
    //     'playlist_name' => $playlistname,
    //     'user_id' => $userid
    //   );
    // $userid = $this->db
    //     ->select("user_id")
    //     ->where(
    //          [
    //             'username' => $username,
    //             'password' => md5($password)
    //          ]
    //      )
    //     ->get("user")
    //     ->row();

   if ($userid) {
    $userid = $this->yourcollection_model->getid($username);
      $data = array(
        'playlist_name' => $playlistname,
        'user_id' => $userid
      );
        //  $logindata = [
        //      'userid' => $user->username,
        //      'name'   => $user->name,
        //      'phone'  => $user->phone
        //  ];
        //  $this->session
        //       ->set_userdata($logindata);
        //  return true;
  //  else {
  //        return false;
  //  }
// } 
    $created = $this->yourcollection_model->newplaylist($data);
    redirect('YourCollection');
    } else {
      $this->session->set_flashdata('flash','Please log in to create playlist!');
    }
   }
}