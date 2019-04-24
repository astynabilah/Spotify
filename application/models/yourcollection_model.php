<?php

class yourcollection_model
 extends CI_model
{
    public function newplaylist($data){
        $this->db->query('INSERT INTO playlist VALUES (1,'$data',1);');
    }
}