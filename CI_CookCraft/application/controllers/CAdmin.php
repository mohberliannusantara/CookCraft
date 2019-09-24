<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CAdmin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		// Load custom helper applications/helpers/MY_helper.php
		// $this->load->helper('MY');
		$this->load->model('user_model');
	}

	public function index()
	{
		
		$this->load->view('admin/Admin');
		
		$this->load->view('admin/sidebar/User');
		$this->load->view('admin/sidebar/Resep');
		$this->load->view('admin/sidebar/Kategori');
		
		$this->load->view('admin/Footer');
	}

	//Fungsi Menampilkan User
	public function getUser()
	{

		$data= $this->user_model->get_all_user();
		echo json_encode($data);

	}
	// Fungsi Membuat User
	public function createUser()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$nama = $this->input->post('nama');
		$role = $this->input->post('role');
		
		$result = $this->user_model->create_user($username,$password,$nama,$role);
		echo json_encode($result);
	}
	// Membuat fungsi UPDATE
	public function updateUser()
	{	 

		// $username = "asd";
		// $password = "1";
		// $nama = "1";
		// $role = "1";
		$username = $this->input->post('username2');
		$password = $this->input->post('password2');
		$nama = $this->input->post('mail2');
		$role = $this->input->post('role2');
		
		$result = $this->user_model->update_user($username,$password,$nama,$role);
		if ($result) {
			echo json_encode("suc");
		}else{
			echo json_encode("Gagal");
		}
	}

	public function deleteUser()
	{
		// $id = "33";
		$id = $this->input->post('id');

		$data = $this->user_model->delete_user($id);
			echo json_encode($data);
		
	}
	
}
