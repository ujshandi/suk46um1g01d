<?php
class pollingModel extends CI_Model 
{
	private $tbl= 'polling';
	
	function __construct()
	{
		parent::__construct();
	}
	function count_polling() 
	{   
	  	return $this->db->count_all($this->tbl);
  	}
	function get_All($limit = 5, $offset = 0) 
  	{
		if($offset==""){ $offset=0; }
  		$query =$this->db->query("select * from polling ORDER BY id_polling DESC LIMIT $offset,$limit");
		return $query->result();
  	}
	function search($tipe,$key)
	{
		$this->db->like($tipe,$key);
		return $this->db->get($this->tbl);
	}
	function getbyid($id)
	{
		$this->db->where('id_polling',$id);
		return $this->db->get($this->tbl);
	}
	function save($varData){
		$this->db->insert($this->tbl, $varData);
		return $this->db->insert_id();
	}
	function update($id, $data){
		$this->db->where('id_polling', $id);
		$this->db->update($this->tbl, $data);
	}
	function updateStatus($data)
	{
		$this->db->where('status','true');
		$this->db->update($this->tbl, $data);
	}
	function delete($id){
		$this->db->where('id_polling', $id);
		$this->db->delete($this->tbl);
	}
}
?>
