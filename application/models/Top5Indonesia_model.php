<?php
 // Muhammad Ramadhan Prayitno (1301170514)
class Top5Indonesia_model extends CI_model
{
	public function getTop5Indonesia()
	{
		//use query builder to get data table "mahasiswa"
		return $this->db->get('song')->result_array();

	}
}