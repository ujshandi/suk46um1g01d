<?php
class pengumumanModel extends CI_Model 
{
	private $tbl= 'pengumuman';
	
	function __construct()
	{
		parent::__construct();
	}
	function count_pengumuman() 
	{   
	  	return $this->db->count_all($this->tbl);
  	}
	function get_All($limit = 10, $offset = 0) 
  	{
		if($offset==""){ $offset=0; }
  		$query =$this->db->query("select * from pengumuman ORDER BY id_pengumuman DESC LIMIT $offset,$limit");
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
		$this->db->where('id_pengumuman',$id);
		$query=$this->db->get($this->tbl);
		foreach ($query->result() as $row){
			return $row;
		}
	}
	function save($varData){
		$this->db->insert($this->tbl, $varData);
		return $this->db->insert_id();
	}
	function update($id, $data){
		$this->db->where('id_pengumuman', $id);
		$this->db->update($this->tbl, $data);
	}
	function delete($id){
		$this->db->where('id_pengumuman', $id);
		$this->db->delete($this->tbl);
	}
}
?>
