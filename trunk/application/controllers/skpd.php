<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Skpd extends CI_Controller {
 	var $file_gambar;
	private $limit = 5;
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('file');
		$this->load->model('backend_model');
		$this->load->model('settingmodel');
		$this->load->model('temp_model');
		$this->load->model('Skpd_model','',TRUE);
		$this->load->helper('ckeditor');
		$this->load->library('upload');
		$this->load->library('utility');
		//$this->load->library('image_lib') ;
	}
	function cekLogin()
	{
		if($this->session->userdata('userid')=="")
		{
			redirect(base_url().'backend');
		}
	}
	public function index($offset=0)
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
		$this->load->library('pagination');
		$config['base_url'] = site_url('skpd/index/');
		$config['total_rows'] = $this->Skpd_model->count_data();
		$config['per_page'] = $this->limit;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		$data['offset']=$offset;
		
		$data['fields'] 	= $this->Skpd_model->getAll($this->limit,$offset);
		$data['headmenu']	= $this->backend_model->headermenu();		
		$data['jumlah']		= $this->Skpd_model->count_data();	
		$data['mainmenu']	= $this->backend_model->mainmenu("18");
		$this->template->set_template("admin");
		$this->template->write_view('wrapper','skpd/skpd_data',$data);
		$this->template->render();
		//$this->load->view('skpd/Skpd_data',$data);
	}
	function detail($id)
	{
			$data = array(
					
					'title_page'=>'SKPD',
					'title'=>'CPanel',
					'js'=>array(),//'js/flexigrid.pack.js','js/jqModal.js'),
					//'css'=>array('css/flexigrid.pack.css','css/jqModal.css')
					'css'=>array()
				);
		$data['data']		= $this->Skpd_model->get_by_id($id);
		$data['include']	= $this->temp_model->includeFile();
		$data['header']		= $this->temp_model->headerMenu('0');
		$data['sliderTop']	= $this->temp_model->sliderTop();
		$data['mainmenu']	= $this->temp_model->mainmenu("9");
		$data['pengumuman']	= $this->temp_model->pengumuman();
		$data['polling']	= $this->temp_model->polling();
		$data['login']		= $this->temp_model->login();
		$data['linkterkait']= $this->temp_model->linkterkait();
		$data['testimonial']= $this->temp_model->testimonial();
		$data['footer']		= $this->temp_model->footer();
		$data['linkopd']= $this->temp_model->linkopd();
		$data['smswalkot'] = $this->settingmodel->get_by_kategori("smswalkot");
		$data['download']= $this->temp_model->download();
		$data['artikel']= $this->temp_model->artikel();
		$data['menuskpd']= $this->temp_model->loadMenuSKPD();
		//$this->load->view('skpd/Skpd_detail',$data);
		$this->template->write_view('header','templates/header',$data);
		$this->template->write_view('wrapper','skpd/skpd_detail',$data);
		$this->template->render();
	}
	function arsip($kategori="",$offset=0)
	{
		$uri_segment = 4;
			$data = array(
					
					'title_page'=>'Arsip skpd',
					'title'=>'CPanel',
					'js'=>array(),//'js/flexigrid.pack.js','js/jqModal.js'),
					//'css'=>array('css/flexigrid.pack.css','css/jqModal.css')
					'css'=>array()
				);
		$offset = $this->uri->segment($uri_segment);
		$this->load->library('pagination');
		$config['base_url'] = site_url('skpd/arsip/'.$kategori.'/'.$offset);
		$config['total_rows'] = $this->Skpd_model->count_data2($kategori);
		$config['per_page'] = $this->limit;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		$data['offset']=$offset;
	
		$data['data']		= $this->Skpd_model->getAll2($this->limit,$offset,$kategori);
		$data['include']	= $this->temp_model->includeFile();
		$data['header']		= $this->temp_model->headerMenu('0');
		$data['sliderTop']	= $this->temp_model->sliderTop();
		$data['mainmenu']	= $this->temp_model->mainmenu("9");
		$data['pengumuman']	= $this->temp_model->pengumuman();
		$data['polling']	= $this->temp_model->polling();
		$data['login']		= $this->temp_model->login();
		$data['linkterkait']= $this->temp_model->linkterkait();
		$data['linkopd']= $this->temp_model->linkopd();
		$data['testimonial']= $this->temp_model->testimonial();
		$data['footer']		= $this->temp_model->footer();
		$data['smswalkot'] = $this->settingmodel->get_by_kategori("smswalkot");
		$data['download']= $this->temp_model->download();
		$data['artikel']= $this->temp_model->artikel();
		$this->template->write_view('header','templates/header',$data);
		$this->template->write_view('wrapper','skpd/arsip',$data);
		$this->template->render();
		//$this->load->view('skpd/arsip',$data);
	}
	function search()
	{
		$key	= $this->input->post('search');
		
		$data['data']		= $this->Skpd_model->search("nama","profil","produk",$key)->result();
		$data['include']	= $this->temp_model->includeFile();
		$data['header']		= $this->temp_model->headerMenu('0');
		$data['sliderTop']	= $this->temp_model->sliderTop();
		$data['mainmenu']	= $this->temp_model->mainmenu("9");
		$data['pengumuman']	= $this->temp_model->pengumuman();
		$data['polling']	= $this->temp_model->polling();
		$data['login']		= $this->temp_model->login();
		$data['linkterkait']= $this->temp_model->linkterkait();
		$data['testimonial']= $this->temp_model->testimonial();
		$data['footer']		= $this->temp_model->footer();
		$this->load->view('skpd/arsip',$data);
	}
	function search2()
	{
		$this->cekLogin();
		$key	= $this->input->post('search');
		
		$data['fields'] 	= $this->Skpd_model->search2("nama","profil","produk",$key)->result();
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['mainmenu']	= $this->backend_model->mainmenu("7");
		$data['jumlah']		= $this->Skpd_model->count_data();
		$this->load->view('skpd/Skpd_data',$data);
	}
	function addData()
	{
		$this->cekLogin();
		$data = array(
					
					'title_page'=>'Admin Page',
					'title'=>'CPanel',
					'js'=>array(),//'js/flexigrid.pack.js','js/jqModal.js'),
					//'css'=>array('css/flexigrid.pack.css','css/jqModal.css')
					'css'=>array()
				);
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['mainmenu']	= $this->backend_model->mainmenu("18");
		$data['ckeditor1'] = $this->utility->ckeditor_full("f2");
		$data['ckeditor2'] = $this->utility->ckeditor_full("f3");
		$data['ckeditor3'] = $this->utility->ckeditor_full("f4");
		//$skpd = new object;
		$skpd->id_skpd="";
		$skpd->nama="";
		$skpd->profil="";
		$skpd->produk="";	
		$skpd->berita="";		
		$data['skpd'] = $skpd;
		$this->template->set_template("admin");
//		$this->template->write_view('header','templates/header_admin',$data);
		$this->template->write_view('wrapper','skpd/skpd_rec',$data);
		$this->template->render();
		//$this->load->view('skpd/Skpd_add',$data);
	}
	function saveData()
	{
		$id			= $this->input->post('id');
		$nama	= $this->input->post('nama');
		$profil	= $this->input->post('profil');
		$produk		= $this->input->post('produk');		
		$berita		= $this->input->post('berita');
		
		
		
			$data = array(
				'nama'	=>$nama,
				'profil' => $profil,
				'produk'			=>$produk,				
				'berita'		=>$berita				
				);
			if ($id==""){
				$this->Skpd_model->save($data);
			} else {
				$this->Skpd_model->update($id,$data);
			}
			
			redirect(base_url().'skpd/index/');
		
	}
	
	function edit($id)
	{
		$this->cekLogin();
	/* 	$data['skpd']		= $this->Skpd_model->get_by_id($id)->result();
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['mainmenu']	= $this->backend_model->mainmenu("10");
		$this->load->view('skpd/Skpd_rec',$data); */
		$data = array(
					
					'title_page'=>'Admin Page',
					'title'=>'CPanel',
					'js'=>array(),//'js/flexigrid.pack.js','js/jqModal.js'),
					//'css'=>array('css/flexigrid.pack.css','css/jqModal.css')
					'css'=>array()
				);
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['mainmenu']	= $this->backend_model->mainmenu("18");
		$data['skpd']		= $this->Skpd_model->get_by_id($id);
		$data['ckeditor1'] = $this->utility->ckeditor_full("f2");
		$data['ckeditor2'] = $this->utility->ckeditor_full("f3");
		$data['ckeditor3'] = $this->utility->ckeditor_full("f4");
		//var_dump($data['skpd']);
		$this->template->set_template("admin");
//		$this->template->write_view('header','templates/header_admin',$data);
		$this->template->write_view('wrapper','skpd/skpd_rec',$data);
		$this->template->render();
	}
	function saveEdit()
	{
		$id			= $this->input->post('id');
		$gbr_prev	= $this->input->post('gambar_prev');
		$txtjudul	= $this->input->post('txtjudul');
		$deskripsi	= $this->input->post('deskripsi');
		$produk		= $this->input->post('produk');
		$author		= $this->input->post('author');
		$file		= $_FILES['gambar']['name'];
		$status		= $this->input->post('status');
		
		if($file!="")
		{
			unlink(realpath("./uploads/img/medium/".$gbr_prev));
			unlink(realpath("./uploads/img/thumbnail/".$gbr_prev));
			$upload=$this->do_upload();
		}
		else
		{
			$upload=$gbr_prev;
		}
		
		$data = array(
				'nama'	=>$txtjudul,
				'profil' => $deskripsi,
				'produk'			=>$produk,
				'gambar'		=>$upload,
				'author'		=>$author,
				'status'		=>$status					
				);
		$this->Skpd_model->update($id,$data);
		redirect(base_url().'skpd/index/');
		
	}
	function hapus($id)
	{
		$this->Skpd_model->delete($id);
		redirect(base_url().'skpd');
	}
	
	
}
