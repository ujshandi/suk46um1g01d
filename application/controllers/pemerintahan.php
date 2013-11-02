<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Pemerintahan extends CI_Controller {
 	var $file_gambar;
	private $limit = 5;
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('file');
		$this->load->model('backend_model');
		$this->load->model('temp_model');
		$this->load->model('Pemerintahan_model','',TRUE);
		$this->load->helper('ckeditor');
		$this->load->library('upload');
		$this->load->library('utility');
		//$this->load->library('image_lib') ;
	}
	function cekLogin()
	{
		if($this->session->userdata('userid')=="")
		{
			redirect('backend');
		}
	}
	public function index($offset=0)
	{
		$this->cekLogin();
		$data = array(
					
					'title_page'=>'Admin Page',
					'title'=>'CPanel',
					'js'=>array(),//'js/flexigrid.pack.js','js/jqModal.js'),
					//'css'=>array('css/flexigrid.pack.css','css/jqModal.css')
					'css'=>array()
				);
		$uri_segment = 3;
		$offset = $this->uri->segment($uri_segment);
		$this->load->library('pagination');
		$config['base_url'] = site_url('berita/index/');
		$config['total_rows'] = $this->Berita_model->count_data();
		$config['per_page'] = $this->limit;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		$data['offset']=$offset;
		
		$data['fields'] 	= $this->Berita_model->getAll($this->limit,$offset);
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['mainmenu']	= $this->backend_model->mainmenu("10");
		$data['jumlah']		= $this->Berita_model->count_data();
		
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['mainmenu']	= $this->backend_model->mainmenu("10");
		$this->template->set_template("admin");
		$this->template->write_view('wrapper','berita/berita_data',$data);
		$this->template->render();
		//$this->load->view('berita/berita_data',$data);
	}
	
	function detail($id)
	{
		$data['data']		= $this->Berita_model->get_by_id($id)->result();
		$data['include']	= $this->temp_model->includeFile();
		$data['header']		= $this->temp_model->headerMenu('0');
		$data['sliderTop']	= $this->temp_model->sliderTop();
		$data['mainmenu']	= $this->temp_model->mainmenu("9");
		$data['pengumuman']	= $this->temp_model->pengumuman();
		$data['polling']	= $this->temp_model->polling();
		$data['login']		= $this->temp_model->login();
		$data['linkterkait']= $this->temp_model->linkterkait();
		$data['testimonial']= $this->temp_model->testimonial();
		$data['footer']		= $this->temp_model->footer();
		$this->load->view('berita/berita_detail',$data);
	}
	
	function dprd()
	{
			$data = array(
					
					'title_page'=>'DPRD',
					'title'=>'CPanel',
					'js'=>array(),//'js/flexigrid.pack.js','js/jqModal.js'),
					//'css'=>array('css/flexigrid.pack.css','css/jqModal.css')
					'css'=>array()
				);
		$data['include']	= $this->temp_model->includeFile();
		$data['header']		= $this->temp_model->headerMenu('0');
		$data['sliderTop']	= $this->temp_model->sliderTop();
		$data['pemerintahan']	= $this->Pemerintahan_model->get_by_kategori('dprd');
		$data['mainmenu']	= $this->temp_model->mainmenu("1.2");
		$data['pengumuman']	= $this->temp_model->pengumuman();
		$data['polling']	= $this->temp_model->polling();
		$data['login']		= $this->temp_model->login();
		$data['linkterkait']= $this->temp_model->linkterkait();
		$data['testimonial']= $this->temp_model->testimonial();
		$data['footer']		= $this->temp_model->footer();
		//$data['agenda']		= $this->agendamodel->get_All();
		$data['download']= $this->temp_model->download();
		$this->template->write_view('header','templates/header',$data);
		$this->template->write_view('wrapper','pemerintahan/pemerintahan_detail',$data);
		$this->template->render();
		//$this->load->view('profil/sejarah',$data);
	}
	
	function dprdview()
	{
		$this->cekLogin();
		$data = array(
					
					'title_page'=>'Admin Page',
					'title'=>'CPanel',
					'js'=>array(),//'js/flexigrid.pack.js','js/jqModal.js'),
					//'css'=>array('css/flexigrid.pack.css','css/jqModal.css')
					'css'=>array()
				);
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['mainmenu']	= $this->backend_model->mainmenu("10");
		$data['ckeditor'] = $this->utility->ckeditor_full("editor1",100,450,200);
		$data['kategori'] = 'dprd';
		//var_dump($this->Pemerintahan_model->get_by_kategori("dprd")->result());
		$data['data'] = $this->Pemerintahan_model->get_by_kategori("dprd");
		
		$this->template->set_template("admin");
		$this->template->write_view('wrapper','pemerintahan/pemerintahan_rec',$data);
		$this->template->render();

	}
	
	function saveData()
	{
		$kategori	= $this->input->post('txtkategori');
		
		$isi		= $this->input->post('isi');
		$data = array(
				'kategori'	=>$kategori,				
				'isi'			=>$isi
				);
		
			$this->Pemerintahan_model->update($kategori,$data);
			redirect('pemerintahan/'.$kategori.'view','refresh');
	}
	
	
	
	
	
}
