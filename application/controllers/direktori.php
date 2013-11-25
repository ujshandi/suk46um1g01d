<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class direktori extends CI_Controller {

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
			redirect(base_url().'backend');
		}
	}
	public function index()
	{
		$data['include']	= $this->temp_model->includeFile();
		$data['header']		= $this->temp_model->headerMenu('2');
		$data['sliderTop']	= $this->temp_model->sliderTop();
		$data['isiDir']		= $this->informasimodel->getbykategori('direktori');
		$data['mainmenu']	= $this->temp_model->mainmenu("0");
		$data['pengumuman']	= $this->temp_model->pengumuman();
		$data['polling']	= $this->temp_model->polling();
		$data['login']		= $this->temp_model->login();
		$data['linkterkait']= $this->temp_model->linkterkait();
		$data['testimonial']= $this->temp_model->testimonial();
		$data['footer']		= $this->temp_model->footer();
		$this->load->view('direktori',$data);
	}
	function edit()
	{
		$this->cekLogin();
		$data = array(
					
					'title_page'=>'Admin Page',
					'title'=>'CPanel',
					'js'=>array('js/tiny_mce/tiny_mce.js'),//'js/flexigrid.pack.js','js/jqModal.js'),
					//'css'=>array('css/flexigrid.pack.css','css/jqModal.css')
					'css'=>array()
				);
		//var_dump($data);die;		
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['data']		= $this->informasimodel->getbykategori('direktori');
		$data['mainmenu']	= $this->backend_model->mainmenu("1.1");
		/* $this->load->view('menubar/direktori',$data); */
		$this->template->set_template("admin");
		//$this->template->write_view('header','templates/header_admin',$data);
		$this->template->write_view('wrapper','menubar/direktori',$data);
		$this->template->render();
	}
	function update()
	{
		$dir	= $this->input->post('direktori');
		
		$data=array('isi'=>$dir);
		$this->informasimodel->update('direktori',$data);
		
		redirect(base_url().'direktori/edit');
	}
}