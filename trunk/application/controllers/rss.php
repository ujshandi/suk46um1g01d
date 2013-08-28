<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class rss extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('pagination');
		$this->load->model('temp_model','',TRUE);
		$this->load->model('backend_model','',TRUE);
		$this->load->model('Berita_model','',TRUE);
		$this->load->model('programkerjamodel','',TRUE);
		$this->load->model('panduanmodel','',TRUE);
		$this->load->model('belajarmodel','',TRUE);
		$this->load->model('layananmodel','',TRUE);
		$this->load->model('downloadmodel','',TRUE);
	}
	function index()
	{
		$data['img1']		= '<img src="'.base_url().'images/icon/aturan.png" align="left"/>';
		$data['img2']		= '<img src="'.base_url().'images/icon/bl.png" align="left"/>';
		$data['include']	= $this->temp_model->includeFile();
		$data['header']		= $this->temp_model->headerMenu('0');
		$data['sliderTop']	= $this->temp_model->sliderTop();
		$data['mainmenu']	= $this->temp_model->mainmenu("15");
		$data['pengumuman']	= $this->temp_model->pengumuman();
		$data['polling']	= $this->temp_model->polling();
		$data['login']		= $this->temp_model->login();
		$data['linkterkait']= $this->temp_model->linkterkait();
		$data['testimonial']= $this->temp_model->testimonial();
		$data['footer']		= $this->temp_model->footer();
		$this->load->view('rss',$data);
	}
	function berita()
	{
		echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>";
		echo "<rss version=\"2.0\" xmlns:atom=\"http://www.w3.org/2005/Atom\">";
		echo "<channel>";
		echo "<title>Berita BPSDMPPMP</title>";
		echo '<link>'.base_url().'</link>';
		echo '<description>10 Berita terbaru dari BPSDMPPMP</description>';
			
		$berita = $this->Berita_model->get_list_data(10,0)->result();
		foreach($berita as $dat1)
		{
			$img=htmlentities('<img src="'.base_url().'uploads/img/thumbnail/'.$dat1->gambar.'" align="left" />');
			
		  	echo "<item>";
		  	echo "<title>".$dat1->judul_berita."</title>";
		  	echo "<link>".base_url()."/index.php/berita/detail/".$dat1->id_berita."</link>";
		  	echo "<description>".$img." ".$dat1->deskripsi_singkat."</description>";
		  	echo "<pubDate>".$dat1->tanggal."</pubDate>";
		  	echo "</item>";
		}
		echo '</channel></rss>';
	}
	function programkerja()
	{
		echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>";
		echo "<rss version=\"2.0\" xmlns:atom=\"http://www.w3.org/2005/Atom\">";
		echo "<channel>";
		echo "<title>Program Kerja</title>";
		echo '<link>'.base_url().'</link>';
		echo '<description>Program Kerja BPSDMPPMP</description>';
			
		$program = $this->programkerjamodel->get_All(10,0);
		foreach($program as $dat)
		{
			echo "<item>";
		  	echo "<title>".$dat->nama_program."</title>";
		  	echo "<link>".base_url()."/index.php/program_kerja/detail/".$dat->id_program."</link>";
		  	echo "<description>".$dat->deskripsi_singkat."</description>";
		  	echo "</item>";
		}
		
		echo '</channel></rss>';
	}
	function panduan()
	{
		echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>";
		echo "<rss version=\"2.0\" xmlns:atom=\"http://www.w3.org/2005/Atom\">";
		echo "<channel>";
		echo "<title>Pedoman / Panduan</title>";
		echo '<link>'.base_url().'</link>';
		echo '<description>Pedoman / Panduan dari website BPSDMPPMP</description>';
		
		$panduan = $this->panduanmodel->get_All(10,0);
		foreach($panduan as $dat)
		{
			echo "<item>";
		  	echo "<title>".$dat->judul."</title>";
		  	echo "<link>".base_url()."/index.php/panduan/detail/".$dat->id_panduan."</link>";
		  	echo "<description>".$dat->deskripsi_singkat."</description>";
		  	echo "</item>";
		}
		
		echo '</channel></rss>';
	}
	function belajar()
	{
		echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>";
		echo "<rss version=\"2.0\" xmlns:atom=\"http://www.w3.org/2005/Atom\">";
		echo "<channel>";
		echo "<title>Substansi Pembelajaran</title>";
		echo '<link>'.base_url().'</link>';
		echo '<description>Substansi Pembelajaran dari website BPSDMPPMP</description>';
		
		$belajar = $this->belajarmodel->get_All(10,0);
		foreach($belajar as $dat)
		{
			echo "<item>";
		  	echo "<title>".$dat->judul."</title>";
		  	echo "<link>".base_url()."/index.php/belajar/detail/".$dat->id_belajar."</link>";
		  	echo "<description>".$dat->deskripsi_singkat."</description>";
		  	echo "</item>";
		}
		
		echo '</channel></rss>';
	}
	function layanan()
	{
		echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>";
		echo "<rss version=\"2.0\" xmlns:atom=\"http://www.w3.org/2005/Atom\">";
		echo "<channel>";
		echo "<title>Layanan BPSDMPPMP</title>";
		echo '<link>'.base_url().'</link>';
		
		for($i=1;$i<=4;$i++)
		{
			$layanan	= $this->layananmodel->get_All($i,10,0);
			foreach($layanan as $dat)
			{
				echo "<item>";
				echo "<title>".$dat->judul."</title>";
				echo "<link>".base_url()."/index.php/layanan/detail/".$dat->id_layanan."/$i</link>";
				echo "</item>";
			}
		}
		
		echo '</channel></rss>';
	}
	function download()
	{
		echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>";
		echo "<rss version=\"2.0\" xmlns:atom=\"http://www.w3.org/2005/Atom\">";
		echo "<channel>";
		echo "<title>Download BPSDMPPMP</title>";
		echo '<link>'.base_url().'</link>';
		echo '<description>Daftar Download dari Website BPSDMPPMP</description>';
		
		$download	= $this->downloadmodel->get_All('20',0);
		foreach($download as $dat)
		{
			echo "<item>";
		  	echo "<title>".$dat->nama."</title>";
		  	echo "<link>".base_url()."uploads/file/".$dat->file."</link>";
		  	echo "<description>".$dat->deskripsi."</description>";
		  	echo "</item>";
		}
		
		echo '</channel></rss>';
	}
}