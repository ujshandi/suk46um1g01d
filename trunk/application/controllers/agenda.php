<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class agenda extends CI_Controller {
	private $limit = 10;
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('pagination');
		$this->load->model('temp_model','',TRUE);
		$this->load->model('backend_model','',TRUE);
		$this->load->model('agendamodel','',TRUE);
	}
	function cekLogin()
	{
		if($this->session->userdata('userid')=="")
		{
			redirect('backend');
		}
	}
	function index($offset=0)
	{
		$uri_segment = 3;
		$offset = $this->uri->segment($uri_segment);
		$config['base_url'] = site_url('agenda/index/');
		$config['total_rows'] = $this->agendamodel->count_agenda();
		$config['per_page'] = $this->limit;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		
		$data['agenda']		= $this->agendamodel->get_All($this->limit,$offset);
		$data['include']	= $this->temp_model->includeFile();
		$data['header']		= $this->temp_model->headerMenu('0');
		$data['sliderTop']	= $this->temp_model->sliderTop();
		$data['mainmenu']	= $this->temp_model->mainmenu("8");
		$data['pengumuman']	= $this->temp_model->pengumuman();
		$data['polling']	= $this->temp_model->polling();
		$data['login']		= $this->temp_model->login();
		$data['linkterkait']= $this->temp_model->linkterkait();
		$data['testimonial']= $this->temp_model->testimonial();
		$data['footer']		= $this->temp_model->footer();
		$this->load->view('agenda/agenda',$data);
	}
	function data($offset=0)
	{
		$this->cekLogin();
		$uri_segment = 3;
		$offset = $this->uri->segment($uri_segment);
		$config['base_url'] = site_url('agenda/data/');
		$config['total_rows'] = $this->agendamodel->count_agenda();
		$config['per_page'] = $this->limit;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['agenda']		= $this->agendamodel->get_All($this->limit,$offset);
		$data['mainmenu']	= $this->backend_model->mainmenu("13");
		$this->load->view('agenda/agenda_data',$data);
	}
	function search()
	{
		$this->cekLogin();
		$key	= $this->input->post('search');
		
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['agenda']		= $this->agendamodel->search("kegiatan",$key)->result();
		$data['mainmenu']	= $this->backend_model->mainmenu("13");
		$this->load->view('agenda/agenda_data',$data);
	}
	function add()
	{
		$this->cekLogin();
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['mainmenu']	= $this->backend_model->mainmenu("13");
		$this->load->view('agenda/agenda_add',$data);
	}
	function simpan()
	{
		$tgl		= $this->input->post('tgl');
		$author		= $this->input->post('author');
		$kegiatan	= $this->input->post('kegiatan');
		
		$data = array('tgl'=>$tgl,'kegiatan'=>$kegiatan,'author'=>$author);
		$this->agendamodel->save($data);
		redirect('agenda/data','refresh');
	}
	function edit($id)
	{	
		$this->cekLogin();
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['agenda']		= $this->agendamodel->getbyid($id)->result();
		$data['mainmenu']	= $this->backend_model->mainmenu("13");
		$this->load->view('agenda/agenda_edit',$data);
	}
	function simpanedit()
	{
		$id			= $this->input->post('id');
		$author		= $this->input->post('author');
		$tgl		= $this->input->post('tgl');
		$kegiatan	= $this->input->post('kegiatan');
		
			$data = array('tgl'=>$tgl,'kegiatan'=>$kegiatan,'author'=>$author);
			$this->agendamodel->update($id,$data);
			redirect('agenda/data','refresh');
	}
	function hapus($id)
	{
		$this->agendamodel->delete($id);
		redirect('agenda/data','refresh');
	}
}