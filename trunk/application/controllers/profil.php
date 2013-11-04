<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class profil extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('temp_model','',TRUE);
		$this->load->model('backend_model','',TRUE);
		$this->load->model('informasimodel','',TRUE);
		$this->load->model('agendamodel','',TRUE);
		$this->load->helper('ckeditor');
		$this->load->library('utility');
	}
	function cekLogin()
	{
		if($this->session->userdata('userid')=="")
		{
			redirect('backend');
		}
	}
	function visi_misi()
	{
		$data = array(
					
					'title_page'=>'Visi Misi '.COMPANY_NAME,
					'title'=>'CPanel',
					'js'=>array(),//'js/flexigrid.pack.js','js/jqModal.js'),
					//'css'=>array('css/flexigrid.pack.css','css/jqModal.css')
					'css'=>array()
				);
		$data['include']	= $this->temp_model->includeFile();
		$data['header']		= $this->temp_model->headerMenu('0');
		//$data['sliderTop']	= $this->temp_model->sliderTop();
		$data['visi']		= $this->informasimodel->getbykategori('visi');
		$data['misi']		= $this->informasimodel->getbykategori('misi');
		$data['mainmenu']	= $this->temp_model->mainmenu("1.1");
		$data['agenda']		= $this->agendamodel->get_All();
		$data['download']= $this->temp_model->download();
		
		$data['login']		= $this->temp_model->login();
		$data['linkterkait']= $this->temp_model->linkterkait();
		$data['testimonial']= $this->temp_model->testimonial();		
		$data['polling']	= $this->temp_model->polling();
		//$data['pengumuman']	= $this->temp_model->pengumuman();
		//$data['polling']	= $this->temp_model->polling();
	//	$data['login']		= $this->temp_model->login();
	//	$data['linkterkait']= $this->temp_model->linkterkait();
		//$data['testimonial']= $this->temp_model->testimonial();
		$data['footer']		= $this->temp_model->footer();
		
		$this->template->write_view('header','templates/header',$data);
		$this->template->write_view('wrapper','profil/visi_misi',$data);
		$this->template->render();
		//$this->load->view('profil/visi_misi',$data);
	}
	
	function geografis()
	{
		$data = array(
					
					'title_page'=>'Geografi dan Demografi '.COMPANY_NAME,
					'title'=>'CPanel',
					'js'=>array(),//'js/flexigrid.pack.js','js/jqModal.js'),
					//'css'=>array('css/flexigrid.pack.css','css/jqModal.css')
					'css'=>array()
				);
		$data['include']	= $this->temp_model->includeFile();
		$data['header']		= $this->temp_model->headerMenu('0');
		//$data['sliderTop']	= $this->temp_model->sliderTop();
		$data['geografi']		= $this->informasimodel->getbykategori('geografi');
		
		$data['mainmenu']	= $this->temp_model->mainmenu("1.1");
		$data['agenda']		= $this->agendamodel->get_All();
		$data['download']= $this->temp_model->download();
			$data['login']		= $this->temp_model->login();
		$data['linkterkait']= $this->temp_model->linkterkait();
		$data['testimonial']= $this->temp_model->testimonial();
		$data['download']= $this->temp_model->download();
		$data['polling']	= $this->temp_model->polling();
		//$data['pengumuman']	= $this->temp_model->pengumuman();
		//$data['polling']	= $this->temp_model->polling();
	//	$data['login']		= $this->temp_model->login();
	//	$data['linkterkait']= $this->temp_model->linkterkait();
		//$data['testimonial']= $this->temp_model->testimonial();
		$data['footer']		= $this->temp_model->footer();
		
		$this->template->write_view('header','templates/header',$data);
		$this->template->write_view('wrapper','profil/geografis',$data);
		$this->template->render();
		//$this->load->view('profil/visi_misi',$data);
	}
	
	function lambang()
	{
		$data = array(
					
					'title_page'=>'Lambang '.COMPANY_NAME,
					'title'=>'CPanel',
					'js'=>array(),//'js/flexigrid.pack.js','js/jqModal.js'),
					//'css'=>array('css/flexigrid.pack.css','css/jqModal.css')
					'css'=>array()
				);
		$data['include']	= $this->temp_model->includeFile();
		$data['header']		= $this->temp_model->headerMenu('0');
		//$data['sliderTop']	= $this->temp_model->sliderTop();
		$data['lambang']		= $this->informasimodel->getbykategori('lambang');
		
		$data['mainmenu']	= $this->temp_model->mainmenu("1.1");
		$data['agenda']		= $this->agendamodel->get_All();
		$data['download']= $this->temp_model->download();
			$data['login']		= $this->temp_model->login();
		$data['linkterkait']= $this->temp_model->linkterkait();
		$data['testimonial']= $this->temp_model->testimonial();
		$data['download']= $this->temp_model->download();
		$data['polling']	= $this->temp_model->polling();
		//$data['pengumuman']	= $this->temp_model->pengumuman();
		//$data['polling']	= $this->temp_model->polling();
	//	$data['login']		= $this->temp_model->login();
	//	$data['linkterkait']= $this->temp_model->linkterkait();
		//$data['testimonial']= $this->temp_model->testimonial();
		$data['footer']		= $this->temp_model->footer();
		
		$this->template->write_view('header','templates/header',$data);
		$this->template->write_view('wrapper','profil/lambang',$data);
		$this->template->render();
		//$this->load->view('profil/visi_misi',$data);
	}
	function sejarah()
	{
			$data = array(
					
					'title_page'=>'Sejarah '.COMPANY_NAME,
					'title'=>'CPanel',
					'js'=>array(),//'js/flexigrid.pack.js','js/jqModal.js'),
					//'css'=>array('css/flexigrid.pack.css','css/jqModal.css')
					'css'=>array()
				);
		$data['include']	= $this->temp_model->includeFile();
		$data['header']		= $this->temp_model->headerMenu('0');
		$data['sliderTop']	= $this->temp_model->sliderTop();
		$data['sejarah']	= $this->informasimodel->getbykategori('sejarah');
		$data['mainmenu']	= $this->temp_model->mainmenu("1.2");
		$data['pengumuman']	= $this->temp_model->pengumuman();
		$data['polling']	= $this->temp_model->polling();
		$data['login']		= $this->temp_model->login();
		$data['linkterkait']= $this->temp_model->linkterkait();
		$data['testimonial']= $this->temp_model->testimonial();
		$data['footer']		= $this->temp_model->footer();
		$data['agenda']		= $this->agendamodel->get_All();
		$data['download']= $this->temp_model->download();
		$this->template->write_view('header','templates/header',$data);
		$this->template->write_view('wrapper','profil/sejarah',$data);
		$this->template->render();
		//$this->load->view('profil/sejarah',$data);
	}
	
	function sosial()
	{
			$data = array(
					
					'title_page'=>'Sosial dan Ekonomi '.COMPANY_NAME,
					'title'=>'CPanel',
					'js'=>array(),//'js/flexigrid.pack.js','js/jqModal.js'),
					//'css'=>array('css/flexigrid.pack.css','css/jqModal.css')
					'css'=>array()
				);
		$data['include']	= $this->temp_model->includeFile();
		$data['header']		= $this->temp_model->headerMenu('0');
		$data['sliderTop']	= $this->temp_model->sliderTop();
		$data['sosial']	= $this->informasimodel->getbykategori('sosial');
		$data['mainmenu']	= $this->temp_model->mainmenu("1.2");
		$data['pengumuman']	= $this->temp_model->pengumuman();
		$data['polling']	= $this->temp_model->polling();
		$data['login']		= $this->temp_model->login();
		$data['linkterkait']= $this->temp_model->linkterkait();
		$data['testimonial']= $this->temp_model->testimonial();
		$data['footer']		= $this->temp_model->footer();
		$data['agenda']		= $this->agendamodel->get_All();
		$data['download']= $this->temp_model->download();
		$this->template->write_view('header','templates/header',$data);
		$this->template->write_view('wrapper','profil/sosial',$data);
		$this->template->render();
		//$this->load->view('profil/sejarah',$data);
	}
	
	function angka()
	{
			$data = array(
					
					'title_page'=>'Sukabumi Dalam Angka ',
					'title'=>'CPanel',
					'js'=>array(),//'js/flexigrid.pack.js','js/jqModal.js'),
					//'css'=>array('css/flexigrid.pack.css','css/jqModal.css')
					'css'=>array()
				);
		$data['include']	= $this->temp_model->includeFile();
		$data['header']		= $this->temp_model->headerMenu('0');
		$data['sliderTop']	= $this->temp_model->sliderTop();
		$data['angka']	= $this->informasimodel->getbykategori('angka');
		$data['mainmenu']	= $this->temp_model->mainmenu("1.2");
		$data['pengumuman']	= $this->temp_model->pengumuman();
		$data['polling']	= $this->temp_model->polling();
		$data['login']		= $this->temp_model->login();
		$data['linkterkait']= $this->temp_model->linkterkait();
		$data['testimonial']= $this->temp_model->testimonial();
		$data['footer']		= $this->temp_model->footer();
		$data['agenda']		= $this->agendamodel->get_All();
		$data['download']= $this->temp_model->download();
		$this->template->write_view('header','templates/header',$data);
		$this->template->write_view('wrapper','profil/angka',$data);
		$this->template->render();
		//$this->load->view('profil/sejarah',$data);
	}
	function struktur()
	{
		$data['include']	= $this->temp_model->includeFile();
		$data['header']		= $this->temp_model->headerMenu('0');
		$data['sliderTop']	= $this->temp_model->sliderTop();
		$data['mainmenu']	= $this->temp_model->mainmenu("1.3");
		$data['pengumuman']	= $this->temp_model->pengumuman();
		$data['polling']	= $this->temp_model->polling();
		$data['login']		= $this->temp_model->login();
		$data['linkterkait']= $this->temp_model->linkterkait();
		$data['testimonial']= $this->temp_model->testimonial();
		$data['footer']		= $this->temp_model->footer();
		$this->load->view('profil/struktur_organisasi',$data);
	}
	function sarpras()
	{
		$data['sarpras']	= $this->informasimodel->getbykategori('sarpras');
		$data['include']	= $this->temp_model->includeFile();
		$data['header']		= $this->temp_model->headerMenu('0');
		$data['sliderTop']	= $this->temp_model->sliderTop();
		$data['mainmenu']	= $this->temp_model->mainmenu("1.4");
		$data['pengumuman']	= $this->temp_model->pengumuman();
		$data['polling']	= $this->temp_model->polling();
		$data['login']		= $this->temp_model->login();
		$data['linkterkait']= $this->temp_model->linkterkait();
		$data['testimonial']= $this->temp_model->testimonial();
		$data['footer']		= $this->temp_model->footer();
		$this->load->view('profil/sarpras',$data);
	}
	function prestasi()
	{
		$data['prestasi']	= $this->informasimodel->getbykategori('prestasi');
		$data['include']	= $this->temp_model->includeFile();
		$data['header']		= $this->temp_model->headerMenu('0');
		$data['sliderTop']	= $this->temp_model->sliderTop();
		$data['mainmenu']	= $this->temp_model->mainmenu("1.5");
		$data['pengumuman']	= $this->temp_model->pengumuman();
		$data['polling']	= $this->temp_model->polling();
		$data['login']		= $this->temp_model->login();
		$data['linkterkait']= $this->temp_model->linkterkait();
		$data['testimonial']= $this->temp_model->testimonial();
		$data['footer']		= $this->temp_model->footer();
		$this->load->view('profil/prestasi',$data);
	}
	function visimisi()
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
		$data['visi']		= $this->informasimodel->getbykategori('visi');
		$data['misi']		= $this->informasimodel->getbykategori('misi');
		$data['mainmenu']	= $this->backend_model->mainmenu("1.2");
		$data['ckeditor'] = $this->utility->ckeditor_full("editor1",100,"100%",200);
		$data['ckeditor2'] = $this->utility->ckeditor_full("editor2",100,"100%",200);
		$this->template->set_template("admin");
