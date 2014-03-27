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
		$this->load->model('settingmodel');
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
		$data['smswalkot'] = $this->settingmodel->get_by_kategori("smswalkot");
		//$data['agenda']		= $this->agendamodel->get_All();
		$data['download']= $this->temp_model->download();
		$data['artikel']= $this->temp_model->artikel();
		return $data;
	}
	
	private function loadTemplateFront($data){
		$this->template->write_view('header','templates/header',$data);
		$this->template->write_view('wrapper','pemerintahan/pemerintahan_detail',$data);
		$this->template->render();
	}
	
	function dprd()
	{	$data = $this->loadDataFront();		
		$data['pemerintahan']	= $this->Pemerintahan_model->get_by_kategori('dprd');	
		$data['title_page']	= 'DPRD';	
		
		$this->loadTemplateFront($data);		
	}
	function walikota()
	{	$data = $this->loadDataFront();		
		$data['pemerintahan']	= $this->Pemerintahan_model->get_by_kategori('walikota');	
		$data['title_page']	= 'Walikota';	
		$this->loadTemplateFront($data);		
	}
	function sekda()
	{	$data = $this->loadDataFront();		
		$data['pemerintahan']	= $this->Pemerintahan_model->get_by_kategori('sekda');	
		$data['title_page']	= 'Sekretariat Daerah';	
		$this->loadTemplateFront($data);		
	}	
	function stafwalikota()
	{	$data = $this->loadDataFront();		
		$data['pemerintahan']	= $this->Pemerintahan_model->get_by_kategori('staf_walikota');	
		$data['title_page']	= 'Staf Walikota';	
		$this->loadTemplateFront($data);		
	}
	function skpd()
	{	$data = $this->loadDataFront();		
		$data['pemerintahan']	= $this->Pemerintahan_model->get_by_kategori('skpd');	
		$data['title_page']	= 'SKPD';	
		$this->loadTemplateFront($data);		
	}
	function kecamatan()
	{	$data = $this->loadDataFront();		
		$data['pemerintahan']	= $this->Pemerintahan_model->get_by_kategori('kecamatan');	
		$data['title_page']	= 'Kecamatan';	
		$this->loadTemplateFront($data);		
	}
	function kelurahan()
	{	$data = $this->loadDataFront();		
		$data['pemerintahan']	= $this->Pemerintahan_model->get_by_kategori('kelurahan');	
		$data['title_page']	= 'Kelurahan';	
		$this->loadTemplateFront($data);		
	}
	function rtrw()
	{	$data = $this->loadDataFront();		
		$data['pemerintahan']	= $this->Pemerintahan_model->get_by_kategori('rtrw');	
		$data['title_page']	= 'RW/RT';	
		$this->loadTemplateFront($data);		
	}
	function kim()
	{	$data = $this->loadDataFront();		
		$data['title_page']	= 'Kelompok Informasi Masyarakat (KIM)';	
		$data['pemerintahan']	= $this->Pemerintahan_model->get_by_kategori('kim');	
		$this->loadTemplateFront($data);		
	}
	
	private function loadDataBack($menuId){
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
		$this->template->write_view('wrapper','pemerintahan/pemerintahan_rec',$data);
		$this->template->render();
	}
	
	function dprdview()
	{
		$data = $this->loadDataBack("2.1");
		$data['kategori'] = 'dprd';		
		$data['title_page']	= 'DPRD';	
		$data['data'] = $this->Pemerintahan_model->get_by_kategori("dprd");
		$this->loadTemplateBack($data);
	}
	
	function walikotaview()
	{
		$data = $this->loadDataBack("2.2");
		$data['kategori'] = 'walikota';
		$data['title_page']	= 'Walikota';	
		$data['data'] = $this->Pemerintahan_model->get_by_kategori("walikota");
		$this->loadTemplateBack($data);
	}
	
	function sekdaview()
	{
		$data = $this->loadDataBack("2.3");
		$data['kategori'] = 'sekda';	
		$data['title_page']	= 'Sekretariat Daerah';			
		$data['data'] = $this->Pemerintahan_model->get_by_kategori("sekda");
		$this->loadTemplateBack($data);
	}
	
	function staf_walikotaview()
	{
		$data = $this->loadDataBack("2.4");
		$data['kategori'] = 'staf_walikota';
		$data['title_page']	= 'Staf Walikota';	
		$data['data'] = $this->Pemerintahan_model->get_by_kategori("staf_walikota");
		$this->loadTemplateBack($data);
	}
	
	function skpdview()
	{
		$data = $this->loadDataBack("2.5");
		$data['kategori'] = 'skpd';
		$data['title_page']	= 'SKPD';	
		$data['data'] = $this->Pemerintahan_model->get_by_kategori("skpd");
		$this->loadTemplateBack($data);
	}
	
	function kecamatanview()
	{
		$data = $this->loadDataBack("2.6");
		$data['kategori'] = 'kecamatan';		
		$data['title_page']	= 'Kecamatan';	
		$data['data'] = $this->Pemerintahan_model->get_by_kategori("kecamatan");
		$this->loadTemplateBack($data);
	}
	
	function kelurahanview()
	{
		$data = $this->loadDataBack("2.7");
		$data['kategori'] = 'kelurahan';
		$data['title_page']	= 'Kelurahan';			
		$data['data'] = $this->Pemerintahan_model->get_by_kategori("kelurahan");
		$this->loadTemplateBack($data);
	}
	
	function rtrwview()
	{
		$data = $this->loadDataBack("2.8");
		$data['kategori'] = 'rtrw';
		$data['title_page']	= 'RW/RT';	
		$data['data'] = $this->Pemerintahan_model->get_by_kategori("rtrw");
		$this->loadTemplateBack($data);
	}
	
	function kimview()
	{
		$data = $this->loadDataBack("2.9");
		$data['kategori'] = 'kim';
		$data['title_page']	= 'Kelompok Informasi Masyarakat (KIM)';	
		$data['data'] = $this->Pemerintahan_model->get_by_kategori("kim");
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
		
			$this->Pemerintahan_model->update($kategori,$data);
			redirect(base_url().'pemerintahan/'.$kategori.'view');
	}
	
	
	
	
	
}
