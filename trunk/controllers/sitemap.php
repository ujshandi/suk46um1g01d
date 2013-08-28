<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class sitemap extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('temp_model','',TRUE);
		$this->load->model('backend_model','',TRUE);
		$this->load->model('informasimodel','',TRUE);
	}
	function index()
	{
		$data['img1']		= '<img src="'.base_url().'images/icon/aturan.png" align="left"/>';
		$data['img2']		= '<img src="'.base_url().'images/icon/bl.png" align="left"/>';
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
		$this->load->view('sitemap',$data);
	}
}