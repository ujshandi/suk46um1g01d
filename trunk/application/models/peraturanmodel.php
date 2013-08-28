<?php
class peraturanModel extends CI_Model 
{
	private $tbl= 'peraturan';
	
	function __construct()
	{
		parent::__construct();
	}
	function count_peraturan() 
	{   
	  	return $this->db->count_all($this->tbl);
  	}
	function get_All($limit, $offset = 0) 
  	{
		if($offset==""){ $offset=0; }
  		$query =$this->db->query("select * from peraturan ORDER BY id_peraturan DESC LIMIT $offset,$limit");
		return $query->result();
  	}
	function getspesifik($kat,$tahun)
	{
		$this->db->where('kategori',$kat);
		$this->db->where('tahun',$tahun);
		return $this->db->get($this->tbl);
	}
	function getTahunAda($kat)
	{
		$query =$this->db->query("select DISTINCT(tahun) from peraturan WHERE kategori='$kat' ");
		return $query->result();
	}
	function search($tipe,$tipe2,$key)
	{
		$this->db->like($tipe,$key);
		$this->db->or_like($tipe2,$key);
		return $this->db->get($this->tbl);
	}
	function getbyid($id)
	{
		$this->db->where('id_peraturan',$id);
		return $this->db->get($this->tbl);
	}
	function save($varData){
		$this->db->insert($this->tbl, $varData);
		return $this->db->insert_id();
	}
	function update($id, $data){
		$this->db->where('id_peraturan', $id);
		$this->db->update($this->tbl, $data);
	}
	function delete($id){
		$this->db->where('id_peraturan', $id);
		$this->db->delete($this->tbl);
	}
}
?>
