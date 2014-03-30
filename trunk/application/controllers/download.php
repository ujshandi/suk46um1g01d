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
			$data = array(					
					'title_page'=>'Download',
					'title'=>'CPanel',
					'js'=>array(),//'js/flexigrid.pack.js','js/jqModal.js'),
					//'css'=>array('css/flexigrid.pack.css','css/jqModal.css')
					'css'=>array()
				);
		$data['offset']=$offset;
		$uri_segment = 3;
		$offset = $this->uri->segment($uri_segment);
		$config['base_url'] = site_url('download/index/');
		$config['total_rows'] = $this->downloadmodel->count_download();
		$config['per_page'] = 20;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		$data['downloadList']	= $this->downloadmodel->get_All('20',$offset);
		
		$data['include']	= $this->temp_model->includeFile();
		$data['header']		= $this->temp_model->headerMenu('0');
		$data['sliderTop']	= $this->temp_model->sliderTop();
		$data['mainmenu']	= $this->temp_model->mainmenu("13");
		$data['pengumuman']	= $this->temp_model->pengumuman();
		$data['polling']	= $this->temp_model->polling();
		$data['login']		= $this->temp_model->login();
		$data['linkterkait']= $this->temp_model->linkterkait();
		$data['testimonial']= $this->temp_model->testimonial();
		$data['footer']		= $this->temp_model->footer();
		$data['smswalkot'] = $this->settingmodel->get_by_kategori("smswalkot");
		$data['download']= $this->temp_model->download();
		$data['artikel']= $this->temp_model->artikel();
		$data['menuskpd']= $this->temp_model->loadMenuSKPD();
		//$this->load->view('download/download',$data);
		$this->template->write_view('header','templates/header',$data);
		$this->template->write_view('wrapper','download/download',$data);
		$this->template->render();
	}
	function data($offset=0)
	{
		$this->cekLogin();
		$data = array(					
					'title_page'=>'Download',
					'title'=>'CPanel',
					'js'=>array(),//'js/flexigrid.pack.js','js/jqModal.js'),
					//'css'=>array('css/flexigrid.pack.css','css/jqModal.css')
					'css'=>array()
				);
		$uri_segment = 3;
		$offset = $this->uri->segment($uri_segment);
		$config['base_url'] = site_url('download/data/');
		$config['total_rows'] = $this->downloadmodel->count_download();
		$config['per_page'] = $this->limit;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['download']	= $this->downloadmodel->get_All($this->limit,$offset);
		$data['mainmenu']	= $this->backend_model->mainmenu("13");
		//$this->load->view('download/download_data',$data);
		$this->template->set_template("admin");
		$this->template->write_view('wrapper','download/download_data',$data);
		$this->template->render();
	}
	function search()
	{
		$key	= $this->input->post('search');
		$data['download']	= $this->downloadmodel->search("deskripsi",$key)->result();
		$data['include']	= $this->temp_model->includeFile();
		$data['header']		= $this->temp_model->headerMenu('0');
		$data['sliderTop']	= $this->temp_model->sliderTop();
		$data['mainmenu']	= $this->temp_model->mainmenu("13");
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
		$data['mainmenu']	= $this->backend_model->mainmenu("13");
		$this->load->view('download/download_data',$data);
	}
	function add()
	{
		$this->cekLogin();
			$data = array(					
					'title_page'=>'Download',
					'title'=>'CPanel',
					'js'=>array(),//'js/flexigrid.pack.js','js/jqModal.js'),
					//'css'=>array('css/flexigrid.pack.css','css/jqModal.css')
					'css'=>array()
				);
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['mainmenu']	= $this->backend_model->mainmenu("13");
		$data['ckeditor'] = $this->utility->ckeditor_full("editor1",100,"100%",200);
		$this->template->set_template("admin");
		$this->template->write_view('wrapper','download/download_add',$data);
		$this->template->render();
		//$this->load->view('download/download_add',$data);
	}
	function simpan()
	{
		$nama		= $this->input->post('nama');
		$deskripsi	= $this->input->post('deskripsi');
		$namafile	=  $this->input->post('file');//$_FILES['file']['name'];
		
		/*$config['upload_path']	= './uploads/file/';
		$config['allowed_types']= 'pdf|doc|ppt|docx|pptx|zip|png|jpg|jpeg|gif|rar|xls|xlsx';
		$config['max_size']		= '10000';
		$config['file_name']	= $namafile; 

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload("file"))
		{
			echo "Upload File gagal!";
		}
		else
		{*/
			$dataFile	= $this->upload->data();
			$data = array('nama'=>$nama,'deskripsi'=>$deskripsi,'file'=>$namafile);//'file'=>$dataFile['file_name']);
			$this->downloadmodel->save($data);
			redirect(base_url().'download/data');
		//}
	}
	function edit($id)
	{
		$this->cekLogin();
		$data = array(					
					'title_page'=>'Download',
					'title'=>'CPanel',
					'js'=>array(),//'js/flexigrid.pack.js','js/jqModal.js'),
					//'css'=>array('css/flexigrid.pack.css','css/jqModal.css')
					'css'=>array()
				);
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['download']	= $this->downloadmodel->getbyid($id)->result();
		$data['mainmenu']	= $this->backend_model->mainmenu("13");
		$data['ckeditor'] = $this->utility->ckeditor_full("editor1",100,"100%",200);
		$this->template->set_template("admin");
		$this->template->write_view('wrapper','download/download_edit',$data);
		$this->template->render();
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
			redirect(base_url().'download/data');
	}
	function hapus($id)
	{
		$dataFile	= $this->downloadmodel->getbyid($id)->result();
		foreach($dataFile as $row)
		{
			unlink(realpath("./uploads/file/$row->file"));
		}
		$this->downloadmodel->delete($id);
		redirect(base_url().'download/data');
	}
}
