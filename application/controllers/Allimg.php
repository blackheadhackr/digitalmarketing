<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Allimg extends CI_Controller 
{
    public function __construct(){
        parent::__construct();
        $this->load->model('all_img');
   }
//    ---------------------------------------------admin banner --------------------------------------
    public function banneradd(){
        
        $config['upload_path'] = './assets/image/banner/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']     = '1024'; // 1024 = 1mb
        $config['max_width'] = '1500';
        $config['max_height'] = '500';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if ( ! $this->upload->do_upload('banner'))
        {
            $error =  $this->upload->display_errors();
            $this->load->view('admin/banner',$error);
           
        }
        else
        {
            $this->form_validation->set_rules('alt','Alternative tag', 'required');
            if($this->form_validation->run() == false){
                $error = validation_errors();
                $this->load->view('admin/banner',$error);
            }else{

                $upload_data = $this->upload->data();
                $file_name = $upload_data['file_name'];
                $newfile_name= preg_replace('/\s+/', '_', $file_name);

                $alt = $this->input->post('alt');
                $data = array(
                    'img' => $newfile_name,
                    'alternate' => $alt
                );
                $a = $this->all_img->ad_banner($data);
                if($a){
                    $this->session->set_flashdata('addbanner','<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> Your data is inserted Successfullty.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> </div>');
                    redirect(base_url('update-banner'));
                }else{
                    $this->session->set_flashdata('addbanner','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>sorry!</strong> Try again .....................
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> </div>');
                    redirect(base_url('update-banner'));
                }
                
            }
            
            
        }

    }

    public function getban(){
       $id = $this->input->post('banid');
       $a = $this->all_img->getbann($id);
       if($a){
            $data = array(
                "result" => "success",
                "img" => $a->img,
                "alt" => $a->alternate,
                "id" => $a->id,
            );
       }else{
        $data = array(
            "result" => "error",
            "msg" => "something went wrong plase try again"  
        );
       }
       echo json_encode($data);
    }
    public function upban(){
        $id = $this->input->post('banid');
        $alt = $this->input->post('alt');
        $img = $_FILES['banner']['name'];
        $img1= preg_replace('/\s+/', '_', $img);

        $config['upload_path'] = './assets/image/banner/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']     = '1024000';
        $config['max_width'] = '1500';
        $config['max_height'] = '500';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if($img != null &&  $alt != null){
            if ( ! $this->upload->do_upload('banner'))
            {
                $up = array(
                    "result" => "error",
                    "massage" => $this->upload->display_errors()
                );
            }else{
                $data =array(
                    'img' =>$img1,
                    'alternate' => $alt
                );
                $a = $this->all_img->up_bann($data,$id);
                if($a){
                    $up = array(
                        "result" => "success",
                        "massage" => '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>ThankYou !</strong> We have updated your DATA successfully .....
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> </div>'
                    );
                    
                }
            }
        }   else if($img != null){
            if ( ! $this->upload->do_upload('banner'))
            {
                $up = array(
                    "result" => "error",
                    "massage" => $this->upload->display_errors()
                );
            }else{
                $data =array(
                    'img' =>$img1
                );
                $a = $this->all_img->up_bann($data,$id);
                if($a){
                    $up = array(
                        "result" => "success",
                        "massage" => '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>ThankYou !</strong> We have updated your image successfully .....
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> </div>'
                    );
                    
                }
            }
        } 
        
            else{
                $this->form_validation->set_rules('alt','Alternative tag', 'required');
                if($this->form_validation->run() == false){
                    $up = array(
                        "result" => "error",
                        "maassage" => validation_errors()
                    );
                }else{
                $data =array(
                'alternate' => $alt
                );
                $a = $this->all_img->up_bann($data,$id);
                if($a){
                    $up = array(
                        "result" => "success",
                        "massage" => '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>ThankYou !</strong> We have updated your alternate text successfully .....
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> </div>'
                    );
                    
                }
            }
        }

        echo json_encode($up);

    }
    public function del_banner(){
        $id = $this->input->post('id');
        $a = $this->all_img->del_bann($id);
        if($a){
            $data = array(
                    "result"=>"success",
                    "message" =>"your blog is deleted"
            );
        }else{
                $data = array(
                        "result"=>"error",
                        "message" =>"Something went wrong"
                );
        }
        echo json_encode($data);
    }
    /**
     * ---------------------------------------------this is for image gallery -----------------------------
     * 
     * load gallery page in admin pannel==============================
     */
    public function gallery(){
        $a['gallery'] = $this->all_img->get_gellery();
        $this->load->view('admin/img_galery',$a);
    }
    /**
     * ---------------------------------------------imsert gallery image ------------------------------
     */
    public function gallery_img(){
       $title = $this->input->post('title');
       $alt = $this->input->post('alt');

       $this->form_validation->set_rules('title', 'title', 'required',array ('required' => 'please fill this feild.'));
       $this->form_validation->set_rules('alt', 'Alternate', 'required',array ('required' => 'please fill this feild.'));

       if($this->form_validation->run() == false){
            $all_data = array(
                'result' => "error",
                'title' => form_error('title'),
                'alt' => form_error('alt')
            );
       }else{
            $config['upload_path']          = './assets/image/gallery/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 1024; // 1024 = 1MB

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ( ! $this->upload->do_upload('image'))
            {
                    $error = array('error' => $this->upload->display_errors());
                    $all_data = array(
                        'result' => "error",
                        'img_error' => $this->upload->display_errors()
                    );
            }
            else
            {
                $a = $this->upload->data();
                $imgname = $a['file_name'];
                $newfile_name= preg_replace('/\s+/', '_', $imgname);

                $data = array(
                    'img' => $newfile_name,
                    'title' => $title,
                    'alt' => $alt,
                );
                $a = $this->all_img->insert_gellery($data);
                if($a){
                    $all_data = array(
                        'result' => "success",
                        'message' => '<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                        <strong>Success !</strong> image is added.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>'
                    );
                }else{
                    $all_data = array(
                        'result' => "error",
                        'message' => '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                        <strong>Error !</strong> Something went wrong please try again.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>'
                    );
                }
            }
       }

       echo json_encode($all_data);
    }
    /**
     * get single image
     */
    public function get_single_image(){
        $id = $this->input->post('id');
        $a = $this->all_img->get_perticular_image($id);
        if($a){
            $all_data = array(
                'result' => 'success',
                'id' => $a->id,
                'img' => '<img class="img-fluid" src="'.base_url().'assets/image/gallery/'.$a->img.'" style="width:30%; height:auto;"> <p style="padding:5px;"> Your Current Image</p>',
                'title' => $a->title,
                'alt' => $a->alt
            );
        }else{
            $all_data = array(
                'result' => 'error',
                'message' => 'Something went wrong please try again latter.'
            );
        }
        echo json_encode($all_data);
    }
    /**
     * get single image
     */
    public function up_gallery_img(){
        $id = $this->input->post('id2');
        $image = $this->input->post('image');
        $title = $this->input->post('title');
        $alt = $this->input->post('alt');

        $this->form_validation->set_rules('title', 'title', 'required',array ('required' => 'please fill this feild.'));
        $this->form_validation->set_rules('alt', 'Alternate', 'required',array ('required' => 'please fill this feild.'));
        
        if($this->form_validation->run() == false){
            $all_data = array(
                'result' => "error",
                'title' => form_error('title'),
                'alt' => form_error('alt')
            );
       }else{

        if(! $_FILES['image']['name']){
            $data = array(
                'title' => $title,
                'alt' => $alt
            );
            $a = $this->all_img->gellery_image_up($data,$id);
                if($a){
                    $all_data = array(
                        'result' => "success",
                        'message' => '<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                        <strong>Success !</strong> image is Updated Successfully.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>'
                    );
                }else{
                    $all_data = array(
                        'result' => "error",
                        'message' => '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                        <strong>Error !</strong> Something went wrong please try again.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>'
                    );
                }
        }else{
            
            $config['upload_path']          = './assets/image/gallery/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 1024; // 1024 = 1MB

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ( ! $this->upload->do_upload('image'))
            {
                    $error = array('error' => $this->upload->display_errors());
                    $all_data = array(
                        'result' => "error",
                        'img_error' => $this->upload->display_errors()
                    );
            }
            else
            {
                $a = $this->upload->data();
                $imgname = $a['file_name'];
                $newfile_name= preg_replace('/\s+/', '_', $imgname);

                $data = array(
                    'img' => $newfile_name,
                    'title' => $title,
                    'alt' => $alt
                );
                $a = $this->all_img->up_gellery_image($data,$id);
                if($a){
                    $all_data = array(
                        'result' => "success",
                        'message' => '<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                        <strong>Success !</strong> image is Updated Successfully.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>'
                    );
                }else{
                    $all_data = array(
                        'result' => "error",
                        'message' => '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                        <strong>Error !</strong> Something went wrong please try again.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>'
                    );
                }
            }
       }
       }
       echo json_encode($all_data);
    }
    /**
     * ---------------------------------------------Delete gallery image ------------------------------
     */
    public function gellery_delete(){
        $id =  $this->input->post('id');
        $a = $this->all_img->delete_gellery_image($id);
        if($a){
            $all_data = array(
                'result' => "success",
                'message' => '<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                <strong>Success !</strong> image is Deleted.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>'
            );
        }else{
            $all_data = array(
                'result' => "error",
                'message' => '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                <strong>Error !</strong> Something went wrong please try again.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>'
            );
        }
        echo json_encode($all_data);
    }


// this is main end please dont remove this } of doown one thankyou!..................................
}