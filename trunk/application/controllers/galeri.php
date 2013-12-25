<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class galeri extends CI_Controller {
	private $limit = 10;
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('temp_model','',TRUE);
		$this->load->model('backend_model','',TRUE);
		$this->load->library('pagination');
		$this->load->model('galerimodel','',TRUE);
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
		$uri_segment = 3;
		$offset = $this->uri->segment($uri_segment);
		$config['base_url'] = site_url('galeri/index/');
		$config['total_rows'] = $this->galerimodel->count_galeri();
		$config['per_page'] = $this->limit;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		
		$data['galeri']		= $this->galerimodel->get_All($this->limit,$offset);
		$data['include']	= $this->temp_model->includeFile();
		$data['header']		= $this->temp_model->headerMenu('0');
		$data['sliderTop']	= $this->temp_model->sliderTop();
		$data['mainmenu']	= $this->temp_model->mainmenu("10");
		$data['pengumuman']	= $this->temp_model->pengumuman();
		$data['polling']	= $this->temp_model->polling();
		$data['login']		= $this->temp_model->login();
		$data['linkterkait']= $this->temp_model->linkterkait();
		$data['testimonial']= $this->temp_model->testimonial();
		$data['footer']		= $this->temp_model->footer();
		$this->load->view('galeri/list',$data);
	}
	function viewGaleri($id)
	{
		$data['namaGaleri']	= $this->galerimodel->getnamaGaleri($id);
		$data['galeri']		= $this->galerimodel->get_All_list($id);
		$data['header']		= $this->temp_model->headerMenu('0');
		$data['sliderTop']	= $this->temp_model->sliderTop();
		$data['mainmenu']	= $this->temp_model->mainmenu("10");
		$data['pengumuman']	= $this->temp_model->pengumuman();
		$data['polling']	= $this->temp_model->polling();
		$data['login']		= $this->temp_model->login();
		$data['linkterkait']= $this->temp_model->linkterkait();
		$data['testimonial']= $this->temp_model->testimonial();
		$data['footer']		= $this->temp_model->footer();
		$this->load->view('galeri/preview',$data);
	}
	function daftar_galeri($offset=0)
	{
		$this->cekLogin();
		$uri_segment = 3;
		$offset = $this->uri->segment($uri_segment);
		$config['base_url'] = site_url('galeri/daftar_galeri/');
		$config['total_rows'] = $this->galerimodel->count_galeri();
		$config['per_page'] = $this->limit;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['galeri']		= $this->galerimodel->get_All($this->limit,$offset);
		$data['mainmenu']	= $this->backend_model->mainmenu("10");
		$this->load->view('galeri/daftar_galeri',$data);
	}
	function daftar_add()
	{
		$this->cekLogin();
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['mainmenu']	= $this->backend_model->mainmenu("10");
		$this->load->view('galeri/daftar_add',$data);
	}
	function simpan_daftar()
	{
		$nama	= $this->input->post('nama');
		
		$upload=$this->do_upload();
		
		if($upload!="error")
		{
			$data = array(
				'nama_galeri'	=>$nama,
				'img_thubnail'		=>$upload,
				);
			$this->galerimodel->save($data);
			redirect('galeri/daftar_galeri/','refresh');
		}
		else
		{
			echo "Upload file Gagal!!, Ukuran maksimum file adalah 3MB. ";
		}
	}
	function daftar_edit($id)
	{
		$this->cekLogin();
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['galeri']		= $this->galerimodel->getbyid($id)->result();
		$data['mainmenu']	= $this->backend_model->mainmenu("10");
		$this->load->view('galeri/daftar_edit',$data);
	}
	function simpandaftaredit()
	{
		$id			= $this->input->post('id');
		$filename	= $this->input->post('namafile');
		$nama		= $this->input->post('nama');
		$file		= $_FILES['gambar']['name'];
		
		if($file!="")
		{ 
			unlink(realpath("./uploads/galeri/thumbnail/".$filename));
			$namaFile	= $this->do_upload();
		}
		{
			$namaFile	= $namaFile;
		}
			
			if($namaFile=="error")
			{
				echo "Upload file Gagal!!, Ukuran maksimum file adalah 3MB. ";
			}
			else
			{
				$data = array('nama_galeri'=>$nama,'img_thubnail'=>$namaFile);
				$this->galerimodel->update($id,$data);
				redirect('galeri/daftar_galeri','refresh');
			}
	}
	function daftar_hapus($id)
	{
		$dataFile	= $this->galerimodel->getbyid($id)->result();
		foreach($dataFile as $row)
		{
			unlink(realpath("./uploads/galeri/".$row->img_thubnail));
			unlink(realpath("./uploads/galeri/thumbnail/".$row->img_thubnail));
		}
		$this->galerimodel->delete($id);
		redirect('galeri/daftar_galeri','refresh');
	}
	function listGaleri($id=null)
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
		$data['galeri']		= $this->galerimodel->get_All_list($id);
		$data['namaGaleri']	= $this->galerimodel->getnamaGaleri($id);
		$data['mainmenu']	= $this->backend_model->mainmenu("10");
		$this->template->set_template("admin");
		$this->template->write_view('wrapper','galeri/list_galeri',$data);
		$this->template->render();
		//$this->load->view('galeri/list_galeri',$data);
	}
	function simpan_img()
	{
		$id		= $this->input->post('idgaleri');
		$nama	= $this->input->post('deskripsi');
		
		$upload=$this->do_upload();
		
		if($upload!="error")
		{
			$data = array(
				'id_galeri'	=>$id,
				'deskripsi'	=>$nama,
				'img'		=>$upload,
				);
			$this->galerimodel->saveGaleri($data);
			redirect("galeri/listGaleri/$id",'refresh');
		}
		else
		{
			echo "Upload file Gagal!!, Ukuran maksimum file adalah 3MB. ";
		}
	}
	function hapus_img($id)
	{
		$dataFile	= $this->galerimodel->getbyidList($id)->result();
		foreach($dataFile as $row)
		{
			$idgaleri	= $row->id_galeri;
			unlink(realpath("./uploads/galeri/".$row->img));
			unlink(realpath("./uploads/galeri/thumbnail/".$row->img));
		}
		$this->galerimodel->deleteList($id);
		redirect("galeri/listGaleri/$idgaleri",'refresh');
	}
	
	public function do_upload() {
		//konfigurasi limit file gambar yang diupload
        $config['upload_path']	= "./uploads/galeri";
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
            $source             = "./uploads/galeri/".$data['file_name'] ; // upload gambar asli
			$destination_thumb	= "./uploads/galeri/thumbnail/" ;
			
            /* Resizing Processing */
			// Configuration Of Image Manipulation :: Static
			$this->load->library('image_lib') ;
			$img['image_library'] = 'GD2';
			$img['create_thumb']  = TRUE;
			$img['maintain_ratio']= TRUE;
 
            /// Limit Width Resize
            $limit_medium   = 160 ;
            $limit_thumb    = 160 ;
 
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
			//unlink(realpath("./uploads/galeri/".$data['file_name'])); // hapus gambar asli setelah di resize terlebih dahulu
			return $data['file_name'];
        }
        else {
            $status="error" ;
			return $status;
        }
    }
	
}