<?php



class forumtemp_model extends CI_Model

{

	function __construct()

	{

		parent::__construct();

	}

	function includeFile()

	{

		$data='<meta name="description" content="Website Description" />';

		$data.='<meta name="keywords" content="Website Kwywords" />';

		$data.='<link href="'.base_url().'favicon.ico" rel="shortcut icon" type="image/x-icon" />';

		$data.='<link rel="stylesheet" type="text/css" href="'.base_url().'public/css/style.css" />';

		$data.='<script src="'.base_url().'public/js/jquery.js" type="text/javascript"></script>';

		$data.='<script src="'.base_url().'public/js/ui_core.js" type="text/javascript"></script>';

		$data.='<script src="'.base_url().'public/js/ui_tabs.js" type="text/javascript"></script>';

		$data.='<script src="'.base_url().'public/js/lightbox.js" type="text/javascript"></script>';

		

		/* Jquery Slider script */

		$data.='<link rel="stylesheet" type="text/css" href="'.base_url().'slideshows/slide01/slide_style.css" />';

		$data.='<script type="text/javascript" src="'.base_url().'slideshows/slide01/slider.js"></script>';

		$data.="<script type='text/javascript'>

				$(function() {

					$(\"#navi ul\").tabs(\"#panes > div\", {

					effect: 'fade', 

					fadeOutSpeed: 500, 

					rotate: true

					}).slideshow({ 

						 autoplay: true, 

						 interval: 2500 

					}); 

				 });  

				</script>"; 

	

		/*<!-- slider -->*/

		$data.='<script type="text/javascript" src="'.base_url().'slideshows/slide02/s3slider.js"></script>';

		$data.='<link rel="stylesheet" type="text/css" href="'.base_url().'slideshows/slide02/slider.css" />';

		$data.="<script type='text/javascript'>

					$(document).ready(function() {

						$('#slider1').s3Slider({

							timeOut: 8000

						});

					});

					jQuery(window).bind(\"load\", function() {

						jQuery(\"div#slider2\").codaSlider()

					});

					function dd(id)

					{

						var stat = document.getElementById(id).style.display;

						if(stat==\"none\"){

							$('.sub').hide();

							$('#'+id).show();

						}else{

							$('.sub').hide();

						}

					}

				</script>";

			

		$data.='<script src="'.base_url().'slideshows/slide02/jquery-easing.1.2.pack.js" type="text/javascript"></script>';

		$data.='<script src="'.base_url().'slideshows/slide02/jquery-easing-compatibility.1.2.pack.js" type="text/javascript"></script>';

		$data.='<script src="'.base_url().'slideshows/slide02/coda-slider.1.1.1.pack.js" type="text/javascript"></script>';

		

