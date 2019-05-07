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
}