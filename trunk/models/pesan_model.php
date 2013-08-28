<?php

class pesan_model extends CI_Model
{
	
	private $tbl= 'pesan';

	
	function __construct()

	{

		parent::__construct();

	}
	

	function getUserByName($user)

	{

		$this->db->where('username', $user);

		return $this->db->get($this->tbl);

	}

	function count_data() 
	{   
		
		return $this->db->count_all($this->tbl);
  		
	}
	
	function get_list_data($limit,$offset) 
  	{
		if($offset==""){ $offset=0; }

  		$query =$this->db->query("SELECT * FROM PESAN ORDER BY id_pesan DESC LIMIT $offset,$limit");

		return $query->result();
  	} 
	
	function search($tipe,$key)
	{
		$this->db->like($tipe,$key);
		return $this->db->get($this->tbl);
	}
	
	function getAll($limit,$offset) 
  	{
		if($offset==""){ $offset=0; }
  		$query = $this->db->query("SELECT * FROM pesan p, pesan_tanggapi t,sistem_user s,
level_user l WHERE p.id_pesan = t.id_pesan AND t.oleh = s.id_user AND s.id_level = l.id_level AND p.status = '1' ORDER BY p.id_pesan DESC LIMIT $offset, $limit");
		return $query->result();
  	}
	
	function getbyid($id){
		
		$query = $this->db->query("SELECT * FROM pesan WHERE id_pesan=$id");

		return $query->result();
				
	}
	
	function save($varData){
		$this->db->insert($this->tbl, $varData);
		return $this->db->insert_id();
	}
	
	function updates($id, $data){
	
		$this->db->where('id_pesan', $id)->update($this->tbl, $data);
	}
	
	function update($id, $data){
	
		$this->db->where('id_tanggapi', $id)->update('pesan_tanggapi', $data);
	}
	
	function delete($id){
		//$this->db->where('id_user', $id);
		//$this->db->delete($this->tbl);
		$tables	= array('pesan','pesan_tanggapi');
		$this->db->where('id_pesan', $id);
		$this->db->delete($tables);
	}
	
	function savetanggapi($varData)
	{
		$this->db->insert('pesan_tanggapi', $varData);
		return $this->db->insert_id();
	}


}

