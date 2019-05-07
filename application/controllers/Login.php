<?php


class Login extends CI_Controller{
	public function index(){
		$data['judul'] = 'Home';
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/login', $data);		
	}

	public function log_in(){
		$this->db->where('username',$this->input->post('username'));
		$this->db->where('password',sha1($this->input->post('password')));
		$userid = $this->db
        ->select("user_id")
        ->where(
             [
                'username' => $username,
                'password' => md5($password)
             ]
         )
        ->get("user")
        ->row();

		$res = $this->db->get('user')->row_array();
		if ($res['username']!=null){
			$this->session->set_userdata('username',$res['username']);
			$this->session->set_userdata('password',$res['password']);
			$this->session->set_flashdata('flash','sucessfully logged in');
			redirect('Home');
		} else {
			$data['judul']= 'Login';
			$this->session->set_flashdata('info','Wrong username/password');
			redirect('Login');
		}
	}

}