<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class pesan extends CI_Controller {

	private $limit = 10;

	function __construct()

	{

		parent::__construct();

		$this->load->helper(array('form', 'url'));

		$this->load->library('pagination');

		$this->load->model('backend_model','',TRUE);

		$this->load->model('temp_model','',TRUE);

		$this->load->model('pesan_model','',TRUE);

	}
	

	function publik($offset=0)

	{
		$uri_segment = 3;

		$offset = $this->uri->segment($uri_segment);

		$config['base_url'] = site_url('pesan/publik/');

		$config['total_rows'] = $this->pesan_model->count_data();

		$config['per_page'] = $this->limit;

		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links();
		
		
		

		$data['include']	= $this->temp_model->includeFile();

		$data['header']		= $this->temp_model->headerMenu('0');

		$data['sliderTop']	= $this->temp_model->sliderTop();

		$data['pesan_anda']	= $this->pesan_model->getAll($this->limit,$offset);

		$data['mainmenu']	= $this->temp_model->mainmenu("11");

		$data['pengumuman']	= $this->temp_model->pengumuman();

		$data['polling']	= $this->temp_model->polling();

		$data['login']		= $this->temp_model->login();

		$data['linkterkait']= $this->temp_model->linkterkait();

		$data['testimonial']= $this->temp_model->testimonial();

		$data['footer']		= $this->temp_model->footer();

		$this->load->view('pesan/pesan_publik',$data);

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
		$this->cekLogin();
		$uri_segment = 3;

		$offset = $this->uri->segment($uri_segment);

		$config['base_url'] = site_url('pesan/index/');

		$config['total_rows'] = $this->pesan_model->count_data();

		$config['per_page'] = $this->limit;

		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links();

		

		$data['headmenu']	= $this->backend_model->headermenu();
		
		$data['fields']	= $this->pesan_model->get_list_data($this->limit,$offset);

		$data['mainmenu']	= $this->backend_model->mainmenu("15");

		$this->load->view('pesan/pesan_data',$data);

	}

	function detail($id)

	{
		
		
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['mainmenu']	= $this->backend_model->mainmenu('15');
		
		$field		= $this->db->query("SELECT * FROM pesan p, pesan_tanggapi t,sistem_user s,
level_user l WHERE p.id_pesan = t.id_pesan AND t.oleh = s.id_user AND s.id_level = l.id_level AND p.id_pesan = $id");
		
		if($field->num_rows()>0){
		
		foreach ($field->result() as $m)
			{
				$data['id_pesan']		= $m->id_pesan;
				$data['pengirim']		= $m->pengirim;
				$data['email']			= $m->email_pengirim;
				$data['isi']			= $m->isi;
				$data['tanggal']		= $m->tanggal;
				$data['isitanggapi']	= $m->isitanggapi;
				$data['nama_level']		= $m->nama_level;
				$data['tanggaltanggapi']	= $m->tanggaltanggapi;
				$data['id_tanggapi']	= $m->id_tanggapi;
				
			}
				$data['wew']='<div>
			<form method="post" action="'.base_url().'index.php/pesan/ubah">
            	<input type="hidden" name="idm" value="'.$m->id_tanggapi.'" />
				<input type="submit" value="Update" class="button" style="height:20px">
				</form></div>';
		} else {
		
		$field		= $this->db->query("SELECT * FROM pesan WHERE id_pesan = $id")->result();
			foreach ($field as $m)
			{
				$data['id_pesan']		= $m->id_pesan;
				$data['pengirim']		= $m->pengirim;
				$data['email']			= $m->email_pengirim;
				$data['isi']			= $m->isi;
				$data['tanggal']		= $m->tanggal;
				$data['isitanggapi']	= "Belum ada jawaban dari pihak Pengelola..!!";
							
			}
			
			$data['wew']='<div>
			<form method="post" action="'.base_url().'index.php/pesan/jawab">
            	<input type="hidden" name="idm" value="'.$m->id_pesan.'" />
				<input type="submit" value="Jawab" class="button" style="height:20px">
				</form></div>';
			
		}
		$this->load->view('pesan/pesan_detail',$data);

	}

	function simpan()

	{
		//$this->load->library('form_validation');
		$this->load->helper('date');
		
		$pengirim		= $this->input->post('txtpengirim');

		$email_pengirim	= $this->input->post('txtemailpengirim');
		
		$isi			= $this->input->post('editor');
		
		
		$data = array(
						
						'pengirim'			=> $pengirim,
						'email_pengirim'	=> $email_pengirim,
						'isi'				=> $isi,
						'tanggal'			=> date('d-M-Y | H:i', now()),
						'status'			=> '0'
						);

		$this->pesan_model->save($data);

		redirect('pesan/publik','refresh');
	
	}
	
// ============== simpan tanggapi, tabel pesan_tanggapi ================

	function simpantanggapi()
	{
		
		$id_pesan 		 = $this->input->post('id_pesan');
		$oleh			 = $this->input->post('oleh');
		$isitanggapi 	 = $this->input->post('isitanggapi');
		$tanggaltanggapi = $this->input->post('tgl');
		
		$data = array(
					'id_pesan' 			=> $id_pesan,
					'oleh' 				=> $oleh,
					'isitanggapi' 		=> $isitanggapi,
					'tanggaltanggapi' 	=> $tanggaltanggapi
				);
		
		$data2 = array(
					'status'	=> 1
					);
					
		$this->pesan_model->updates($id_pesan,$data2);
		$this->pesan_model->savetanggapi($data);
		
		redirect ('pesan','refresh');
		
	}

// ============== tambah jawaban untuk pesan, target tabel pesan_tanggapi =============	
	function jawab()

	{
	
		$this->load->helper('date');
		$datestring = "%d-%M-%Y | %h:%i %a";
		$time = time();

		$data['tgl'] = mdate($datestring, $time);
		$data['mainmenu']	= $this->backend_model->mainmenu('15');
		$data['headmenu']	= $this->backend_model->headermenu();
		$aw= $this->input->post('idm');
		$field		= $this->db->query("SELECT * FROM pesan WHERE id_pesan = $aw")->result();
			foreach ($field as $m)
			{
				$data['id_pesan']		= $m->id_pesan;
				$data['pengirim']		= $m->pengirim;
				$data['email']			= $m->email_pengirim;
				$data['isi']			= $m->isi;
				$data['tanggal']		= $m->tanggal;
										
			}
		
		$this->load->view('pesan/pesan_add',$data);
	}


// ============== ubah tanggapi ================	
	function ubah()

	{
		$this->cekLogin();
		$this->load->helper('date');
		$datestring = "%d-%M-%Y | %h:%i %a";
		$time = time();

		$data['tgl'] = mdate($datestring, $time);
		$data['mainmenu']	= $this->backend_model->mainmenu('15');
		$data['headmenu']	= $this->backend_model->headermenu();
		$aw= $this->input->post('idm');
		$field		= $this->db->query("SELECT * FROM pesan p, pesan_tanggapi t,sistem_user s,
level_user l WHERE p.id_pesan = t.id_pesan AND t.oleh = s.id_user AND s.id_level = l.id_level AND t.id_tanggapi = $aw")->result();
			foreach ($field as $m)
			{
				
				$data['pengirim']		= $m->pengirim;
				$data['email']			= $m->email_pengirim;
				$data['isi']			= $m->isi;
				$data['tanggal']		= $m->tanggal;
				
				$data['id_tanggapi']		= $m->id_tanggapi;
				//$data['id_pesan']			= $m->id_pesan;
				$data['oleh']				= $m->oleh;
				$data['isitanggapi']		= $m->isitanggapi;
							
			}
		
		$this->load->view('pesan/pesan_update',$data);
	}
	
	function ubahtanggapi()
	{
		$this->cekLogin();
		$id_tanggapi	 = $this->input->post('id_tanggapi');
		$oleh			 = $this->input->post('oleh');
		$isitanggapi	 = $this->input->post('isitanggapi');
		$tanggaltanggapi = $this->input->post('tgl');
		
		$data = array(
				'oleh'				=> $oleh,
				'isitanggapi'		=> $isitanggapi,
				'tanggaltanggapi'	=> $tanggaltanggapi
			   );
			   
		$this->pesan_model->update($id_tanggapi,$data);
		
		redirect ('pesan','refresh');
	
	}

//=============== end ubah tanggapi ======================

	function edit($id)

	{
		$this->cekLogin();
		$data['pesan']		= $this->pesan_model->getbyid($id)->result();

		$data['mainmenu']	= $this->backend_model->mainmenu();

		$this->load->view('pesan/pesan_edit',$data);

	}

	function simpanedit()

	{

		$id			= $this->input->post('id');

		$judul		= $this->input->post('judul');

		$deskripsi	= $this->input->post('deskripsi');

		

			$data	= array('judul'=>$judul,'deskripsi'=>$deskripsi);

			$this->pesanmodel->update($id,$data);

			

		redirect('pesan','refresh');

	}

	function hapus($id)

	{

		$this->pesan_model->delete($id);

		redirect('pesan','refresh');

	}

}