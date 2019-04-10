<?php
 // Muhammad Ramadhan Prayitno (1301170514)
class Song_model extends CI_model
{
	public function getSong()
	{
		//use query builder to get data table "mahasiswa"
		return $this->db->get('song')->result_array();

	}

	public function getPop($genre)
	{

		$this->db->where('Genre', $genre);
		return $this->db->get('song')->result_array();
	}
}