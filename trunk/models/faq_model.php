<?php

class faq_model extends CI_Model

{

	private $tbl= 'faq';

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

  		$query =$this->db->query("SELECT f.* FROM faq AS f ORDER BY f.id_faq ASC LIMIT $offset,$limit");

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

	function getbyid($id){

		//return $this->db->get_where($this->tbl, array('id_user'=>$id))->row();

		$this->db->where('id_faq',$id);

		return $this->db->get($this->tbl);


	}

	function save($varData){

		$this->db->insert($this->tbl, $varData);

		return $this->db->insert_id();

	}

	function update($id, $data)
	{

		$this->db->where('id_faq', $id)->update($this->tbl, $data);

	}

	function delete($id){

		$this->db->where('id_faq', $id);

		$this->db->delete($this->tbl);

	}
	
}



