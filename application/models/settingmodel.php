<?php
class settingModel extends CI_Model 
{
	private $tbl= 'system';
	
	function __construct()
	{
		parent::__construct();
	
	}
	function getbykategori($kat)
	{
		$query =$this->db->query("select * from system WHERE sys_key = '$kat' ");
		foreach ($query->result() as $row)
		{
			return $row->isi;
		}
	}
	
	function get_by_kategori($kat)
	{
		$query =$this->db->query("select * from system WHERE sys_key = '$kat' ");
		foreach ($query->result() as $row)
		{
			return $row;
		}
	}
	function update($id, $data){
		$this->db->where('sys_key', $id);
		$this->db->update($this->tbl, $data);
	}
}
?>
