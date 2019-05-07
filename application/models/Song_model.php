<?php

class Song_model extends CI_model
{
	public function getSong()
	{	
		return $this->db->get('song')->result_array();

	}

	public function getPop()
	{
		$genre='Pop';
		$this->db->where('Genre', $genre);
		return $this->db->get('song')->result_array();
	}

		public function getJazz()
	{
		$genre='Jazz';
		$this->db->where('Genre', $genre);
		return $this->db->get('song')->result_array();
	}

			public function getRock()
	{
		$genre='Rock';
		$this->db->where('Genre', $genre);
		return $this->db->get('song')->result_array();
	}

			public function getElectronic()
	{
		$genre='Electronic';
		$this->db->where('Genre', $genre);
		return $this->db->get('song')->result_array();
	}
	public function getBrowse()
	{
		$keyword = $this->input->post('keyword', true);
		$this->db->like('Title', $keyword);
		$this->db->or_like('Artist', $keyword);
		return $this->db->get('Title')->result_array();

}
}