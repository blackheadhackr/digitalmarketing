<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
		parent::__construct();

		$this->load->model('all_img');
		$this->load->model('Contact');
		$this->load->model('Blog_model');
		$this->load->model('Web_model');
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function load_catg(){
		$a['catg'] = $this->Web_model->get_all_catg();
		$this->load->view('admin/add_catg',$a);
	}
	public function add_catg(){
		$this->form_validation->set_rules('catg','Catogery','trim|required|is_unique[catg.name]|min_length[5]',
			array('is_unique'=> 'Already exist please try another.',
				  'required' => 'please fill this feild',
				  'min_length' => 'please fill minimum 5 character'));
		if ($this->form_validation->run() == FALSE)
		{
			$all_data = array(
				'result' => 'error',
				'catg' => form_error('catg')
			);
		}
		else
		{
				$data = array('name' => $this->input->post('catg'));
				$a = $this->Web_model->add_catg($data);
				if($a){
					$all_data = array('result' => 'success', 'msg' => "your Category is added successfylly!");
				}else{
					$all_data = array('result' => 'error', 'msg' => "we are working on this...");
				}
		}

		echo json_encode($all_data);
	}
	public function getsinglecatg(){
		$id = $this->input->post('id');
		$a = $this->Web_model->getsingle($id);
		if($a){
			$all_data = array(
				'result' => "success",
				'id'=> $a->id,
				'name' => $a->name
			);
		}else{
			$all_data = array(
				'result' => "error",
				'msg' => 'sorry we are unable to get result'
			);
		}
		echo json_encode($all_data);
	}
	public function update_catg(){
		$this->form_validation->set_rules('category','Catogery','trim|required|min_length[5]',
			array('required' => 'please fill this feild',
				  'min_length' => 'please fill minimum 5 character'));
		if ($this->form_validation->run() == FALSE)
		{
			$all_data = array(
				'result' => 'error',
				'catg' => form_error('category')
			);
		}
		else
		{
			$name = $this->input->post('category');
			$id = $this->input->post('catid');
			$a = $this->Web_model->up_catg($name,$id);
				if($a){
					$all_data = array('result' => 'success', 'msg' => "your Category is updated successfylly!");
				}else{
					$all_data = array('result' => 'error', 'msg' => "please make some change first...");
				}
		}

		echo json_encode($all_data);
	}
}
