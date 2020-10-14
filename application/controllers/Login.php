<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
		parent::__construct();		
		$this->load->model('Db_models');
		$this->load->helper('form','url');
	}
	public function index()
	{
		redirect('Login/masuk');
	}
	public function login(){
		$this->load->view('edit/e_login');
	}
	function loginact(){
		$username = $this->input->post('username');
		$password = $this->input->post('pass');
		$where = array(
			'username' => $username,
			'password' => md5($password)
		);
		$cek = $this->Db_models->get_where("t_admin",$where);
		$rows = $cek->num_rows();
		if($rows > 0){
			$cek = $cek->row_array();
			$data_session = array(
				'id'		=> $cek['id'],
				'nama'		=> $cek['nama'],
				'username'	=> $cek['username'],
				'status'	=> "login"
			);
			$this->session->set_userdata($data_session);
			redirect('edit/beranda');

		}else{
			echo "Username dan password salah !";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('admin/masuk'));
	}
}