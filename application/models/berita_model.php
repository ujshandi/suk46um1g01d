<?php
class Berita_model extends CI_Model 
{
	private $tbl= 'berita';
	
	function __construct(){
	
		parent::__construct();
			
	}
	
	function count_data() 
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
	function count_data2($kategori=null) 
	{   
		
		$this->db->where('status', 'publish');
		if ($kategori!=null)
			$this->db->where('kategori', $kategori);
		$this->db->from($this->tbl);
		return $this->db->count_all_results();
  		
	}
	function get_list_data($limit,$offset) 
  	{
		
		$this->db->limit($limit, $offset);
  		$this->db->order_by('id_berita','desc');
		return $this->db->get($this->tbl,$limit,$offset);
  	} 
	
	function search($tipe,$tipe2,$tipe3,$key)
	{
		$this->db->like($tipe,$key);
		$this->db->or_like($tipe2,$key);
		$this->db->or_like($tipe3,$key);
		$this->db->where('status', 'publish');
		return $this->db->get($this->tbl);
	}
	function search2($tipe,$tipe2,$tipe3,$key)
	{
		$this->db->like($tipe,$key);
		$this->db->or_like($tipe2,$key);
		$this->db->or_like($tipe3,$key);
		$userid	= $this->session->userdata('userid');
		$level	= $this->session->userdata('id_level');
		if($level=="5"){ $this->db->where('author',$userid); }
		return $this->db->get($this->tbl);
	}
	function getAll($limit = 10, $offset = 0) 
  	{
		if($offset==""){ $offset=0; }
		
		$userid	= $this->session->userdata('userid');
		$level	= $this->session->userdata('id_level');
		$qt = "";
		if($level=="5"){ $qt="WHERE author = '$userid'"; }
  		$query = $this->db->query("SELECT * FROM berita $qt  ORDER BY id_berita DESC LIMIT $offset,$limit");
		return $query->result();
  	}
	function getAll2($limit = 10, $offset = 0,$kategori=null) 
  	{
		if($offset==""){ $offset=0; }
		if ($kategori!=null)
			$query = $this->db->query("SELECT * FROM berita WHERE status = 'publish' and kategori='$kategori' ORDER BY id_berita DESC LIMIT $offset,$limit");
		else
			$query = $this->db->query("SELECT * FROM berita WHERE status = 'publish'  ORDER BY id_berita DESC LIMIT $offset,$limit");
		return $query->result();
  	}
	
	function getBeritaBaru($klasifikasi="teks") 
  	{
  		$query = $this->db->query("SELECT * FROM berita WHERE status = 'publish' and klasifikasi='$klasifikasi' ORDER BY id_berita DESC LIMIT 8");
		return $query->result();
  	}
	function get_by_id($id){
		
		$this->db->where('id_berita',$id);
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
		$this->db->where('id_berita', $id);
		$this->db->update($this->tbl, $data);
	}
	
	function delete($id){
		$this->db->where('id_berita', $id);
		$this->db->delete($this->tbl);
	}
}
?>
