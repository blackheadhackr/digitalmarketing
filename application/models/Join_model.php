<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Join_model extends CI_Model 
{ 
    //insert joiner from web 
    public function join_insert($data){
        $a = $this->db->insert('join_us',$data);
        return $a;
    }

    // reflect joiner on admin pannel =================================
    public function get_all_joiner_on_admin(){
       $this->db->select('*');
       $this->db->order_by('id','desc');
       $a = $this->db->get('join_us')->result();
       return $a;
    }
}