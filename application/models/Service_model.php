<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service_model extends CI_Model 
{
    /**
     * servies insert or add ----------------------------------------------->
     */
    public function add_srvices($data){
        $a = $this->db->insert('services',$data);
        return $a;
    }
    /**
     * Get all services from databse to reflect in table ----------------------------------------------->
     */
    public function get_all_survices(){
        $this->db->select('*');
        $this->db->order_by('id','desc');
        $a = $this->db->get('services')->result();
        return $a;

    }
    /**
     * get specific service ----------------------------------------------->
     */
    public function get_sep_ser($id){
        $this->db->select('*');
        $this->db->where('id',$id);
        $a = $this->db->get('services')->row();
        return $a;
    }
    /**
     * update specific service image ----------------------------------------------->
     */
    public function image_update($newfile_name ,$id){
        $this->db->select('image');
        $this->db->where('id',$id);
        $a = $this->db->get('services')->row();
        $img = $a->image;
        
        $this->db->where('id',$id);
        unlink('./assets/image/services/'.$img);
        $a = $this->db->update('services', array('image' => $newfile_name));
        return $a;
    }
    /**
     * update specific service title and desc ----------------------------------------------->
     */
    public function service_data_up($title,$sdesc, $id){
        $this->db->where('id',$id);
        $a = $this->db->update('services', array('title' => $title, 'disc' => $sdesc));
        return $a;
    }
    /**
     * delete specific service ----------------------------------------------->
     */
    public function service_data_del($id){
        $this->db->select('*');
      $this->db->where('id',$id);
      $a = $this->db->get('services')->row();
      $img = $a->image;
    //   delete image
      $this->db->where('id',$id);
      unlink('./assets/image/services/'.$img); // delete image from folder 
      $a = $this->db->delete('services');
      return $a;
    }
   
}