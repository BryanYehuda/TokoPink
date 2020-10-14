<?php 
class Db_models extends CI_Model{
	function get($table){
		return $this->db->get($table);
	}
	function get_order($table){
	    $this->db->order_by('id', 'desc');
		return $this->db->get($table);
	}
	function get_where($table,$where){
		return $this->db->get_where($table,$where);
	}
	function get_join($table,$data1,$data2,$select)
	{
		$this->db->select($select);
		$this->db->from($table);
		$this->db->join($data1, $data2);
		return $this->db->get();
	}
	function get_join_where($table,$data1,$data2,$where,$select)
	{
		$this->db->select($select);
		$this->db->from($table);
		$this->db->join($data1, $data2);
		$this->db->where($where);
		return $this->db->get();
	}
	function update($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function delet($table,$where){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function getProduct()
	{
		$this->db->select('t_pro.id as produk_id, t_pro.nama as nama_produk, min,max,minpem,ket,t_pro.img as img_produk, t_katpro.id as katpro_id, t_katpro.kategori, t_katpro.info, t_katpro.img as kategori_image');
		$this->db->join('t_katpro','t_katpro.id = t_pro.kat_id');
		$query = $this->db->get('t_pro');
		// var_dump($query->result());exit();
		return $query->result();
	}
}