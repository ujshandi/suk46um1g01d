<?php
class downloadModel extends CI_Model 
{
	private $tbl= 'download';
	
	function __construct()
	{
		parent::__construct();
	}
	function count_download() 
	{   
	  	return $this->db->count_all($this->tbl);
  	}
	function get_All($limit = 10, $offset = 0) 
  	{
		if($offset==""){ $offset=0; }
  		$query =$this->db->query("select * from download ORDER BY id_download DESC LIMIT $offset,$limit");
		return $query->result();
  	}
	function search($tipe,$key)
	{
		$this->db->like($tipe,$key);
		return $this->db->get($this->tbl);
	}
	function getbyid($id)
	{
		$this->db->where('id_download',$id);
		return $this->db->get($this->tbl);
	}
	function save($varData){
		$this->db->insert($this->tbl, $varData);
		return $this->db->insert_id();
	}
	function update($id, $data){
		$this->db->where('id_download', $id);
		$this->db->update($this->tbl, $data);
	}
	function delete($id){
		$this->db->where('id_download', $id);
		$this->db->delete($this->tbl);
	}
}
?>
