<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	//  cunstruct page ------------------------------------
	public function __construct(){
                parent::__construct();

                $this->load->model('all_img');
                $this->load->model('Contact');
                $this->load->model('Blog_model');
        }

        	// blog page -------------------------------------------
	public function blog(){
                $a['blog'] = $this->Blog_model->getallblog(); // get all blog from blog table
                $this->load->view('admin/blog',$a);
	}
        public function add_blog(){
                $this->form_validation->set_rules('title','Title Name','required', array('required' => 'Please fill title name first..........'));
                $this->form_validation->set_rules('desc','description','required');
                $this->form_validation->set_rules('sdesc','short description','required|max_length[160]', 
                                                                array('max_length' => 'Please fill under 160 latter..........'),
                                                                array('required' => 'Please fill short description first..........'));

                if($this->form_validation->run() == false){

                $error['error'] = validation_errors();
                $a['blog'] = $this->Blog_model->getallblog(); // get all blog from blog table
                $newdata = array_merge($a,$error);

                $this->load->view('admin/blog',$newdata);
                }else{
                        $config['upload_path'] = './assets/image/blog_img';
                        $config['allowed_types'] = 'gif|jpg|png';
                        $config['max_size']     = '1024'; //1024 = 1mb 
                        $config['max_width'] = '750';
                        $config['max_height'] = '750';

                        $this->load->library('upload', $config);
                        $this->upload->initialize($config);

                        if ( ! $this->upload->do_upload('blogimg'))
                        {
                                $error = array('error' => $this->upload->display_errors());
                                $a['blog'] = $this->Blog_model->getallblog(); // get all blog from blog table
                                $newdata = array_merge($a,$error);
                                
                                $this->load->view('admin/blog',$newdata);
                        }else{



                                $upload_data = $this->upload->data();
                                $file_name = $upload_data['file_name'];
                                
                                $new_img = preg_replace('/\s+/', '_', $file_name);

                                $title  =        $this->input->post('title');
                                $desc   =        $this->input->post('desc');
                                $sdesc   =       $this->input->post('sdesc');
                                $date   =        date('d-m-y');

                                $data = array(
                                        'title' => $title,
                                        'desc' => $sdesc,
                                        'dateofupdation' => $date,
                                        'img' => $new_img,
                                        'content' => $desc
                                );
                                $a = $this->Blog_model->add_blog($data);
                                if($a){
                                        $this->session->set_flashdata('blogmsg','<div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>Success!</strong> Your blog is added successfully....
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                      </div>');
                                      redirect(base_url('blog'));
                                }else{
                                        $this->session->set_flashdata('blogmsg','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>Error</strong> you have made something wrong please add again ....
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                      </div>');
                                      redirect(base_url('blog'));
                                }
                        }
                }

        }
        public function blogdetails(){
                $iid = $this->uri->segment(2);
                $id = base64_decode($iid);
                $a['blog']=$this->Blog_model->get_s_blog($id); // get specific blog against id
                $this->load->view('admin/blog_details',$a);
        }
        public function update_blog(){
                $img = $_FILES["blogimg"]["name"];
                $id = $this->input->post('id');
                $title = $this->input->post('title');
                $sdesc = $this->input->post('sdesc');
                $desc = $this->input->post('desc');

               if($img != null){
                        $config['upload_path'] = './assets/image/blog_img';
                        $config['allowed_types'] = 'gif|jpg|png';
                        $config['max_size']     = '1024'; //1024 = 1mb 
                        $config['max_width'] = '750';
                        $config['max_height'] = '750';

                        $this->load->library('upload',$config);
                        $this->upload->initialize($config);

                        if ( ! $this->upload->do_upload('blogimg'))
                        {
                                
                              $blg_data = array(
                                "result"=>"error",
                                "error"=>$this->upload->display_errors()
                              );
                        }else{
                               $name = $this->upload->data(); 
                               $img_name = $name['file_name'];
                               $new_img = preg_replace('/\s+/', '_', $img_name);
                               $data = array(
                                "img" => $new_img
                               );
                               $a = $this->Blog_model->updateblogimg($data,$id);
                               if($a){
                                        $blg_data = array(
                                                "result"=>"success",
                                                "message"=>'<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Success!</strong> Your blog is Updated successfully....
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>'
                                      );
                                
                                }else{
                                        $blg_data = array(
                                                "result"=>"success",
                                                "message"=>'<div class="alert alert-danger alert-dismissible fade show" role="alert"> <strong>Error!</strong> Something went wrong ........
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>'
                                      );
                                }     
                        }
               }else{
                $data = array(

                        "title" =>$title,
                        "desc" =>$sdesc,
                        "content" =>$desc,
                       );
                       $a = $this->Blog_model->updateblog($data,$id);
                       if($a){
                        $blg_data = array(
                                "result"=>"success",
                                "message"=>'<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Success!</strong> Your blog is Updated successfully....
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>'
                      );
                
                }else{
                        $blg_data = array(
                                "result"=>"success",
                                "message"=>'<div class="alert alert-danger alert-dismissible fade show" role="alert"> <strong>Error!</strong> Something went wrong ........
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>'
                      );
                }    
               }
               echo json_encode($blg_data);
        }
        public function deleteblog(){
                $id = $this->input->post('id');
                $a = $this->Blog_model->del_blog_det($id);
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
}

?>