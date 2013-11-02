<?php
class Pemerintahan_model extends CI_Model 
{
	private $tbl= 'pemerintahan';
	
	function __construct(){
	
		parent::__construct();
			
	}
	
	
	function get_by_kategori($kategori){
		
		$this->db->where('kategori',$kategori);
		$query = $this->db->get($this->tbl);
		foreach ($query->result() as $row)
		{
			return $row;
		}
		
	}
	
	
	
	function update($kategori, $data){
		$this->db->where('kategori', $kategori);
		$this->db->update($this->tbl, $data);
	}
	
	function delete($id){
		$this->db->where('id', $id);
		$this->db->delete($this->tbl);
	}
}
?>
