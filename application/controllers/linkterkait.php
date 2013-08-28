<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class linkterkait extends CI_Controller {
	private $limit = 10;
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('pagination');
		$this->load->model('backend_model','',TRUE);
		$this->load->model('temp_model','',TRUE);
		$this->load->model('linkmodel','',TRUE);
	}
	function cekLogin()
	{
		if($this->session->userdata('userid')=="")
		{
			redirect('backend');
		}
	}
	function daftarlink($offset=0)
	{
		$uri_segment = 3;
		$offset = $this->uri->segment($uri_segment);
		$config['base_url'] = site_url('linkterkait/daftarlink/');
		$config['total_rows'] = $this->linkmodel->count_link();
		$config['per_page'] = $this->limit;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		$data['offset']		= $offset;
		
		$data['link']		= $this->linkmodel->get_All($this->limit,$offset);
		$data['include']	= $this->temp_model->includeFile();
		$data['header']		= $this->temp_model->headerMenu('0');
		$data['sliderTop']	= $this->temp_model->sliderTop();
		$data['mainmenu']	= $this->temp_model->mainmenu("0");
		$data['pengumuman']	= $this->temp_model->pengumuman();
		$data['polling']	= $this->temp_model->polling();
		$data['login']		= $this->temp_model->login();
		$data['linkterkait']= $this->temp_model->linkterkait();
		$data['testimonial']= $this->temp_model->testimonial();
		$data['footer']		= $this->temp_model->footer();
		$this->load->view('link/link',$data);
	}
	function search()
	{
		$key	= $this->input->post('search');
		
		$data['link']		= $this->linkmodel->search("singkatan","deskripsi",$key)->result();
		$data['include']	= $this->temp_model->includeFile();
		$data['header']		= $this->temp_model->headerMenu('0');
		$data['sliderTop']	= $this->temp_model->sliderTop();
		$data['mainmenu']	= $this->temp_model->mainmenu("0");
		$data['pengumuman']	= $this->temp_model->pengumuman();
		$data['polling']	= $this->temp_model->polling();
		$data['login']		= $this->temp_model->login();
		$data['linkterkait']= $this->temp_model->linkterkait();
		$data['testimonial']= $this->temp_model->testimonial();
		$data['footer']		= $this->temp_model->footer();
		$this->load->view('link/link',$data);
	}
	function search2()
	{
		$this->cekLogin();
		$key	= $this->input->post('search');
		
		$data['link']		= $this->linkmodel->search("singkatan","deskripsi",$key)->result();
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['mainmenu']	= $this->backend_model->mainmenu("9");
		$this->load->view('link/link_data',$data);
	}
	function index($offset=0)
	{
		$uri_segment = 3;
		$offset = $this->uri->segment($uri_segment);
		$config['base_url'] = site_url('linkterkait/index/');
		$config['total_rows'] = $this->linkmodel->count_link();
		$config['per_page'] = $this->limit;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['link']		= $this->linkmodel->get_All($this->limit,$offset);
		$data['mainmenu']	= $this->backend_model->mainmenu("9");
		$this->load->view('link/link_data',$data);
	}
	function add()
	{
		$this->cekLogin();
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['mainmenu']	= $this->backend_model->mainmenu("9");
		$this->load->view('link/link_add',$data);
	}
	function simpan()
	{
		$singkat	= $this->input->post('singkatan');
		$deskripsi	= $this->input->post('deskripsi');
		$url		= $this->input->post('url');
		
			$data = array('singkatan'=>$singkat,'deskripsi'=>$deskripsi,'url'=>$url);
			$this->linkmodel->save($data);
		
		redirect('linkterkait','refresh');
	}
	function edit($id)
	{
		$this->cekLogin();
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['link']		= $this->linkmodel->getbyid($id)->result();
		$data['mainmenu']	= $this->backend_model->mainmenu("9");
		$this->load->view('link/link_edit',$data);
	}
	function simpanedit()
	{
		$id			= $this->input->post('id');
		$singkat	= $this->input->post('singkatan');
		$deskripsi	= $this->input->post('deskripsi');
		$url		= $this->input->post('url');
		
			$data	= array('singkatan'=>$singkat,'deskripsi'=>$deskripsi,'url'=>$url);
			$this->linkmodel->update($id,$data);
			
		redirect('linkterkait','refresh');
	}
	function hapus($id)
	{
		$this->linkmodel->delete($id);
		redirect('linkterkait','refresh');
	}
}