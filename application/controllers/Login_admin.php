<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_admin extends CI_Controller {
	//  cunstruct page ------------------------------------
	    public function __construct(){
                parent::__construct();
                $this->load->model('Blog_model');
        }
        // ===========================login page =======================================================
        public function log_page(){
            if($this->session->userdata('userid') == true){
                redirect(base_url('admin'));
               }else{
                $this->load->view('admin/login');
    
               }
            
        }
        public function login(){
           $this->form_validation->set_rules('username','USERNAME','required', array('required' => "Please fill your Username first...."));
           $this->form_validation->set_rules('password','PASSWORD','required', array('required' => "Please fill your password first...."));
           if($this->form_validation->run() == FALSE){
                $all_data = array(
                    'result' => "error",
                    'username' => form_error('username'),
                    'password' => form_error('password')
                ); 
           }else{
                $username =$this->input->post('username');
                // $password = base64_decode($this->input->post('password'));
                $password =$this->input->post('password');
                $a = $this->Blog_model->login($username,$password);
                if($a){
                      $session_data = array(
                                'userid' =>$a->id,
                                'username' =>$a->username,
                                'usertype' =>$a->user_type
                            );
                    $this->session->set_userdata($session_data);
                    $all_data = array(
                        'result' => "success",
                        'message' =>"you are successfully login"
                       
                    ); 
                }else{
                    $all_data = array(
                        'result' => "error",
                        'message' =>"Please check your username and password"
                       
                    );

                }
           }
           echo json_encode($all_data);
        }
        public function logout(){
            $array_items = array('userid','username');
            $this->session->unset_userdata($array_items);
            $this->session->sess_destroy();
            redirect(base_url('login'));
        }
        // ===================load user data from here================================================
        public function create(){
            $ab['table'] = $this->Blog_model->getuser();
            $this->load->view('admin/adduser',$ab);
        }
        public function add_user(){
            $user_name = $this->input->post('username');
            $password = $this->input->post('password');
            $user_type = $this->input->post('usertype');

            $this->form_validation->set_rules('username' , 'User Name', 'trim|required|is_unique[login.username]',array('required' => 'please fill Username first' , 'is_unique' => 'username already Exist'));
            $this->form_validation->set_rules('password' , 'password', 'required',array('required' => 'please fill Password first'));
            $this->form_validation->set_rules('usertype' , 'usertype', 'required',array('required' => 'Please select User Type First'));
            if($this->form_validation->run() == false){
                $all_data = array(
                    'result' => "error",
                    'username' => form_error('username'),
                    'password' => form_error('password'),
                    'usertype' => form_error('usertype')
                );
            }else{
                $data = array(
                    'username' => $user_name,
                    'password' => $password,
                    'user_type' => $user_type
                );
                $a = $this->Blog_model->add_user($data);
                if($a){
                    $all_data = array(
                        'result' => "success",
                        'message' => "You have successfully added user"
                    );
                }else{
                    $all_data = array(
                        'result' => "error",
                        'message' => "Something went Wrong Please Add Again.."
                    );
                }
            }
            echo json_encode($all_data);
        }
        public function get_user_det(){
            $id = $this->input->post('id');
            $a = $this->Blog_model->get_user_data($id);
            if($a){
                $all_data = array(
                    'result' => "success",
                    'id' => $a->id,
                    'uname' => $a->username,
                    'pass' => $a->password,
                    'u_type' => $a->user_type
                );
            }else{
                $all_data = array(
                    'result' => "success",
                    'message' => 'something went wrong please try again after some time'
                );
            }
            echo json_encode($all_data);
        }
        public function update_user(){
            $user_name = $this->input->post('username');
            $password = $this->input->post('password');
            $user_type = $this->input->post('usertype');
            $id = $this->input->post('id');




            $a = $this->Blog_model->get_user_data($id);
            if($a->username == $user_name){
               $this->form_validation->set_rules('username' , 'Username', 'required',array('required' => 'please fill username first'));
            }else{
                $this->form_validation->set_rules('username' , 'User Name', 'trim|required|is_unique[login.username]',array('required' => 'please fill Username first' , 'is_unique' => 'username already Exist'));
            
            }
            $this->form_validation->set_rules('password' , 'password', 'required',array('required' => 'please fill Password first'));
            $this->form_validation->set_rules('usertype' , 'usertype', 'required',array('required' => 'Please select User Type First'));
            if($this->form_validation->run() == false){
                $all_data = array(
                    'result' => "error",
                    'username' => form_error('username'),
                    'password' => form_error('password'),
                    'usertype' => form_error('usertype')
                );
            }else{
                $data = array(
                    'username' => $user_name,
                    'password' => $password,
                    'user_type' => $user_type
                );
                $a = $this->Blog_model->update_user($data,$id);
                if($a){
                    $all_data = array(
                        'result' => "success",
                        'message' => "You have successfully added user"
                    );
                }else{
                    $all_data = array(
                        'result' => "error",
                        'message' => "Something went Wrong Please Add Again.."
                    );
                }
            }
            echo json_encode($all_data);
        }
        public function delete_user(){
            $id = $this->input->post('id');
            $a = $this->Blog_model->delete_user($id);
            if($a){
                $all_data = array(
                    'result' => "success",
                    "message" => "user deleted successfully"
                );
            }else{
                $all_data = array(
                    'result' => "error",
                    "message" => "something went wrong please try again after sometime"
                );
            }
            echo json_encode($all_data);

        }

}