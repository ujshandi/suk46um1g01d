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
		$this->load->library('utility');
	}
	function cekLogin()
	{
		if($this->session->userdata('userid')=="")
		{
			redirect(base_url().'backend');
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
	
	
	private function loadDataBack($jenis='terkait',$menuId){
		$this->cekLogin();
		$data = array(
					
					'title_page'=>'Admin Page',
					'title'=>'CPanel',
					'js'=>array(),//'js/flexigrid.pack.js','js/jqModal.js'),
					//'css'=>array('css/flexigrid.pack.css','css/jqModal.css')
					'css'=>array()
				);
		$data['headmenu']	= $this->backend_model->headermenu();
		
		$data['mainmenu']	= $this->backend_model->mainmenu($menuId);
		$data['ckeditor'] = $this->utility->ckeditor_full("editor1",100,450,200);
		return $data;
	}
	
	
	
	function index($offset=0)
	{
		$uri_segment = 3;
		$offset = $this->uri->segment($uri_segment);
		$config['base_url'] = site_url('linkterkait/index/');
		$config['total_rows'] = $this->linkmodel->count_link();
		$config['per_page'] = $this->limit;
		
		$this->pagination->initialize($config);
		$data = $this->loadDataBack('terkait',"4");
		$data['title_page'] = 'Link Terkait';
		$data['pagination'] = $this->pagination->create_links();
		$data['link']		= $this->linkmodel->get_All($this->limit,$offset);
		$data['jenis'] = 'terkait';
		$this->template->set_template("admin");
		$this->template->write_view('wrapper','link/link_data',$data);
		$this->template->render();
	}
	
	function opd($offset=0)
	{
		$uri_segment = 3;
		$offset = $this->uri->segment($uri_segment);
		$config['base_url'] = site_url('linkterkait/opd/');
		$config['total_rows'] = $this->linkmodel->count_link('opd');
		$config['per_page'] = $this->limit;
		$this->pagination->initialize($config);
		$data = $this->loadDataBack('opd',"5");
		$data['title_page'] = 'Tautan OPD';
		$data['jenis'] = 'opd';
		$data['pagination'] = $this->pagination->create_links();
		
		$data['link']		= $this->linkmodel->get_All($this->limit,$offset,'opd');
	
		$this->template->set_template("admin");
		$this->template->write_view('wrapper','link/link_data',$data);
		$this->template->render();
	}
	
	function add()
	{
		$data = $this->loadDataBack('terkait',"4");
		$data['title_page'] = 'Link Terkait';
		$data['jenis'] = 'terkait';
		$this->template->set_template("admin");
		$this->template->write_view('wrapper','link/link_add',$data);
		$this->template->render();
	
	}
	
	function add_opd()
	{
		$data = $this->loadDataBack('opd','5');
		$data['title_page'] = 'Link OPD';
		$data['jenis'] = 'opd';
		$this->template->set_template("admin");
		$this->template->write_view('wrapper','link/link_add',$data);
		$this->template->render();
	}
	function simpan()
	{
		$singkat	= $this->input->post('singkatan');
		$deskripsi	= $this->input->post('deskripsi');
		$url		= $this->input->post('url');
		$img		= $this->input->post('img');
		
		$jenis= $this->input->post('jenis');
		
			$data = array('singkatan'=>$singkat,'deskripsi'=>$deskripsi,'url'=>$url,'jenis'=>$jenis,'img'=>$img);
			$this->linkmodel->save($data);
		
		redirect(base_url().'linkterkait'.($jenis=='opd'?'/opd':''));
	}
	function edit($id)
	{
		$this->cekLogin();
		$data = $this->loadDataBack('opd','5');
		
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['link']		= $this->linkmodel->getbyid($id)->result();
		$data['mainmenu']	= $this->backend_model->mainmenu("9");
		$this->template->set_template("admin");
		$this->template->write_view('wrapper','link/link_edit',$data);
		$this->template->render();
	//	$this->load->view('link/link_edit',$data);
	}
	function edit_opd($id)
	{
		$this->cekLogin();
		$data = $this->loadDataBack('opd','5');
		$data['title_page'] = 'Link OPD';
		$data['jenis'] = 'opd';
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['link']		= $this->linkmodel->getbyid($id)->result();
		$data['mainmenu']	= $this->backend_model->mainmenu("5");
		$this->template->set_template("admin");
		$this->template->write_view('wrapper','link/link_edit',$data);
		$this->template->render();
	//	$this->load->view('link/link_edit',$data);
	}
	function simpanedit()
	{
		$id			= $this->input->post('id');
		$singkat	= $this->input->post('singkatan');
		$deskripsi	= $this->input->post('deskripsi');
		$url		= $this->input->post('url');
		$img		= $this->input->post('img');
			$jenis= $this->input->post('jenis');
			$data	= array('singkatan'=>$singkat,'deskripsi'=>$deskripsi,'url'=>$url,'img'=>$img);
			$this->linkmodel->update($id,$data);
			
		redirect(base_url().'linkterkait'.($jenis=='opd'?'/opd':''));
	}
	function hapus($id,$jenis='opd')
	{
		$this->linkmodel->delete($id);
		redirect(base_url().'linkterkait'.($jenis=='opd'?'/opd':''));
	}
}
