<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class faq extends CI_Controller {

private $limit = 10;

	function __construct()

	{

		parent::__construct();

		$this->load->helper(array('form', 'url'));

		$this->load->library('pagination');

		$this->load->model('temp_model','',TRUE);

		$this->load->model('backend_model','',TRUE);

		$this->load->model('faq_model','',TRUE);

	}
	function cekLogin()
	{
		if($this->session->userdata('userid')=="")
		{
			redirect('backend');
		}
	}
	function publik($offset=0)

	{

		$uri_segment = 3;

		$offset 				= $this->uri->segment($uri_segment);

		$config['base_url'] 	= site_url('faq/index/');

		$config['total_rows'] 	= $this->faq_model->count_data();

		$config['per_page'] 	= $this->limit;
		
		$config['num_links'] 	= 5;

		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links();

		$data['offset'] 	= $offset;
		
		$data['include']	= $this->temp_model->includeFile();
		$data['header']		= $this->temp_model->headerMenu('0');
		$data['sliderTop']	= $this->temp_model->sliderTop();

		$data['fields']		= $this->faq_model->get_list_data($this->limit,$offset);

		$data['mainmenu']	= $this->temp_model->mainmenu("13");

		$data['pengumuman']	= $this->temp_model->pengumuman();

		$data['polling']	= $this->temp_model->polling();

		$data['login']		= $this->temp_model->login();

		$data['linkterkait']= $this->temp_model->linkterkait();

		$data['testimonial']= $this->temp_model->testimonial();

		$data['footer']		= $this->temp_model->footer();

		$this->load->view('faq/faq',$data);

	}
	
	function index($offset=0)

	{
		$this->cekLogin();
		$uri_segment = 3;

		$offset 				= $this->uri->segment($uri_segment);

		$config['base_url'] 	= site_url('faq/index/');

		$config['total_rows'] 	= $this->faq_model->count_data();

		$config['per_page'] 	= $this->limit;
		
		$config['num_links'] 	= 5;

		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links();

		$data['offset'] 	= $offset; 
		
		$data['jumlah'] 	= $this->faq_model->count_data();

		$data['headmenu']	= $this->backend_model->headermenu();
		
		$data['fields']		= $this->faq_model->get_list_data($this->limit,$offset);

		$data['mainmenu']	= $this->backend_model->mainmenu("16");

		$this->load->view('faq/faq_data',$data);

	}
	
	function detail($id)

	{
		
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['mainmenu']	= $this->backend_model->mainmenu('16');
		
		$field		= $this->db->query("SELECT * FROM faq WHERE id_faq = $id")->result();
			foreach ($field as $m)
			{
				$data['id_faq']			= $m->id_faq;
				$data['pertanyaan']		= $m->pertanyaan;
				$data['jawab']			= $m->jawab;
			}
			
			$data['wew']='<div>
			<form method="post" action="'.base_url().'index.php/faq/edit">
            	<input type="hidden" name="idm" value="'.$m->id_faq.'" />
				<input type="submit" value="Update" class="button" style="height:20px">
				</form></div>';
		
		$this->load->view('faq/faq_detail', $data);
		
	}
	
	function add()

	{
		$this->cekLogin();
		$data['headmenu']	= $this->backend_model->headermenu();

		$data['mainmenu']	= $this->backend_model->mainmenu("16");

		$this->load->view('faq/faq_add',$data);

	}

	
	function simpan()

	{
				
		$judul			= $this->input->post('txtjudul');
		
		$isi			= $this->input->post('editor');
				
		$data = array(
						
						'pertanyaan'			=> $judul,
						'jawab'					=> $isi
						
						);

		$this->faq_model->save($data);

		redirect('faq/index','refresh');
	
	}
	
	function edit()

	{
		$this->cekLogin();
		$aw= $this->input->post('idm');
		
		$data['headmenu']	= $this->backend_model->headermenu();

		$data['fields']		= $this->faq_model->getbyid($aw)->result();

		$data['mainmenu']	= $this->backend_model->mainmenu('16');

		$this->load->view('faq/faq_edit',$data);

	}
	
	function simpanedit()

	{

		$id				= $this->input->post('id_faq');

		$pertanyaan		= $this->input->post('txtjudul');

		$jawab			= $this->input->post('editor');

		

			$data	= array(
					'pertanyaan'	=>$pertanyaan,
					'jawab'			=>$jawab);

			$this->faq_model->update($id,$data);

			

		redirect('faq','refresh');

	}
	
	function hapus($id)

	{

		$this->faq_model->delete($id);

		redirect('faq','refresh');

	}

}