<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class pptk extends CI_Controller {

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
	public function index()
	{
		$data['include']	= $this->temp_model->includeFile();
		$data['header']		= $this->temp_model->headerMenu('6');
		$data['sliderTop']	= $this->temp_model->sliderTop();
		$data['pptk']		= $this->informasimodel->getbykategori('pptk');
		$data['mainmenu']	= $this->temp_model->mainmenu("0");
		$data['pengumuman']	= $this->temp_model->pengumuman();
		$data['polling']	= $this->temp_model->polling();
		$data['login']		= $this->temp_model->login();
		$data['linkterkait']= $this->temp_model->linkterkait();
		$data['testimonial']= $this->temp_model->testimonial();
		$data['footer']		= $this->temp_model->footer();
		$this->load->view('pptk',$data);
	}
	function edit()
	{
		$this->cekLogin();
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['pptk']		= $this->informasimodel->getbykategori('pptk');
		$data['mainmenu']	= $this->backend_model->mainmenu("1.5");
		$this->load->view('menubar/pptk',$data);
	}
	function update()
	{
		$pptk	= $this->input->post('pptk');
		
		$data=array('isi'=>$pptk);
		$this->informasimodel->update('pptk',$data);
		
		redirect('pptk/edit','refresh');
	}
}