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

    public function add_catg($data){
       $a = $this->db->insert('catg',$data);
       return $a;
    }
    public function get_all_catg(){
        $this->db->select('*');
        $this->db->order_by('id','desc');
        $a = $this->db->get('catg')->result();
       return $a;
    }
    public function getsingle($id){
        $this->db->select('*');
        $this->db->where('id',$id);
        $a = $this->db->get('catg')->row();
        return $a;
    }
    public function up_catg($name,$id){
        $this->db->where('id',$id);
        $this->db->update('catg',array('name'=>$name));
        $a = $this->db->affected_rows();
        if($a > 0){
            return $a;
        }else{
            return false;
        }
    }
    public function del_catg($id){
        $this->db->where('id',$id);
        $this->db->delete('catg');
        $a = $this->db->affected_rows();
        if($a >= 1){
            return $a;
        }else{
            return false;
        }
    }
    public function get_all_catg1(){
            $this->db->select('c.name, c.name');
            $this->db->select('COUNT(b.category) as number_of_blogs', FALSE);
            $this->db->from('catg c');
            $this->db->join('blog b', 'c.name = b.category', 'left');
            $this->db->group_by('c.name, c.name');
            $this->db->order_by('c.name');
            $query = $this->db->get();
            return $query->result();
        
    }
    
}