<?php
class linkModel extends CI_Model 
{
	private $tbl= 'linkterkait';
	
	function __construct()
	{
		parent::__construct();
	}
	function count_link($jenis='terkait') 
	{   
		$this->db->where('jenis',$jenis);
		$this->db->from($this->tbl);
	  	return $this->db->count_all();
  	}
	function get_All($limit = 10, $offset = 0,$jenis='terkait') 
  	{
		if($offset==""){ $offset=0; }
  		$query =$this->db->query("select * from linkterkait where jenis ='$jenis' ORDER BY id_link DESC LIMIT $offset,$limit");
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
		$this->db->where('id_link',$id);
		return $this->db->get($this->tbl);
	}
	function save($varData){
		$this->db->insert($this->tbl, $varData);
		return $this->db->insert_id();
	}
	function update($id, $data){
		$this->db->where('id_link', $id);
		$this->db->update($this->tbl, $data);
	}
	function delete($id){
		$this->db->where('id_link', $id);
		$this->db->delete($this->tbl);
	}
}
?>
