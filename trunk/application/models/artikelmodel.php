<?php
class artikelModel extends CI_Model 
{
	private $tbl= 'artikel';
	
	function __construct()
	{
		parent::__construct();
	}
	function count_artikel() 
	{   
	  	return $this->db->count_all($this->tbl);
  	}
	function get_All($limit = 10, $offset = 0) 
  	{
		if($offset==""){ $offset=0; }
  		$query =$this->db->query("select * from artikel ORDER BY id_artikel DESC LIMIT $offset,$limit");
		return $query->result();
  	}
	function search($tipe,$key)
	{
		$this->db->like($tipe,$key);
		return $this->db->get($this->tbl);
	}
	function getbyid($id)
	{
		$this->db->where('id_artikel',$id);
		return $this->db->get($this->tbl);
	}
	function save($varData){
		$this->db->insert($this->tbl, $varData);
		return $this->db->insert_id();
	}
	function update($id, $data){
		$this->db->where('id_artikel', $id);
		$this->db->update($this->tbl, $data);
	}
	function delete($id){
		$this->db->where('id_artikel', $id);
		$this->db->delete($this->tbl);
	}
}
?>
