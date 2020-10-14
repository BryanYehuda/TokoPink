<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {

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
		if($this->session->userdata('status') != "login"){
			redirect('admin/masuk');
		}
	}
	function index(){
		redirect('edit/beranda');
	}
	function edit_adm(){
		$data['page']	=	$this->load->view('edit/v_edit_adm', '', TRUE);
		$this->load->view('edit/e_index',$data);
	}
	function save_edit_adm(){
		$id			= $this->input->post('id');
		$nama		= $this->input->post('nama');
		$password 	= $this->input->post('pass');
		$data = array(
			'nama'		=> $nama,
			'password'	=> md5($password)
		);

		$where = array(
			'id' => $id
		);

		$this->Db_models->update($where,$data,'t_admin');
		redirect('edit/beranda');
	}


	function upload($old,$nama){
		$config['upload_path']          = './img/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']			= $nama;
		$config['overwrite']			= true;
		// $config['max_width']            = 120;
		// $config['max_height']           = 120;

		$this->load->library('upload', $config);
		if (!empty($_FILES["img"]["name"])) {
			$this->upload->do_upload('img');
			$this->upload->data();
			return $this->upload->data("file_name","file_ext");
		} else {
			return $old;
		}
	}
	function upload_testi($old,$id){
		$config['upload_path']          = './img/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']			= $id;
		$config['overwrite']			= true;
		// $config['max_width']            = 120;
		// $config['max_height']           = 120;

		$this->load->library('upload', $config);
		if (!empty($_FILES["img"]["name"])) {
			$this->upload->do_upload('img');
			$this->upload->data();
			return $this->upload->data("file_name","file_ext");
		} else {
			return $old;
		}
	}
	function upload2($nama){
		$config['upload_path']          = './img/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']			= $nama;
		$config['overwrite']			= true;
		// $config['max_width']            = 120;
		// $config['max_height']           = 120;

		$this->load->library('upload', $config);
		$this->upload->do_upload('img');
		$this->upload->data();
		return $this->upload->data("file_name","file_ext");
	}
	function upload2testi($id){
		$config['upload_path']          = './img/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']			= $id;
		$config['overwrite']			= true;
		// $config['max_width']            = 120;
		// $config['max_height']           = 120;

		$this->load->library('upload', $config);
		$this->upload->do_upload('img');
		$this->upload->data();
		return $this->upload->data("file_name","file_ext");
	}

	public function home(){
		$get['content1']=	$this->Db_models->get_where('t_konten1',array('nama' => 'konten1'));
		$get['sekilas']	=	$this->Db_models->get_where('t_konten1',array('nama' => 'sekilas'));
		$get['misi']	=	$this->Db_models->get_where('t_konten1',array('nama' => 'misi'));
		$get['why']		=	$this->Db_models->get_where('t_konten1',array('nama' => 'why'));
		$get['about']	=	$this->Db_models->get_where('t_konten1',array('nama' => 'tentang'));
		$get['about2']	=	$this->Db_models->get_where('t_konten1',array('nama' => 'tentang2'));
		$get['contact']	=	$this->Db_models->get_where('t_konten1',array('nama' => 'kontak'));
		$get['bis']		=	$this->Db_models->get_where('t_konten1',array('nama' => 'bisnis'));
		$get['alamat']	=	$this->Db_models->get('t_ad');
		$get['top']		=	$this->Db_models->get('t_ic');
		$get['testi']	=	$this->Db_models->get('t_testi');
		$get['kat']		=	$this->Db_models->get('t_katpro');
		$get['list']	=	$this->Db_models->get('t_kontak');
		$get['jam']		=	$this->Db_models->get('t_jadwal');
		$get['bg']		=	$this->Db_models->get('t_bg');
		$get['pro']		=	$this->Db_models->get_join('t_pro','t_katpro','t_katpro.id = t_pro.kat_id','t_katpro.kategori,t_pro.id,t_pro.nama,t_pro.min,t_pro.max,t_pro.bahan,t_pro.minpem,t_pro.ket,t_pro.img,t_pro.size,t_pro.size,t_pro.warna,t_pro.partai,t_pro.grosir,t_pro.ecer,t_pro.resell,t_pro.berat,t_pro.kel');
		$data['page']	=	$this->load->view('edit/e_menu', $get, TRUE);
		$this->load->view('edit/e_index',$data);
	}

	function add1($table,$nama){
		$isi['nama']	=	$nama;
		$isi['table']	=	$table;
		$data['page']	=	$this->load->view('edit/v_add1', $isi, TRUE);
		$this->load->view('edit/e_index',$data);
	}
	function save_add1(){
		$table	=	$this->input->post('table');
		$nama	=	$this->input->post('nama');
		$judul	=	$this->input->post('judul');
		$konten	=	$this->input->post('konten');

		$data = array(
			'nama' => $nama,
			'judul' => $judul,
			'konten' => $konten
		);

		$this->Db_models->input_data($data,$table);
		redirect('edit/beranda');
	}
	function add2($table){
		$isi['table']	=	$table;
		$data['page']	=	$this->load->view('edit/v_add2', $isi, TRUE);
		$this->load->view('edit/e_index',$data);
	}
	function save_img1(){
		$table	=	$this->input->post('table');
		$judul	=	$this->input->post('judul');
		$konten	=	$this->input->post('konten');
		$nama	=	$judul;
		$img	=	$this->upload2($nama);

		$data = array(
			'judul' => $judul,
			'konten' => $konten,
			'img' => $img
		);

		$this->Db_models->input_data($data,$table);
		redirect('edit/beranda');
	}
	function add3($table){
		$isi['table']	=	$table;
		$data['page']	=	$this->load->view('edit/v_add3', $isi, TRUE);
		$this->load->view('edit/e_index',$data);
	}
	function save_img2(){
		$table	=	$this->input->post('table');
		$judul	=	$this->input->post('kategori');
		$konten	=	$this->input->post('konten');
		$nama	=	$judul;
		$img	=	$this->upload2($nama);

		$data = array(
			'kategori' => $judul,
			'info' => $konten,
			'img' => $img
		);

		$this->Db_models->input_data($data,$table);
		redirect('edit/beranda');
	}
	function add4($table){
		$isi['table']	=	$table;
		$isi['kat']		=	$this->Db_models->get('t_katpro');
		$data['page']	=	$this->load->view('edit/v_add4', $isi, TRUE);
		$this->load->view('edit/e_index',$data);
	}
	function save_img3(){
		$table	=	$this->input->post('table');
		$nama	=	$this->input->post('nama');
		$kat	=	$this->input->post('kategori');
		$bh		=	$this->input->post('bahan');
		$hmin	=	$this->input->post('hmin');
		$hmax	=	$this->input->post('hmax');
		$minp	=	$this->input->post('minpem');
		$ket	=	$this->input->post('ket');
		$kel	=	$this->input->post('kel');
		$hpar	=	$this->input->post('hpar');
		$hsir	=	$this->input->post('hsir');
		$hcer	=	$this->input->post('hcer');
		$hsel	=	$this->input->post('hsel');
		$uk		=	$this->input->post('ukuran');
		$br		=	$this->input->post('berat');
		$wn		=	$this->input->post('warna');
		$img	=	$this->upload2($nama);

		$data = array(
			'nama' => $nama,
			'kat_id' => $kat,
			'bahan' => $bh,
			'min' => $hmin,
			'max' => $hmax,
			'minpem' => $minp,
			'ket' => $ket,
			'kel' => $kel,
			'img' => $img,
			'size' => $uk,
			'berat' => $br,
			'warna' => $wn,
			'partai' => $hpar,
			'grosir' => $hsir,
			'ecer' => $hcer,
			'resell' => $hsel
		);


		$this->Db_models->input_data($data,$table);
		redirect('edit/beranda');
	}
	function add5($table){
		$isi['table']	=	$table;
		$data['page']	=	$this->load->view('edit/v_add5', $isi, TRUE);
		$this->load->view('edit/e_index',$data);
	}
	function save_img4(){
		$table	=	$this->input->post('table');
		$query  =   $this->Db_models->get_order('t_testi');
		$result =   $query->row_array();
		if($query->num_rows() == 0){
		    $id     =   1;
		} else {
		    $id     =   $result[id] + 1;
		}
		$img	=	$this->upload2testi($id);

		$data = array(
			'img' => $img
		);

		$this->Db_models->input_data($data,$table);
		redirect('edit/beranda');
	}

	function edit($id,$table){
		$where = array('id' => $id);
		$get['isi'] 	=	$this->Db_models->get_where($table,$where);
		$get['table']	=	$table;
		$data['page']	=	$this->load->view('edit/v_edit1', $get, TRUE);
		$this->load->view('edit/e_index',$data);
	}
	function save_edit(){
		$table	=	$this->input->post('table');
		$id		=	$this->input->post('id');
		$judul	=	$this->input->post('judul');
		$konten	=	$this->input->post('konten');

		$data = array(
			'judul' => $judul,
			'konten' => $konten
		);

		$where = array(
			'id' => $id
		);

		$this->Db_models->update($where,$data,$table);
		redirect('edit/beranda');
	}
	function edit_img1($id,$table){
		$where = array('id' => $id);
		$get['isi'] 	=	$this->Db_models->get_where($table,$where);
		$get['table']	=	$table;
		$data['page']	=	$this->load->view('edit/v_edit2', $get, TRUE);
		$this->load->view('edit/e_index',$data);
	}
	function save_edit_img1(){		
		$judul	=	$this->input->post('judul');
		$nama	=	$judul;
		$img	=	$this->upload($old,$nama);
		$table	=	$this->input->post('table');
		$id		=	$this->input->post('id');
		$konten	=	$this->input->post('konten');
		$old	=	$this->input->post('old');

		$data = array(
			'judul' => $judul,
			'konten' => $konten,
			'img' => $img
		);

		$where = array(
			'id' => $id
		);

		$this->Db_models->update($where,$data,$table);
		redirect('edit/beranda');
	}
	function edit_img2($id,$table){
		$where = array('id' => $id);
		$get['isi'] 	=	$this->Db_models->get_where($table,$where);
		$get['table']	=	$table;
		$data['page']	=	$this->load->view('edit/v_edit3', $get, TRUE);
		$this->load->view('edit/e_index',$data);
	}
	function save_edit_img2(){
		$table	=	$this->input->post('table');
		$id		=	$this->input->post('id');
		$judul	=	$this->input->post('kategori');
		$konten	=	$this->input->post('konten');
		$nama	=	$judul;
		$img	=	$this->upload($old,$nama);

		$data = array(
			'kategori' => $judul,
			'info' => $konten,
			'img' => $img
		);

		$where = array(
			'id' => $id
		);

		$this->Db_models->update($where,$data,$table);
		redirect('edit/beranda');
	}
	function edit_img3($id,$table){
		$where = array('t_pro.id' => $id);
		$get['isi']		=	$this->Db_models->get_join_where('t_pro','t_katpro','t_katpro.id = t_pro.kat_id',$where,'t_katpro.kategori,t_pro.id,t_pro.kat_id,t_pro.nama,t_pro.min,t_pro.max,t_pro.bahan,t_pro.minpem,t_pro.ket,t_pro.img,t_pro.size,t_pro.size,t_pro.warna,t_pro.partai,t_pro.grosir,t_pro.ecer,t_pro.resell,t_pro.berat,t_pro.kel');
		$get['katpro'] 	=	$this->Db_models->get('t_katpro');
		$get['table']	=	$table;
		$data['page']	=	$this->load->view('edit/v_edit4', $get, TRUE);
		$this->load->view('edit/e_index',$data);
	}
	function save_edit_img3(){
		$old	=	$this->input->post('old');
		$table	=	$this->input->post('table');
		$id		=	$this->input->post('id');
		$nama	=	$this->input->post('nama');
		$kat	=	$this->input->post('kategori');
		$bh		=	$this->input->post('bahan');
		$hmin	=	$this->input->post('hmin');
		$hmax	=	$this->input->post('hmax');
		$minp	=	$this->input->post('minpem');
		$ket	=	$this->input->post('ket');
		$kel	=	$this->input->post('kel');
		$hpar	=	$this->input->post('hpar');
		$hsir	=	$this->input->post('hsir');
		$hcer	=	$this->input->post('hcer');
		$hsel	=	$this->input->post('hsel');
		$uk		=	$this->input->post('ukuran');
		$br		=	$this->input->post('berat');
		$wn		=	$this->input->post('warna');
		$img	=	$this->upload($old,$nama);

		$data = array(
			'nama' => $nama,
			'kat_id' => $kat,
			'bahan' => $bh,
			'min' => $hmin,
			'max' => $hmax,
			'minpem' => $minp,
			'ket' => $ket,
			'kel' => $kel,
			'img' => $img,
			'size' => $uk,
			'berat' => $br,
			'warna' => $wn,
			'partai' => $hpar,
			'grosir' => $hsir,
			'ecer' => $hcer,
			'resell' => $hsel
		);

		$where = array(
			'id' => $id
		);

		$this->Db_models->update($where,$data,$table);
		redirect('edit/beranda');
	}
	function edit_img4($id,$table){
		$where = array('id' => $id);
		$get['isi']		=	$this->Db_models->get_where($table,$where);
		$get['table']	=	$table;
		$data['page']	=	$this->load->view('edit/v_edit5', $get, TRUE);
		$this->load->view('edit/e_index',$data);
	}
	function save_edit_img4(){
		$old	=	$this->input->post('old');
		$table	=	$this->input->post('table');
		$id		=	$this->input->post('id');
		$img	=	$this->upload_testi($old,$id);

		$data = array(
			'img' => $img
		);

		$where = array(
			'id' => $id
		);

		$this->Db_models->update($where,$data,$table);
		redirect('edit/beranda');
	}
	function edit_time($id,$table){
		$where = array('id' => $id);
		$get['isi']		=	$this->Db_models->get_where($table,$where);
		$get['table']	=	$table;
		$data['page']	=	$this->load->view('edit/v_edit6', $get, TRUE);
		$this->load->view('edit/e_index',$data);
	}
	function save_edit_time(){
		$table	=	$this->input->post('table');
		$id		=	$this->input->post('id');
		$hari	=	$this->input->post('hari');
		$toko	=	$this->input->post('toko');

		if ($toko != 'buka') {
			$buka	=	'tutup';
			$tutup	=	'tutup';
		} else {
			$buka	=	$this->input->post('buka');
			$tutup	=	$this->input->post('tutup');
		}

		$data = array(
			'hari' => $hari,
			'jbuka' => $buka,
			'jtutup' => $tutup
		);

		$where = array(
			'id' => $id
		);

		$this->Db_models->update($where,$data,$table);
		redirect('edit/beranda');
	}
	function edit_imgbg($id,$table){
		$where = array('nama' => $id);
		$get['isi'] 	=	$this->Db_models->get_where($table,$where);
		$get['table']	=	$table;
		$data['page']	=	$this->load->view('edit/v_edit7', $get, TRUE);
		$this->load->view('edit/e_index',$data);
	}
	function save_edit_imgbg(){
		$old	=	$this->input->post('old');
		$table	=	$this->input->post('table');
		$nama	=	$this->input->post('nama');
		$img	=	$this->upload($old,$nama);

		$data = array(
			'img' => $img
		);

		$where = array(
			'nama' => $nama
		);

		$this->Db_models->update($where,$data,$table);
		redirect('edit/beranda');
	}
	function delete($id,$table){
		$where	= array('id' => $id);
		$this->Db_models->delet($table, $where);
		redirect('edit/beranda');
	}
	function delete_img($id,$table){
		$where	= array('id' => $id);
		$get	= $this->Db_models->get_where($table,$where)->result();
		unlink('./img/'.$get->img);
		$this->Db_models->delet($table, $where);
		redirect('edit/beranda');
	}
}
