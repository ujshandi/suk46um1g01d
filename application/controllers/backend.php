<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class backend extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('backend_model','',TRUE);
		$this->load->model('user_model','',TRUE);
		$this->load->library('form_validation');
	}
	function cekLogin()
	{
		if($this->session->userdata('userid')=="")
		{
			redirect('backend');
		}
	}
	function index()
	{
		$this->load->view('login');
	}
	function checkUser()
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
			redirect('backend/main','refresh');
		}
		else
		{
			$this->load->view('login');
		}
		
		//echo "$username $password";
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
	function main()
	{
		$this->cekLogin();
		/* $data['headmenu']=$this->backend_model->headermenu("1");
		$data['mainmenu']=$this->backend_model->mainmenu("0");
		$this->load->view('backend',$data); */
		$data = array(
					
					'title_page'=>'Admin Page',
					'title'=>'CPanel',
					'js'=>array(),//'js/flexigrid.pack.js','js/jqModal.js'),
					//'css'=>array('css/flexigrid.pack.css','css/jqModal.css')
					'css'=>array()
				);
		$data['headmenu']=$this->backend_model->headermenu("1");
		$data['mainmenu']=$this->backend_model->mainmenu("0");
		$this->template->set_template("admin");
//		$this->template->write_view('header','templates/header_admin',$data);
		$this->template->write_view('wrapper','backend',$data);
		$this->template->render();
	}
	function logout()
	{
		$array_items = array('userid' => '', 'nama' => '', 'id_level'=> '');
		$this->session->unset_userdata($array_items);
		$this->session->sess_destroy();
		redirect('main','refresh');
	}
}
