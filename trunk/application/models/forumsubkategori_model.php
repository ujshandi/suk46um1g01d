<?php

class forumsubkategori_model extends CI_Model

{

    private $tbl= 'forum_subkategori';

	function __construct()
	
	{

		parent::__construct();

	}
	
	function count_data($id=null) 
	{   
		
		return $this->db->count_all($this->tbl);
		  		
	}
	
	function count_by_id($id)
	{
		$this->db->where('id_kategori', $id);
		$this->db->from($this->tbl);
		return $this->db->count_all_results();
	}
	
	function get_list_data($limit,$offset) 

  	{

		if($offset==""){ $offset=0; }
		$userid	= $this->session->userdata('userid');
		$level	= $this->session->userdata('id_level');
		$qt="";
		if($level=="2" || $level=="3" || $level=="4"){ $qt="AND sistem_user.id_level >= '$level'"; }
		elseif($level=="5"){ $qt="AND forum_subkategori.oleh='$userid'"; } 
		
  		$query =$this->db->query("select * from forum_kategori,forum_subkategori,sistem_user,level_user WHERE forum_kategori.id_kategori = forum_subkategori.id_kategori AND forum_subkategori.oleh = sistem_user.id_user AND sistem_user.id_level = level_user.id_level $qt ORDER BY forum_subkategori.id_subkategori ASC LIMIT $offset,$limit");

		return $query->result();

  	} 

	function get_by_kategori($id)
	{
		/*if($id != "0")
		{
		$this->db->where('forum_subkategori.id_kategori', $id);
		}
		$this->db->join('forum_kategori', 'forum_kategori.id_kategori = forum_subkategori.id_kategori');
		$this->db->order_by('forum_subkategori.id_subkategori','asc');
		
				
		return $this->db->get($this->tbl, $limit, $offset);*/
		
		if($offset==""){ $offset=0; }
		
		 $query = $this->db->query("SELECT * FROM forum_kategori, forum_subkategori, sistem_user WHERE sistem_user.id_user = forum_subkategori.oleh AND forum_subkategori.id_kategori=forum_kategori.id_kategori AND forum_kategori.id_kategori=$id ORDER BY id_subkategori ASC");
		
		return $query->result();
		
	
	}
	
	function search($tipe,$key)

	{

		$this->db->like($tipe,$key);

		return $this->db->get($this->tbl);

	}

	
	function getAll() 

  	{

  		$query = $this->db->query("SELECT forum_kategori.nama_kategori,forum_subkategori.nama_subkategori,forum_subkategori.id_kategori,forum_subkategori.id_subkategori FROM forum_kategori ,forum_subkategori WHERE forum_kategori.id_kategori =  forum_subkategori.id_kategori ORDER BY forum_kategori.id_kategori ASC");

		return $query->result();

  	}

	
	function get_by_id($id){

		$this->db->where('id_subkategori',$id);

		$this->db->join('forum_kategori','forum_kategori.id_kategori = forum_subkategori.id_kategori');

		return $this->db->get($this->tbl);

	}

	
	function save($varData){

		$this->db->insert($this->tbl, $varData);

		return $this->db->insert_id();

	}


	function update($id, $data){

		$this->db->where('id_subkategori', $id)->update($this->tbl, $data);

	}


	function delete($id){

		$this->db->where('id_subkategori', $id);

		$this->db->delete($this->tbl);

	}

	
}



