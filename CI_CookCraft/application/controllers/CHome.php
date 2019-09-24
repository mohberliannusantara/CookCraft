<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CHome extends CI_Controller {

	public function index()
	{
		$this->load->view('template/Header');
		$this->load->view('Home');
		$this->load->view('template/Footer');
	}
	public function admin()
	{
		$this->load->view('admin/Admin');
	}
}
