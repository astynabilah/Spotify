<?php
 // Muhammad Ramadhan Prayitno (1301170514)
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
}