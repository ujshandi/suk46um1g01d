<?php


class forumkategori_model extends CI_Model

{

	private $tbl= 'forum_kategori';

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
		
  		$query =$this->db->query("select * from forum_kategori,sistem_user,level_user WHERE forum_kategori.oleh = sistem_user.id_user AND sistem_user.id_level = level_user.id_level ORDER BY forum_kategori.id_kategori ASC LIMIT $offset,$limit");

		return $query->result();

  	} 

	
	function search($tipe,$key)

	{

		$this->db->like($tipe,$key);

		return $this->db->get($this->tbl);

	}

	
	function getAll() 

  	{

  		$query = $this->db->query("SELECT * FROM forum_kategori ORDER BY id_kategori ASC");

		return $query->result();

  	}

	
	function get_by_id($id){


		//return $this->db->get_where($this->tbl, array('id_user'=>$id))->row();

		//$query =  $this->db->query("SELECT * FROM forum_kategori WHERE id_kategori = $id");
		$this->db->where('id_kategori',$id);
		$this->db->join('sistem_user', 'sistem_user.id_user = forum_kategori.oleh');
		return $this->db->get($this->tbl);

	}

	
	function save($varData){

		$this->db->insert($this->tbl, $varData);

		return $this->db->insert_id();

	}


	function update($id, $data){

	

		$this->db->where('id_kategori', $id)->update($this->tbl, $data);

	}


	function delete($id){

		$this->db->where('id_kategori', $id);

		$this->db->delete($this->tbl);

	}


	

}



