<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web_model extends CI_Model 
{
    /**
     * contact forn sumbit form website
     */
    public function contact_dta($data){
        $a = $this->db->insert('contact',$data);
        return $a;
    }
}