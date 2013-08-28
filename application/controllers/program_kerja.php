<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class program_kerja extends CI_Controller {
	private $limit = 10;
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('pagination');
		$this->load->model('temp_model','',TRUE);
		$this->load->model('backend_model','',TRUE);
		$this->load->model('informasimodel','',TRUE);
		$this->load->model('programkerjamodel','',TRUE);
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
		$config['base_url'] = site_url('program_kerja/index/');
		$config['total_rows'] = $this->programkerjamodel->count_program2();
		$config['per_page'] = $this->limit;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		
		$data['data']		= $this->programkerjamodel->get_All2($this->limit,$offset);
		$data['include']	= $this->temp_model->includeFile();
		$data['header']		= $this->temp_model->headerMenu('0');
		$data['sliderTop']	= $this->temp_model->sliderTop();
		$data['mainmenu']	= $this->temp_model->mainmenu("2");
		$data['pengumuman']	= $this->temp_model->pengumuman();
		$data['polling']	= $this->temp_model->polling();
		$data['login']		= $this->temp_model->login();
		$data['linkterkait']= $this->temp_model->linkterkait();
		$data['testimonial']= $this->temp_model->testimonial();
		$data['footer']		= $this->temp_model->footer();
		$this->load->view('program_kerja/program_kerja',$data);
	}
	function detail($id)
	{
		$data['data']		= $this->programkerjamodel->getbyid($id)->result();
		$data['include']	= $this->temp_model->includeFile();
		$data['header']		= $this->temp_model->headerMenu('0');
		$data['sliderTop']	= $this->temp_model->sliderTop();
		$data['mainmenu']	= $this->temp_model->mainmenu("2");
		$data['pengumuman']	= $this->temp_model->pengumuman();
		$data['polling']	= $this->temp_model->polling();
		$data['login']		= $this->temp_model->login();
		$data['linkterkait']= $this->temp_model->linkterkait();
		$data['testimonial']= $this->temp_model->testimonial();
		$data['footer']		= $this->temp_model->footer();
		$this->load->view('program_kerja/program_detail',$data);
	}
	function search()
	{
		$key	= $this->input->post('search');
		
		$data['data']		= $this->programkerjamodel->search("deskripsi","deskripsi_singkat",$key)->result();
		$data['include']	= $this->temp_model->includeFile();
		$data['header']		= $this->temp_model->headerMenu('0');
		$data['sliderTop']	= $this->temp_model->sliderTop();
		$data['mainmenu']	= $this->temp_model->mainmenu("2");
		$data['pengumuman']	= $this->temp_model->pengumuman();
		$data['polling']	= $this->temp_model->polling();
		$data['login']		= $this->temp_model->login();
		$data['linkterkait']= $this->temp_model->linkterkait();
		$data['testimonial']= $this->temp_model->testimonial();
		$data['footer']		= $this->temp_model->footer();
		$this->load->view('program_kerja/program_kerja',$data);
	}
	function search2()
	{
		$this->cekLogin();
		$key	= $this->input->post('search');
		
		$data['data']		= $this->programkerjamodel->search2("deskripsi","deskripsi_singkat",$key)->result();
		$data['headermenu']	= $this->backend_model->headermenu();
		$data['mainmenu']	= $this->backend_model->mainmenu("3");
		$this->load->view('program_kerja/program_data',$data);
	}
	function data($offset=0)
	{
		$this->cekLogin();
		$uri_segment = 3;
		$offset = $this->uri->segment($uri_segment);
		$config['base_url'] = site_url('program_kerja/data/');
		$config['total_rows'] = $this->programkerjamodel->count_program();
		$config['per_page'] = $this->limit;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		
		$data['data']		= $this->programkerjamodel->get_All($this->limit,$offset);
		$data['headermenu']	= $this->backend_model->headermenu();
		$data['mainmenu']	= $this->backend_model->mainmenu("3");
		$this->load->view('program_kerja/program_data',$data);
	}
	function add()
	{
		$this->cekLogin();
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['mainmenu']	= $this->backend_model->mainmenu("3");
		$this->load->view('program_kerja/program_add',$data);
	}
	function simpan()
	{
		$nama		= $this->input->post('nama');
		$des_singkat= $this->input->post('des_singkat');
		$deskripsi	= $this->input->post('deskripsi');
		$author		= $this->input->post('author');
			
			$data = array('tgl'=>date('Y-m-d H:i:s'),'nama_program'=>$nama,'deskripsi'=>$deskripsi,'author'=>$author,'deskripsi_singkat'=>$des_singkat);
			$this->programkerjamodel->save($data);
		
		redirect('program_kerja/data','refresh');
	}
	function edit($id)
	{
		$this->cekLogin();
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['data']		= $this->programkerjamodel->getbyid($id)->result();
		$data['mainmenu']	= $this->backend_model->mainmenu("3");
		$this->load->view('program_kerja/program_edit',$data);
	}
	function simpanedit()
	{
		$id			= $this->input->post('id');
		$nama		= $this->input->post('nama');
		$des_singkat= $this->input->post('des_singkat');
		$deskripsi	= $this->input->post('deskripsi');
		$author		= $this->input->post('author');
		$status		= $this->input->post('status');
			
			$data = array('nama_program'=>$nama,'deskripsi'=>$deskripsi,'author'=>$author,'deskripsi_singkat'=>$des_singkat,'status'=>$status);
			$this->programkerjamodel->update($id,$data);
		
		redirect('program_kerja/data','refresh');
	}
	function hapus($id)
	{
		$this->programkerjamodel->delete($id);
		redirect('program_kerja/data','refresh');
	}
}