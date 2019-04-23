<?php

class signupmodel extends CI_model{
    public function register($table,$custdata){
        $insert = $this->db->insert($table,$custdata);
        if ($insert){
            return TRUE;
        }else{
            return FALSE;
        }
    }
}