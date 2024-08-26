<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('all_img');
		$this->load->model('Contact');
		$this->load->model('Blog_model');
	}

	public function index()
	{
		$this->load->view('home');
	}

	public function starter()
	{
		$this->load->view('starter');
	}

	public function about()
	{
		$this->load->view('about');
	}

	public function blog()
	{
		$a['blog'] = $this->Blog_model->getallblog();
		$this->load->view('blog',$a);
	}

	public function blog_details()
	{
		$iid = $this->uri->segment(2);
		$id = base64_decode($iid);
		$a['blog']=$this->Blog_model->get_s_blog($id); // get specific blog against id
		$this->load->view('blog_details',$a);
	}

	public function service()
	{
		$this->load->view('service');
	}

	public function service_details()
	{
		$this->load->view('service_details');
	}

	public function contact()
	{
		$this->load->view('contact');
	}

}
