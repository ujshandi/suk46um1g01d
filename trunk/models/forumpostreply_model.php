<?php

class forumpostreply_model extends CI_Model

{

    private $tbl= 'forum_post_reply';

	function __construct()
	
	{

		parent::__construct();

	}
	
	function count_data($id) 
	{   
		
		return $this->db->count_all($this->tbl);
		  		
	}
	function count_comment($id)
	{
		$this->db->where('id_post', $id);
		$this->db->from($this->tbl);
		return $this->db->count_all_results();
	}
	
	function get_list_data($limit,$offset) 

  	{

		if($offset==""){ $offset=0; }

  		$query =$this->db->query("SELECT forum_kategori.nama_kategori,forum_subkategori.nama_subkategori,sistem_user.username,level_user.nama_level,forum_post.* FROM forum_kategori ,forum_subkategori ,sistem_user ,level_user ,forum_post WHERE forum_kategori.id_kategori =  forum_post.id_kategori AND
forum_kategori.oleh =  sistem_user.id_user AND sistem_user.id_level =  level_user.id_level AND forum_post.id_subkategori =  forum_subkategori.id_subkategori ORDER BY forum_post.id_post ASC LIMIT $offset,$limit");

		return $query->result();

  	} 
	
	function get_by_post($id,$limit,$offset)
	{
	
		if($offset==""){ $offset=0; }
			
		$query = $this->db->query("SELECT forum_post.*,forum_post_reply.*,forum_kategori.nama_kategori,forum_subkategori.nama_subkategori FROM forum_kategori ,forum_post ,forum_post_reply , forum_subkategori WHERE forum_kategori.id_kategori =  forum_post.id_kategori AND forum_post.id_subkategori =  forum_subkategori.id_subkategori AND forum_post_reply.id_post =  forum_post.id_post AND forum_post_reply.id_post = $id ORDER BY forum_post_reply.id_post_reply ASC LIMIT $offset,$limit");
			
		return $query->result();
	
	}
	
	function search($tipe,$key)

	{

		$this->db->like($tipe,$key);

		return $this->db->get($this->tbl);

	}

	
	function getAll() 

  	{

  		$query = $this->db->query("SELECT * FROM sistem_user ORDER BY nama_asli DESC");

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



