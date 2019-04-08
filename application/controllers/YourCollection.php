<?php

class YourCollection extends CI_Controller{

	public function index(){
		$data['judul'] = 'Your Collection';
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/yourcollection', $data);
    }
    
    public function getplaylist(){
      foreach $isi in $playlist{
        
      }
    }

    public function createplaylist(){

    }


}