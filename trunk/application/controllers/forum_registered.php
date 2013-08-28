<?php

class forum_registered extends CI_controller {

private $limit = 10;

function __construct()
{

	parent::__construct();

	$this->load->helper(array('form', 'url'));

	$this->load->library('pagination');
	
	$this->load->model('forumkategori_model','',TRUE);
	
	$this->load->model('forumpost_model','',TRUE);
	$this->load->model('forumpostreply_model','',TRUE);
	$this->load->model('forumsubkategori_model','',TRUE);

	$this->load->model('forumtemp_model','',TRUE);

	$this->load->model('forumbacktemp_model','',TRUE);
	
}

function index($offset=0)
{

	$uri_segment = 3;

	$offset = $this->uri->segment($uri_segment);

	$config['base_url'] = site_url('forum/publik/');

	$config['total_rows'] = $this->forumkategori_model->count_data();

	$config['per_page'] = $this->limit;

	$this->pagination->initialize($config);

	$data['pagination'] = $this->pagination->create_links();
	
	$data['fields']		= $this->forumkategori_model->get_list_data($this->limit,$offset);
	$data['jumlah'] 	= $this->forumkategori_model->count_data();
	
	
	$data['include']			= $this->forumtemp_model->includeFile();

	$data['header']				= $this->forumbacktemp_model->headermenu('2');
	
	$data['memberonline']		= $this->forumtemp_model->memberonline();

	$data['statistik']			= $this->forumtemp_model->statistik();
	$data['mainmenu']			= $this->forumtemp_model->mainmenu("1.1");
	
	$data['footer']		= $this->forumtemp_model->footer();
	
	$this->load->view('forum/kategori_data',$data);

}

// ====================== Kategori =====================

function kategori_list($offset='')

{

	$uri_segment = 3;

	$offset = $this->uri->segment($uri_segment);

	$config['base_url'] = site_url('forum_registered/kategori_list/');

	$config['total_rows'] = $this->forumkategori_model->count_data();

	$config['per_page'] = $this->limit;

	$this->pagination->initialize($config);

	$data['pagination'] = $this->pagination->create_links();
	
	$data['offset'] = $offset;


	
	$data['fields']		= $this->forumkategori_model->get_list_data($this->limit,$offset);
	$data['jumlah'] 	= $this->forumkategori_model->count_data();


	$data['include']			= $this->forumtemp_model->includeFile();
	$data['header']				= $this->forumbacktemp_model->headermenu('2');
	$data['memberonline']		= $this->forumtemp_model->memberonline();

	$data['statistik']			= $this->forumtemp_model->statistik();
	$data['mainmenu']			= $this->forumtemp_model->mainmenu("1.1");
	
	$data['footer']		= $this->forumtemp_model->footer();
	
	$this->load->view('forum/kategori/kategori_data',$data);
	
}

function kategori_add()
{

	$data['include']			= $this->forumtemp_model->includeFile();
	$data['header']				= $this->forumbacktemp_model->headermenu('2');
	$data['memberonline']		= $this->forumtemp_model->memberonline();

	$data['statistik']			= $this->forumtemp_model->statistik();
	$data['mainmenu']			= $this->forumtemp_model->mainmenu("1.1");
	
	$data['footer']		= $this->forumtemp_model->footer();
	
	$this->load->view('forum/kategori/kategori_add',$data);

}

function simpankat()
{
	$this->load->helper('date');

	$title		= $this->input->post('txtjudul');

	$deskripsi	= $this->input->post('editor');
	
	$id_user	= $this->input->post('user');
	

	$data = array('nama_kategori'	=> $title,
				  'deskripsi'		=> $deskripsi,
				  'oleh'			=> $id_user,
				  'tanggal'			=> date('d-M-Y | H:i', now()));

	$this->forumkategori_model->save($data);

	redirect('forum_registered/kategori_list','refresh');

}

function katdetail($id)
{
	
	$data['include']			= $this->forumtemp_model->includeFile();
	$data['header']				= $this->forumbacktemp_model->headermenu('2');
	$data['memberonline']		= $this->forumtemp_model->memberonline();

	$data['statistik']			= $this->forumtemp_model->statistik();
	$data['mainmenu']			= $this->forumtemp_model->mainmenu("1.1");
	
	$data['footer']				= $this->forumtemp_model->footer();
	
	$data['fields'] 			= $this->forumkategori_model->get_by_id($id)->result();
		
	$this->load->view('forum/kategori/kategori_detail',$data);

}

function katupdate($id)
{
	
	$data['include']			= $this->forumtemp_model->includeFile();
	$data['header']				= $this->forumbacktemp_model->headermenu('2');
	$data['memberonline']		= $this->forumtemp_model->memberonline();

	$data['statistik']			= $this->forumtemp_model->statistik();
	$data['mainmenu']			= $this->forumtemp_model->mainmenu("1.1");
	
	$data['footer']		= $this->forumtemp_model->footer();
	
	$wew = $this->input->post('id_kategori');
	
	if($wew != '0')
	{
		
	$data['fields'] = $this->forumkategori_model->get_by_id($wew)->result();
	} else {
	
	$data['fields'] = $this->forumkategori_model->get_by_id($id)->result();
	
	}
	
	$this->load->view('forum/kategori/kategori_update',$data);

}

function katsimpanedit()
{
	$this->load->helper('date');
	
	$id			= $this->input->post('id_kategori');
	$title 		= $this->input->post('txtjudul');
	$deskripsi  = $this->input->post('editor');
	$id_user 	= $this->input->post('user');
	
	$data = array('nama_kategori'	=> $title,
				  'deskripsi'		=> $deskripsi,
				  'oleh'			=> $id_user,
				  'tanggal'			=> date('d-M-Y | H:i', now()));
	
	$this->forumkategori_model->update($id,$data);

	redirect('forum_registered/kategori_list','refresh');

}

function kathapus($id)
{

	$this->forumkategori_model->delete($id);
	redirect('forum_registered/kategori_list','refresh');

}

// ====================== FORUM ==========================

function frm_list($offset='')

{

	$uri_segment = 3;

	$offset = $this->uri->segment($uri_segment);

	$config['base_url'] = site_url('forum_registered/frm_list/');

	$config['total_rows'] = $this->forumsubkategori_model->count_data();

	$config['per_page'] = $this->limit;

	$this->pagination->initialize($config);

	$data['pagination'] = $this->pagination->create_links();
	
	$data['offset'] = $offset;


	
	$data['fields']		= $this->forumsubkategori_model->get_list_data($this->limit,$offset);
	$data['jumlah'] 	= $this->forumsubkategori_model->count_data();
	$data['kategori']	= $this->forumkategori_model->getAll();


	$data['include']			= $this->forumtemp_model->includeFile();
	$data['header']				= $this->forumbacktemp_model->headermenu('2');
	$data['memberonline']		= $this->forumtemp_model->memberonline();

	$data['statistik']			= $this->forumtemp_model->statistik();
	$data['mainmenu']			= $this->forumtemp_model->mainmenu("1.2");
	
	$data['footer']		= $this->forumtemp_model->footer();
	
	$this->load->view('forum/frm/frm_data',$data);
	
}
function frm_list_by_kat($id)

{
	if($id=="")
	{
		$this->frm_list();
	}
	else
	{
		$data['fields']		= $this->forumsubkategori_model->get_by_kategori($id);
		$data['jumlah'] 	= $this->forumsubkategori_model->count_data();
		$data['kategori']	= $this->forumkategori_model->getAll();
		$data['id_kategori']= $id;
	
		$data['include']			= $this->forumtemp_model->includeFile();
		$data['header']				= $this->forumbacktemp_model->headermenu('2');
		$data['memberonline']		= $this->forumtemp_model->memberonline();
	
		$data['statistik']			= $this->forumtemp_model->statistik();
		$data['mainmenu']			= $this->forumtemp_model->mainmenu("1.2");
		
		$data['footer']		= $this->forumtemp_model->footer();
		
		$this->load->view('forum/frm/frm_data',$data);
	}	
}
function frmadd()
{

	$data['include']			= $this->forumtemp_model->includeFile();
	$data['header']				= $this->forumbacktemp_model->headermenu('2');
	$data['memberonline']		= $this->forumtemp_model->memberonline();

	$data['statistik']			= $this->forumtemp_model->statistik();
	$data['mainmenu']			= $this->forumtemp_model->mainmenu("1.2");
	
	$data['footer']		= $this->forumtemp_model->footer();
	
	$data['kategori']	= $this->forumkategori_model->getAll();
	
	$this->load->view('forum/frm/frm_add',$data);

}

function simpanfrm()
{
	$this->load->helper('date');

	$id_kategori	= $this->input->post('id_kategori');

	$title			= $this->input->post('txtjudul');

	$deskripsi		= $this->input->post('editor');
	
	$id_user		= $this->input->post('user');
	

	$data = array('nama_subkategori'	=> $title,
				  'deskripsi_sub'		=> $deskripsi,
				  'oleh'				=> $id_user,
				  'id_kategori'			=> $id_kategori,
				  'tanggal_sub'			=> date('d-M-Y | H:i', now()));

	$this->forumsubkategori_model->save($data);

	redirect('forum_registered/frm_list','refresh');

}

function frmdetail($id)
{
	
	$data['include']			= $this->forumtemp_model->includeFile();
	$data['header']				= $this->forumbacktemp_model->headermenu('2');
	$data['memberonline']		= $this->forumtemp_model->memberonline();

	$data['statistik']			= $this->forumtemp_model->statistik();
	$data['mainmenu']			= $this->forumtemp_model->mainmenu("1.1");
	
	$data['footer']				= $this->forumtemp_model->footer();
		
	$data['fields'] 	= $this->forumsubkategori_model->get_by_id($id)->result();
	
	$this->load->view('forum/frm/frm_detail',$data);

}

function frmupdate($id)
{
	
	$data['include']			= $this->forumtemp_model->includeFile();
	$data['header']				= $this->forumbacktemp_model->headermenu('2');
	$data['memberonline']		= $this->forumtemp_model->memberonline();

	$data['statistik']			= $this->forumtemp_model->statistik();
	$data['mainmenu']			= $this->forumtemp_model->mainmenu("1.2");
	
	$data['footer']		= $this->forumtemp_model->footer();
	
	$wew = $this->input->post('id_subkategori');
	
	if($wew != '0')
	{
		
	$data['fields'] 	= $this->forumsubkategori_model->get_by_id($wew)->result();
	
	} else {
	
	$data['fields'] = $this->forumsubkategori_model->get_by_id($id)->result();
	
	}
	$data['kategori']	= $this->forumkategori_model->getAll();
	
	echo $wew;
	$this->load->view('forum/frm/frm_update',$data);

}

function frmsimpanedit()
{
	$this->load->helper('date');
	
	$id				= $this->input->post('id_subkategori');
	$id_kategori	= $this->input->post('id_kategori');
	$title 			= $this->input->post('txtjudul');
	$deskripsi_sub 	= $this->input->post('editor');
	$id_user 		= $this->input->post('user');
	
	$data = array('nama_subkategori'	=> $title,
				  'deskripsi_sub'		=> $deskripsi_sub,
				  'oleh'				=> $id_user,
				  'id_kategori'			=> $id_kategori,
				  'tanggal_sub'			=> date('d-M-Y | H:i', now()));
	
	$this->forumsubkategori_model->update($id,$data);

	redirect('forum_registered/frm_list','refresh');

}

function frmhapus($id)
{

	$this->forumsubkategori_model->delete($id);
	redirect('forum_registered/frm_list','refresh');

}

// ==================== POST MEMBER =================

function pos_list($offset='')

{

	$uri_segment = 3;

	$offset = $this->uri->segment($uri_segment);

	$config['base_url'] = site_url('forum_registered/frm_list/');

	$config['total_rows'] = $this->forumpost_model->count_data();

	$config['per_page'] = $this->limit;

	$this->pagination->initialize($config);

	$data['pagination'] = $this->pagination->create_links();
	
	$data['offset'] = $offset;


	
	$data['fields']			= $this->forumpost_model->get_list_data($this->limit,$offset);
	$data['jumlah'] 		= $this->forumpost_model->count_data();
	$data['kategori']		= $this->forumkategori_model->getAll();
	$data['subkategori']	= $this->forumsubkategori_model->getAll();

	$data['include']			= $this->forumtemp_model->includeFile();
	$data['header']				= $this->forumbacktemp_model->headermenu('2');
	$data['memberonline']		= $this->forumtemp_model->memberonline();

	$data['statistik']			= $this->forumtemp_model->statistik();
	$data['mainmenu']			= $this->forumtemp_model->mainmenu("1.3");
	
	$data['footer']		= $this->forumtemp_model->footer();
	
	$this->load->view('forum/pos/pos_data',$data);
	
}
function pos_list_by_kat($id,$sub)

{	
	$data['fields']			= $this->forumpost_model->get_by_kategori_sub($id,$sub);
	$data['jumlah'] 		= $this->forumpost_model->count_data();
	$data['kategori']		= $this->forumkategori_model->getAll();
	$data['subkategori']	= $this->forumsubkategori_model->getAll();

	$data['include']			= $this->forumtemp_model->includeFile();
	$data['header']				= $this->forumbacktemp_model->headermenu('2');
	$data['memberonline']		= $this->forumtemp_model->memberonline();

	$data['statistik']			= $this->forumtemp_model->statistik();
	$data['mainmenu']			= $this->forumtemp_model->mainmenu("1.3");
	
	$data['footer']		= $this->forumtemp_model->footer();
	
	$this->load->view('forum/pos/pos_data',$data);
	
}

function postadd()
{

	$data['include']			= $this->forumtemp_model->includeFile();
	$data['header']				= $this->forumbacktemp_model->headermenu('2');
	$data['memberonline']		= $this->forumtemp_model->memberonline();

	$data['statistik']			= $this->forumtemp_model->statistik();
	$data['mainmenu']			= $this->forumtemp_model->mainmenu("1.3");
	
	$data['footer']		= $this->forumtemp_model->footer();
	
	$data['kategori']	= $this->forumkategori_model->getAll();
	$data['subkategori']	= $this->forumsubkategori_model->getAll();
	$this->load->view('forum/pos/pos_add',$data);

}

function simpanpos()
{
	$this->load->helper('date');

	$id_kategori	= $this->input->post('id_kategori');
	$id_subkategori	= $this->input->post('id_subkategori');
	$title			= $this->input->post('txtjudul');
	$deskripsi		= $this->input->post('editor');
	$id_user		= $this->input->post('user');
	
	$data = array('judul_post'			=> $title,
				  'isi_post'			=> $deskripsi,
				  'id_user'				=> $id_user,
				  'id_kategori'			=> $id_kategori,
				  'id_subkategori'		=> $id_subkategori,
				  'tanggal_post'		=> date('d-M-Y | H:i', now()));

	$this->forumpost_model->save($data);

	redirect('forum_registered/pos_list','refresh');

}
function posupdate($id)
{
	
	$data['include']			= $this->forumtemp_model->includeFile();
	$data['header']				= $this->forumbacktemp_model->headermenu('2');
	$data['memberonline']		= $this->forumtemp_model->memberonline();

	$data['statistik']			= $this->forumtemp_model->statistik();
	$data['mainmenu']			= $this->forumtemp_model->mainmenu("1.3");
	
	$data['footer']		= $this->forumtemp_model->footer();
	
	$data['fields'] 	= $this->forumpost_model->get_by_id($id);
	
	$data['kategori']	= $this->forumkategori_model->getAll();
	
		$dataT=$this->forumpost_model->get_by_id($id);
		foreach($dataT as $dat)
		{
			$data['subkategori']	= $this->forumsubkategori_model->get_by_kategori($dat->id_kategori);
		}
		
	$this->load->view('forum/pos/pos_update',$data);

}
function simpaneditpos()
{

	$id_kategori	= $this->input->post('id_kategori');
	$id_subkategori	= $this->input->post('id_subkategori');
	$title			= $this->input->post('txtjudul');
	$deskripsi		= $this->input->post('editor');
	$id_user		= $this->input->post('user');
	$id_post		= $this->input->post('id_post');
	
	$data = array('judul_post'			=> $title,
				  'isi_post'			=> $deskripsi,
				  'id_user'				=> $id_user,
				  'id_kategori'			=> $id_kategori,
				  'id_subkategori'		=> $id_subkategori );

	$this->forumpost_model->updatepost($id_post,$data);

	redirect('forum_registered/pos_list','refresh');

}

function poshapus($id)
{

	$this->forumpost_model->delete($id);
	redirect('forum_registered/pos_list','refresh');

}
}







