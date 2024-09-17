<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('all_img');
		$this->load->model('Contact');
		$this->load->model('Blog_model');
		$this->load->model('Web_model');
		
	}
	public function index()
	{
		$a['blog'] = $this->Web_model->get_some_blog();
		$this->load->view('home',$a);
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
		$b['blogs'] = $this->Blog_model->getfiveblog();
		$c['catg'] = $this->Web_model->get_all_catg1();
		$new = array_merge($a,$b,$c);
		$this->load->view('blog',$new);
	}

	public function blog_details()
	{
		$iid = $this->uri->segment(2);
		$id = base64_decode($iid);
		$a['blog']=$this->Blog_model->get_s_blog($id); // get specific blog against id
		$b['blogs'] = $this->Blog_model->getfiveblog();		
		$c['catg'] = $this->Web_model->get_all_catg1();
		$new = array_merge($a,$b,$c);
		$this->load->view('blog_details',$new);
	}

	public function blog_category()
	{
		$catg = $this->uri->segment(2);
		$a['catgblog'] = $this->Blog_model->getallblogbycatg($catg);
		// $a['blog'] = $this->Blog_model->getallblog();
		$b['blogs'] = $this->Blog_model->getfiveblog();
		$c['catg'] = $this->Web_model->get_all_catg1();
		$new = array_merge($a,$b,$c);
		$this->load->view('blog_category',$new);
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
		$a['condta'] = $this->Web_model->get_all_contact();
		$this->load->view('contact',$a);
	}
}