//		$this->template->write_view('header','templates/header_admin',$data);
		$this->template->write_view('wrapper','profil/visimisi_edit',$data);
		$this->template->render();
		//$this->load->view('profil/visimisi_edit',$data);
	}
	function updatevisimisi()
	{
		$visi	= $this->input->post('visi');
		$misi	= $this->input->post('misi');
		
			$data1=array('isi'=>$visi);
			$this->informasimodel->update('visi',$data1);
			
			$data2=array('isi'=>$misi);
			$this->informasimodel->update('misi',$data2);
			
		redirect('profil/visimisi','refresh');
	}
	function sejarahview()
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
		$data['sejarah']	= $this->informasimodel->getbykategori('sejarah');
		$data['mainmenu']	= $this->backend_model->mainmenu("1.1");
		$data['ckeditor'] = $this->utility->ckeditor_full("editor1",100,"100%",200);
		$this->template->set_template("admin");
//		$this->template->write_view('header','templates/header_admin',$data);
		$this->template->write_view('wrapper','profil/sejarah_edit',$data);
		$this->template->render();
		//$this->load->view('profil/sejarah_edit',$data);
	}
	
	function geografiview()
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
		$data['geografi']	= $this->informasimodel->getbykategori('geografi');
		$data['mainmenu']	= $this->backend_model->mainmenu("1.4");
		$data['ckeditor'] = $this->utility->ckeditor_full("editor1",100,"100%",200);
		$this->template->set_template("admin");
