<?php
class Browse_model extends CI_model
class BrowseSong_model extends CI_model
{

public function getBrowse()
	{
		$keyword = $this->input->post('keyword', true);
		$sql = $this->db->query("SELECT * FROM song WHERE '$keyword' IN (Title,Artist)");
		return $sql->result_array();
}
}