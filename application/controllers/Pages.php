<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
	{
		$data['page_title']  = "Home";
		$this->load->view('Layouts/header', $data);
		$this->load->view('Pages/index');
		$this->load->view('Layouts/footer');
	}

	public function about()
	{
		$data['page_title']  = "About Us";
		$this->load->view('Layouts/header', $data);
		$this->load->view('Pages/about');
		$this->load->view('Layouts/footer');
	}

	public function products()
	{
		$data['page_title']  = "Products";
		$this->load->view('Layouts/header', $data);
		$this->load->view('Pages/products');
		$this->load->view('Layouts/footer');
	}

	public function solutions()
	{
		$data['page_title']  = "Solutions";
		$this->load->view('Layouts/header', $data);
		$this->load->view('Pages/solutions');
		$this->load->view('Layouts/footer');
	}

	
	public function plans()
	{
		$data['page_title']  = "Plans";
		$this->load->view('Layouts/header', $data);
		$this->load->view('Pages/plans');
		$this->load->view('Layouts/footer');
	}
	
	public function contact()
	{
		$data['page_title']  = "Contact";
		$this->load->view('Layouts/header', $data);
		$this->load->view('Pages/contact');
		$this->load->view('Layouts/footer');
	}

	
}
