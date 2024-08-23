<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Model 
{
    public function addcontect($data,$id){
       $this->db->where('id',$id);
       $a = $this->db->update('contact_details',$data);
       return $a;
    }
    public function getdata($id){
        $this->db->select('*');
        $this->db->where('id',$id);
        $a = $this->db->get('contact_details')->row();
        return $a;
    }
    // web con data for website like address, contact, mail, whatsapp 
    public function alcondata(){
       $this->db->select('*');
       $a = $this->db->get('contact_details')->result();
       return $a;
    }
    /**
     * web contact data for admin ======================
     */
    public function get_web_contact_data(){
        $this->db->select('*');
        $this->db->order_by('id','desc');
        $a = $this->db->get('contact')->result();
        return $a;
    }
}