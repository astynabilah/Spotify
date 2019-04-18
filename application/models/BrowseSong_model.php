
<?php
 // write your name and student id here
class Browse_model extends CI_model
{

public function BrowseSong_model()
	{
		$keyword = $this->input->post('keyword', true);
		$this->db->like('title', $keyword);
		$this->db->or_like('artist', $keyword);
		return $this->db->get('song')->result_array();
	}
}