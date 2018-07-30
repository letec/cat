<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('index', array('func' => __FUNCTION__));
	}

	public function website()
	{
		$this->load->view('website', array('func' => __FUNCTION__));
	}

	public function contact()
	{
		$this->load->view('contact', array('func' => __FUNCTION__));
	}

	public function product()
	{
		$this->load->view('product', array('func' => __FUNCTION__));
	}
}
