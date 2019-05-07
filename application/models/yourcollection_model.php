<?php

class yourcollection_model extends CI_model{
    public function newplaylist($data){
        $sql = $this->db->set($data)->get_compiled_insert('user');
        if ($sql){
            return TRUE;
        } else {
            return FALSE;
        }
    }
    public function getid($uname){
        $this->db->select('user_id');
        $this->db->where('username',$uname);
        $query = $this->db->get('user');
        return $query;
    }
}