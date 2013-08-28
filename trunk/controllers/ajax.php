<?php
class ajax extends CI_controller {
	
	function ajax()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('pagination');
		$this->load->model('forumkategori_model','',TRUE);
		$this->load->model('forumpost_model','',TRUE);	
		$this->load->model('forumsubkategori_model','',TRUE);

	}
	function getSubKategori($id)
	{
		
			echo "subData.options[subData.options.length] = new Option('Pilih Subkategori',' ');\n";
			
			$dataSub=$this->forumsubkategori_model->get_by_kategori($id);
			foreach($dataSub as $sub)
			{
				echo "subData.options[subData.options.length] = new Option('".$sub->nama_subkategori."','".$sub->id_subkategori."');\n";
			}
	}
}