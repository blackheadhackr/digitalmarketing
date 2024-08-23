<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model 
{
    public function login($username,$password){
        $this->db->select('*');
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $b = $this->db->get('login')->row();
        $a = $this->db->count_all_results();
        // print_r($a);
        // exit;
        if($a > 0){
            return $b;
        }else{
            return false;
        }
        
        //    return $a;
    }
    public function add_blog($data){
        $a = $this->db->insert('blog',$data);
        return $a;
    }
    public function getallblog(){
        $this->db->select('*');
        $a = $this->db->get('blog')->result();
        return $a;
    }
    public function get_s_blog($id){
        $this->db->select('*');
        $this->db->where('id',$id);
        $a =$this->db->get('blog')->row();
        return $a;
    }
    public function updateblog($data,$id){
        $this->db->where('id',$id);
        $a = $this->db->update('blog',$data);
        return $a;
    }
    public function updateblogimg($data,$id){
        $this->db->select('*');
        $this->db->where('id',$id);
        $a = $this->db->get('blog')->row();
        echo $img =  $a->img;
        $ab = unlink('./assets/image/blog_img/'.$img);
        if($ab){
            $this->db->where('id',$id);
            $a = $this->db->update('blog',$data);
            return $a;
        }else{
            echo "error";
        }
         return $a;
    }
    /**
     * delete Blog =============================================================
     */
    public function del_blog_det($id){
        $this->db->select('*');
        $this->db->where('id',$id);
        $a = $this->db->get('blog')->row();
        $img = $a->img;
  
        $this->db->where('id',$id);
        unlink('./assets/image/blog_img/'.$img);
        $a = $this->db->delete('blog');
        return $a;
    }

    // add user 
    public function add_user($data){
        $a = $this->db->insert('login',$data);
        return $a;
    }
    public function getuser(){
        $this->db->select('*');
        $this->db->order_by('id','desc');
        $a = $this->db->get('login')->result();
        return $a;
    }
    public function get_user_data($id){
        $this->db->select('*');
        $this->db->where('id',$id);
        $a = $this->db->get('login')->row();
        return $a;
    }
    public function update_user($data,$id){
        $this->db->where('id',$id);
        $a =$this->db->update('login',$data);
        return $a;
    }
    public function delete_user($id){
       $this->db->where('id',$id);
       $a = $this->db->delete('login');
       return $a;
    }
}