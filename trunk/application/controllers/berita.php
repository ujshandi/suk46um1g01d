<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Berita extends CI_Controller {
 	var $file_gambar;
	private $limit = 5;
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('file');
		$this->load->model('backend_model');
		$this->load->model('temp_model');
		$this->load->model('Berita_model','',TRUE);
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
		$config['base_url'] = site_url('berita/index/');
		$config['total_rows'] = $this->Berita_model->count_data();
		$config['per_page'] = $this->limit;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		$data['offset']=$offset;
		
		$data['fields'] 	= $this->Berita_model->getAll($this->limit,$offset);
		$data['headmenu']	= $this->backend_model->headermenu();		
		$data['jumlah']		= $this->Berita_model->count_data();	
		$data['mainmenu']	= $this->backend_model->mainmenu("7");
		$this->template->set_template("admin");
		$this->template->write_view('wrapper','berita/berita_data',$data);
		$this->template->render();
		//$this->load->view('berita/berita_data',$data);
	}
	function detail($id)
	{
			$data = array(
					
					'title_page'=>'Berita',
					'title'=>'CPanel',
					'js'=>array(),//'js/flexigrid.pack.js','js/jqModal.js'),
					//'css'=>array('css/flexigrid.pack.css','css/jqModal.css')
					'css'=>array()
				);
		$data['data']		= $this->Berita_model->get_by_id($id);
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
		//$this->load->view('berita/berita_detail',$data);
		$this->template->write_view('header','templates/header',$data);
		$this->template->write_view('wrapper','berita/berita_detail',$data);
		$this->template->render();
	}
	function arsip($kategori="",$offset=0)
	{
		$uri_segment = 4;
			$data = array(
					
					'title_page'=>'Arsip Berita',
					'title'=>'CPanel',
					'js'=>array(),//'js/flexigrid.pack.js','js/jqModal.js'),
					//'css'=>array('css/flexigrid.pack.css','css/jqModal.css')
					'css'=>array()
				);
		$offset = $this->uri->segment($uri_segment);
		$this->load->library('pagination');
		$config['base_url'] = site_url('berita/arsip/'.$kategori.'/'.$offset);
		$config['total_rows'] = $this->Berita_model->count_data2($kategori);
		$config['per_page'] = $this->limit;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		$data['offset']=$offset;
	
		$data['data']		= $this->Berita_model->getAll2($this->limit,$offset,$kategori);
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
		$this->template->write_view('header','templates/header',$data);
		$this->template->write_view('wrapper','berita/arsip',$data);
		$this->template->render();
		//$this->load->view('berita/arsip',$data);
	}
	function search()
	{
		$key	= $this->input->post('search');
		
		$data['data']		= $this->Berita_model->search("judul_berita","deskripsi_singkat","isi",$key)->result();
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
		$this->load->view('berita/arsip',$data);
	}
	function search2()
	{
		$this->cekLogin();
		$key	= $this->input->post('search');
		
		$data['fields'] 	= $this->Berita_model->search2("judul_berita","deskripsi_singkat","isi",$key)->result();
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['mainmenu']	= $this->backend_model->mainmenu("7");
		$data['jumlah']		= $this->Berita_model->count_data();
		$this->load->view('berita/berita_data',$data);
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
		$data['mainmenu']	= $this->backend_model->mainmenu("7");
		$data['ckeditor'] = $this->utility->ckeditor_full("editor1");
		//$berita = new object;
		$berita->id_berita="";
		$berita->judul_berita="";
		$berita->deskripsi_singkat="";
		$berita->isi="";
		$berita->author="";
		$berita->klasifikasi="teks";
		$berita->kategori="sukabumi";
		$data['berita'] = $berita;
		$this->template->set_template("admin");
//		$this->template->write_view('header','templates/header_admin',$data);
		$this->template->write_view('wrapper','berita/berita_rec',$data);
		$this->template->render();
		//$this->load->view('berita/berita_add',$data);
	}
	function saveData()
	{
		$id			= $this->input->post('id');
		$txtjudul	= $this->input->post('txtjudul');
		$deskripsi	= $this->input->post('deskripsi');
		$isi		= $this->input->post('isi');
		$author		= $this->input->post('author');
		$gambar		= $this->input->post('gambar');
		$video		= $this->input->post('video');
		$kategori		= $this->input->post('cmbKategori');
		$klasifikasi		= $this->input->post('cmbKlasifikasi');
		$status		= $this->input->post('status');
		
		//$upload=$this->upload->do_upload();
	//	var_dump($this->upload->display_errors());die;
		//if($upload!="error")
		//if($this->upload->do_upload($gambar))
		//{
			$data = array(
				'tanggal'		=> date('Y-m-d H:i:s'),
				'judul_berita'	=>$txtjudul,
				'deskripsi_singkat' => $deskripsi,
				'isi'			=>$isi,
				'gambar'		=>$gambar,
				'video'		=>$video,
				'kategori'		=>$kategori,
				'klasifikasi'		=>$klasifikasi,
				'status'		=>$status,
				'author'		=>$author					
				);
			if ($id==""){
				$this->Berita_model->save($data);
			} else {
				$this->Berita_model->update($id,$data);
			}
			
			redirect(base_url().'berita/index/');
		/* }
		else
		{
			echo "Upload file Gagal!!,  ".$this->upload->display_errors();
		} */
	}
	public function do_upload() {
		//konfigurasi limit file gambar yang diupload
        $config['upload_path']	= "./uploads/img/real";
        $config['allowed_types']= 'gif|jpg|png|jpeg';
		//$config['encrypt_name'] = FALSE;
		$config['max_size']     = '3000';
        $config['max_width']  	= '5000';
        $config['max_height']  	= '5000';
 		$config['file_name']	= date('YmdHis');
		
        $this->load->library('upload', $config);
 		
        if ($this->upload->do_upload("gambar")) {
            $data	 	= $this->upload->data();
 
            /* PATH */
            $source             = "./uploads/img/real/".$data['file_name'] ; // upload gambar asli
            $destination_thumb	= "./uploads/img/thumbnail/" ;
            $destination_medium	= "./uploads/img/medium/" ;
 
            // Permission Configuration
            chmod($source, 0777) ;
 
            /* Resizing Processing */
			// Configuration Of Image Manipulation :: Static
			$this->load->library('image_lib') ;
			$img['image_library'] = 'GD2';
			$img['create_thumb']  = TRUE;
			$img['maintain_ratio']= TRUE;
 
            /// Limit Width Resize
            $limit_medium   = 560 ;
            $limit_thumb    = 66 ;
 
            // Size Image Limit was using (LIMIT TOP)
            $limit_use  = $data['image_width'] > $data['image_height'] ? $data['image_width'] : $data['image_height'] ;
 
            // Percentase Resize
            if ($limit_use > $limit_medium || $limit_use > $limit_thumb) {
                $percent_medium = $limit_medium/$limit_use ;
                $percent_thumb  = $limit_thumb/$limit_use ;
            }
 
            //// Making THUMBNAIL ///////
	   		$img['width']  = $limit_use > $limit_thumb ?  $data['image_width'] * $percent_thumb : $data['image_width'] ;
            $img['height'] = $limit_use > $limit_thumb ?  $data['image_height'] * $percent_thumb : $data['image_height'] ;
 
            // Configuration Of Image Manipulation :: Dynamic
            //$img['thumb_marker'] = '_thumb-'.floor($img['width']).'x'.floor($img['height']) ;
			$img['thumb_marker'] = '' ;
            $img['quality']      = '100%' ;
            $img['source_image'] = $source ;
            $img['new_image']    = $destination_thumb ;
 
 			
            // Do Resizing
            $this->image_lib->initialize($img);
            $this->image_lib->resize();
            $this->image_lib->clear() ;
 
            ////// Making MEDIUM /////////////
            $img['width']   = $limit_use > $limit_medium ?  $data['image_width'] * $percent_medium : $data['image_width'] ;
            $img['height']  = $limit_use > $limit_medium ?  $data['image_height'] * $percent_medium : $data['image_height'] ;
 
            // Configuration Of Image Manipulation :: Dynamic
            //$img['thumb_marker'] = '_medium-'.floor($img['width']).'x'.floor($img['height']) ;
			$img['thumb_marker'] = '' ;
            $img['quality']      = '100%' ;
            $img['source_image'] = $source ;
            $img['new_image']    = $destination_medium ;
 
            // Do Resizing
            $this->image_lib->initialize($img);
            $this->image_lib->resize();
			unlink(realpath("./uploads/img/real/".$data['file_name'])); // hapus gambar asli setelah di resize terlebih dahulu
            $this->image_lib->clear() ;
			return $data['file_name'];
        }
        else {
            $status="error" ;
			return $status;
        }
    }
	function edit($id)
	{
		$this->cekLogin();
	/* 	$data['berita']		= $this->Berita_model->get_by_id($id)->result();
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['mainmenu']	= $this->backend_model->mainmenu("10");
		$this->load->view('berita/berita_rec',$data); */
		$data = array(
					
					'title_page'=>'Admin Page',
					'title'=>'CPanel',
					'js'=>array(),//'js/flexigrid.pack.js','js/jqModal.js'),
					//'css'=>array('css/flexigrid.pack.css','css/jqModal.css')
					'css'=>array()
				);
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['mainmenu']	= $this->backend_model->mainmenu("7");
		$data['berita']		= $this->Berita_model->get_by_id($id);
		$data['ckeditor'] = $this->utility->ckeditor_full("editor1");
		//var_dump($data['berita']);
		$this->template->set_template("admin");
//		$this->template->write_view('header','templates/header_admin',$data);
		$this->template->write_view('wrapper','berita/berita_rec',$data);
		$this->template->render();
	}
	function saveEdit()
	{
		$id			= $this->input->post('id');
		$gbr_prev	= $this->input->post('gambar_prev');
		$txtjudul	= $this->input->post('txtjudul');
		$deskripsi	= $this->input->post('deskripsi');
		$isi		= $this->input->post('isi');
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
				'judul_berita'	=>$txtjudul,
				'deskripsi_singkat' => $deskripsi,
				'isi'			=>$isi,
				'gambar'		=>$upload,
				'author'		=>$author,
				'status'		=>$status					
				);
		$this->Berita_model->update($id,$data);
		redirect(base_url().'berita/index/');
		
	}
	function hapus($id)
	{
		$this->Berita_model->delete($id);
		redirect(base_url().'berita');
	}
	
	
}