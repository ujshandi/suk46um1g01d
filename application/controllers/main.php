<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class main extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('temp_model','',TRUE);
		$this->load->model('programkerjamodel','',TRUE);
		$this->load->model('panduanmodel','',TRUE);
		$this->load->model('user_model','',TRUE);
		$this->load->model('berita_model','',TRUE);
		$this->load->model('belajarmodel','',TRUE);
		$this->load->model('statistikmodel','',TRUE);
		$this->load->model('downloadmodel','',TRUE);
		$this->load->model('agendamodel','',TRUE);
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['berita']		= $this->berita_model->getBeritaBaru();
		$data['agenda']		= $this->agendamodel->get_All();
		$data['program']	= $this->programkerjamodel->getProgramBaru();
		$data['belajar']	= $this->belajarmodel->getProgramBaru();
		$data['panduan']	= $this->panduanmodel->getProgramBaru();
		$data['include']	= $this->temp_model->includeFile();
		$data['header']		= $this->temp_model->headerMenu('1');
		$data['sliderTop']	= $this->temp_model->sliderTop();
		$data['pengumuman']	= $this->temp_model->pengumuman('main');
		$data['mainmenu']	= $this->temp_model->mainmenu("0");
		$data['polling']	= $this->temp_model->polling();
		$data['login']		= $this->temp_model->login();
		$data['linkterkait']= $this->temp_model->linkterkait();
		$data['testimonial']= $this->temp_model->testimonial();
		$data['footer']		= $this->temp_model->footer();
		$data['title_page']		= "Beranda ".COMPANY_NAME;
		//$this->load->view('main',$data);
		$this->template->write_view('header','templates/header',$data);
		$this->template->write_view('wrapper','main',$data);
		$this->template->render();
	}
	function search()
	{
		$key	= $this->input->post('search');
		
		$data['programkerja']	= $this->programkerjamodel->search("deskripsi","deskripsi_singkat",$key)->result();
		$data['panduan']		= $this->panduanmodel->search("deskripsi","deskripsi_singkat",$key)->result();
		$data['statistik']		= $this->statistikmodel->search("kategori",$key)->result();
		$data['belajar']		= $this->belajarmodel->search("deskripsi","deskripsi_singkat",$key)->result();
		$data['berita']			= $this->berita_model->search("judul_berita","deskripsi_singkat","isi",$key)->result();
		$data['download']		= $this->downloadmodel->search("deskripsi",$key)->result();
		
		$data['include']		= $this->temp_model->includeFile();
		$data['header']			= $this->temp_model->headerMenu('0');
		$data['sliderTop']		= $this->temp_model->sliderTop();
		$data['mainmenu']		= $this->temp_model->mainmenu("0");
		$data['pengumuman']		= $this->temp_model->pengumuman();
		$data['polling']		= $this->temp_model->polling();
		$data['login']			= $this->temp_model->login();
		$data['linkterkait']	= $this->temp_model->linkterkait();
		$data['testimonial']	= $this->temp_model->testimonial();
		$data['footer']			= $this->temp_model->footer();
		$this->load->view('search',$data);
	}
	function login()
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
			if($row->id_level==6)
			{
				redirect('forum/publik','refresh');
			}
			else
			{
				redirect('backend/main','refresh');
			}
		}
		else
		{
			$this->index();
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