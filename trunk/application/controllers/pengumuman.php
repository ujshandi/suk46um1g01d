<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class pengumuman extends CI_Controller {
	private $limit = 10;
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('pagination');
		$this->load->model('backend_model','',TRUE);
		$this->load->model('temp_model','',TRUE);
		$this->load->model('pengumumanmodel','',TRUE);
		$this->load->helper('ckeditor');
		$this->load->library('upload');
		$this->load->library('utility');
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
		$config['base_url'] = site_url('pengumuman/index/');
		$config['total_rows'] = $this->pengumumanmodel->count_pengumuman();
		$config['per_page'] = $this->limit;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['pengumuman']	= $this->pengumumanmodel->get_All($this->limit,$offset);
		$data['mainmenu']	= $this->backend_model->mainmenu("11");
		
		$this->template->set_template("admin");
		$this->template->write_view('wrapper','pengumuman/pengumuman_data',$data);
		$this->template->render();
		//$this->load->view('pengumuman/pengumuman_data',$data);
	}
	function search()
	{
		$this->cekLogin();
		$key	= $this->input->post('search');
		
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['pengumuman']	= $this->pengumumanmodel->search("deskripsi","judul",$key)->result();
		$data['mainmenu']	= $this->backend_model->mainmenu("11");
		$this->load->view('pengumuman/pengumuman_data',$data);
	} 
	function detail($id)
	{
		$data['pengumuman']	= $this->pengumumanmodel->getbyid($id)->result();
		$data['include']	= $this->temp_model->includeFile();
		$data['header']		= $this->temp_model->headerMenu('0');
		$data['sliderTop']	= $this->temp_model->sliderTop();
		$data['mainmenu']	= $this->temp_model->mainmenu("0");
		$data['login']		= $this->temp_model->login();
		$data['linkterkait']= $this->temp_model->linkterkait();
		$data['testimonial']= $this->temp_model->testimonial();
		$data['footer']		= $this->temp_model->footer();
		$this->load->view('pengumuman/pengumuman_detail',$data);
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
		$data['mainmenu']	= $this->backend_model->mainmenu("11");
		$data['ckeditor'] = $this->utility->ckeditor_full("editor1");
		$pengumuman->id_pengumuman="";
		$pengumuman->judul="";		
		$pengumuman->deskripsi="";
		$pengumuman->tgl="";
		
		$data['pengumuman'] = $pengumuman;
		$this->template->set_template("admin");
		$this->template->write_view('wrapper','pengumuman/pengumuman_rec',$data);
		$this->template->render();
		//$this->load->view('pengumuman/pengumuman_rec',$data);
	}
	function simpan()
	{
		$judul		= $this->input->post('judul');
		$deskripsi	= $this->input->post('deskripsi');
		$id	= $this->input->post('id');
			$id			= $this->input->post('id');
			$data = array('tgl'=>date('Y-m-d H:i:s'),'judul'=>$judul,'deskripsi'=>$deskripsi);
			
			if ($id==""){
				$this->pengumumanmodel->save($data);
			} else {
				$this->pengumumanmodel->update($id,$data);
			}
		
		redirect(base_url().'pengumuman');
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
		$data['pengumuman']	= $this->pengumumanmodel->getbyid($id);
		$data['mainmenu']	= $this->backend_model->mainmenu("11");
		$data['ckeditor'] = $this->utility->ckeditor_full("editor1");
		$this->template->set_template("admin");
		$this->template->write_view('wrapper','pengumuman/pengumuman_rec',$data);
		$this->template->render();
		//$this->load->view('pengumuman/pengumuman_rec',$data);
	}
	function simpanedit()
	{
		$id			= $this->input->post('id');
		$judul		= $this->input->post('judul');
		$deskripsi	= $this->input->post('deskripsi');
		
			$data	= array('judul'=>$judul,'deskripsi'=>$deskripsi);
			$this->pengumumanmodel->update($id,$data);
			
		redirect(base_url().'pengumuman');
	}
	function hapus($id)
	{
		$this->pengumumanmodel->delete($id);
		redirect(base_url().'pengumuman');
	}
}