<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class user extends CI_Controller {

	private $limit = 10;

	function __construct()

	{

		parent::__construct();

		$this->load->helper(array('form', 'url'));

		$this->load->library('pagination');

		$this->load->model('backend_model','',TRUE);

		$this->load->model('temp_model','',TRUE);

		$this->load->model('user_model','',TRUE);

	}
	function cekLogin()
	{
		if($this->session->userdata('userid')=="")
		{
			redirect(base_url().'backend');
		}
	}
	function index($offset=0)

	{
		$this->cekLogin();
		$level=$this->session->userdata('id_level');
		//echo $level;
		if($level=="1" || $level=="2")
		{
			$uri_segment = 3;
	
			$offset = $this->uri->segment($uri_segment);
	
			$config['base_url'] = site_url('user/index/');
	
			$config['total_rows'] = $this->user_model->count_data();
	
			$config['per_page'] = $this->limit;
	
			$this->pagination->initialize($config);
	
			$data['pagination'] = $this->pagination->create_links();
	
			
	
			$data['fields']	= $this->user_model->get_list_data($this->limit,$offset);
			$data['headmenu']	= $this->backend_model->headermenu();
			$data['mainmenu']	= $this->backend_model->mainmenu(14);
	
			$this->load->view('user/user_data',$data);	
			
		}
		else
		{
			$this->edit($this->session->userdata('userid'));
		}
	}
	
	function search()
	{
		$this->cekLogin();
		$key	= $this->input->post('search');
		
		$data['fields']	= $this->user_model->search("username","nama_asli",$key)->result();
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['mainmenu']	= $this->backend_model->mainmenu();
		$this->load->view('user/user_data',$data);	
	}
	function add()

	{
		$this->cekLogin();
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['mainmenu']	= $this->backend_model->mainmenu(14);
		
		$data['dlevel'] = $this->user_model->getlevel();

		$this->load->view('user/user_add',$data);

	}

	function simpan()

	{
		
		$nama_asli		= $this->input->post('nama_asli');
		$username		= $this->input->post('username');
		$password		= $this->input->post('password');
		$id_level		= $this->input->post('id_level');
			

			$data = array('nama_asli' => $nama_asli,
						  'username'  => $username,
						  'password'  => $password,
						  'id_level'  => $id_level);

			$this->user_model->save($data);

		

		redirect(base_url().'user');

	}

	function edit($id)

	{
		$this->cekLogin();
		$data['fields']		= $this->user_model->getbyid($id)->result();
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['mainmenu']	= $this->backend_model->mainmenu(14);
		
		$data['dlevel'] = $this->user_model->getlevel();

		$this->load->view('user/user_edit',$data);

	}

	function simpanedit()

	{

		$id				= $this->input->post('id_user');
		$nama_asli		= $this->input->post('nama_asli');
		$username		= $this->input->post('username');
		$password		= $this->input->post('password');
		$id_level		= $this->input->post('id_level');
		

			$data	= array('nama_asli'=>$nama_asli,'username'=>$username,'password'=>$password,'id_level'=>$id_level);

			$this->user_model->update($id,$data);

			

		redirect(base_url().'user');

	}

	function hapus($id)

	{

		$this->user_model->delete($id);

		redirect(base_url().'user');

	}

}