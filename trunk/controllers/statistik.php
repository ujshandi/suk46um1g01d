<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class statistik extends CI_Controller {
	private $limit = 20;
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('pagination');
		$this->load->model('temp_model','',TRUE);
		$this->load->model('backend_model','',TRUE);
		$this->load->model('statistikmodel','',TRUE);
	}
	function cekLogin()
	{
		if($this->session->userdata('userid')=="")
		{
			redirect('backend');
		}
	}
	function index($offset=0)
	{
		$data['offset']=$offset;
		$uri_segment = 3;
		$offset = $this->uri->segment($uri_segment);
		$config['base_url'] = site_url('statistik/index/');
		$config['total_rows'] = $this->statistikmodel->count_statistik();
		$config['per_page'] = $this->limit;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		$data['statistik']	= $this->statistikmodel->get_All($this->limit,$offset);
		
		$data['include']	= $this->temp_model->includeFile();
		$data['header']		= $this->temp_model->headerMenu('0');
		$data['sliderTop']	= $this->temp_model->sliderTop();
		$data['mainmenu']	= $this->temp_model->mainmenu("5");
		$data['pengumuman']	= $this->temp_model->pengumuman();
		$data['polling']	= $this->temp_model->polling();
		$data['login']		= $this->temp_model->login();
		$data['linkterkait']= $this->temp_model->linkterkait();
		$data['testimonial']= $this->temp_model->testimonial();
		$data['footer']		= $this->temp_model->footer();
		$this->load->view('statistik/statistik',$data);
	}
	function data($offset=0)
	{
		$this->cekLogin();
		$data['offset']=$offset;
		$uri_segment = 3;
		$offset = $this->uri->segment($uri_segment);
		$config['base_url'] = site_url('statistik/data/');
		$config['total_rows'] = $this->statistikmodel->count_statistik();
		$config['per_page'] = $this->limit;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['statistik']	= $this->statistikmodel->get_All($this->limit,$offset);
		$data['mainmenu']	= $this->backend_model->mainmenu("6");
		$this->load->view('statistik/statistik_data',$data);
	}
	function search()
	{
		$key	= $this->input->post('search');
		
		$data['statistik']	= $this->statistikmodel->search("kategori",$key)->result();
		$data['include']	= $this->temp_model->includeFile();
		$data['header']		= $this->temp_model->headerMenu('0');
		$data['sliderTop']	= $this->temp_model->sliderTop();
		$data['mainmenu']	= $this->temp_model->mainmenu("5");
		$data['pengumuman']	= $this->temp_model->pengumuman();
		$data['polling']	= $this->temp_model->polling();
		$data['login']		= $this->temp_model->login();
		$data['linkterkait']= $this->temp_model->linkterkait();
		$data['testimonial']= $this->temp_model->testimonial();
		$data['footer']		= $this->temp_model->footer();
		$this->load->view('statistik/statistik',$data);
	}
	function search2()
	{
		$this->cekLogin();
		$key	= $this->input->post('search');
		
		$data['statistik']	= $this->statistikmodel->search("kategori",$key)->result();
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['mainmenu']	= $this->backend_model->mainmenu("6");
		$this->load->view('statistik/statistik_data',$data);
	}
	function add()
	{
		$this->cekLogin();
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['mainmenu']	= $this->backend_model->mainmenu("6");
		$this->load->view('statistik/statistik_add',$data);
	}
	function simpan()
	{
		$kat		= $this->input->post('kategori');
		$namafile	= $_FILES['file']['name'];
		
		$config['upload_path']	= './uploads/statistik/';
		$config['allowed_types']= 'pdf|doc|ppt|docx|pptx|zip|png|jpg|jpeg|gif|rar|xls|xlsx';
		$config['max_size']		= '30000';
		$config['file_name']	= $namafile; 

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload("file"))
		{
			echo "Upload File gagal!";
		}
		else
		{
			$dataFile	= $this->upload->data();
			$data = array('kategori'=>$kat,'file'=>$dataFile['file_name']);
			$this->statistikmodel->save($data);
			redirect('statistik/data','refresh');
		}
	}
	function edit($id)
	{
		$this->cekLogin();
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['statistik']	= $this->statistikmodel->getbyid($id)->result();
		$data['mainmenu']	= $this->backend_model->mainmenu("17");
		$this->load->view('statistik/statistik_edit',$data);
	}
	function simpanedit()
	{
		$id			= $this->input->post('id');
		$namaFile	= $this->input->post('namafile');
		$kat		= $this->input->post('kategori');
		$file		= $_FILES['file']['name'];
		
		if($file!="")
		{ 
			unlink(realpath("./uploads/statistik/".$filename));
			
			$namafileBaru	= $file;
			
			$config['upload_path']	= './uploads/statistik/';
			$config['allowed_types']= 'pdf|doc|ppt|docx|pptx|zip|png|jpg|jpeg|gif|rar|xls|xlsx';
			$config['max_size']		= '30000';
			$config['file_name']	= $namafileBaru; 
	
			$this->load->library('upload', $config);
	
			if ( ! $this->upload->do_upload("file"))
			{
				echo "Upload File gagal!";
			}
			else
			{
				$dataFile	= $this->upload->data();
				$filename	= $dataFile['file_name'];
			}
		}
		else
		{
			$filename	= $namaFile;
		}
			
			$data = array('kategori'=>$kat,'file'=>$filename);
			$this->statistikmodel->update($id,$data);
			redirect('statistik/data','refresh');
	}
	function hapus($id)
	{
		$dataFile	= $this->statistikmodel->getbyid($id)->result();
		foreach($dataFile as $row)
		{
			unlink(realpath("./uploads/statistik/$row->file"));
		}
		$this->statistikmodel->delete($id);
		redirect('statistik/data','refresh');
	}
}