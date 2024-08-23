<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller 
{
    public function __construct(){
        parent::__construct();
        $this->load->model('Service_model');
   }
   public function load_services(){
    $a['services_data'] = $this->Service_model->get_all_survices();
    $this->load->view('admin/services',$a);
   }
   /**
    * insert services ------------------------------------------------------------------->
    */
   public function add_services(){
    $this->form_validation->set_rules('title', 'Title','required');
    $this->form_validation->set_rules('sdesc', 'Description','trim|required|min_length[155]|max_length[160]');
    $this->form_validation->set_message('required', 'Please fill this feild');
    $this->form_validation->set_message('min_length', 'Please fill this feild within 155 char.');
    $this->form_validation->set_message('max_length', 'Please fill this feild within 160 char.');

    if($this->form_validation->run() == false){
        $all_data = array(
            'result' => 'error',
            'title' => form_error('title'),
            'desc'  => form_error('sdesc')
        );
    }else{
        $config['upload_path']          = './assets/image/services/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1024; // 1024 = 1MB
        $config['max_width']            = 500;
        $config['max_height']           = 500;

        $this->load->library('upload', $config);$this->upload->initialize($config);
        if ( ! $this->upload->do_upload('servicesimage')) {
            $all_data = array(
                'result' => 'error',
                'image' => $this->upload->display_errors()                   
            );
        }else{
            $a = $this->upload->data();
            $name = $a['file_name'];
            $newfile_name= preg_replace('/\s+/', '_', $name);
            $title = $this->input->post('title');
            $desc = $this->input->post('sdesc');
            $data = array(
                'image' => $newfile_name,
                'title' => $title,
                'disc' => $desc
            );
            $a = $this->Service_model->add_srvices($data);
            if($a){
                $all_data = array(
                    'result' => 'success',
                    'message' => '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Succes!</strong> Services is added successfully.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>'
                );
            }else{
                $all_data = array(
                    'result' => 'error',
                    'message' => '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> Something went Wrong please try again after 2 minuts.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>'
                );
            }
        }
    }

    echo json_encode($all_data);
       

    
   }
    /**
    * get specific services against id ------------------------------------------------------------------->
    */
   public function get_specific_services(){
    $id = $this->input->post('serid');
    $a = $this->Service_model->get_sep_ser($id);
    if($a){

        $all_data = array(
            'result' => 'success',
            'img' => '<img src="'.base_url().'assets/image/services/'.$a->image .'" alt="'.$a->image .'" style="width:20%; height:auto; "> <p> your current image </p>',
            'title' => $a->title,
            'desc' => $a->disc,
            'id' => $a->id
        );
    }else{
        $all_data = array(
            'result' => 'error',
            'message' => 'Sorry sir we are unable to  proceed your request please try again after free minuts'
            
        );
    }
    echo json_encode($all_data);
   }
   /**
    * update services data and image against id ----------------------------------------------------------->
    */
   public function upd_services(){
        $title = $this->input->post('title');
        $sdesc = $this->input->post('sdesc');
        $id = $this->input->post('id');

        $this->form_validation->set_rules('title', 'Title','required');
        $this->form_validation->set_rules('sdesc', 'Description','trim|required|min_length[155]|max_length[160]');
        $this->form_validation->set_message('required', 'Please fill this feild');
        $this->form_validation->set_message('min_length', 'Please fill this feild within 155 char.');
        $this->form_validation->set_message('max_length', 'Please fill this feild within 160 char.');

        if($this->form_validation->run() == false){
            $all_data = array(
                'result' => 'error',
                'title' => form_error('title'),
                'desc'  => form_error('sdesc')
            );
        }else{
            $config['upload_path']          = './assets/image/services/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 1024; // 1024 = 1MB
            $config['max_width']            = 500;
            $config['max_height']           = 500;

            if($_FILES['servicesimage']['name'] != null){
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if ( ! $this->upload->do_upload('servicesimage')) {
                    $all_data = array(
                        'result' => 'error',
                        'image' => $this->upload->display_errors()                   
                    );
                }else{
                    $a = $this->upload->data();
                    $name = $a['file_name'];
                    $newfile_name= preg_replace('/\s+/', '_', $name);
                    $id = $this->input->post('id');
                    $a = $this->Service_model->image_update($newfile_name ,$id);
                    if($a){
                        $all_data = array(
                            'result' => 'success',
                            'message' => '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success !</strong> Your Image is Updated successfully.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>'
                        );
                    }else{
                        $all_data = array(
                            'result' => 'error',
                            'message' => '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Error !</strong> Sorry Something went wrong please try again later.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>'
                        );
                    }
                }
            }else{
                $a = $this->Service_model->service_data_up($title,$sdesc, $id);
                    if($a){
                        $all_data = array(
                            'result' => 'success',
                            'message' => '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success !</strong> Your Image is Updated successfully.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>'
                        );
                    }else{
                        $all_data = array(
                            'result' => 'error',
                            'message' => '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Error !</strong> Sorry Something went wrong please try again later.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>'
                        );
                    }
            }
            
        }
        echo json_encode($all_data);
   }
   /**
    * delete survice by id --------------------------------------------------------------->
    */
    public function del_specific_services(){
        $id = $this->input->post('id');
        $a = $this->Service_model->service_data_del($id);
        if($a){
            $all_data = array(
                'result' => 'success',
                'message' => '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Succes!</strong> Services is added successfully.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>'
            );
        }else{
            $all_data = array(
                'result' => 'error',
                'message' => '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> Something went Wrong please try again after 2 minuts.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>'
            );
        }

        echo json_encode($all_data);
    }
}