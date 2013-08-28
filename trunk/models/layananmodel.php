<?php
class layananModel extends CI_Model 
{
	private $tbl= 'layanan';
	
	function __construct()
	{
		parent::__construct();
	}
	function count_layanan($tipe) 
	{   
	  	$userid	= $this->session->userdata('userid');
		$level	= $this->session->userdata('id_level');
		
		if($level=="5")
		{ 
			$this->db->where('author', $userid);
		}
		
		$this->db->where('kategori', $tipe);
		$this->db->from($this->tbl);
		return $this->db->count_all_results();
  	}
	function count_layanan2($tipe) 
	{   
	  	$this->db->where('status', 'publish');
		$this->db->where('kategori', $tipe);
		$this->db->from($this->tbl);
		return $this->db->count_all_results();
  	}
	function get_All($tipe,$limit = 10, $offset = 0) 
  	{
		if($offset==""){ $offset=0; }
		
		$userid	= $this->session->userdata('userid');
		$level	= $this->session->userdata('id_level');
		
		if($level=="5"){ $qt="AND author = '$userid'"; }
  		$query =$this->db->query("select * from layanan  WHERE kategori = '$tipe' $qt ORDER BY id_layanan DESC LIMIT $offset,$limit");
		return $query->result();
  	}
	function get_All2($tipe,$limit = 10, $offset = 0) 
  	{
		if($offset==""){ $offset=0; }
  		$query =$this->db->query("select * from layanan  WHERE kategori = '$tipe' AND status = 'publish' ORDER BY id_layanan DESC LIMIT $offset,$limit");
		return $query->result();
  	}
	function search($kat,$tipe,$tipe2,$key)
	{
		$this->db->like($tipe,$key);
		$this->db->or_like($tipe2,$key);
		$this->db->where('kategori', $kat);
		return $this->db->get($this->tbl);
	}
	function getbyid($id)
	{
		$this->db->where('id_layanan',$id);
		return $this->db->get($this->tbl);
	}
	function save($varData){
		$this->db->insert($this->tbl, $varData);
		return $this->db->insert_id();
	}
	function update($id, $data){
		$this->db->where('id_layanan', $id);
		$this->db->update($this->tbl, $data);
	}
	function delete($id){
		$this->db->where('id_layanan', $id);
		$this->db->delete($this->tbl);
	}
}
?>
