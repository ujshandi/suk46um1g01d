<?php

class user_model extends CI_Model
{
	
	private $tbl= 'sistem_user';

	
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

  		$query =$this->db->query("select * from sistem_user, level_user WHERE sistem_user.id_level = level_user.id_level ORDER BY sistem_user.nama_asli ASC LIMIT $offset,$limit");

		return $query->result();
  	} 
	
	function get_list_akses($id) 
  	{
		

  		$query =$this->db->query("select u.*,  coalesce(a.akses ,0) as akses "
                        . " from menu_backend u left join level_akses_backend a on u.menu_id = a.menu_id and a.id_level =$id "
                        . " WHERE u.hide=0 and u.menu_parent is not null "
                        . " ORDER BY u.menu_id ");

		return $query->result();
  	} 
	
	function search($tipe,$tipe2,$key)
	{
		$this->db->like($tipe,$key);
		$this->db->or_like($tipe2,$key);
		return $this->db->get($this->tbl);
	}
	
	function getAll() 
  	{
  		$query = $this->db->query("SELECT * FROM sistem_user ORDER BY nama_asli DESC");
		return $query->result();
  	}
	
	function getbyid($id){
		
		//return $this->db->get_where($this->tbl, array('id_user'=>$id))->row();
		$this->db->where('id_user',$id);
		$this->db->join('level_user','level_user.id_level = sistem_user.id_level');
		return $this->db->get($this->tbl);
		
	}
	
	function save($varData){
		$this->db->insert($this->tbl, $varData);
		return $this->db->insert_id();
	}
	
	function update($id, $data){
	
		$this->db->where('id_user', $id)->update($this->tbl, $data);
	}
	
	function setAkses( $data){
               
                
                $this->db->insert("level_akses_backend", $data);
	}
	
	function deleteAkses($id){
		 $this->db->where('id_level', $id);
		$this->db->delete("level_akses_backend");
		
	}
	function delete($id){
		$this->db->where('id_user', $id);
		$this->db->delete($this->tbl);
	}
	
	function getlevel()
	{
		$query = $this->db->query("SELECT * FROM level_user ORDER BY id_level ASC");
		return $query->result();
	}


}