		return $data;

	}

	function headerMenu($id){
		$data ="";
		$st1="";$st2="";$st3="";
		switch($id){
			case"1"; $st1='class="active"'; break;
			case"2"; $st2='class="active"'; break;
			case"3"; $st3='class="active"'; break;
			/*case"4"; $st4='class="active"'; break;
			case"5"; $st5='class="active"'; break;
			case"6"; $st6='class="active"'; break;
			case"7"; $st7='class="active"'; break;*/
		}	

		$data.='<div id="wrapper">';
		$data.='<div id="header">';
			$data.='<div id="headertop">';
			$data.='<a href="#" class="replace" id="logo"><span></span></a>';
				/*$data.='<div id="loginarea">';
				$data.='<p class="notlogin"><a href="#">Peta Situs</a> <span>|</span>'; 
				$data.='<form method="post" action="#" id="frmsearch" style="margin:-3px 0 0 -5px;">';
				$data.='<input type="text" name="search" class="textboxsearch" value="Cari" onblur="if(this.value.length == 0) this.value=\'Cari\';" onclick="if(this.value == \'Cari\') this.value=\'\';" /> <input type="submit" name="submitsearch" class="submitsearch" value="Cari" />';
				$data.='</form></p>';
				$data.='</div>';*/
			$data.='</div>';		

			$data.='<div id="placemainmenu">';
				$data.='<ul id="mainmenu">';
					$data.='<li '.$st1.' ><a href="'.base_url().'">Beranda</a></li>';
					$data.='<li '.$st2.' ><a href="'.base_url().'forum/publik">FORUM</a></li>';
					$data.='<li '.$st3.' ><a href="'.base_url().'forum/member">MEMBER</a></li>';
					//$data.='<li '.$st4.' ><a href="'.base_url().'">MAIL</a></li>';										
				$data.='</ul>';				
				$data.='<div class="clear"></div>';
			$data.='</div>';		

		$data.='</div>';
		return $data;
	}

	function sliderTop(){

		$data.='<div class="slider">';
			$data.='<div id="slider1">';
				$data.='<ul id="slider1Content">';
					$data.='<li class="slider1Image" style="display:block"> 
								<img src="'.base_url().'public/images/wide/slide1.png" width="990" alt="1" border="0" />
								<span class="bottom"></span>
							</li>';

					$data.='<li class="slider1Image"> 
								<img src="'.base_url().'public/images/wide/slide2.png" width="990" alt="2" border="0" />					<span class="bottom"></span>
							</li>';

					$data.='<li class="slider1Image">
								<img src="'.base_url().'public/images/wide/2.jpg" width="990" alt="3" border="0" />
								<span class="bottom"></span>
							</li>';

					$data.='<li class="slider1Image">
						<img src="'.base_url().'public/images/wide/4.jpg" width="990" alt="4" border="0" />
						<span class="bottom"></span>
					</li>';

				$data.='</ul>';
				$data.='<div class="clear slider1Image"></div>';			

			$data.='</div>';
		$data.='</div>';
		return $data;
	}

	function setBg($menu,$submenu,$id){
		if($submenu!="0"){
			if($submenu==$id){
				$bg = base_url().'public/images/icon/bl2.png';
			}else{
				$bg = base_url().'public/images/icon/bl.png';
			}
		}else{
			if($menu==$id){
				$bg = base_url().'public/images/icon/bl2.png';
			}else{
				$bg = base_url().'public/images/icon/aturan.png';
			}
		}

		return $bg;
	}

	function mainmenu($id){
		//style dropdown menu 1
		if($id=="1"||$id=="1.1"||$id=="1.2"||$id=="1.3"||$id=="1.4"||$id=="1.5"){ $style1="display:block"; }else{ $style1="display:none"; }
		//style dropdown menu 2

		if($id=="2"||$id=="2.1"||$id=="2.2"||$id=="2.3"){ $style2="display:block"; }else{ $style2="display:none"; }

		$data='<div class="boxnav">';
		$data.='<h3 class="titlenav">Main Menu</h3>';
		$data.='<div class="boxnavcontent">';
			$data.='<ul class="menunav">';
				//menu 1
				$data.='<li><a href="javascript:dd(\'profil\');">
						<img src="'.$this->setBg("1","0",$id).'" align="left" />Aplikasi
						<p align="right" style="margin-top:-15px;font-size:16px; color:#000000;"><b>+</b></p></a></li>';
						$data.='<ul class="sub" id="profil" style="'.$style1.'">
								<li class="submenu"><a href="'.base_url().'forum_registered/kategori_list">
									<img src="'.$this->setBg("1","1.1",$id).'" align="left"/>Kategori
								</a></li>
								<li class="submenu"><a href="'.base_url().'forum_registered/frm_list">
									<img src="'.$this->setBg("1","1.2",$id).'" align="left"/>Subkategori
								</a></li>
								<li class="submenu"><a href="'.base_url().'forum_registered/pos_list">
									<img src="'.$this->setBg("1","1.3",$id).'" align="left"/>Posting
								</a></li>								
								</ul>';

				//menu 2								
				$data.='<li><a href="'.base_url().'forum/user">
						<img src="'.$this->setBg("2","0",$id).'" align="left" />Users</a></li>';
						/*$data.='<ul class="sub" id="peraturan" style="'.$style2.'">
									<li class="submenu"><a href="'.base_url().'forum_registered">
										<img src="'.$this->setBg("2","2.1",$id).'" align="left"/>List All Users</a></li>
									<li class="submenu"><a href="'.base_url().'forum_registered">
										<img src="'.$this->setBg("2","2.2",$id).'" align="left"/>Users A Waiting Approval 
									</a></li>
									<li class="submenu"><a href="'.base_url().'forum_registered">
										<img src="'.$this->setBg("2","2.3",$id).'" align="left"/>Banned Users
									</a></li>									
								</ul>';*/

				//menu 3		

				/*$data.='<li class="last"><a href="'.base_url().'forum_registered">
						<img src="'.$this->setBg("3","0",$id).'" align="left" />Pesan
						</a></li>';*/
			$data.='</ul>';			

		$data.='<div class="clear"></div>';
		$data.='</div>';
		$data.='</div>';
		return $data;
	}

	function mainmenu2(){

		$data['link11']	= base_url()."profil/visimisi";
		$data['link12']	= base_url()."profil/sejarah";
		$data['link13']	= base_url()."profil/struktur";
		$data['link14']	= base_url()."profil/sarpras";
		$data['link15']	= base_url()."profil/prestasi";	

		$data['link21']	= "#";
		$data['link31']	= "#";
		$data['link41']	= "#";
		$data['link51']	= "#";
		$data['link61']	= "#";		
		$data['link71']	= "#";
		$data['link72']	= "#";
		$data['link73']	= "#";
		$data['link74']	= "#";
		$data['link81']	= "#";
		$data['link91']	= base_url()."berita/arsip";
		$data['link101']= base_url()."galeri";
		$data['link111']= "#";
		$data['link121']= "#";
		$data['link131']= "#";
		$data['link141']= "#";
		return $data;
	}

	function pengumuman($id){
		if($id=="main"){ $data='<div class="contentright">'; }else{ $data='<div class="contentleft">'; }
	
			$data.='<div class="boxcontentsmall">';
				$data.='<h1 class="titlesmall">Pengumuman</h1>';
				$data.='<div class="boxsmallcontent">';
					$data.='<ul class="menucontentsmall">';
					$query=$this->db->query("SELECT * FROM pengumuman order by id_pengumuman DESC LIMIT 5");
					foreach ($query->result() as $row){
						$data.='<li><a href="'.base_url().'pengumuman/detail/'.$row->id_pengumuman.'">';
							$data.='<img src="'.base_url().'public/images/icon/link.png" align="left" style="margin-right:5px" />'.$row->judul;
						$data.='</a></li>';
					}
					$data.='</ul>';
				$data.='</div>';
				$data.='<div class="boxsmcontentbottom"></div>';
			$data.='</div>';
		$data.='</div>';
		return $data;
	}

	function polling(){
		$data='<div class="contentright">';
			$data.='<div class="boxcontentsmall">';
				$data.='<h1 class="titlesmall">Polling</h1>';
				$data.='<div class="boxsmallcontent">';
					$data.='<ul class="menucontentsmall">';
					$query=$this->db->query("SELECT * FROM polling WHERE status = 'true' order by id_polling DESC LIMIT 1");
					foreach ($query->result() as $row){
						$data.='<li>'.$row->pertanyaan.'</li>';
						$data.='<li><input type="radio" name="polling" value="1" /> '.$row->pilihan1.'</li>';
						$data.='<li><input type="radio" name="polling" value="2" /> '.$row->pilihan2.'</li>';
						$data.='<li><input type="radio" name="polling" value="3" /> '.$row->pilihan3.'</li>';
						$data.='<li><input type="radio" name="polling" value="4" /> '.$row->pilihan4.'</li>';
					}

					$data.='</ul>';
					$data.='<br />';
					$data.='<center>';
					$data.='<input type="button" class="button" value="Vote" />';
					$data.='<input type="button" class="button" value="Lihat Hasil" />';
					$data.='</center>';
				$data.='</div>';
				$data.='<div class="boxsmcontentbottom"></div>';
			$data.='</div>';
		$data.='</div>';
		return $data;
	}

	function footer(){
		$data='<div id="footer">';
			$data.='<p id="texttwitter"></p>';
			$data.='<ul id="menufooter">';
				$data.='<li><a href="'.base_url().'">Beranda</a></li>';
				$data.='<li><a href="'.base_url().'">FORUM</a></li>';
				//$data.='<li><a href="'.base_url().'">MEMBER</a></li>';
				//$data.='<li><a href="'.base_url().'">MAIL</a></li>';				
			$data.='</ul>';		

			$data.='<ul id="menufooterright">';
				$data.='<li>Copyright 2011, FORUM '.COMPANY_NAME.'</li>';
				$data.='<li class="last"><a href="#">Back to top</a></li>';
			$data.='</ul>';
		$data.='</div>';
		return $data;
	}

	function login(){
		$data='<?=validation_errors();?>';
		$data.='<div id="panellogin2">';	
			$data.='<form method="post" action="'.base_url().'forum_login" id="frmlogin">';
			$data.='<div>';
					$data.='<label for="lgnusername">Username:</label>';
					$data.='<input type="text" name="username" class="textboxsearch" /><br />';
					$data.='<label for="lgnpassword">Password:</label>';
					$data.='<input type="password" name="password" class="textboxsearch" /><br />';
					$data.='<label></label><input type="submit" name="submitlogin" class="submitlogin" value="Login" />';
					$data.='<a href="'.base_url().'forum/register" class="linkforgot">Registrasi</a>';
			$data.='</div>';
			$data.='</form>';
		$data.='</div>';
		return $data;
	}

	function linkterkait(){
		$data='<div class="boxnav">';
			$data.='<h3 class="titlenav">Link terkait</h3>';
			$data.='<div class="boxnavcontent2">';
				$data.='<ul id="listads">';
				$query=$this->db->query("SELECT * FROM linkterkait ORDER BY id_link DESC LIMIT 6");
				foreach ($query->result() as $row){
					$data.='<li><a href="'.$row->url.'" target="_blank"><p>'.$row->singkatan.'</p><span>'.$row->deskripsi.'</span></a></li>';
				}
				$data.='</ul>';
				$data.='<div class="clear"></div>';
				$data.='<a href="#" class="linkadv">More Link</a>';
				$data.='<div class="clear"></div>';
			$data.='</div>';
		$data.='</div>';
		return $data;
	}

	function testimonial(){
		$data='<div id="nav" style="margin-bottom:10px">';
				$data.='<div class="testimonial-box">';
					$data.='<div id="slider2">';
						$data.='<div class="panelContainer">';
						$data.='<div class="panel" title="Panel 1">';
								$data.='<div class="wrapper">';
									$data.='<div class="testimonial-box1">';
										$data.='<b>Agenda kegiatan 1</b><br>';
										$data.='Penjelasan jenis kegiatan apa yang akan<br> di laksanakan<br>';
										$data.='<div class="testi-auther"><strong>24-04-2011</strong>, Admin</div>';
									$data.='</div>';
								$data.='</div>';
							$data.='</div>';							

							$data.='<div class="panel" title="Panel 2">';
								$data.='<div class="wrapper">';
									$data.='<div class="testimonial-box2">';
										$data.='<b>Agenda kegiatan 2</b><br>';
										$data.='Penjelasan jenis kegiatan apa yang akan<br> di laksanakan oleh <br>';

										$data.='<div class="testi-auther"><strong>24-03-2011</strong>, Admin</div>';
									$data.='</div>';
								$data.='</div>';
							$data.='</div>';
							
							$data.='<div class="panel" title="Panel 3">';
								$data.='<div class="wrapper">';
									$data.='<div class="testimonial-box3">';
										$data.='<b>Agenda kegiatan 3</b><br>';
										$data.='Penjelasan jenis kegiatan apa yang akan<br> di laksanakan<br>';
										$data.='<div class="testi-auther"><strong>24-02-2011</strong>, Admin</div>';
									$data.='</div>';
								$data.='</div>';
							$data.='</div>';			

						$data.='</div>';
					$data.='</div>'; 
				$data.='</div>';
				 $data.='<div class="mid-testi"><img src="'.base_url().'public/images/testimonial-text.png" alt="Testimonials" /></div>';
			$data.='</div>';
			$data.='</div>';
			$data.='<div class="clear"></div>';
		$data.='</div>';
		return $data;
	}

	function statistik(){		
		$jKategori		= $this->db->query("SELECT * FROM forum_kategori")->result();
		$jSubkategori	= $this->db->query("SELECT * FROM forum_subkategori")->result();
		$jPos			= $this->db->query("SELECT * FROM forum_post")->result();
		$jMember		= $this->db->query("SELECT * FROM sistem_user WHERE id_level = '6'")->result();
		
		$data='<div class="boxnav">';
			$data.='<h3 class="titlenav">Forum Statistik</h3>';
			$data.='<div class="boxnavcontent2">';								
				$data.='<br /><table style="font-size:12px;margin-left:15px;" cellspacing="20px" cellpadding="5px">';
				$data.='<tr height="25"><td width="250px">Kategori Forum</td><td><b>'.count($jKategori).'</b></td></tr>';
				$data.='<tr height="25"><td>Sub Kategori Forum</td><td><b>'.count($jSubkategori).'</b></td></tr>';
				$data.='<tr height="25"><td>Posting</td><td><b>'.count($jPos).'</b></td></tr>';
				$data.='<tr height="25"><td>Jumlah Member</td><td><b>'.count($jMember).'</b></td></tr>';
				$data.='</table><br />';
				$data.='<div class="clear"></div>';				
			$data.='</div>';
		$data.='</div>';
		return $data;
	}

	function daftar(){
		$data='<div class="boxnav">';
			$data.='<h3 class="titlenav">Daftar</h3>';
			$data.='<div class="boxnavcontent2">';				
				$data.='<center><br><input type="button" value="SIGN UP NOW" style="height:100px; width:90%;"/></center><br />';
				$data.='<div class="clear"></div>';				
			$data.='</div>';
		$data.='</div>';
		return $data;
	}
	
	function memberonline(){
		$data='<div class="boxnav">';
			$data.='<h3 class="titlenav">Members Online Now</h3>';
			$data.='<div class="boxnavcontent2">';								
				$data.='<br /><table style="font-size:12px;margin-left:15px;" cellspacing="20px" cellpadding="5px">';
				$data.='<tr><td width="250px">Members</td><td>0</td></tr>';
				$data.='<tr><td>Guests</td><td>0</td></tr>';
				$data.='</table><br />';
				$data.='<div class="clear"></div>';				
			$data.='</div>';

		$data.='</div>';
		//return $data;
	}
}

