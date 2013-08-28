<?php
class panduanModel extends CI_Model 
{
	private $tbl= 'panduan';
	
	function __construct()
	{
		parent::__construct();
	}
	function count_panduan() 
	{   
	  	return $this->db->count_all($this->tbl);
  	}
	function get_All($limit = 10, $offset = 0) 
  	{
		if($offset==""){ $offset=0; }
  		$query =$this->db->query("select * from panduan ORDER BY id_panduan DESC LIMIT $offset,$limit");
		return $query->result();
  	}
	function getProgramBaru()
	{
		$query =$this->db->query("select * from panduan ORDER BY id_panduan DESC LIMIT 3");
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
		$this->db->where('id_panduan',$id);
		return $this->db->get($this->tbl);
	}
	function save($varData){
		$this->db->insert($this->tbl, $varData);
		return $this->db->insert_id();
	}
	function update($id, $data){
		$this->db->where('id_panduan', $id);
		$this->db->update($this->tbl, $data);
	}
	function delete($id){
		$this->db->where('id_panduan', $id);
		$this->db->delete($this->tbl);
	}
}
?>
