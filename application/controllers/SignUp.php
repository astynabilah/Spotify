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
		/**$this->form_validation->set_rules('name', 'name','required');
		$this->form_validation->set_rules('username', 'username','required');
		$this->form_validation->set_rules('password','password','required');
		$this->form_validation->set_message('check_duplicate_username', 'This username is already exist.');
		if($this->form_validation->run() == FALSE) {
			redirect('SignUp');
		} else {
		}*/
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
		  //if count row return any row; that means you have already this email address in the database. so you must set false in this sense.
			$duplicate = FALSE; // here I change TRUE to false.
		 } else {
		  // doesn't return any row means database doesn't have this email
		  $duplicate = TRUE; // And here false to TRUE
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