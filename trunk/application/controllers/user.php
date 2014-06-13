<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class user extends CI_Controller {

	private $limit = 10;

	function __construct()

	{

		parent::__construct();

		$this->load->helper(array('form', 'url'));

		$this->load->library('pagination');

		$this->load->model('backend_model','',TRUE);

		$this->load->model('temp_model','',TRUE);

		$this->load->model('user_model','',TRUE);

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
		$this->cekLogin();
                 $data = array(
                            'title_page'=>'Admin Page',
                            'title'=>'CPanel',
                           'js'=>array('js/ui_core.js','js/ui.dialog.js','js/ui_tabs.js','js/lightbox.js'),//'js/flexigrid.pack.js','js/jqModal.js'),
                            //'css'=>array('css/flexigrid.pack.css','css/jqModal.css')
                            'css'=>array('media/jquery/ui.css')
                    );
		$level=$this->session->userdata('id_level');
		//echo $level;
		if($level=="1" || $level=="2")
		{
			$uri_segment = 3;
	
			$offset = $this->uri->segment($uri_segment);
	
			$config['base_url'] = site_url('user/index/');
	
			$config['total_rows'] = $this->user_model->count_data();
	
			$config['per_page'] = $this->limit;
	
			$this->pagination->initialize($config);
	
			$data['pagination'] = $this->pagination->create_links();
	
			
	
			$data['fields']	= $this->user_model->get_list_data($this->limit,$offset);
			$data['headmenu']	= $this->backend_model->headermenu();
			$data['mainmenu']	= $this->backend_model->mainmenu(14);
	
			//$this->load->view('user/user_data',$data);	
                        $this->template->set_template("admin");
        //		$this->template->write_view('header','templates/header_admin',$data);
                        $this->template->write_view('wrapper','user/user_data',$data);
                        $this->template->render();
			
		}
		else
		{
			$this->edit($this->session->userdata('userid'));
		}
	}
	
	function search()
	{
		$this->cekLogin();
		$key	= $this->input->post('search');
		
		$data['fields']	= $this->user_model->search("username","nama_asli",$key)->result();
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['mainmenu']	= $this->backend_model->mainmenu();
		$this->load->view('user/user_data',$data);	
	}
	function add()

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
		$data['mainmenu']	= $this->backend_model->mainmenu(14);
		
		$data['dlevel'] = $this->user_model->getlevel();

		$this->template->set_template("admin");
//		$this->template->write_view('header','templates/header_admin',$data);
		$this->template->write_view('wrapper','user/user_add',$data);
		$this->template->render();
                
                //$this->load->view('user/user_add',$data);

	}

	function simpan()

	{
		
		$nama_asli		= $this->input->post('nama_asli');
		$username		= $this->input->post('username');
		$password		= $this->input->post('password');
		$id_level		= $this->input->post('id_level');
			

			$data = array('nama_asli' => $nama_asli,
						  'username'  => $username,
						  'password'  => $password,
						  'id_level'  => $id_level);

			$this->user_model->save($data);

		

		redirect(base_url().'user');

	}

	function edit($id){
		$this->cekLogin();
                 $data = array(
                            'title_page'=>'Admin Page',
                            'title'=>'CPanel',
                            'js'=>array(),//'js/flexigrid.pack.js','js/jqModal.js'),
                            //'css'=>array('css/flexigrid.pack.css','css/jqModal.css')
                            'css'=>array()
                    );
		$data['fields']		= $this->user_model->getbyid($id)->result();
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['mainmenu']	= $this->backend_model->mainmenu(14);
		
		$data['dlevel'] = $this->user_model->getlevel();
                $this->template->set_template("admin");
//		$this->template->write_view('header','templates/header_admin',$data);
		$this->template->write_view('wrapper','user/user_edit',$data);
		$this->template->render();
		//$this->load->view('user/user_edit',$data);

	}
        
        function hakakses($id){
		$this->cekLogin();
                 $data = array(
                            'title_page'=>'Admin Page',
                            'title'=>'CPanel',
                            'js'=>array(),//'js/flexigrid.pack.js','js/jqModal.js'),
                            //'css'=>array('css/flexigrid.pack.css','css/jqModal.css')
                            'css'=>array()
                    );
		$data['fields']		= $this->user_model->getbyid($id)->result();
		$data['headmenu']	= $this->backend_model->headermenu();
		$data['mainmenu']	= $this->backend_model->mainmenu(14);
		$data['akses']	= $this->user_model->get_list_akses($id);
		$data['dlevel'] = $this->user_model->getlevel();
                $this->template->set_template("admin");
//		$this->template->write_view('header','templates/header_admin',$data);
		$this->template->write_view('wrapper','user/user_akses',$data);
		$this->template->render();
		//$this->load->view('user/user_edit',$data);

	}

    function simpanedit()	{
        $id			= $this->input->post('id_user');
        $nama_asli		= $this->input->post('nama_asli');
        $username		= $this->input->post('username');
        $password		= $this->input->post('password');
        $id_level		= $this->input->post('id_level');
        $data	= array('nama_asli'=>$nama_asli,'username'=>$username,'password'=>$password,'id_level'=>$id_level);

        $this->user_model->update($id,$data);
        redirect(base_url().'user');

    }
    
    function simpanakses()	{
        $id	= $this->input->post('id_user');
        $count  = $this->input->post('count');
        $this->user_model->deleteAkses($id);
        for ($i=0;$i<$count;$i++){
            $menu_id	= $this->input->post('menu_id'.$i);
            $akses	= $this->input->post('chk'.$i);
            //var_dump($akses);
            $data	= array('id_user'=>$id,'menu_id'=>$menu_id,'akses'=>(!$akses?0:1));
        
            $this->user_model->setAkses($data);
        }
        
        redirect(base_url().'user');

    }

	function hapus($id)

	{

		$this->user_model->delete($id);

		redirect(base_url().'user');

	}

}