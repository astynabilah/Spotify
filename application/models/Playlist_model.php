<?php
class Playlist_model extends CI_model
{

public function tambahPlaylist()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"nim" => $this->input->post('nim', true),
			"email" => $this->input->post('email', true),
			"jurusan" => $this->input->post('jurusan', true),
		];

		return $this->db->insert('mahasiswa',$data);
	}
}