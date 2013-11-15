<?php

class forumpost_model extends CI_Model

{

    private $tbl= 'forum_post';

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
		$this->db->where('id_subkategori', $id);
		$this->db->from($this->tbl);
		return $this->db->count_all_results();
	}
	function get_list_data($limit,$offset) 

  	{

		if($offset==""){ $offset=0; }
		
		$userid	= $this->session->userdata('userid');
		$level	= $this->session->userdata('id_level');
		$qt = '';
		if($level=="2" || $level=="3" || $level=="4" || $level=="5" ){ $qt="AND sistem_user.id_level >= '$level'"; }
		elseif($level=="6"){ $qt="AND forum_post.id_user='$userid'"; } 
		
  		$query =$this->db->query("SELECT forum_kategori.nama_kategori,forum_subkategori.nama_subkategori,sistem_user.nama_asli,sistem_user.foto_profil,level_user.nama_level,forum_post.* FROM forum_kategori ,forum_subkategori ,sistem_user ,level_user ,forum_post WHERE forum_kategori.id_kategori =  forum_post.id_kategori AND forum_post.id_user =  sistem_user.id_user AND sistem_user.id_level =  level_user.id_level AND forum_post.id_subkategori =  forum_subkategori.id_subkategori $qt ORDER BY forum_post.id_post ASC LIMIT $offset,$limit");

		return $query->result();

  	} 

	function get_by_kategori($id)
	{
				
		if($offset==""){ $offset=0; }
		
		 $query = $this->db->query("SELECT * FROM forum_kategori, forum_subkategori, sistem_user WHERE sistem_user.id_user = forum_subkategori.oleh AND forum_subkategori.id_kategori=forum_kategori.id_kategori AND forum_kategori.id_kategori=$id ORDER BY id_subkategori ASC");
		
		return $query->result();
		
	
	}
	function get_by_kategori_sub($id,$sub)
	{
				
		$userid	= $this->session->userdata('userid');
		$level	= $this->session->userdata('id_level');
		
		if($level=="2" || $level=="3" || $level=="4" || $level=="5" ){ $qt="AND sistem_user.id_level >= '$level'"; }
		elseif($level=="6"){ $qt="AND forum_post.id_user='$userid'"; } 
		
  		$query =$this->db->query("SELECT forum_kategori.nama_kategori,forum_subkategori.nama_subkategori,sistem_user.nama_asli,sistem_user.foto_profil,level_user.nama_level,forum_post.* FROM forum_kategori ,forum_subkategori ,sistem_user ,level_user ,forum_post WHERE forum_kategori.id_kategori =  forum_post.id_kategori AND forum_post.id_user =  sistem_user.id_user AND sistem_user.id_level =  level_user.id_level AND forum_post.id_subkategori =  forum_subkategori.id_subkategori $qt AND forum_kategori.id_kategori = $id AND forum_subkategori.id_subkategori = $sub ORDER BY forum_post.id_post ASC");

		return $query->result();

	
	}
	function get_by_subkategori($id,$limit,$offset)
	{
	
		if($offset==""){ $offset=0; }
			
		$query = $this->db->query("SELECT forum_kategori.nama_kategori,forum_subkategori.nama_subkategori,forum_subkategori.id_subkategori,forum_post.*,sistem_user.nama_asli FROM forum_kategori ,forum_subkategori ,forum_post,sistem_user WHERE forum_post.id_kategori =  forum_kategori.id_kategori AND forum_post.id_subkategori =  forum_subkategori.id_subkategori AND forum_subkategori.id_subkategori = $id AND forum_post.id_user = sistem_user.id_user ORDER BY forum_post.id_post ASC LIMIT $offset,$limit");
			
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

	
	function get_by_id($id,$offset=0){
		if($offset==""){ $offset=0; }
			
		$query = $this->db->query("SELECT forum_post.*, sistem_user.nama_asli FROM forum_post, sistem_user WHERE forum_post.id_post = $id AND sistem_user.id_user = forum_post.id_user ORDER BY forum_post.id_post ASC");
			
		return $query->result();
		
		return $this->db->get($this->tbl);

	}

	
	function save($varData){

		$this->db->insert($this->tbl, $varData);

		return $this->db->insert_id();

	}


	function update($id, $data){

		$this->db->where('id_subkategori', $id)->update($this->tbl, $data);

	}
	function updatepost($id, $data){

		$this->db->where('id_post', $id)->update($this->tbl, $data);

	}

	function delete($id){

		$this->db->where('id_post', $id);

		$this->db->delete($this->tbl);

	}

	
}



