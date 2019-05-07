<?php

class SignUp extends CI_Controller{
	public function index(){
		$data['judul'] = 'SignUp';
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/signup', $data);
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
	}
	public function register(){	

		$this->load->model('signupmodel');
		$name = $this->input->post('name');
		$username = $this->input->post('username');
		$password = sha1($this->input->post('password'));
		$table = 'user';
		$custdata = array(
			'fullname' => $name,
			'username' => $username,
			'password' => $password
		);
		$this->db->where('username', $username);
		$query = $this->db->get('user');
		$count_row = $query->num_rows();
		if ($count_row == 0) {
			$duplicate = FALSE; 
		 } else {
		  $duplicate = TRUE; 
		 }
		
		if(!$duplicate){
			$registered = $this->signupmodel->register($table,$custdata);
			if ($registered) {
				redirect('Login');
			} else {
				redirect('SignUp');
			}
		} else {
			$this->session->set_flashdata('message','Username already exists.');
			redirect('SignUp');
		}
	}

}