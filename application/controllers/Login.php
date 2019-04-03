<?php
 // write your name and student id here
class Login extends CI_Controller
{

	public function index(){
		$data['judul'] = 'Home';
		$this->load->view('template/myheader', $data);
		$this->load->view('template/login', $data);		

	}

}