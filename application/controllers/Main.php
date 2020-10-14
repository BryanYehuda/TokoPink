<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

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
		redirect('beranda');
	}
	public function home(){
		$get['content1']=	$this->Db_models->get_where('t_konten1',array('nama' => 'konten1'));
		// $get['sekilas']	=	$this->Db_models->get_where('t_konten1',array('nama' => 'sekilas'));
		// $get['misi']	=	$this->Db_models->get_where('t_konten1',array('nama' => 'misi'));
		// $get['why']		=	$this->Db_models->get_where('t_konten1',array('nama' => 'why'));
		// $get['about']	=	$this->Db_models->get_where('t_konten1',array('nama' => 'tentang'));
		// $get['top']		=	$this->Db_models->get('t_ic');
		// $get['alamat']	=	$this->Db_models->get('t_ad');
		// $get['ket']		=	$this->Db_models->get_where('t_konten1',array('nama' => 'produk'));
		// $get['kat']		=	$this->Db_models->get('t_katpro');
		$get['ket']		=	$this->Db_models->get_where('t_konten1',array('nama' => 'produk'));
		$get['kat']		=	$this->Db_models->get('t_katpro');
		$get['produk']	= 	$this->Db_models->get('t_pro');
		$get['testi']	=	$this->Db_models->get('t_testi');
		$get['product']	= 	$this->Db_models->getProduct();
		$get['testi']	=	$this->Db_models->get('t_testi');
		$data['page']	=	$this->load->view('home', $get, TRUE);
		$this->load->view('index',$data);
	}
	public function about(){
		$get['misi']	=	$this->Db_models->get_where('t_konten1',array('nama' => 'misi'));
		$get['why']		=	$this->Db_models->get_where('t_konten1',array('nama' => 'why'));
		$get['about']	=	$this->Db_models->get_where('t_konten1',array('nama' => 'tentang'));
		$get['about2']	=	$this->Db_models->get_where('t_konten1',array('nama' => 'tentang2'));
		$get['sekilas']	=	$this->Db_models->get_where('t_konten1',array('nama' => 'sekilas'));
		$get['alamat']	=	$this->Db_models->get('t_ad');
		$get['top']		=	$this->Db_models->get('t_ic');
		$get['testi']	=	$this->Db_models->get('t_testi');
		$data['page']	=	$this->load->view('about', $get, TRUE);
		$this->load->view('index',$data);
	}
	public function services(){
		$get['ket']		=	$this->Db_models->get_where('t_konten1',array('nama' => 'produk'));
		$get['kat']		=	$this->Db_models->get('t_katpro');
		$get['produk']	= 	$this->Db_models->get('t_pro');
		$get['testi']	=	$this->Db_models->get('t_testi');
		$data['page']	=	$this->load->view('services', $get, TRUE);
		$this->load->view('index',$data);
	}
	public function location(){
		$get['alamat']	=	$this->Db_models->get('t_ad');
		$get['testi']	=	$this->Db_models->get('t_testi');
		$data['page']	=	$this->load->view('location', $get, TRUE);
		$this->load->view('index',$data);
	}
	public function appointment(){
	    $get['bis']		=	$this->Db_models->get_where('t_konten1',array('nama' => 'bisnis'));
		$get['jadwal']	=	$this->Db_models->get('t_jadwal');
		$get['testi']	=	$this->Db_models->get('t_testi');
		$get['kontak']	=	$this->Db_models->get('t_kontak')->result();
		$data['page']	=	$this->load->view('appointment', $get, TRUE);
		$this->load->view('index',$data);
	}
	public function contact(){
		$get['contact']	=	$this->Db_models->get_where('t_konten1',array('nama' => 'kontak'));
		$get['list']	=	$this->Db_models->get('t_kontak');
		$data['page']	=	$this->load->view('contact', $get, TRUE);
		$this->load->view('index',$data);
	}
	public function product($id){
		$get['kat']	=	$this->Db_models->get_where('t_katpro',array('id' => $id));
		// $get['pro']	=	$this->Db_models->get_where('t_pro',array('kat_id' => $id));
		$get['pro']	=	$this->Db_models->get_where('t_pro',array('id' => $id));
		if ($get['pro']->num_rows() < 1) {
			$this->load->view('error');
		} else {
			$this->load->view('katpro', $get);
		}
	}
	public function error(){
		$this->load->view('error');
	}
}
