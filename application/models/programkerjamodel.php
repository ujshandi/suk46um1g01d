<?php
class programkerjaModel extends CI_Model 
{
	private $tbl= 'program_kerja';
	
	function __construct()
	{
		parent::__construct();
	}
	function count_program() 
	{   
	  	$userid	= $this->session->userdata('userid');
		$level	= $this->session->userdata('id_level');
		
		if($level=="5")
		{ 
			$this->db->where('author', $userid);
			$this->db->from($this->tbl);
			return $this->db->count_all_results();
		}
		else
		{
			return $this->db->count_all($this->tbl);
		}
  	}
	function count_program2() 
	{   
	  	$this->db->where('status', 'publish');
		$this->db->from($this->tbl);
		return $this->db->count_all_results();
  	}
	function get_All($limit = 10, $offset = 0) 
  	{
		if($offset==""){ $offset=0; }
		
		$userid	= $this->session->userdata('userid');
		$level	= $this->session->userdata('id_level');
		$qt ="";
		if($level=="5"){ $qt="WHERE author = '$userid'"; }
  		$query =$this->db->query("select * from program_kerja $qt ORDER BY id_program DESC LIMIT $offset,$limit");
		return $query->result();
  	}
	function get_All2($limit = 10, $offset = 0) 
  	{
		if($offset==""){ $offset=0; }
  		$query =$this->db->query("select * from program_kerja WHERE status ='publish' ORDER BY id_program DESC LIMIT $offset,$limit");
		return $query->result();
  	}
	function getProgramBaru()
	{
		$query =$this->db->query("select * from program_kerja WHERE status ='publish' ORDER BY id_program DESC LIMIT 1");
		return $query->result();
	}
	function search($tipe,$tipe2,$key)
	{
		$this->db->like($tipe,$key);
		$this->db->or_like($tipe2,$key);
		return $this->db->get($this->tbl);
	}
	function search2($tipe,$tipe2,$key)
	{
		$this->db->like($tipe,$key);
		$this->db->or_like($tipe2,$key);
		
		$userid	= $this->session->userdata('userid');
		$level	= $this->session->userdata('id_level');
		if($level=="5"){ $this->db->where('author',$userid); }
		
		return $this->db->get($this->tbl);
	}
	function getbyid($id)
	{
		$this->db->where('id_program',$id);
		return $this->db->get($this->tbl);
	}
	function save($varData){
		$this->db->insert($this->tbl, $varData);
		return $this->db->insert_id();
	}
	function update($id, $data){
		$this->db->where('id_program', $id);
		$this->db->update($this->tbl, $data);
	}
	function delete($id){
		$this->db->where('id_program', $id);
		$this->db->delete($this->tbl);
	}
}
?>
