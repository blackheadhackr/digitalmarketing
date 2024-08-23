<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Joiner extends CI_Controller {
	//  cunstruct page ------------------------------------
	    public function __construct(){
                parent::__construct();
                $this->load->model('Join_model');
        }
        public function our_joiner(){
            $a['joiner'] = $this->Join_model->get_all_joiner_on_admin();
            $this->load->view('admin/our_joiner' , $a);
        }
        /**
         * web data insert ========================================
        */
        public function join_data_insert(){
            $firstName = $this->input->post('firstName');
            $lastName = $this->input->post('lastName');
            $email = $this->input->post('email');
            $phone = $this->input->post('phone');
            $date = $this->input->post('date');
            $Gender = $this->input->post('Gender');
            $address1 = $this->input->post('address1');
            $address2 = $this->input->post('address2');
            $city = $this->input->post('city');
            $state = $this->input->post('state');
            $zip = $this->input->post('zip');
            $country = $this->input->post('country');
            $religion = $this->input->post('religion');

            $this->form_validation->set_rules('firstName' , 'First Name' , 'required');
            $this->form_validation->set_rules('email' , 'email' , 'required|valid_email|is_unique[join_us.email]',array('is_unique' => 'Email-id is already register, Please try another one '));
            $this->form_validation->set_rules('phone','Phone number','required|numeric|min_length[10]|max_length[10]',array('min_length' => 'Please fill currect Phone Number 10 digits','max_length' => 'Please fill currect Phone Number'));
            $this->form_validation->set_rules('date' , 'date' , 'required');
            $this->form_validation->set_rules('Gender' , 'Gender' , 'required');
            $this->form_validation->set_rules('address1' , 'address1' , 'required');
            $this->form_validation->set_rules('address2' , 'address2' , 'required');
            $this->form_validation->set_rules('city' , 'city' , 'required');
            $this->form_validation->set_rules('state' , 'state' , 'required');
            $this->form_validation->set_rules('zip' , 'zip' , 'required|numeric');
            $this->form_validation->set_rules('country' , 'country' , 'required');
            $this->form_validation->set_rules('religion' , 'religion' , 'required');

            if($this->form_validation->run() == false){
                $all_data = array(
                    'result' => "error",
                    'name' => form_error('firstName'),
                    'email' => form_error('email'),
                    'phone' => form_error('phone'),
                    'date' => form_error('date'),
                    'Gender' => form_error('Gender'),
                    'address1' => form_error('address1'),
                    'address2' => form_error('address2'),
                    'city' => form_error('city'),
                    'state' => form_error('state'),
                    'zip' => form_error('zip'),
                    'country' => form_error('country'),
                    'religion' => form_error('religion')
                );
            }else{
                $config['upload_path'] = './assets/image/join_file';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']     = '1024'; // 1024 = 1MB
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ( ! $this->upload->do_upload('idproof'))
                {
                        $all_data = array(
                            'result' => 'error',
                            'photo' => $this->upload->display_errors()
                        );
                        
                }
                else
                {
                        $img = $this->upload->data();
                        $img_name = $img['file_name'];
                        $newfile_name = preg_replace('/\s+/', '_', $img_name);

                        $data = array(
                            'fname' => $firstName,
                            'lname' => $lastName,
                            'email' => $email,
                            'phone' => $phone,
                            'DOB' => $date,
                            'gender' => $Gender,
                            'address' => $address1,
                            'address1' => $address2,
                            'city' => $city,
                            'state' => $state,
                            'zipcode' => $zip,
                            'country' => $country,
                            'idproof' => $newfile_name,
                            'religion' => $religion
                        );
                       $a = $this->Join_model->join_insert($data);
                       if($a){
                            $all_data = array(
                                'result' => 'result',
                                'message' => '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Success!</strong> We got your request , Our team will connect you soon......
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>'
                            );
                       }else{
                            $all_data = array(
                                'result' => 'result',
                                'message' => '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Error!</strong> sorry something went wrong please try again after some time......
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>'
                            );
                       }
                        
                }
            }
         echo json_encode($all_data);
        }
}