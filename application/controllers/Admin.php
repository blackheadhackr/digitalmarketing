<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	//  cunstruct page ------------------------------------
	public function __construct(){
        parent::__construct();

        $this->load->model('all_img');
        $this->load->model('Contact');
		$this->load->model('Blog_model');
		$this->load->model('Join_model');
   }
	   
	// dash bord-----------------------------------------
	public function index(){
		$a['joiner'] = $this->Join_model->get_all_joiner_on_admin();
		$a['blog'] = $this->Blog_model->getallblog();
		$a['web_data'] = $this->Contact->get_web_contact_data();
		$a['table'] = $this->Blog_model->getuser();
		$a['gallery'] = $this->all_img->get_gellery();
		$this->load->view('admin/first',$a);
	}
	// update banner ---------------------------------------
	public function loadbanner(){
		$a['banner'] = $this->all_img->get_bnr();
		$this->load->view('admin/banner',$a);
	}
	// contect page  ---------------------------------------
	public function loadcontect(){
		$a['cont']= $this->Contact->alcondata();
		$this->load->view('admin/contectdetails',$a);
	}
	
	
	// contect insert ----------------------------------------
	public function contectdetadd(){
		$id = $this->input->post('id');
		$this->form_validation->set_rules('Address','Address','required');
		$this->form_validation->set_rules('Phone','Mobile phone','trim|required|numeric|min_length[10]|max_length[12]');
		$this->form_validation->set_rules('Whatsapp','Whatsapp number','trim|required|numeric|min_length[10]|max_length[12]');
		$this->form_validation->set_rules('Mail','Gmail','trim|required|valid_email');
		$this->form_validation->set_message('min_length','Please enter valid Mobile number...');
		$this->form_validation->set_message('max_length','Please enter valid Mobile number...');
		if($this->form_validation->run() == false){
			$us = array(
				"result" => "error",
				"address" => form_error('Address'),
				"Phone" => form_error('Phone'),
				"Whatsapp" => form_error('Whatsapp'),
				"Mail" => form_error('Mail')
			);
			
		}else{
			$data = array(
				'address' => $this->input->post('Address'),
				'whatsapp' => $this->input->post('Whatsapp'),
				'mail' => $this->input->post('Mail'),
				'phone' => $this->input->post('Phone')
			);
			$a = $this->Contact->addcontect($data,$id);
			if($a){
				$us = array(
					"result" => "success",
					"message" => '<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong>ThankYou !</strong> We got your Data.......
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> </div>',
				);
			}else{
				echo "sorry";
			}
		}
		echo json_encode($us);
	}
	// contect update ----------------------------------------
	public function getcont(){
		$id = $this->input->post('id');
		$a = $this->Contact->getdata($id);
		if($a){
			$data = array(
				"result" => "success",
				"id" => $a->id,
				"address" => $a->address,
				"Phone" => $a->phone,
				"Whatsapp" => $a->whatsapp,
				"Mail" => $a->mail
			);
		}else{
			$data = array(
				"result" => "error",
				"message" => "something went wrong"
			);
		}
		echo json_encode($data);
	}

	// web contact data ----------------------------------------
	public function get_web_contact_data(){
		
	}

}
