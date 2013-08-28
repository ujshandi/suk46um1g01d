<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class panduan extends CI_Controller {
	private $limit = 10;
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('pagination');
		$this->load->model('temp_model','',TRUE);
		$this->load->model('backend_model','',TRUE);
		$this->load->model('informasimodel','',TRUE);
		$this->load->model('panduanmodel','',TRUE);
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
		$config['base_url'] = site_url('panduan/index/');
		$config['total_rows'] = $this->panduanmodel->count_panduan();
		$config['per_page'] = $this->limit;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		
		$data['data']		= $this->panduanmodel->get_All($this->limit,$offset);
		$data['include']	= $this->temp_model->includeFile();
		$data['header']		= $this->temp_model->headerMenu('0');
		$data['sliderTop']	= $this->temp_model->sliderTop();
		$data['mainmenu']	= $this->temp_model->mainmenu("4");
		$data['pengumuman']	= $this->temp_model->pengumuman();
		$data['polling']	= $this->temp_model->polling();
		$data['login']		= $this->temp_model->login();
		$data['linkterkait']= $this->temp_model->linkterkait();
		$data['testimonial']= $this->temp_model->testimonial();
		$data['footer']		= $this->temp_model->footer();
		$this->load->view('panduan/panduan',$data);
	}
	function detail($id)
	{
		$data['data']		= $this->panduanmodel->getbyid($id)->result();
		$data['include']	= $this->temp_model->includeFile();
		$data['header']		= $this->temp_model->headerMenu('0');
		$data['sliderTop']	= $this->temp_model->sliderTop();
		$data['mainmenu']	= $this->temp_model->mainmenu("4");
		$data['pengumuman']	= $this->temp_model->pengumuman();
		$data['polling']	= $this->temp_model->polling();
		$data['login']		= $this->temp_model->login();
		$data['linkterkait']= $this->temp_model->linkterkait();
		$data['testimonial']= $this->temp_model->testimonial();
		$data['footer']		= $this->temp_model->footer();
		$this->load->view('panduan/panduan_detail',$data);
	}
	function search()
	{
		$key	= $this->input->post('search');
		
		$data['data']		= $this->panduanmodel->search("deskripsi","deskripsi_singkat",$key)->result();
		$data['include']	= $this->temp_model->includeFile();
		$data['header']		= $this->temp_model->headerMenu('0');
		$data['sliderTop']	= $this->temp_model->sliderTop();
		$data['mainmenu']	= $this->temp_model->mainmenu("4");
		$data['pengumuman']	= $this->temp_model->pengumuman();
		$data['polling']	= $this->temp_model->polling();
		$data['login']		= $this->temp_model->login();
		$data['linkterkait']= $this->temp_model->linkterkait();
		$data['testimonial']= $this->temp_model->testimonial();
		$data['footer']		= $this->temp_model->footer();
		$this->load->view('panduan/panduan',$data);
	}
	function search2()
	{	
		$this->cekLogin();
		$key	= $this->input->post('search');
		
		$data['data']		= $this->panduanmodel->search("deskripsi","deskripsi_singkat",$key)->result();
		$data['headermenu']	= $this->backend_model->headermenu();
		$data['mainmenu']	= $this->backend_model->mainmenu("5");
		$this->load->view('panduan/panduan_data',$data);
	}
	function data($offset=0)
	{
		$this->cekLogin();
		$uri_segment = 3;
		$offset = $this->uri->segment($uri_segment);
		$config['base_url'] = site_url('panduan/data/');
		$config['total_rows'] = $this->panduanmodel->count_panduan();
		$config['per_page'] = $this->limit;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		
		$data['data']		= $this->panduanmodel->get_All($this->limit,$offset);
		$data['headermenu']	= $this->backend_model->headermenu();
		$data['mainmenu']	= $this->backend_model->mainmenu("5");
		$this->load->view('panduan/panduan_data',$data);
	}
	function add()
	{
		$this->cekLogin();
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['mainmenu']	= $this->backend_model->mainmenu("5");
		$this->load->view('panduan/panduan_add',$data);
	}
	function simpan()
	{
		$nama		= $this->input->post('nama');
		$des_singkat= $this->input->post('des_singkat');
		$deskripsi	= $this->input->post('deskripsi');
			
			$data = array('judul'=>$nama,'deskripsi'=>$deskripsi,'deskripsi_singkat'=>$des_singkat);
			$this->panduanmodel->save($data);
		
		redirect('panduan/data','refresh');
	}
	function edit($id)
	{
		$this->cekLogin();
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['data']		= $this->panduanmodel->getbyid($id)->result();
		$data['mainmenu']	= $this->backend_model->mainmenu("5");
		$this->load->view('panduan/panduan_edit',$data);
	}
	function simpanedit()
	{
		$id			= $this->input->post('id');
		$nama		= $this->input->post('nama');
		$des_singkat= $this->input->post('des_singkat');
		$deskripsi	= $this->input->post('deskripsi');
			
			$data = array('judul'=>$nama,'deskripsi'=>$deskripsi,'deskripsi_singkat'=>$des_singkat);
			$this->panduanmodel->update($id,$data);
		
		redirect('panduan/data','refresh');
	}
	function hapus($id)
	{
		$this->panduanmodel->delete($id);
		redirect('panduan/data','refresh');
	}
}