<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Informasi_umum extends CI_Controller {
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
		$this->load->model('informasimodel','',TRUE);
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
		return $data;
	}
	
	private function loadTemplateFront($data){
		$this->template->write_view('header','templates/header',$data);
		$this->template->write_view('wrapper','informasi_umum/informasi_detail',$data);
		$this->template->render();
	}
	
	function tk()
	{	$data = $this->loadDataFront();		
		$data['informasi_umum']	= $this->informasimodel->get_by_kategori('tk');	
		$data['title_page']	= 'TK/RA';			
		$this->loadTemplateFront($data);		
	}
	function sd()
	{	$data = $this->loadDataFront();		
		$data['informasi_umum']	= $this->informasimodel->get_by_kategori('sd');	
		$data['title_page']	= 'SD/MI';			
		$this->loadTemplateFront($data);		
	}
	function smp()
	{	$data = $this->loadDataFront();		
		$data['informasi_umum']	= $this->informasimodel->get_by_kategori('smp');	
		$data['title_page']	= 'SMP/MTS';			
		$this->loadTemplateFront($data);		
	}
	function sma()
	{	$data = $this->loadDataFront();		
		$data['informasi_umum']	= $this->informasimodel->get_by_kategori('sma');	
		$data['title_page']	= 'SMA/MA';			
		$this->loadTemplateFront($data);		
	}
	
	function smk()
	{	$data = $this->loadDataFront();		
		$data['informasi_umum']	= $this->informasimodel->get_by_kategori('smk');	
		$data['title_page']	= 'SMK';			
		$this->loadTemplateFront($data);		
	}
	
	function pt()
	{	$data = $this->loadDataFront();		
		$data['informasi_umum']	= $this->informasimodel->get_by_kategori('pt');	
		$data['title_page']	= 'Perguruan Tinggi';			
		$this->loadTemplateFront($data);		
	}
	function kursus()
	{	$data = $this->loadDataFront();		
		$data['informasi_umum']	= $this->informasimodel->get_by_kategori('kursus');	
		$data['title_page']	= 'Kursus';			
		$this->loadTemplateFront($data);		
	}
	function bimbel()
	{	$data = $this->loadDataFront();		
		$data['informasi_umum']	= $this->informasimodel->get_by_kategori('bimbel');	
		$data['title_page']	= 'Bimbingan Belajar';			
		$this->loadTemplateFront($data);		
	}
	function rs()
	{	$data = $this->loadDataFront();		
		$data['informasi_umum']	= $this->informasimodel->get_by_kategori('rs');	
		$data['title_page']	= 'Rumah Sakit';			
		$this->loadTemplateFront($data);		
	}
	function puskesmas()
	{	$data = $this->loadDataFront();		
		$data['informasi_umum']	= $this->informasimodel->get_by_kategori('puskesmas');	
		$data['title_page']	= 'Puskesmas';			
		$this->loadTemplateFront($data);		
	}
	function apotek()
	{	$data = $this->loadDataFront();		
		$data['informasi_umum']	= $this->informasimodel->get_by_kategori('apotek');	
		$data['title_page']	= 'Apotek';			
		$this->loadTemplateFront($data);		
	}
	
	function klinik()
	{	$data = $this->loadDataFront();		
		$data['informasi_umum']	= $this->informasimodel->get_by_kategori('klinik');	
		$data['title_page']	= 'Klinik';			
		$this->loadTemplateFront($data);		
	}
	function lab()
	{	$data = $this->loadDataFront();		
		$data['informasi_umum']	= $this->informasimodel->get_by_kategori('lab');	
		$data['title_page']	= 'Laboratorium';			
		$this->loadTemplateFront($data);		
	}
	function rekreasi()
	{	$data = $this->loadDataFront();		
		$data['informasi_umum']	= $this->informasimodel->get_by_kategori('rekreasi');	
		$data['title_page']	= 'Rekreasi';			
		$this->loadTemplateFront($data);		
	}
	function belanja()
	{	$data = $this->loadDataFront();		
		$data['informasi_umum']	= $this->informasimodel->get_by_kategori('belanja');	
		$data['title_page']	= 'Belanja';			
		$this->loadTemplateFront($data);		
	}
	function olahraga()
	{	$data = $this->loadDataFront();		
		$data['informasi_umum']	= $this->informasimodel->get_by_kategori('olahraga');	
		$data['title_page']	= 'Olahraga';			
		$this->loadTemplateFront($data);		
	}
	function hotel()
	{	$data = $this->loadDataFront();		
		$data['informasi_umum']	= $this->informasimodel->get_by_kategori('hotel');	
		$data['title_page']	= 'Hotel';			
		$this->loadTemplateFront($data);		
	}
	function restoran()
	{	$data = $this->loadDataFront();		
		$data['informasi_umum']	= $this->informasimodel->get_by_kategori('restoran');	
		$data['title_page']	= 'Restoran';			
		$this->loadTemplateFront($data);		
	}
	function radio()
	{	$data = $this->loadDataFront();		
		$data['informasi_umum']	= $this->informasimodel->get_by_kategori('radio');	
		$data['title_page']	= 'Radio/Televisi';			
		$this->loadTemplateFront($data);		
	}
	function bumd()
	{	$data = $this->loadDataFront();		
		$data['informasi_umum']	= $this->informasimodel->get_by_kategori('bumd');	
		$data['title_page']	= 'BUMD';			
		$this->loadTemplateFront($data);		
	}
	function ibadah()
	{	$data = $this->loadDataFront();		
		$data['informasi_umum']	= $this->informasimodel->get_by_kategori('ibadah');	
		$data['title_page']	= 'Sarana Ibadah';			
		$this->loadTemplateFront($data);		
	}
	
	function bank()
	{	$data = $this->loadDataFront();		
		$data['informasi_umum']	= $this->informasimodel->get_by_kategori('bank');	
		$data['title_page']	= 'Perbankan';			
		$this->loadTemplateFront($data);		
	}
	function atm()
	{	$data = $this->loadDataFront();		
		$data['informasi_umum']	= $this->informasimodel->get_by_kategori('atm');	
		$data['title_page']	= 'ATM';			
		$this->loadTemplateFront($data);		
	}
	function transportasi()
	{	$data = $this->loadDataFront();		
		$data['informasi_umum']	= $this->informasimodel->get_by_kategori('transportasi');	
		$data['title_page']	= 'Transportasi';			
		$this->loadTemplateFront($data);		
	}
	function panti()
	{	$data = $this->loadDataFront();		
		$data['informasi_umum']	= $this->informasimodel->get_by_kategori('panti');	
		$data['title_page']	= 'Panti Asuhan';			
		$this->loadTemplateFront($data);		
	}
	function asuransi()
	{	$data = $this->loadDataFront();		
		$data['informasi_umum']	= $this->informasimodel->get_by_kategori('asuransi');	
		$data['title_page']	= 'Asuransi';			
		$this->loadTemplateFront($data);		
	}
	function gedung()
	{	$data = $this->loadDataFront();		
		$data['informasi_umum']	= $this->informasimodel->get_by_kategori('gedung');	
		$data['title_page']	= 'Gedung Pertemuan';			
		$this->loadTemplateFront($data);		
	}
	function terminal()
	{	$data = $this->loadDataFront();		
		$data['informasi_umum']	= $this->informasimodel->get_by_kategori('terminal');	
		$data['title_page']	= 'Terminal/POM Bensin';			
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
		$this->template->write_view('wrapper','informasi_umum/informasi_rec',$data);
		$this->template->render();
	}
	
	function tkview()
	{
		$data = $this->loadDataBack("6.1.1");
		$data['kategori'] = 'tk';		
		$data['title_page']	= 'TK/RA';	
		$data['data'] = $this->informasimodel->get_by_kategori("tk");
		$this->loadTemplateBack($data);
	}
	
	function sdview()
	{
		$data = $this->loadDataBack("6.1.2");
		$data['kategori'] = 'sd';
		$data['title_page']	= 'SD/MI';	
		$data['data'] = $this->informasimodel->get_by_kategori("sd");
		$this->loadTemplateBack($data);
	}
	
	function smpview()
	{
		$data = $this->loadDataBack("6.1.3");
		$data['kategori'] = 'smp';	
		$data['title_page']	= 'SMP/MTS';			
		$data['data'] = $this->informasimodel->get_by_kategori("smp");
		$this->loadTemplateBack($data);
	}
	
	function smaview()
	{
		$data = $this->loadDataBack("6.1.4");
		$data['kategori'] = 'sma';
		$data['title_page']	= 'SMA/MA';	
		$data['data'] = $this->informasimodel->get_by_kategori("sma");
		$this->loadTemplateBack($data);
	}
	
	function smkview()
	{
		$data = $this->loadDataBack("6.1.5");
		$data['kategori'] = 'smk';
		$data['title_page']	= 'SMK';	
		$data['data'] = $this->informasimodel->get_by_kategori("smk");
		$this->loadTemplateBack($data);
	}
	
	function ptview()
	{
		$data = $this->loadDataBack("2.1.6");
		$data['kategori'] = 'pt';		
		$data['title_page']	= 'Perguruan Tinggi';	
		$data['data'] = $this->informasimodel->get_by_kategori("pt");
		$this->loadTemplateBack($data);
	}
	
	function kursusview()
	{
		$data = $this->loadDataBack("6.1.7");
		$data['kategori'] = 'kursus';
		$data['title_page']	= 'Kursus';			
		$data['data'] = $this->informasimodel->get_by_kategori("kursus");
		$this->loadTemplateBack($data);
	}
	
	function bimbelview()
	{
		$data = $this->loadDataBack("6.1.8");
		$data['kategori'] = 'bimbel';
		$data['title_page']	= 'Bimbingan Belajar';	
		$data['data'] = $this->informasimodel->get_by_kategori("bimbel");
		$this->loadTemplateBack($data);
	}
	
	function rsview()
	{
		$data = $this->loadDataBack("6.2.1");
		$data['kategori'] = 'rs';
		$data['title_page']	= 'Rumah Sakit';	
		$data['data'] = $this->informasimodel->get_by_kategori("rs");
		$this->loadTemplateBack($data);
	}
	
	function puskesmasview()
	{
		$data = $this->loadDataBack("6.2.2");
		$data['kategori'] = 'puskesmas';
		$data['title_page']	= 'Puskesmas';	
		$data['data'] = $this->informasimodel->get_by_kategori($data['kategori']);
		$this->loadTemplateBack($data);
	}
	function klinikview()
	{
		$data = $this->loadDataBack("6.2.3");
		$data['kategori'] = 'klinik';
		$data['title_page']	= 'Klinik';	
		$data['data'] = $this->informasimodel->get_by_kategori($data['kategori']);
		$this->loadTemplateBack($data);
	}
	
	function apotekview()
	{
		$data = $this->loadDataBack("6.2.4");
		$data['kategori'] = 'apotek';
		$data['title_page']	= 'Apotek';	
		$data['data'] = $this->informasimodel->get_by_kategori($data['kategori']);
		$this->loadTemplateBack($data);
	}
	
	function labview()
	{
		$data = $this->loadDataBack("6.2.5");
		$data['kategori'] = 'lab';
		$data['title_page']	= 'Laboratorium';	
		$data['data'] = $this->informasimodel->get_by_kategori($data['kategori']);
		$this->loadTemplateBack($data);
	}
	
	function rekreasiview()
	{
		$data = $this->loadDataBack("6.3.1");
		$data['kategori'] = 'rekreasi';
		$data['title_page']	= 'Rekreasi';	
		$data['data'] = $this->informasimodel->get_by_kategori($data['kategori']);
		$this->loadTemplateBack($data);
	}
	
	function belanjaview()
	{
		$data = $this->loadDataBack("6.3.2");
		$data['kategori'] = 'belanja';
		$data['title_page']	= 'Belanja';	
		$data['data'] = $this->informasimodel->get_by_kategori($data['kategori']);
		$this->loadTemplateBack($data);
	}
	function olahragaview()
	{
		$data = $this->loadDataBack("6.3.3");
		$data['kategori'] = 'olahraga';
		$data['title_page']	= 'Olahraga';	
		$data['data'] = $this->informasimodel->get_by_kategori($data['kategori']);
		$this->loadTemplateBack($data);
	}
	function hotelview()
	{
		$data = $this->loadDataBack("6.3.4");
		$data['kategori'] = 'hotel';
		$data['title_page']	= 'Hotel';	
		$data['data'] = $this->informasimodel->get_by_kategori($data['kategori']);
		$this->loadTemplateBack($data);
	}
	function restoranview()
	{
		$data = $this->loadDataBack("6.3.5");
		$data['kategori'] = 'restoran';
		$data['title_page']	= 'Restoran';	
		$data['data'] = $this->informasimodel->get_by_kategori($data['kategori']);
		$this->loadTemplateBack($data);
	}
	
	function radioview()
	{
		$data = $this->loadDataBack("6.3.6");
		$data['kategori'] = 'radio';
		$data['title_page']	= 'Radio/Televisi';	
		$data['data'] = $this->informasimodel->get_by_kategori($data['kategori']);
		$this->loadTemplateBack($data);
	}
	function bumdview()
	{
		$data = $this->loadDataBack("6.4");
		$data['kategori'] = 'bumd';
		$data['title_page']	= 'BUMD';	
		$data['data'] = $this->informasimodel->get_by_kategori($data['kategori']);
		$this->loadTemplateBack($data);
	}
	
	function ibadahview()
	{
		$data = $this->loadDataBack("6.5.1");
		$data['kategori'] = 'ibadah';
		$data['title_page']	= 'Sarana Ibadah';	
		$data['data'] = $this->informasimodel->get_by_kategori($data['kategori']);
		$this->loadTemplateBack($data);
	}
	function bankview()
	{
		$data = $this->loadDataBack("6.5.2");
		$data['kategori'] = 'bank';
		$data['title_page']	= 'Perbankan';	
		$data['data'] = $this->informasimodel->get_by_kategori($data['kategori']);
		$this->loadTemplateBack($data);
	}
	
	function atmview()
	{
		$data = $this->loadDataBack("6.5.3");
		$data['kategori'] = 'atm';
		$data['title_page']	= 'ATM';	
		$data['data'] = $this->informasimodel->get_by_kategori($data['kategori']);
		$this->loadTemplateBack($data);
	}
	function transportasiview()
	{
		$data = $this->loadDataBack("6.5.4");
		$data['kategori'] = 'transportasi';
		$data['title_page']	= 'Transportasi';	
		$data['data'] = $this->informasimodel->get_by_kategori($data['kategori']);
		$this->loadTemplateBack($data);
	}
	function pantiview()
	{
		$data = $this->loadDataBack("6.5.5");
		$data['kategori'] = 'panti';
		$data['title_page']	= 'Panti Asuhan';	
		$data['data'] = $this->informasimodel->get_by_kategori($data['kategori']);
		$this->loadTemplateBack($data);
	}
	function asuransiview()
	{
		$data = $this->loadDataBack("6.5.6");
		$data['kategori'] = 'asuransi';
		$data['title_page']	= 'Asuransi';	
		$data['data'] = $this->informasimodel->get_by_kategori($data['kategori']);
		$this->loadTemplateBack($data);
	}
	
	function gedungview()
	{
		$data = $this->loadDataBack("6.5.7");
		$data['kategori'] = 'gedung';
		$data['title_page']	= 'Gedung Pertemuan';	
		$data['data'] = $this->informasimodel->get_by_kategori($data['kategori']);
		$this->loadTemplateBack($data);
	}
	
	function terminalview()
	{
		$data = $this->loadDataBack("6.5.8");
		$data['kategori'] = 'terminal';
		$data['title_page']	= 'Terminal/POM Bensin';	
		$data['data'] = $this->informasimodel->get_by_kategori($data['kategori']);
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
		
			$this->informasimodel->update($kategori,$data);
			redirect(base_url().'informasi_umum/'.$kategori.'view');
	}
	
	
	
	
	
}
