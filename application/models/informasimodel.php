<?php
class informasiModel extends CI_Model 
{
	private $tbl= 'informasi';
	
	function __construct()
	{
		parent::__construct();
	}
	function getbykategori($kat)
	{
		$query =$this->db->query("select * from informasi WHERE kategori = '$kat' ");
		foreach ($query->result() as $row)
		{
			return $row->isi;
		}
	}
	
	function get_by_kategori($kat)
	{
		$query =$this->db->query("select * from informasi WHERE kategori = '$kat' ");
		foreach ($query->result() as $row)
		{
			return $row;
		}
	}
	function update($id, $data){
		$this->db->where('kategori', $id);
		$this->db->update($this->tbl, $data);
	}
}
?>
