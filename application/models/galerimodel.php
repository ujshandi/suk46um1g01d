<?php
class galeriModel extends CI_Model 
{
	private $tbl= 'daftar_galeri';
	private $tbl2= 'galeri';
	
	function __construct()
	{
		parent::__construct();
	}
	function count_galeri() 
	{   
	  	return $this->db->count_all($this->tbl);
  	}
	function count_listgaleri($id) 
	{   
	  	$this->db->where('id_galeri', $id);
		$this->db->from($this->tbl2);
		return $this->db->count_all_results();
  	}
	function get_All($limit = 10, $offset = 0) 
  	{
		if($offset==""){ $offset=0; }
  		$query =$this->db->query("select * from daftar_galeri ORDER BY id_galeri DESC LIMIT $offset,$limit");
		return $query->result();
  	}
	function get_All_list($id, $offset = 0) 
  	{
		if($offset==""){ $offset=0; }
  		if ($id!=null)
			$query =$this->db->query("select * from galeri WHERE id_galeri = '$id' ORDER BY id_img ASC");
		else
			$query =$this->db->query("select * from galeri WHERE id_galeri is null ORDER BY id_img ASC");
		return $query->result();
  	}
	function getnamaGaleri($id)
	{
		$query =$this->db->query(" select * from daftar_galeri where id_galeri = '$id' ");
		foreach ($query->result() as $row)
		{
		   return $row->nama_galeri;
		}
	}
	function search($tipe,$key)
	{
		$this->db->like($tipe,$key);
		return $this->db->get($this->tbl);
	}
	function getbyid($id)
	{
		$this->db->where('id_galeri',$id);
		return $this->db->get($this->tbl);
	}
	function getbyidList($id)
	{
		$this->db->where('id_img',$id);
		return $this->db->get($this->tbl2);
	}
	function save($varData){
		$this->db->insert($this->tbl, $varData);
		return $this->db->insert_id();
	}
	function saveGaleri($varData){
		$this->db->insert($this->tbl2, $varData);
		return $this->db->insert_id();
	}
	function update($id, $data){
		$this->db->where('id_galeri', $id);
		$this->db->update($this->tbl, $data);
	}
	function delete($id){
		$this->db->where('id_galeri', $id);
		$this->db->delete($this->tbl);
	}
	function deleteList($id){
		$this->db->where('id_img', $id);
		$this->db->delete($this->tbl2);
	}
}
?>
