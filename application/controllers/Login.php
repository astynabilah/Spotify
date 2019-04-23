<?php


 // write your name and student id here
class Login extends CI_Controller{
	public function index(){
		$data['judul'] = 'Home';
		$this->load->view('template/login', $data);		
	}

	public function log_in(){
		$this->db->where('username',$this->input->post('username'));
		$this->db->where('password',sha1($this->input->post('password')));
		$res = $this->db->get('user')->row_array();
		if ($res['username']!=null){
			$this->session->set_userdata('username',$res['username']);
			$this->session->set_userdata('password',$res['password']);
			$this->session->set_flashdata('flash','sucessfully updated');
			redirect('Login');
		} else {
			$data['judul']= 'Login';
			$this->session->set_flashdata('info','Wrong username/password');
			redirect('Login');
			$this->load->view('template/sidebar');
			$this->load->view('template/login',$data);	

		}
	}

}