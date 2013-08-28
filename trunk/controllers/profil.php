<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class profil extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('temp_model','',TRUE);
		$this->load->model('backend_model','',TRUE);
		$this->load->model('informasimodel','',TRUE);
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
		$data['include']	= $this->temp_model->includeFile();
		$data['header']		= $this->temp_model->headerMenu('0');
		$data['sliderTop']	= $this->temp_model->sliderTop();
		$data['visi']		= $this->informasimodel->getbykategori('visi');
		$data['misi']		= $this->informasimodel->getbykategori('misi');
		$data['mainmenu']	= $this->temp_model->mainmenu("1.1");
		$data['pengumuman']	= $this->temp_model->pengumuman();
		$data['polling']	= $this->temp_model->polling();
		$data['login']		= $this->temp_model->login();
		$data['linkterkait']= $this->temp_model->linkterkait();
		$data['testimonial']= $this->temp_model->testimonial();
		$data['footer']		= $this->temp_model->footer();
		$this->load->view('profil/visi_misi',$data);
	}
	function sejarah()
	{
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
		$this->load->view('profil/sejarah',$data);
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
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['visi']		= $this->informasimodel->getbykategori('visi');
		$data['misi']		= $this->informasimodel->getbykategori('misi');
		$data['mainmenu']	= $this->backend_model->mainmenu("2.1");
		$this->load->view('profil/visimisi_edit',$data);
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
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['sejarah']	= $this->informasimodel->getbykategori('sejarah');
		$data['mainmenu']	= $this->backend_model->mainmenu("2.2");
		$this->load->view('profil/sejarah_edit',$data);
	}
	function updatesejarah()
	{
		$sejarah	= $this->input->post('sejarah');
		
			$data1=array('isi'=>$sejarah);
			$this->informasimodel->update('sejarah',$data1);
			
		redirect('profil/sejarahview','refresh');
	}
	function sarprasview()
	{
		$this->cekLogin();
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['sarpras']	= $this->informasimodel->getbykategori('sarpras');
		$data['mainmenu']	= $this->backend_model->mainmenu("2.4");
		$this->load->view('profil/sarpras_edit',$data);
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
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['prestasi']	= $this->informasimodel->getbykategori('prestasi');
		$data['mainmenu']	= $this->backend_model->mainmenu("2.5");
		$this->load->view('profil/prestasi_edit',$data);
	}
	function updateprestasi()
	{
		$prestasi	= $this->input->post('prestasi');
		
			$data1=array('isi'=>$prestasi);
			$this->informasimodel->update('prestasi',$data1);
			
		redirect('profil/prestasiview','refresh');
	}
}