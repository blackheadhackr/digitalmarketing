<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$this->load->view('blog');
	}

	public function blog_details()
	{
		$this->load->view('blog_details');
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
