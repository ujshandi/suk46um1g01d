<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class polling extends CI_Controller {
	private $limit = 5;
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('pagination');
		$this->load->model('backend_model','',TRUE);
		$this->load->model('temp_model','',TRUE);
		$this->load->model('pollingmodel','',TRUE);
	}
	function cekLogin()
	{
		if($this->session->userdata('userid')=="")
		{
			redirect('backend');
		}
	}
	function index()
	{
		$this->cekLogin();
		$uri_segment = 3;
		$offset = $this->uri->segment($uri_segment);
		$config['base_url'] = site_url('polling/index/');
		$config['total_rows'] = $this->pollingmodel->count_polling();
		$config['per_page'] = $this->limit;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['polling']	= $this->pollingmodel->get_All($this->limit,$offset);
		$data['mainmenu']	= $this->backend_model->mainmenu("12");
		$this->load->view('polling/polling_data',$data);
	}
	function simpanHasil()
	{
		$id		= $this->input->post('id');
		$pilihan= $this->input->post('polling');
		
		$datPol=$this->pollingmodel->getbyid($id)->result();
		foreach($datPol as $dat)
		{
			$h1	= $dat->hasil1;
			$h2	= $dat->hasil2;
			$h3	= $dat->hasil3;
			$h4	= $dat->hasil4;
		}
		
		switch($pilihan)
		{
			case"1"; $h1=$h1+1; break;
			case"2"; $h2=$h2+1; break;
			case"3"; $h3=$h3+1; break;
			case"4"; $h4=$h4+1; break;
		}
		
				//simpan hasil
				$data=array('hasil1'=>$h1,'hasil2'=>$h2,'hasil3'=>$h3,'hasil4'=>$h4);
				$this->pollingmodel->update($id,$data);
		
		$this->viewHasil($id);
	}
	function viewHasil($id)
	{
		$data['polling']	= $this->pollingmodel->getbyid($id)->result();
		$data['include']	= $this->temp_model->includeFile();
		$data['header']		= $this->temp_model->headerMenu('0');
		$data['sliderTop']	= $this->temp_model->sliderTop();
		$data['mainmenu']	= $this->temp_model->mainmenu("0");
		$data['login']		= $this->temp_model->login();
		$data['linkterkait']= $this->temp_model->linkterkait();
		$data['testimonial']= $this->temp_model->testimonial();
		$data['footer']		= $this->temp_model->footer();
		$this->load->view('polling/polling_hasil',$data);
	}
	function add()
	{
		$this->cekLogin();
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['mainmenu']	= $this->backend_model->mainmenu("12");
		$this->load->view('polling/polling_add',$data);
	}
	function simpan()
	{
		$pertanyaan	= $this->input->post('pertanyaan');
		$pil1		= $this->input->post('pil1');
		$pil2		= $this->input->post('pil2');
		$pil3		= $this->input->post('pil3');
		$pil4		= $this->input->post('pil4');
		
			//update status sebelumnya
			$data1=array('status'=>'false');
			$this->pollingmodel->updateStatus($data1);
			
			//simpan data
			$data2=array('pertanyaan'=>$pertanyaan,'pilihan1'=>$pil1,'pilihan2'=>$pil2,'pilihan3'=>$pil3,'pilihan4'=>$pil4,'status'=>'true');
			$this->pollingmodel->save($data2);
			
		redirect('polling','refresh');
	}
	function edit($id)
	{
		$this->cekLogin();
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['polling']	= $this->pollingmodel->getbyid($id)->result();
		$data['mainmenu']	= $this->backend_model->mainmenu("12");
		$this->load->view('polling/polling_edit',$data);
	}
	function simpanedit()
	{
		$id			= $this->input->post('id');
		$pertanyaan	= $this->input->post('pertanyaan');
		$pil1		= $this->input->post('pil1');
		$pil2		= $this->input->post('pil2');
		$pil3		= $this->input->post('pil3');
		$pil4		= $this->input->post('pil4');
		$stat		= $this->input->post('status');
		
			if($stat=="true")
			{
				$data1=array('status'=>'false');
				$this->pollingmodel->updateStatus($data1);
			}
			
				$data=array('pertanyaan'=>$pertanyaan,'pilihan1'=>$pil1,'pilihan2'=>$pil2,'pilihan3'=>$pil3,'pilihan4'=>$pil4,'status'=>$stat);
				$this->pollingmodel->update($id,$data);
			
			
		redirect('polling','refresh');
	}
	function hapus($id)
	{
		$this->pollingmodel->delete($id);
		redirect('polling','refresh');
	}
}