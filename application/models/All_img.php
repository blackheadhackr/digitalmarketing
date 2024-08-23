<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class All_img extends CI_Model 
{
    public function ad_banner($data){
      $a = $this->db->insert('banner',$data);
      return $a;
    }
    public function get_bnr(){
     $this->db->select('*');
     $a = $this->db->get('banner')->result();
     return $a;
    }
    public function getbann($id){
     $this->db->select('*');
     $this->db->where('id',$id);
     $a = $this->db->get('banner')->row();
     return $a;
    }
    public function up_bann($data,$id){
      $this->db->select('*');
     $this->db->where('id',$id);
     $a = $this->db->get('banner')->row();
     $img =  $a->img;
      $ab = unlink('./assets/image/'.$img);
      if($ab){
        $this->db->where('id',$id);
        $a = $this->db->update('banner',$data);
        return $a;
      }else{
        echo "error";
      }

     
    }
    public function del_bann($id){
      $this->db->select('*');
      $this->db->where('id',$id);
      $a = $this->db->get('banner')->row();
      $img = $a->img;

      $this->db->where('id',$id);
      unlink('./assets/image/banner/'.$img);
      $a = $this->db->delete('banner');
      return $a;
    }
    /**
     * gellery insert ===========================================================================================
     */
    public function insert_gellery($data){
      $a = $this->db->insert('gallery',$data);
      return $a;
    }
    // get all gellery image --------------------------------------
    public function get_gellery(){
      $this->db->select('*');
      $a  = $this->db->get('gallery')->result();
      return $a;
    }
    // get perticular Image ----------------------------------
    public function get_perticular_image($id){
      $this->db->select('*');
      $this->db->where('id',$id);
      $a = $this->db->get('gallery')->row();
      return $a;
    }
    // Updating  perticular Image ----------------------------------
    public function up_gellery_image($data,$id){
      $this->db->select('*');
      $this->db->where('id',$id);
      $a = $this->db->get('gallery')->row();
      $img = $a->img;

     
      $this->db->where('id',$id);
      unlink('./assets/image/gallery/'.$img); // for delete image from folder 
      $a = $this->db->update('gallery',$data);
      return $a;
    }
    public function gellery_image_up($data,$id){
     
      $this->db->where('id',$id); 
      $a = $this->db->update('gallery',$data);
      return $a;
    }
    // Delete perticular  Image ----------------------------------
    public function delete_gellery_image($id){
      $this->db->select('*');
      $this->db->where('id',$id);
      $a = $this->db->get('gallery')->row();
      $img = $a->img;

      $this->db->where('id',$id);
      unlink('./assets/image/gallery/'.$img);
      $a = $this->db->delete('gallery');
      return $a;
    
    }
}