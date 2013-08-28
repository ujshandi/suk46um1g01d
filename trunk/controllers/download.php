<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class download extends CI_Controller {
	private $limit = 20;
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('pagination');
		$this->load->model('temp_model','',TRUE);
		$this->load->model('backend_model','',TRUE);
		$this->load->model('downloadmodel','',TRUE);
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
		$config['base_url'] = site_url('download/index/');
		$config['total_rows'] = $this->downloadmodel->count_download();
		$config['per_page'] = 20;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		$data['download']	= $this->downloadmodel->get_All('20',$offset);
		
		$data['include']	= $this->temp_model->includeFile();
		$data['header']		= $this->temp_model->headerMenu('0');
		$data['sliderTop']	= $this->temp_model->sliderTop();
		$data['mainmenu']	= $this->temp_model->mainmenu("14");
		$data['pengumuman']	= $this->temp_model->pengumuman();
		$data['polling']	= $this->temp_model->polling();
		$data['login']		= $this->temp_model->login();
		$data['linkterkait']= $this->temp_model->linkterkait();
		$data['testimonial']= $this->temp_model->testimonial();
		$data['footer']		= $this->temp_model->footer();
		$this->load->view('download/download',$data);
	}
	function data($offset=0)
	{
		$this->cekLogin();
		$uri_segment = 3;
		$offset = $this->uri->segment($uri_segment);
		$config['base_url'] = site_url('download/data/');
		$config['total_rows'] = $this->downloadmodel->count_download();
		$config['per_page'] = $this->limit;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['download']	= $this->downloadmodel->get_All($this->limit,$offset);
		$data['mainmenu']	= $this->backend_model->mainmenu("17");
		$this->load->view('download/download_data',$data);
	}
	function search()
	{
		$key	= $this->input->post('search');
		$data['download']	= $this->downloadmodel->search("deskripsi",$key)->result();
		$data['include']	= $this->temp_model->includeFile();
		$data['header']		= $this->temp_model->headerMenu('0');
		$data['sliderTop']	= $this->temp_model->sliderTop();
		$data['mainmenu']	= $this->temp_model->mainmenu("14");
		$data['pengumuman']	= $this->temp_model->pengumuman();
		$data['polling']	= $this->temp_model->polling();
		$data['login']		= $this->temp_model->login();
		$data['linkterkait']= $this->temp_model->linkterkait();
		$data['testimonial']= $this->temp_model->testimonial();
		$data['footer']		= $this->temp_model->footer();
		$this->load->view('download/download',$data);
	}
	function search2()
	{
		$this->cekLogin();
		$key	= $this->input->post('search');
		$data['download']	= $this->downloadmodel->search("deskripsi",$key)->result();
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['mainmenu']	= $this->backend_model->mainmenu("17");
		$this->load->view('download/download_data',$data);
	}
	function add()
	{
		$this->cekLogin();
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['mainmenu']	= $this->backend_model->mainmenu("17");
		$this->load->view('download/download_add',$data);
	}
	function simpan()
	{
		$nama		= $this->input->post('nama');
		$deskripsi	= $this->input->post('deskripsi');
		$namafile	= $_FILES['file']['name'];
		
		$config['upload_path']	= './uploads/file/';
		$config['allowed_types']= 'pdf|doc|ppt|docx|pptx|zip|png|jpg|jpeg|gif|rar|xls|xlsx';
		$config['max_size']		= '10000';
		$config['file_name']	= $namafile; 

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload("file"))
		{
			echo "Upload File gagal!";
		}
		else
		{
			$dataFile	= $this->upload->data();
			$data = array('nama'=>$nama,'deskripsi'=>$deskripsi,'file'=>$dataFile['file_name']);
			$this->downloadmodel->save($data);
			redirect('download/data','refresh');
		}
	}
	function edit($id)
	{
		$this->cekLogin();
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['download']	= $this->downloadmodel->getbyid($id)->result();
		$data['mainmenu']	= $this->backend_model->mainmenu("17");
		$this->load->view('download/download_edit',$data);
	}
	function simpanedit()
	{
		$id			= $this->input->post('id');
		$namaFile	= $this->input->post('namafile');
		$nama		= $this->input->post('nama');
		$deskripsi	= $this->input->post('deskripsi');
		$file		= $_FILES['file']['name'];
		
		if($file!="")
		{ 
			unlink(realpath("./uploads/file/".$filename));
			
			$namafileBaru	= $file;
			
			$config['upload_path']	= './uploads/file/';
			$config['allowed_types']= 'pdf|doc|ppt|docx|pptx|zip|png|jpg|jpeg|gif|rar|xls|xlsx';
			$config['max_size']		= '10000';
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
			
			$data = array('nama'=>$nama,'deskripsi'=>$deskripsi,'file'=>$filename);
			$this->downloadmodel->update($id,$data);
			redirect('download/data','refresh');
	}
	function hapus($id)
	{
		$dataFile	= $this->downloadmodel->getbyid($id)->result();
		foreach($dataFile as $row)
		{
			unlink(realpath("./uploads/file/$row->file"));
		}
		$this->downloadmodel->delete($id);
		redirect('download/data','refresh');
	}
}