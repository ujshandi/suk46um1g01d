<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Industri extends CI_Controller {
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
		$this->load->model('Industri_model','',TRUE);
		$this->load->helper('ckeditor');
		$this->load->library('upload');
		$this->load->library('utility');
		//$this->load->library('image_lib') ;
	}
	function cekLogin()
	{
		if($this->session->userdata('userid')=="")
		{
			redirect(base_url().'backend');
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
	
	private function loadDataFront(){
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
		
		$data['mainmenu']	= $this->temp_model->mainmenu("1.2");
		$data['pengumuman']	= $this->temp_model->pengumuman();
		$data['polling']	= $this->temp_model->polling();
		$data['login']		= $this->temp_model->login();
		$data['linkterkait']= $this->temp_model->linkterkait();
		$data['linkopd']= $this->temp_model->linkopd();
		$data['testimonial']= $this->temp_model->testimonial();
		$data['footer']		= $this->temp_model->footer();
		//$data['agenda']		= $this->agendamodel->get_All();
		$data['download']= $this->temp_model->download();
		return $data;
	}
	
	private function loadTemplateFront($data){
		$this->template->write_view('header','templates/header',$data);
		$this->template->write_view('wrapper','industri/industri_detail',$data);
		$this->template->render();
	}
	
	function rencana_strategis()
	{	$data = $this->loadDataFront();		
		$data['industri']	= $this->Industri_model->get_by_kategori('rencana_strategis');	
		$data['title_page']	= 'Perencanaan Strategis';	
		$this->loadTemplateFront($data);		
	}
	
	function daftar_rencana()
	{	$data = $this->loadDataFront();		
		$data['industri']	= $this->Industri_model->get_by_kategori('daftar_rencana');	
		$data['title_page']	= 'Daftar Perencanaan';	
		$this->loadTemplateFront($data);		
	}
	
	function komoditi()
	{	$data = $this->loadDataFront();		
		$data['industri']	= $this->Industri_model->get_by_kategori('komoditi');	
		$data['title_page']	= 'Industri Per Komoditi';	
		$this->loadTemplateFront($data);		
	}
	
	function perkembangan()
	{	$data = $this->loadDataFront();		
		$data['industri']	= $this->Industri_model->get_by_kategori('perkembangan');	
		$data['title_page']	= 'Perkembangan Industri';	
		$this->loadTemplateFront($data);		
	}
	
	function iujk()
	{	$data = $this->loadDataFront();		
		$data['industri']	= $this->Industri_model->get_by_kategori('iujk');	
		$data['title_page']	= 'Daftar IUJK';	
		$this->loadTemplateFront($data);		
	}
	
	function koperasi()
	{	$data = $this->loadDataFront();		
		$data['industri']	= $this->Industri_model->get_by_kategori('koperasi');	
		$data['title_page']	= 'Daftar Koperasi';	
		$this->loadTemplateFront($data);		
	}
	
	function ukm()
	{	$data = $this->loadDataFront();		
		$data['industri']	= $this->Industri_model->get_by_kategori('ukm');	
		$data['title_page']	= 'Daftar UKM';	
		$this->loadTemplateFront($data);		
	}
	
	private function loadDataBack($menuId)
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
		$data['mainmenu']	= $this->backend_model->mainmenu($menuId);
		$data['ckeditor'] = $this->utility->ckeditor_full("editor1",100,"100%",200);
		return $data;
	}
	
	private function loadTemplateBack($data){
		$this->template->set_template("admin");
		$this->template->write_view('wrapper','industri/industri_rec',$data);
		$this->template->render();
	}
	
	function rencana_strategisview()
	{
		$data = $this->loadDataBack("3.1");
		$data['kategori'] = 'rencana_strategis';	
		$data['title_page']	= 'Perencanaan Strategis';	
		$data['data'] = $this->Industri_model->get_by_kategori("rencana_strategis");
		$this->loadTemplateBack($data);
	}
	
	function daftar_rencanaview()
	{
		$data = $this->loadDataBack("3.2");
		$data['kategori'] = 'daftar_rencana';	
		$data['title_page']	= 'Daftar Perencanaan';	
		$data['data'] = $this->Industri_model->get_by_kategori("daftar_rencana");
		$this->loadTemplateBack($data);
	}
	
	function komoditiview()
	{
		$data = $this->loadDataBack("3.3");
		$data['kategori'] = 'komoditi';	
		$data['title_page']	= 'Industri Per Komoditi';	
		$data['data'] = $this->Industri_model->get_by_kategori("komoditi");
		$this->loadTemplateBack($data);
	}
	
	function perkembanganview()
	{
		$data = $this->loadDataBack("3.4");
		$data['kategori'] = 'perkembangan';	
		$data['title_page']	= 'Perkembangan Industri';	
		$data['data'] = $this->Industri_model->get_by_kategori("perkembangan");
		$this->loadTemplateBack($data);
	}
	function iujkview()
	{
		$data = $this->loadDataBack("3.5");
		$data['kategori'] = 'iujk';	
		$data['title_page']	= 'Daftar IUJK';	
		$data['data'] = $this->Industri_model->get_by_kategori("iujk");
		$this->loadTemplateBack($data);
	}
	function koperasiview()
	{
		$data = $this->loadDataBack("3.6");
		$data['kategori'] = 'koperasi';	
		$data['title_page']	= 'Daftar Koperasi';	
		$data['data'] = $this->Industri_model->get_by_kategori("koperasi");
		$this->loadTemplateBack($data);
	}
	function ukmview()
	{
		$data = $this->loadDataBack("3.7");
		$data['kategori'] = 'ukm';	
		$data['title_page']	= 'Daftar UKM';	
		$data['data'] = $this->Industri_model->get_by_kategori("ukm");
		$this->loadTemplateBack($data);
	}
	
	function saveData()
	{
		$kategori	= $this->input->post('txtkategori');
		
		$isi		= $this->input->post('isi');
		$data = array(
				'kategori'	=>$kategori,				
				'isi'			=>$isi
				);
		
			$this->Industri_model->update($kategori,$data);
			redirect(base_url().'industri/'.$kategori.'view');
	}
	
	
	
	
	
}
