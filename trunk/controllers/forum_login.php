<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class forum_login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('pagination');
		$this->load->model('forumkategori_model','',TRUE);
		$this->load->model('forumpost_model','',TRUE);
		$this->load->model('forumsubkategori_model','',TRUE);
		$this->load->model('forumtemp_model','',TRUE);
		$this->load->model('forumbacktemp_model','',TRUE);
		$this->load->model('user_model','',TRUE);
		$this->load->library('form_validation');
	}
	function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('username', 'Username', 'callback_usercheck');
		$this->form_validation->set_rules('password', 'Password', 'required');
		
		$this->form_validation->set_message('required', '<p class="error">%s Tidak boleh kosong !!</p>');
		
		$username	= $this->input->post('username');
		$password	= $this->input->post('password');
		$dataUser=$this->user_model->getUserByName($username)->result();
		
		if ($this->form_validation->run() == TRUE && count($dataUser)!="0")
		{
			foreach($dataUser as $row):
			$newdata = array(
                   'userid'  => $row->id_user,
                   'nama'    => $row->nama_asli,
                   'id_level' => $row->id_level,
               );
			endforeach;
			$this->session->set_userdata($newdata);
			redirect('forum_registered','refresh');
		}
		else
		{
			redirect('forum/publik','refresh');
		}
	}
	function usercheck($str)
	{
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		
		$query = $this->user_model->getUserByName($username)->result();
		foreach ($query as $row)
		{
			$pass=$row->password;
		} 
		
		if(count($query) == 0)
		{
			$this->form_validation->set_message('usercheck', '<p class="error"> %s Salah !! </p>');
			return FALSE;
		}
		else
		{
			if($password!=$pass)
			{
				$this->form_validation->set_message('usercheck', '<p class="error"> Password Salah, Silahkan Ulangi !! </p>');
				return FALSE;
			}else{
				return TRUE;
			}
		}
	}
}