//		$this->template->write_view('header','templates/header_admin',$data);
		$this->template->write_view('wrapper','profil/geografi_edit',$data);
		$this->template->render();
		//$this->load->view('profil/sejarah_edit',$data);
	}
	
	function angkaview()
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
		$data['angka']	= $this->informasimodel->getbykategori('angka');
		$data['mainmenu']	= $this->backend_model->mainmenu("1.6");
		$data['ckeditor'] = $this->utility->ckeditor_full("editor1",100,"100%",200);
		$this->template->set_template("admin");
//		$this->template->write_view('header','templates/header_admin',$data);
		$this->template->write_view('wrapper','profil/angka_edit',$data);
		$this->template->render();
		//$this->load->view('profil/sejarah_edit',$data);
	}
	
	function lambangview()
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
		$data['lambang']	= $this->informasimodel->getbykategori('lambang');
		$data['mainmenu']	= $this->backend_model->mainmenu("1.3");
		$data['ckeditor'] = $this->utility->ckeditor_full("editor1",100,"100%",200);
		$this->template->set_template("admin");
//		$this->template->write_view('header','templates/header_admin',$data);
		$this->template->write_view('wrapper','profil/lambang_edit',$data);
		$this->template->render();
		//$this->load->view('profil/sejarah_edit',$data);
	}
	
	function sosialview()
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
		$data['sosial']	= $this->informasimodel->getbykategori('sosial');
		$data['mainmenu']	= $this->backend_model->mainmenu("1.5");
		$data['ckeditor'] = $this->utility->ckeditor_full("editor1",100,"100%",200);
		$this->template->set_template("admin");
