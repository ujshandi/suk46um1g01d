<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class layanan extends CI_Controller {
	private $limit = 10; 
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('pagination');
		$this->load->model('temp_model','',TRUE);
		$this->load->model('backend_model','',TRUE);
		$this->load->model('layananmodel','',TRUE);
	}
	function cekLogin()
	{
		if($this->session->userdata('userid')=="")
		{
			redirect('backend');
		}
	}
	function index($tipe,$offset=0)
	{
		$uri_segment = 4;
		$offset = $this->uri->segment($uri_segment);
		$config['base_url'] = site_url("layanan/index/$tipe");
		$config['total_rows'] = $this->layananmodel->count_layanan2($tipe);
		$config['per_page'] = $this->limit;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		$data['offset']	= $offset;
		
		switch($tipe)
		{
			case"1"; $data['kategori']="Perijinan"; $data['tipe']="1"; break;
			case"2"; $data['kategori']="Hibah"; $data['tipe']="2"; break;
			case"3"; $data['kategori']="Akreditasi"; $data['tipe']="3"; break;
			case"4"; $data['kategori']="Beasiswa"; $data['tipe']="4"; break;
		}
		
		$data['data']		= $this->layananmodel->get_All2($tipe,$this->limit,$offset);
		$data['include']	= $this->temp_model->includeFile();
		$data['header']		= $this->temp_model->headerMenu('0');
		$data['sliderTop']	= $this->temp_model->sliderTop();
		$data['mainmenu']	= $this->temp_model->mainmenu("7.".$tipe);
		$data['pengumuman']	= $this->temp_model->pengumuman();
		$data['polling']	= $this->temp_model->polling();
		$data['login']		= $this->temp_model->login();
		$data['linkterkait']= $this->temp_model->linkterkait();
		$data['testimonial']= $this->temp_model->testimonial();
		$data['footer']		= $this->temp_model->footer();
		$this->load->view('layanan/layanan',$data);
	}
	function detail($id,$tipe)
	{
		switch($tipe)
		{
			case"1"; $data['kategori']="Perijinan"; break;
			case"2"; $data['kategori']="Hibah"; break;
			case"3"; $data['kategori']="Akreditasi"; break;
			case"4"; $data['kategori']="Beasiswa"; break;
		}
		$data['tipe']		= $tipe;
		$data['data']		= $this->layananmodel->getbyid($id)->result();
		$data['include']	= $this->temp_model->includeFile();
		$data['header']		= $this->temp_model->headerMenu('0');
		$data['sliderTop']	= $this->temp_model->sliderTop();
		$data['mainmenu']	= $this->temp_model->mainmenu("7.".$tipe);
		$data['pengumuman']	= $this->temp_model->pengumuman();
		$data['polling']	= $this->temp_model->polling();
		$data['login']		= $this->temp_model->login();
		$data['linkterkait']= $this->temp_model->linkterkait();
		$data['testimonial']= $this->temp_model->testimonial();
		$data['footer']		= $this->temp_model->footer();
		$this->load->view('layanan/layanan_detail',$data);
	}
	function search()
	{
		$key	= $this->input->post('search');
		$tipe	= $this->input->post('tipe');
		
		switch($tipe)
		{
			case"1"; $data['kategori']="Perijinan"; $data['tipe']="1"; break;
			case"2"; $data['kategori']="Hibah"; $data['tipe']="2"; break;
			case"3"; $data['kategori']="Akreditasi"; $data['tipe']="3"; break;
			case"4"; $data['kategori']="Beasiswa"; $data['tipe']="4"; break;
		}
		$data['tipe']		= $tipe;
		$data['data']		= $this->layananmodel->search($tipe,"judul","konten",$key)->result();
		$data['include']	= $this->temp_model->includeFile();
		$data['header']		= $this->temp_model->headerMenu('0');
		$data['sliderTop']	= $this->temp_model->sliderTop();
		$data['mainmenu']	= $this->temp_model->mainmenu("7.".$tipe);
		$data['pengumuman']	= $this->temp_model->pengumuman();
		$data['polling']	= $this->temp_model->polling();
		$data['login']		= $this->temp_model->login();
		$data['linkterkait']= $this->temp_model->linkterkait();
		$data['testimonial']= $this->temp_model->testimonial();
		$data['footer']		= $this->temp_model->footer();
		$this->load->view('layanan/layanan',$data);
	}
	function search2()
	{
		$this->cekLogin();
		$key	= $this->input->post('search');
		$tipe	= $this->input->post('tipe');
		
		switch($tipe)
		{
			case"1"; $data['kategori']="Perijinan"; $data['tipe']="1"; break;
			case"2"; $data['kategori']="Hibah"; $data['tipe']="2"; break;
			case"3"; $data['kategori']="Akreditasi"; $data['tipe']="3"; break;
			case"4"; $data['kategori']="Beasiswa"; $data['tipe']="4"; break;
		}
		$data['tipe']		= $tipe;
		$data['data']		= $this->layananmodel->search($tipe,"judul","konten",$key)->result();
		$data['headermenu']	= $this->backend_model->headermenu();
		$data['mainmenu']	= $this->backend_model->mainmenu("8.".$tipe);
		$this->load->view('layanan/layanan_data',$data);
	}
	function data($tipe,$offset=0)
	{
		$this->cekLogin();
		$uri_segment = 4;
		$offset = $this->uri->segment($uri_segment);
		$config['base_url'] = site_url("layanan/data/$tipe");
		$config['total_rows'] = $this->layananmodel->count_layanan($tipe);
		$config['per_page'] = $this->limit;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		$data['offset']		= $offset;
		$data['tipe']		= $tipe;
		
		switch($tipe)
		{
			case"1"; $data['kategori']="Perijinan"; break;
			case"2"; $data['kategori']="Hibah"; break;
			case"3"; $data['kategori']="Akreditasi"; break;
			case"4"; $data['kategori']="Beasiswa"; break;
		}
		
		$data['data']		= $this->layananmodel->get_All($tipe,$this->limit,$offset);
		$data['headermenu']	= $this->backend_model->headermenu();
		$data['mainmenu']	= $this->backend_model->mainmenu("8.".$tipe);
		$this->load->view('layanan/layanan_data',$data);
	}
	function add($tipe)
	{
		$this->cekLogin();
		$data['tipe']		= $tipe;
		switch($tipe)
		{
			case"1"; $data['kategori']="Perijinan"; break;
			case"2"; $data['kategori']="Hibah"; break;
			case"3"; $data['kategori']="Akreditasi"; break;
			case"4"; $data['kategori']="Beasiswa"; break;
		}
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['mainmenu']	= $this->backend_model->mainmenu("8.".$tipe);
		$this->load->view('layanan/layanan_add',$data);
	}
	function simpan()
	{
		$judul		= $this->input->post('judul');
		$kategori	= $this->input->post('kategori');
		$deskripsi	= $this->input->post('deskripsi');
		$author		= $this->input->post('author');
			
			$data = array('kategori'=>$kategori,'judul'=>$judul,'konten'=>$deskripsi,'author'=>$author);
			$this->layananmodel->save($data);
		
		redirect("layanan/data/$kategori",'refresh');
	}
	function edit($id,$tipe)
	{
		$this->cekLogin();
		$data['tipe']		= $tipe;
		switch($tipe)
		{
			case"1"; $data['kategori']="Perijinan"; break;
			case"2"; $data['kategori']="Hibah"; break;
			case"3"; $data['kategori']="Akreditasi"; break;
			case"4"; $data['kategori']="Beasiswa"; break;
		}
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['data']		= $this->layananmodel->getbyid($id)->result();
		$data['mainmenu']	= $this->backend_model->mainmenu("8.".$tipe);
		$this->load->view('layanan/layanan_edit',$data);
	}
	function simpanedit()
	{
		$id			= $this->input->post('id');
		$kategori	= $this->input->post('kategori');
		$artikel	= $this->input->post('artikel');
		$deskripsi	= $this->input->post('deskripsi');
		$author		= $this->input->post('author');
		$status		= $this->input->post('status');
		
			$data = array('judul'=>$artikel,'konten'=>$deskripsi,'author'=>$author,'status'=>$status);
			$this->layananmodel->update($id,$data);
		
		redirect("layanan/data/$kategori",'refresh');
	}
	function hapus($id,$tipe)
	{
		$this->layananmodel->delete($id);
		redirect("layanan/data/$tipe",'refresh');
	}
}