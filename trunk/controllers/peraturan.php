<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class peraturan extends CI_Controller {
	private $limit = 10;
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('pagination');
		$this->load->model('temp_model','',TRUE);
		$this->load->model('backend_model','',TRUE);
		$this->load->model('informasimodel','',TRUE);
		$this->load->model('peraturanmodel','',TRUE);
	}
	function cekLogin()
	{
		if($this->session->userdata('userid')=="")
		{
			redirect('backend');
		}
	}
	function index($tipe,$tahun="-1")
	{
		switch($tipe)
		{
			case"1"; $data['kategori']="Instruksi Presiden"; break;
			case"2"; $data['kategori']="Keputusan Menteri"; break;
			case"3"; $data['kategori']="Peraturan Menteri"; break;
			case"4"; $data['kategori']="Peraturan Pemerintah"; break;
			case"5"; $data['kategori']="Peraturan Presiden"; break;
			case"6"; $data['kategori']="Undang-undang"; break;
		}
		if($tahun==""){ $tahun=date('Y'); }
		
		$data['kat']		= $tipe;
		$data['tahun']		= $this->peraturanmodel->getTahunAda($tipe);
		$data['peraturan']	= $this->peraturanmodel->getspesifik($tipe,$tahun)->result();
		$data['include']	= $this->temp_model->includeFile();
		$data['header']		= $this->temp_model->headerMenu('0');
		$data['sliderTop']	= $this->temp_model->sliderTop();
		$data['mainmenu']	= $this->temp_model->mainmenu("3.".$tipe);
		$data['pengumuman']	= $this->temp_model->pengumuman();
		$data['polling']	= $this->temp_model->polling();
		$data['login']		= $this->temp_model->login();
		$data['linkterkait']= $this->temp_model->linkterkait();
		$data['testimonial']= $this->temp_model->testimonial();
		$data['footer']		= $this->temp_model->footer();
		$this->load->view('peraturan/peraturan',$data);
	}
	function data($offset=0)
	{
		$this->cekLogin();
		$uri_segment = 3;
		$offset = $this->uri->segment($uri_segment);
		$config['base_url'] = site_url('peraturan/data/');
		$config['total_rows'] = $this->peraturanmodel->count_peraturan();
		$config['per_page'] = $this->limit;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['peraturan']	= $this->peraturanmodel->get_All($this->limit,$offset);
		$data['mainmenu']	= $this->backend_model->mainmenu("4");
		$this->load->view('peraturan/peraturan_data',$data);
	}
	function search()
	{
		$this->cekLogin();
		$key	= $this->input->post('search');
		
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['peraturan']	= $this->peraturanmodel->search("nama_peraturan","deskripsi",$key)->result();
		$data['mainmenu']	= $this->backend_model->mainmenu("4");
		$this->load->view('peraturan/peraturan_data',$data);
	}
	function add()
	{
		$this->cekLogin();
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['mainmenu']	= $this->backend_model->mainmenu("4");
		$this->load->view('peraturan/peraturan_add',$data);
	}
	function simpan()
	{
		$tahun		= $this->input->post('tahun');
		$kategori	= $this->input->post('kategori');
		$nomor		= $this->input->post('nama');
		$deskripsi	= $this->input->post('deskripsi');
		
		switch($kategori)
		{
			case"1"; $namaD="InPres"; break;
			case"2"; $namaD="KepMen"; break;
			case"3"; $namaD="PerMen"; break;
			case"4"; $namaD="PerPem"; break;
			case"5"; $namaD="PerPres"; break;
			case"6"; $namaD="UU"; break;
		}
		$namafile	= $namaD."_".str_replace(" ","_",$nomor);
		
		$config['upload_path']	= './file_peraturan/';
		$config['allowed_types']= 'pdf';
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
			$data = array('kategori'=>$kategori,'tahun'=>$tahun,'nama_peraturan'=>$nomor,'deskripsi'=>$deskripsi,'link_file'=>$dataFile['file_name']);
			$this->peraturanmodel->save($data);
			redirect('peraturan/data','refresh');
		}
	}
	function edit($id)
	{
		$this->cekLogin();
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['peraturan']	= $this->peraturanmodel->getbyid($id)->result();
		$data['mainmenu']	= $this->backend_model->mainmenu("4");
		$this->load->view('peraturan/peraturan_edit',$data);
	}
	function simpanedit()
	{
		$id			= $this->input->post('id');
		$namaFile	= $this->input->post('nama_file');
		$tahun		= $this->input->post('tahun');
		$kategori	= $this->input->post('kategori');
		$nomor		= $this->input->post('nama');
		$deskripsi	= $this->input->post('deskripsi');
		$file		= $_FILES['file']['name'];
		
		if($file!="")
		{ 
			unlink(realpath("./file_peraturan/".$namaFile));
			switch($kategori)
			{
				case"1"; $namaD="InPres"; break;
				case"2"; $namaD="KepMen"; break;
				case"3"; $namaD="PerMen"; break;
				case"4"; $namaD="PerPem"; break;
				case"5"; $namaD="PerPres"; break;
				case"6"; $namaD="UU"; break;
			}
			$namafileBaru	= $namaD."_".str_replace(" ","_",$nomor);
			
			$config['upload_path']	= './file_peraturan/';
			$config['allowed_types']= 'pdf';
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
			
		
			$data = array('kategori'=>$kategori,'tahun'=>$tahun,'nama_peraturan'=>$nomor,'deskripsi'=>$deskripsi,'link_file'=>$filename);
			$this->peraturanmodel->update($id,$data);
			redirect('peraturan/data','refresh');
	}
	function hapus($id)
	{
		$dataFile	= $this->peraturanmodel->getbyid($id)->result();
		foreach($dataFile as $row)
		{
			unlink(realpath("./file_peraturan/".$row->link_file));
		}
		$this->peraturanmodel->delete($id);
		redirect('peraturan/data','refresh');
	}
}