//		$this->template->write_view('header','templates/header_admin',$data);
		$this->template->write_view('wrapper','profil/sosial_edit',$data);
		$this->template->render();
		//$this->load->view('profil/sejarah_edit',$data);
	}
	
	function updatesejarah()
	{
		$sejarah	= $this->input->post('sejarah');
		
			$data1=array('isi'=>$sejarah);
			$this->informasimodel->update('sejarah',$data1);
			
		redirect('profil/sejarahview','refresh');
	}
	
	function updateangka()
	{
		$angka	= $this->input->post('angka');
		
			$data1=array('isi'=>$angka);
			$this->informasimodel->update('angka',$data1);
			
		redirect('profil/angkaview','refresh');
	}
	
	function updatesosial()
	{
		$sosial	= $this->input->post('sosial');
		
			$data1=array('isi'=>$sosial);
			$this->informasimodel->update('sosial',$data1);
			
		redirect('profil/sosialview','refresh');
	}
	
	function updategeografi()
	{
		$geografi	= $this->input->post('geografi');
		
			$data1=array('isi'=>$geografi);
			$this->informasimodel->update('geografi',$data1);
			
		redirect('profil/geografiview','refresh');
	}
	
	function updatelambang()
	{
		$lambang	= $this->input->post('lambang');
		
			$data1=array('isi'=>$lambang);
			$this->informasimodel->update('lambang',$data1);
			
		redirect('profil/lambangview','refresh');
	}
	
	function sarprasview()
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
		$data['sarpras']	= $this->informasimodel->getbykategori('sarpras');
		$data['mainmenu']	= $this->backend_model->mainmenu("2.4");
		$this->template->set_template("admin");
//		$this->template->write_view('header','templates/header_admin',$data);
		$this->template->write_view('wrapper','profil/sarpras_edit',$data);
		$this->template->render();
		//$this->load->view('profil/sarpras_edit',$data);
	}
	function updatesarpras()
	{
		$sarpras	= $this->input->post('sarpras');
		
			$data1=array('isi'=>$sarpras);
			$this->informasimodel->update('sarpras',$data1);
			
		redirect('profil/sarprasview','refresh');
	}
	function prestasiview()
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
		$data['prestasi']	= $this->informasimodel->getbykategori('prestasi');
		$data['mainmenu']	= $this->backend_model->mainmenu("2.5");
		$this->template->set_template("admin");
//		$this->template->write_view('header','templates/header_admin',$data);
		$this->template->write_view('wrapper','profil/prestasi_edit',$data);
		$this->template->render();
		//$this->load->view('profil/prestasi_edit',$data);
	}
	function updateprestasi()
	{
		$prestasi	= $this->input->post('prestasi');
		
			$data1=array('isi'=>$prestasi);
			$this->informasimodel->update('prestasi',$data1);
			
		redirect('profil/prestasiview','refresh');
	}
}