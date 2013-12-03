<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class setting extends CI_Controller {
	private $limit = 10;
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));		
		$this->load->model('backend_model','',TRUE);
		$this->load->model('temp_model','',TRUE);
		$this->load->model('settingmodel','',TRUE);
		$this->load->helper('ckeditor');		
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
		$data['headmenu']	= $this->backend_model->headermenu();
	//	$data['setting']	= $this->settingmodel->get_All();
		$data['mainmenu']	= $this->backend_model->mainmenu("15");
		$data['themes'] = $this->settingmodel->get_by_kategori("themes");
		$this->template->set_template("admin");
		$this->template->write_view('wrapper','setting/setting_v',$data);
		$this->template->render();
		//$this->load->view('setting/setting_data',$data);
	}
	
	
	
	function simpan()
	{
		$sys_key		= $this->input->post('sys_key');
		$sys_value	= $this->input->post('sys_value');
		
		
			$data = array('sys_key'=>$sys_key,'sys_value'=>$sys_value);
			
			
				$this->settingmodel->update($sys_key,$data);
			
		
		redirect(base_url().'setting');
	}
	
	
}