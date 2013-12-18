<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class forum extends CI_controller {
	private $limit = 10;

	function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('pagination');		
		$this->load->model('forumkategori_model','',TRUE);		
		$this->load->model('forumsubkategori_model','',TRUE);
		$this->load->model('forumtemp_model','',TRUE);		
		$this->load->model('temp_model','',TRUE);
		$this->load->model('forumpost_model','',TRUE);
		$this->load->model('forumpostreply_model','',TRUE);
		$this->load->model('forumbacktemp_model','',TRUE);
		$this->load->model('user_model','',TRUE);		
	}

	function publik($offset=0){		
		$uri_segment = 3;
		$offset = $this->uri->segment($uri_segment);
		$config['base_url'] = site_url('forum/publik/');
		$config['total_rows'] = $this->forumkategori_model->count_data();
		$config['per_page'] = $this->limit;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();	
		$data['fields']		= $this->forumkategori_model->get_list_data($this->limit,$offset);
		$data['jumlah'] 	= $this->forumkategori_model->count_data();
		$data['mainmenu']			= $this->forumtemp_model->mainmenu("0");
		$data['include']			= $this->forumtemp_model->includeFile();
		$data['header']				= $this->forumtemp_model->headerMenu('2');
		$data['daftar']				= $this->forumtemp_model->daftar();
		$data['memberonline']		= $this->forumtemp_model->memberonline();
		$data['statistik']			= $this->forumtemp_model->statistik();
		$data['login']		= $this->forumtemp_model->login();
		$data['footer']		= $this->forumtemp_model->footer();
		$this->load->view('forum/index',$data);
	}
	
	function subkategori($id,$offset=''){				
		$uri_segment = 3;
		$offset 				= $this->uri->segment($uri_segment);
		$config['base_url'] 	= site_url('forum/publik/');
		$config['total_rows'] 	= $this->forumsubkategori_model->count_data();
		$config['per_page'] 	= $this->limit;		
		$config['num_links'] 	= 5;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		$data['offset'] 	= $offset;		
		
		//$data['field']			= $this->forumkategori_model->get_by_id($id);
		$field		= $this->db->query("SELECT * FROM forum_kategori WHERE id_kategori = $id")->result();
		foreach ($field as $m){
			
			$data['ids']			= $m->id_kategori;
			$data['nama_kategori']	= $m->nama_kategori;
		
		}
		$data['mainmenu']			= $this->forumtemp_model->mainmenu("0");
		$data['fields']				= $this->forumsubkategori_model->get_by_kategori($id,$this->limit,$offset);
		
		//$data['id_kat']				= $this->uri->segment($uri_segment);
		//echo $this->uri->segment($uri_segment);		
		$data['include']			= $this->forumtemp_model->includeFile();
		$data['header']				= $this->forumtemp_model->headerMenu('2');
		$data['daftar']				= $this->forumtemp_model->daftar();
		$data['memberonline']		= $this->forumtemp_model->memberonline();
		$data['statistik']			= $this->forumtemp_model->statistik();
		$data['login']				= $this->forumtemp_model->login();
		$data['footer']				= $this->forumtemp_model->footer();
		$this->load->view('forum/index_subkategori',$data);

	}

	function daftar_post_byid($id){
		$uri_segment = 3;
		//$data['wew'] = $this->uri->segment($uri_segment);
		$data['fields']				= $this->forumpost_model->get_by_subkategori($id,$this->limit,$offset);
		$data['include']			= $this->forumtemp_model->includeFile();
		$data['mainmenu']			= $this->forumtemp_model->mainmenu("0");
		$data['header']				= $this->forumtemp_model->headerMenu('2');
		$data['daftar']				= $this->forumtemp_model->daftar();
		$data['memberonline']		= $this->forumtemp_model->memberonline();
		$data['statistik']			= $this->forumtemp_model->statistik();
		$data['login']				= $this->forumtemp_model->login();
		$data['footer']				= $this->forumtemp_model->footer();
		$this->load->view('forum/index_pos',$data);
	}

	function detail_post_byid($id,$limit,$offset){
		$w = $this->forumpost_model->get_by_id($id);
		if(count($w) != 0){
			$data['datas']				= $this->forumpost_model->get_by_id($id);
			$data['fields']				= $this->forumpostreply_model->get_by_post($id,$this->limit,$offset);
			$data['include']			= $this->forumtemp_model->includeFile();
			$data['mainmenu']			= $this->forumtemp_model->mainmenu("0");
			$data['includes']	= $this->temp_model->includeFile();
			$data['header']				= $this->forumtemp_model->headerMenu('2');
			$data['daftar']				= $this->forumtemp_model->daftar();
			$data['memberonline']		= $this->forumtemp_model->memberonline();
			$data['statistik']			= $this->forumtemp_model->statistik();
			$data['login']				= $this->forumtemp_model->login();
			$data['footer']				= $this->forumtemp_model->footer();
			$this->load->view('forum/pos/pos_detail',$data);
		}	
		else { 
			if(count($w) == 0)		{
				redirect('forum/publik','refresh');
			}
		}
	}

	function user(){
		$id=$this->session->userdata('userid');
		$data['fields']				= $this->user_model->getbyid($id)->result();
		$data['datas']				= $this->forumpost_model->get_by_id($id);
		$data['include']			= $this->forumtemp_model->includeFile();	
		$data['mainmenu']			= $this->forumtemp_model->mainmenu("2");	
		$data['includes']			= $this->temp_model->includeFile();
		$data['header']				= $this->forumtemp_model->headerMenu('2');
		$data['daftar']				= $this->forumtemp_model->daftar();
		$data['memberonline']		= $this->forumtemp_model->memberonline();
		$data['statistik']			= $this->forumtemp_model->statistik();
		$data['login']				= $this->forumtemp_model->login();
		$data['footer']				= $this->forumtemp_model->footer();
		$this->load->view('forum/user',$data);
	}

	function simpanuser2(){
		$id				= $this->input->post('id_user');
		$nama_asli		= $this->input->post('nama_asli');
		$username		= $this->input->post('username');
		$password		= $this->input->post('password');
		$email			= $this->input->post('email');
		$file			= $_FILES['file']['name'];
		
		if($file!=""){
			$config['upload_path']	= './images/avatar/';
			$config['allowed_types']= 'png|jpg|jpeg|gif';
			$config['max_size']		= '10000';
			$config['file_name']	= $this->session->userdata('userid'); 
		
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
		else{
			$filename="";
		}
		
		$dataU	= array('nama_asli'=>$nama_asli,'username'=>$username,'password'=>$password,'foto_profil'=>"$filename",'email'=>$email);
			//echo $filename;
		$this->user_model->update($id,$dataU);
		redirect('forum/user','refresh');
	}


	function register(){
		$data['jumlah'] 		= $this->forumkategori_model->count_data();
		$data['mainmenu']		= $this->forumtemp_model->mainmenu("0");
		$data['include']		= $this->forumtemp_model->includeFile();
		$data['header']			= $this->forumtemp_model->headerMenu('2');
		$data['daftar']			= $this->forumtemp_model->daftar();
		$data['memberonline']	= $this->forumtemp_model->memberonline();
		$data['statistik']		= $this->forumtemp_model->statistik();
		$data['login']			= $this->forumtemp_model->login();
		$data['footer']			= $this->forumtemp_model->footer();
		
		$this->load->view('forum/register',$data);
	}	

	function simpanregister(){
		$level			= $this->input->post('id_level');
		$nama_asli		= $this->input->post('nama_asli');
		$username		= $this->input->post('username');
		$password		= $this->input->post('password');
		$email			= $this->input->post('email');
		
		$dataU	= array('nama_asli'=>$nama_asli,'username'=>$username,'password'=>$password,'id_level'=>$level,'email'=>$email);
		$this->user_model->save($dataU);
		redirect('forum/publik','refresh');
			
	}

	function simpanposreply(){
		$this->load->helper('date');
		$this->load->library('form_validation');

		$id_post 			= $this->input->post('id_post');
		$txtpengirim 		= $this->input->post('txtpengirim');
		$txtemailpengirim 	= $this->input->post('txtemailpengirim');
		$editor				= $this->input->post('editor');

		$this->form_validation->set_rules('txtpengirim', 'Nama Pengirim', 'trim|required|xss_clean');
		$this->form_validation->set_rules('txtemailpengirim', 'Email Pengirim', 'trim|required|xss_clean');
		$this->form_validation->set_rules('editor', 'Isi Post Reply', 'trim|required|xss_clean');
		
		if ($this->form_validation->run() == FALSE){
			redirect('forum/detail_post_byid/'.$this->input->post('id_post').'');
		} else {
			$data = array(
					'nama_pengirim'	 	 => $txtpengirim ,
					'email_pengirim' 	 => $txtemailpengirim ,
					'isi_post_reply' 	 => $editor,
					'tanggal_post_reply' => date('d-M-Y | H:i', now()),
					'foto' 				 => '0.jpg' ,
					'id_post' 			 => $id_post
					);
			
			$this->forumpostreply_model->save($data);
			redirect('forum/detail_post_byid/'.$this->input->post('id_post').'','refresh');
		}
	}

//============= member =====================

function member($offset=''){

	$uri_segment = 3;
	$offset = $this->uri->segment($uri_segment);
	$config['base_url'] = site_url('forum/member/');
	$config['total_rows'] = $this->user_model->count_data();
	$config['per_page'] = $this->limit;
	$this->pagination->initialize($config);
	$data['pagination'] = $this->pagination->create_links();
	$data['offset'] = $offset;
	$data['fields']				= $this->user_model->get_list_data($this->limit,$offset);
	$data['include']			= $this->forumtemp_model->includeFile();
	$data['header']				= $this->forumtemp_model->headerMenu('3');
	$data['daftar']				= $this->forumtemp_model->daftar();
	$data['memberonline']		= $this->forumtemp_model->memberonline();
	$data['statistik']			= $this->forumtemp_model->statistik();
	$data['login']				= $this->forumtemp_model->login();
	$data['footer']				= $this->forumtemp_model->footer();
	$this->load->view('forum/index_member',$data);
}

function member_detail($id){
	$data['fields']				= $this->user_model->getbyid($id)->result();
	$data['include']			= $this->forumtemp_model->includeFile();
	$data['header']				= $this->forumtemp_model->headerMenu('3');
	$data['daftar']				= $this->forumtemp_model->daftar();
	$data['memberonline']		= $this->forumtemp_model->memberonline();
	$data['statistik']			= $this->forumtemp_model->statistik();
	$data['login']				= $this->forumtemp_model->login();
	$data['footer']				= $this->forumtemp_model->footer();
	$this->load->view('forum/member/member_detail',$data);
}

function member_update(){
	$wew = $this->input->post('id_user');
	$data['fields']				= $this->user_model->getbyid($wew)->result();
	$data['include']			= $this->forumtemp_model->includeFile();
	$data['header']				= $this->forumtemp_model->headerMenu('3');
	$data['daftar']				= $this->forumtemp_model->daftar();
	$data['memberonline']		= $this->forumtemp_model->memberonline();
	$data['statistik']			= $this->forumtemp_model->statistik();
	$data['login']				= $this->forumtemp_model->login();
	$data['footer']				= $this->forumtemp_model->footer();
	$this->load->view('forum/member/member_edit',$data);
}



}