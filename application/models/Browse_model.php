
<?php
 // write your name and student id here
class Browse_model extends CI_model
{

public function BrowseSong_model()
	{
		$keyword = $this->input->post('keyword', true);
		$this->db->like('Title', $keyword);
		$this->db->or_like('Artist', $keyword);
		return $this->db->get('Title')->result_array();
}
}