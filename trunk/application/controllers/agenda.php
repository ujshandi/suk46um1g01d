<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class agenda extends CI_Controller {
	private $limit = 10;
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('pagination');
		$this->load->model('temp_model','',TRUE);
		$this->load->model('backend_model','',TRUE);
		$this->load->model('agendamodel','',TRUE);
	}
	function cekLogin()
	{
		if($this->session->userdata('userid')=="")
		{
			redirect(base_url().'backend');
		}
	}
	function index($offset=0)
	{
		$this->cekLogin();
		$data = array(
					
					'title_page'=>'Admin Page',
					'title'=>'CPanel',
					'js'=>array('js/ui_core.js','js/ui.dialog.js','js/ui_tabs.js','js/lightbox.js'),//'js/flexigrid.pack.js','js/jqModal.js'),
					//'css'=>array('css/flexigrid.pack.css','css/jqModal.css')
					'css'=>array('media/jquery/ui.css')
				);
		$uri_segment = 3;
		$offset = $this->uri->segment($uri_segment);
		$config['base_url'] = site_url('agenda/index/');
		$config['total_rows'] = $this->agendamodel->count_agenda();
		$config['per_page'] = $this->limit;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		
		$data['agenda']		= $this->agendamodel->get_All($this->limit,$offset);
		$data['include']	= $this->temp_model->includeFile();
		$data['header']		= $this->temp_model->headerMenu('0');
		$data['sliderTop']	= $this->temp_model->sliderTop();
		$data['mainmenu']	= $this->temp_model->mainmenu("8");
		$data['pengumuman']	= $this->temp_model->pengumuman();
		$data['polling']	= $this->temp_model->polling();
		$data['login']		= $this->temp_model->login();
		$data['linkterkait']= $this->temp_model->linkterkait();
		$data['testimonial']= $this->temp_model->testimonial();
		$data['footer']		= $this->temp_model->footer();
		$this->template->set_template("admin");
		$this->template->write_view('wrapper','agenda/agenda',$data);
		$this->template->render();
		//$this->load->view('agenda/agenda',$data);
	}
	function data($offset=0)
	{
		
		$this->cekLogin();
		$data = array(
					
					'title_page'=>'Admin Page',
					'title'=>'CPanel',
					'js'=>array('js/ui_core.js','js/ui.dialog.js','js/ui_tabs.js','js/lightbox.js'),//'js/flexigrid.pack.js','js/jqModal.js'),
					//'css'=>array('css/flexigrid.pack.css','css/jqModal.css')
					'css'=>array('media/jquery/ui.css')
				);
		$uri_segment = 3;
		$offset = $this->uri->segment($uri_segment);
		$config['base_url'] = site_url('agenda/data/');
		$config['total_rows'] = $this->agendamodel->count_agenda();
		$config['per_page'] = $this->limit;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['agenda']		= $this->agendamodel->get_All($this->limit,$offset);
		$data['mainmenu']	= $this->backend_model->mainmenu("13");
		$this->template->set_template("admin");
		$this->template->write_view('wrapper','agenda/agenda_data',$data);
		$this->template->render();
		//$this->load->view('agenda/agenda_data',$data);
	}
	function search()
	{
		$this->cekLogin();
		$key	= $this->input->post('search');
		
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['agenda']		= $this->agendamodel->search("kegiatan",$key)->result();
		$data['mainmenu']	= $this->backend_model->mainmenu("13");
		$this->load->view('agenda/agenda_data',$data);
	}
	function add()
	{
		$this->cekLogin();
		$data = array(
					
					'title_page'=>'Admin Page',
					'title'=>'CPanel',
					'js'=>array('js/ui_core.js','js/ui.dialog.js','js/ui_tabs.js','js/lightbox.js'),//'js/flexigrid.pack.js','js/jqModal.js'),
					//'css'=>array('css/flexigrid.pack.css','css/jqModal.css')
					'css'=>array('media/jquery/ui.css')
				);
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['mainmenu']	= $this->backend_model->mainmenu("13");
		$agenda->kegiatan = '';
		$agenda->id_agenda = '';
		$agenda->tgl = '';
		$data['agenda'] = $agenda;
		//$this->load->view('agenda/agenda_add',$data);
		$this->template->set_template("admin");
		$this->template->write_view('wrapper','agenda/agenda_rec',$data);
		$this->template->render();
	}
	function simpan()
	{
		$tgl		= $this->input->post('tgl');
		$author		= $this->input->post('author');
		$kegiatan	= $this->input->post('kegiatan');
		$id			= $this->input->post('id');
		$data = array('tgl'=>$tgl,'kegiatan'=>$kegiatan,'author'=>$author);
		if ($id==""){
			$this->agendamodel->save($data);
		} else {
			$this->agendamodel->update($id,$data);
		}
		redirect(base_url().'agenda/data');
	}
	function edit($id)
	{	
		$this->cekLogin();
		$data = array(
					
					'title_page'=>'Admin Page',
					'title'=>'CPanel',
					'js'=>array('js/ui_core.js','js/ui.dialog.js','js/ui_tabs.js','js/lightbox.js'),//'js/flexigrid.pack.js','js/jqModal.js'),
					//'css'=>array('css/flexigrid.pack.css','css/jqModal.css')
					'css'=>array('media/jquery/ui.css')
				);
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['agenda']		= $this->agendamodel->getbyid($id);
		$data['mainmenu']	= $this->backend_model->mainmenu("13");
		$this->template->set_template("admin");
		$this->template->write_view('wrapper','agenda/agenda_rec',$data);
		$this->template->render();
		//$this->load->view('agenda/agenda_edit',$data);
	}
	function simpanedit()
	{
		$id			= $this->input->post('id');
		$author		= $this->input->post('author');
		$tgl		= $this->input->post('tgl');
		$kegiatan	= $this->input->post('kegiatan');
		
			$data = array('tgl'=>$tgl,'kegiatan'=>$kegiatan,'author'=>$author);
			$this->agendamodel->update($id,$data);
			redirect(base_url().'agenda/data');
	}
	function hapus($id)
	{
		$this->agendamodel->delete($id);
		redirect(base_url().'agenda/data');
	}
}