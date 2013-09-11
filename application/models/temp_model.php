<?php

class temp_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	function includeFile()
	{
		$data='<meta name="description" content="Pemerintah Kota Sukabumi" />';
		$data.='<meta name="keywords" content="sukabumi kota" />';
		$data.='<link href="'.base_url().'favicon.ico" rel="shortcut icon" type="image/x-icon" />';
		$data.='<link rel="stylesheet" type="text/css" href="'.base_url().'public/css/style.css" />';
		//$data.='<script src="'.base_url().'public/js/jquery.js" type="text/javascript"></script>';
		$data.='<script src="'.base_url().'public/js/jquery-1.6.3.min.js" type="text/javascript"></script>';
		$data.='<script src="'.base_url().'public/js/ui_core.js" type="text/javascript"></script>';
		$data.='<script src="'.base_url().'public/js/ui_tabs.js" type="text/javascript"></script>';
		$data.='<script src="'.base_url().'public/js/lightbox.js" type="text/javascript"></script>';
		
			//news sticker
			//$data.='<script src="'.base_url().'public/js/gistfile1.js" type="text/javascript"></script>';
		//$data.='<link href="'.base_url().'public/jquery_news_ticker/styles/style.css?v=2011-04-25" rel="stylesheet" type="text/css" />';
		$data.='<link href="'.base_url().'public/jquery_news_ticker/styles/ticker-style.css" rel="stylesheet" type="text/css" />';		
		$data.='<script src="'.base_url().'public/jquery_news_ticker/includes/jquery.ticker.js" type="text/javascript"></script>';
				
		/* Jquery Slider script */
		/* $data.='<link rel="stylesheet" type="text/css" href="'.base_url().'slideshows/slide01/slide_style.css" />';
		$data.='<script type="text/javascript" src="'.base_url().'slideshows/slide01/slider.js"></script>';
		$data.="<script type='text/javascript'>
				$(function() {
				//	jQuery.noConflict();
					$(\"#navi ul\").tabs(\"#panes > div\", {
					effect: 'fade', 
					fadeOutSpeed: 500, 
					rotate: true
					}).slideshow({ 
						 autoplay: true, 
						 interval: 4000 
					}); 
				 });  
				</script>";  */
	
		/*<!-- slider -->*/
		/* $data.='<script type="text/javascript" src="'.base_url().'slideshows/slide02/s3slider.js"></script>';
		$data.='<link rel="stylesheet" type="text/css" href="'.base_url().'slideshows/slide02/slider.css" />';
		$data.="<script type='text/javascript'>
					$(document).ready(function() {
					//	jQuery.noConflict();
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
				</script>"; */
			
	/* 	$data.='<script src="'.base_url().'slideshows/slide02/jquery-easing.1.2.pack.js" type="text/javascript"></script>';
		$data.='<script src="'.base_url().'slideshows/slide02/jquery-easing-compatibility.1.2.pack.js" type="text/javascript"></script>';
		$data.='<script src="'.base_url().'slideshows/slide02/coda-slider.1.1.1.pack.js" type="text/javascript"></script>'; */
		
		///news slider
		$data.='<!-- jQuery Plugin scripts -->';
		$data.='<script type="text/javascript" src="'.base_url().'public/jquery.sliderkit.1.9.2/lib/js/external/jquery.easing.1.3.min.js"></script>';
		$data.='<script type="text/javascript" src="'.base_url().'public/jquery.sliderkit.1.9.2/lib/js/external/jquery.mousewheel.min.js"></script>';
		
		$data.='<!-- Slider Kit scripts -->';
		$data.='<script type="text/javascript" src="'.base_url().'public/jquery.sliderkit.1.9.2/lib/js/sliderkit/jquery.sliderkit.1.9.2.pack.js"></script>';
		$data.='<script type="text/javascript" src="'.base_url().'public/jquery.sliderkit.1.9.2/lib/js/sliderkit/addons/sliderkit.timer.1.0.pack.js"></script>';		
		$data.='<script type="text/javascript" src="'.base_url().'public/jquery.sliderkit.1.9.2/lib/js/sliderkit/addons/sliderkit.imagefx.1.0.pack.js"></script>';
		$data.='<script type="text/javascript" src="'.base_url().'public/jquery.sliderkit.1.9.2/lib/js/sliderkit/addons/sliderkit.delaycaptions.1.1.pack.js"></script>';
		
		$data.='<!-- Slider Kit launch -->';
		$data.='<script type="text/javascript">';
		$data.='$(window).load(function(){ 
				$("#js-news").ticker({titleText:"Agenda",controls:false});
				//$(window).load() must be used instead of $(document).ready() because of Webkit compatibility		
				// News slider > Vertical
				$(".newslider-vertical").sliderkit({
					shownavitems:3,
					verticalnav:true,
					navitemshover:true,
					circular:true
				});
				
				// News slider > Horizontal
				$(".newslider-horizontal").sliderkit({
					auto:false,
					shownavitems:5,
					panelfx:"sliding",
					panelfxspeed:1000,
					panelfxeasing:"easeInOutExpo", //"easeOutExpo", "easeOutCirc", etc.
					mousewheel:true,
					keyboard:true,
					fastchange:false
				});
				
				// News slider > Minimal
				$(".newslider-minimal").sliderkit({
					auto:true,
					circular:true,
					shownavitems:1,
					panelfx:"sliding",
					panelfxspeed:400,
					panelfxeasing:"easeOutCirc",
					mousewheel:false,
					verticalnav:true,
					verticalslide:true
				});
				
					//pengumuman
				$(".photoslider-mini2").sliderkit({
					auto:true,
					autospeed:3000,
					panelbtnshover:true,
					circular:true,
					fastchange:false
				});
				
				//slideshow
				$(".transition-demo01").sliderkit({
					auto:1,
					autostill:true,
					timer:true,
					circular:true,
					panelfx:"fancy",
					delaycaptions:{
						delay:00,
						position:"bottom",
						transition:"fading",//sliding
						duration:150
					//	easing:"easeOutExpo"
					},
					imagefx:{
						fxType: "random", // curtain, zipper, wave, fountain, random
						fxDelay: 150, // delay between strips in ms
						fxDuration: 1500 // delay between strips in ms
					},
					debug:1
					
				});
				
				
	
			});	
		</script>';

		$data.='<!-- Slider Kit styles -->';
		$data.='<link rel="stylesheet" type="text/css" href="'.base_url().'public/jquery.sliderkit.1.9.2/lib/css/sliderkit-core.css" media="screen, projection" />';
		$data.='<link rel="stylesheet" type="text/css" href="'.base_url().'public/jquery.sliderkit.1.9.2/lib/css/sliderkit-demos.css" media="screen, projection" />';
		
		$data.='<!-- Slider Kit compatibility -->	';
		$data.='<!--[if IE 6]><link rel="stylesheet" type="text/css" href="'.base_url().'public/jquery.sliderkit.1.9.2/lib/css/sliderkit-demos-ie6.css" /><![endif]-->';
		$data.='<!--[if IE 7]><link rel="stylesheet" type="text/css" href="'.base_url().'public/jquery.sliderkit.1.9.2/lib/css/sliderkit-demos-ie7.css" /><![endif]-->';
		$data.='<!--[if IE 8]><link rel="stylesheet" type="text/css" href="'.base_url().'public/jquery.sliderkit.1.9.2/lib/css/sliderkit-demos-ie8.css" /><![endif]-->';

		$data.='<!-- Site styles -->';
	//	$data.='<link rel="stylesheet" type="text/css" href="'.base_url().'public/jquery.sliderkit.1.9.2/lib/css/sliderkit-site.css" media="screen, projection" />	';
		///end news slider
		
		
		
		//-- google analitycs --
		$data.='<script type="text/javascript">';
  		$data.="var _gaq = _gaq || [];";
  		$data.="_gaq.push(['_setAccount', 'UA-23630325-1']);";
  		$data.="_gaq.push(['_trackPageview']);";
		$data.="(function() {";
    	$data.="var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;";
    	$data.="ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';";
    	$data.="var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);";
  		$data.="})();";
		$data.="</script>";
		
		
	
	
		
		return $data;
	}
	function headerMenu($id)
	{
		$st1="";$st2="";$st3="";$st4="";$st5="";$st6="";$st7="";
		switch($id)
		{
			case"1"; $st1='class="active"'; break;
			case"2"; $st2='class="active"'; break;
			case"3"; $st3='class="active"'; break;
			case"4"; $st4='class="active"'; break;
			case"5"; $st5='class="active"'; break;
			case"6"; $st6='class="active"'; break;
			case"7"; $st7='class="active"'; break;
		}
		
		$data='<div id="wrapper">';
		$data.='<div id="header">';
			
			$data.='<div id="headertop">';
			$data.='<a href="#" class="replace" id="logo"><span></span></a>';
				
				$data.='<div id="loginarea">';
				$data.='<p class="notlogin">'; 
				$data.='<form method="post" action="'.base_url().'main/search" id="frmsearch" style="margin:-3px 0 0 -5px;">';
				$data.='<input type="text" name="search" class="textboxsearch" value="Cari" onblur="if(this.value.length == 0) this.value=\'Cari\';" onclick="if(this.value == \'Cari\') this.value=\'\';" /> <input type="submit" name="submitsearch" class="submitsearch" value="Cari" />';
				$data.='</form> </p><p class="notlogin" style="margin-left:-10px;"><span style="margin-right:5px;">|</span> <a href="'.base_url().'sitemap">Peta Situs</a></p>';
				$data.='</div>';
				
			$data.='</div>';
			
			$data.='<div id="placemainmenu">';
				$data.='<ul id="mainmenu">';
					$data.='<li '.$st1.' ><a href="'.base_url().'">Beranda</a></li>';
					$data.='<li '.$st2.' ><a href="'.base_url().'direktori">'.COMPANY_NAME.'</a></li>';
					$data.='<li '.$st2.' ><a href="'.base_url().'profil/prestasi">Prestasi</a></li>';
					//$data.='<li '.$st3.' ><a href="'.base_url().'nuptk">NUPTK</a></li>';
					//$data.='<li '.$st4.' ><a href="'.base_url().'sekretariat" title="Sekretariat Badan">Sekretariat</a></li>';
					//$data.='<li '.$st5.' ><a href="'.base_url().'pppp" title="Pusat Pengembangan Profesi Pendidik">PPPP</a></li>';
					//$data.='<li '.$st6.' ><a href="'.base_url().'pptk" title="Pusat Pengembangan Tenaga Kependidikan">PPTK</a></li>';
					//$data.='<li '.$st7.' ><a href="'.base_url().'ppmp" title="Pusat Penjaminan Mutu Pendidikan">PPMP</a></li>';
				$data.='</ul>';
				$data.='<div class="clear"></div>';
			$data.='</div>';
			
		$data.='</div>';
		
		return $data;
	}
	function sliderTop()
	{
		$data='<div class="slider">';
				
			$data.='<div id="slider1">';
				$data.='<ul id="slider1Content">';
				
					$data.='<li class="slider1Image" style="display:block"> 
								<img src="'.base_url().'public/images/wide/slide1.png" width="990" alt="1" border="0" />
								<span class="bottom"></span>
							</li>';
					$data.='<li class="slider1Image"> 
								<img src="'.base_url().'public/images/wide/slide2.png" width="990" alt="2" border="0" />
								<span class="bottom"></span>
							</li>';
					$data.='<li class="slider1Image">
								<img src="'.base_url().'public/images/wide/slide3.png" width="990" alt="3" border="0" />
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
	function setBg($menu,$submenu,$id)
	{
		if($submenu!="0")
		{
			if($submenu==$id){
				$bg = base_url().'public/images/icon/bl2.png';
			}else{
				$bg = base_url().'public/images/icon/bl.png';
			}
		}
		else
		{
			if($menu==$id){
				$bg = base_url().'public/images/icon/bl2.png';
			}else{
				$bg = base_url().'public/images/icon/aturan.png';
			}
		}
		return $bg;
	}
	function mainmenu($id)
	{
		//style dropdown menu 1
		if($id=="1"||$id=="1.1"||$id=="1.2"||$id=="1.3"||$id=="1.4"||$id=="1.5"){ $style1="display:block"; }else{ $style1="display:none"; }
		//style dropdown menu 1
		if($id=="3"||$id=="3.1"||$id=="3.2"||$id=="3.3"||$id=="3.4"||$id=="3.5"||$id=="3.6"){ $style3="display:block"; }else{ $style3="display:none"; }
		//style dropdown menu 7
		if($id=="7"||$id=="7.1"||$id=="7.2"||$id=="7.3"||$id=="7.4"){ $style7="display:block"; }else{ $style7="display:none"; }
		
		$data='<div class="boxnav">';
		$data.='<h3 class="titlenav">Main Menu</h3>';
		$data.='<div class="boxnavcontent">';
						
			$data.='<ul class="menunav">';
				//menu 1
				$data.='<li><a href="javascript:dd(\'profil\');">
						<img src="'.$this->setBg("1","0",$id).'" align="left" />Profil
						<p align="right" style="margin-top:-15px;font-size:16px; color:#000000;"><b>+</b></p></a></li>';
						$data.='<ul class="sub" id="profil" style="'.$style1.'">
								<li class="submenu"><a href="'.base_url().'profil/visi_misi">
									<img src="'.$this->setBg("1","1.1",$id).'" align="left"/>Visi dan Misi
								</a></li>
								<li class="submenu"><a href="'.base_url().'profil/sejarah">
									<img src="'.$this->setBg("1","1.2",$id).'" align="left"/>Sejarah
								</a></li>
								<li class="submenu"><a href="'.base_url().'profil/struktur">
									<img src="'.$this->setBg("1","1.3",$id).'" align="left"/>Struktur Organisasi
								</a></li>
								<li class="submenu"><a href="'.base_url().'profil/sarpras">
									<img src="'.$this->setBg("1","1.4",$id).'" align="left"/>Sarana / Prasarana
								</a></li>
								<li class="submenu"><a href="'.base_url().'profil/prestasi">
									<img src="'.$this->setBg("1","1.5",$id).'" align="left"/>Capaian dan Prestasi
								</a></li>
								</ul>';
				//menu 2				
				$data.='<li><a href="'.base_url().'program_kerja">
						<img src="'.$this->setBg("2","0",$id).'" align="left" />Program Kerja
						</a></li>';
				//menu 3		
				$data.='<li><a href="javascript:dd(\'peraturan\');">
						<img src="'.$this->setBg("3","0",$id).'" align="left" />Peraturan
						<p align="right" style="margin-top:-15px;font-size:16px; color:#000000;"><b>+</b></p></a></li>';
						$data.='<ul class="sub" id="peraturan" style="'.$style3.'">
									<li class="submenu"><a href="'.base_url().'peraturan/index/1">
										<img src="'.$this->setBg("3","3.1",$id).'" align="left"/>Instruksi Presiden</a></li>
									<li class="submenu"><a href="'.base_url().'peraturan/index/2">
										<img src="'.$this->setBg("3","3.2",$id).'" align="left"/>Keputusan Menteri
									</a></li>
									<li class="submenu"><a href="'.base_url().'peraturan/index/3">
										<img src="'.$this->setBg("3","3.3",$id).'" align="left"/>Peraturan Menteri
									</a></li>
									<li class="submenu"><a href="'.base_url().'peraturan/index/4">
										<img src="'.$this->setBg("3","3.4",$id).'" align="left"/>Peraturan Pemerintah
									</a></li>
									<li class="submenu"><a href="'.base_url().'peraturan/index/5">
										<img src="'.$this->setBg("3","3.5",$id).'" align="left"/>Peraturan Presiden
									</a></li>
									<li class="submenu"><a href="'.base_url().'peraturan/index/6">
										<img src="'.$this->setBg("3","3.6",$id).'" align="left"/>Undang-Undang
									</a></li>
								</ul>';
				//menu 4		
				$data.='<li><a href="'.base_url().'panduan">
						<img src="'.$this->setBg("4","0",$id).'" align="left" />Pedoman / Panduan
						</a></li>';
				//menu 5		
				$data.='<li><a href="'.base_url().'statistik">
						<img src="'.$this->setBg("5","0",$id).'" align="left"  />Data dan Statistik
						</a></li>';
				//menu 6		
				$data.='<li><a href="'.base_url().'belajar">
						<img src="'.$this->setBg("6","0",$id).'" align="left" />Substansi Pembelajaran
						</a></li>';
				//menu 7		
				$data.='<li ><a href="javascript:dd(\'layanan\');">
						<img src="'.$this->setBg("7","0",$id).'" align="left"/>Layanan
						<p align="right" style="margin-top:-15px;font-size:16px; color:#000000;"><b>+</b></p></a></li>';	
						$data.='<ul class="sub" id="layanan" style="'.$style7.'">
									<li class="submenu"><a href="'.base_url().'layanan/index/1">
										<img src="'.$this->setBg("7","7.1",$id).'" align="left"/>Perijinan</a></li>
									<li class="submenu"><a href="'.base_url().'layanan/index/2">
										<img src="'.$this->setBg("7","7.2",$id).'" align="left"/>Hibah
									</a></li>
									
								</ul>';
								/*<li class="submenu"><a href="'.base_url().'layanan/index/3">
										<img src="'.$this->setBg("7","7.3",$id).'" align="left"/>Akreditasi
									</a></li>
									<li class="submenu"><a href="'.base_url().'layanan/index/4">
										<img src="'.$this->setBg("7","7.4",$id).'" align="left"/>Beasiswa
									</a></li>*/
				//menu 8				
				$data.='<li><a href="'.base_url().'agenda">
						<img src="'.$this->setBg("8","0",$id).'" align="left"/>Agenda
						</a></li>';
				//menu 9		
				$data.='<li><a href="'.base_url().'berita/arsip">
						<img src="'.$this->setBg("9","0",$id).'" align="left"/>Arsip Berita
						</a></li>';
				//menu 10	
				$data.='<li><a href="'.base_url().'galeri">
						<img src="'.$this->setBg("10","0",$id).'" align="left" />Galeri Foto
						</a></li>';
				//menu 11		
				$data.='<li><a href="'.base_url().'pesan/publik">
						<img src="'.$this->setBg("11","0",$id).'" align="left" />Pesan Anda
						</a></li>';
				//menu 12		
				$data.='<li><a href="'.base_url().'forum/publik" target="_blank">
						<img src="'.$this->setBg("12","0",$id).'" align="left" />Forum
						</a></li>';
				//menu 13		
				$data.='<li><a href="'.base_url().'faq/publik">
						<img src="'.$this->setBg("13","0",$id).'" align="left" />FAQ
						</a></li>';
				//menu 14
				$data.='<li><a href="'.base_url().'download">
						<img src="'.$this->setBg("14","0",$id).'" align="left" />Download
						</a></li>';
				//menu 15
				$data.='<li class="last"><a href="'.base_url().'rss">
						<img src="'.$this->setBg("15","0",$id).'" align="left" />Daftar RSS
						</a></li>';	
						
			$data.='</ul>';
			
		$data.='<div class="clear"></div>';
		$data.='</div>';
		$data.='</div>';
		
		return $data;
	}
	function pengumuman($id=null)
	{
		if($id=="main"){ $data='<div class="contentright">'; }else{ $data='<div class="contentleft">'; }
		
			$data.='<div class="boxcontentsmall">';
				$data.='<h1 class="titlesmall">Pengumuman</h1>';
				$data.='<div class="boxsmallcontent">';
					
					$data.='<ul class="menucontentsmall">';
					
					$query=$this->db->query("SELECT * FROM pengumuman order by id_pengumuman DESC LIMIT 5");
					foreach ($query->result() as $row)
					{
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
	function polling()
	{
		$data='<div class="contentright">';
			$data.='<div class="boxcontentsmall">';
				$data.='<h1 class="titlesmall">Polling</h1>';
				$data.='<div class="boxsmallcontent">';
				
				$data.='<form method="post" action="'.base_url().'polling/simpanHasil">';
				
					$data.='<ul class="menucontentsmall">';
					$query=$this->db->query("SELECT * FROM polling WHERE status = 'true' order by id_polling DESC LIMIT 1");
					foreach ($query->result() as $row)
					{
						$data.='<input type="hidden" name="id" value="'.$row->id_polling.'" />';
						
						$data.='<li>'.$row->pertanyaan.'</li>';
						$data.='<li><input type="radio" name="polling" value="1" /> '.$row->pilihan1.'</li>';
						$data.='<li><input type="radio" name="polling" value="2" /> '.$row->pilihan2.'</li>';
						$data.='<li><input type="radio" name="polling" value="3" /> '.$row->pilihan3.'</li>';
						$data.='<li><input type="radio" name="polling" value="4" /> '.$row->pilihan4.'</li>';
					}
					$data.='</ul>';
					
					$data.='<br />';
					$data.='<center>';
					$data.='<input type="submit" class="button" value="Vote" />';
					$data.='<input type="button" class="button" value="Lihat Hasil" />';
					$data.='</center>';
					$data.='</form>';
					
				$data.='</div>';
				$data.='<div class="boxsmcontentbottom"></div>';
			$data.='</div>';
		$data.='</div>';
		
		return $data;
	}
	function footer()
	{
		$data='<div id="footer">';
			$data.='<p id="texttwitter"></p>';
			
			$data.='<ul id="menufooter">';
				$data.='<li><a href="'.base_url().'">Beranda</a></li>';
				$data.='<li><a href="'.base_url().'direktori">'.COMPANY_NAME.'</a></li>';
				/* $data.='<li><a href="'.base_url().'nuptk">NUPTK</a></li>';
				$data.='<li><a href="'.base_url().'sekretariat" title="Sekretariat Badan">Sekretariat</a></li>';
				$data.='<li><a href="'.base_url().'pppp" title="Pusat Pengembangan Profesi Pendidik">PPPP</a></li>';
				$data.='<li><a href="'.base_url().'pptk" title="Pusat Pengembangan Tenaga Kependidikan">PPTK</a></li>';
				$data.='<li><a href="'.base_url().'ppmp" title="Pusat Penjaminan Mutu Pendidikan">PPMP</a></li>'; */
			$data.='</ul>';
			
			$data.='<ul id="menufooterright">';
				$data.='<li>'.COPYRIGHT.'</li>';
				$data.='<li class="last"><a href="#">Back to top</a></li>';
			$data.='</ul>';
		$data.='</div>';
		
			/* $data.="<script type='text/javascript'>
				//jQuery.noConflict();
				
					jQuery(function () {
						$('#js-news').ticker({
							speed: 0.10,           // The speed of the reveal
							ajaxFeed: false,       // Populate jQuery News Ticker via a feed
							feedUrl: false,        // The URL of the feed
							// MUST BE ON THE SAME DOMAIN AS THE TICKER
							feedType: 'xml',       // Currently only XML
							htmlFeed: true,        // Populate jQuery News Ticker via HTML
							debugMode: true,       // Show some helpful errors in the console or as alerts
							// SHOULD BE SET TO FALSE FOR PRODUCTION SITES!
							controls: true,        // Whether or not to show the jQuery News Ticker controls
							titleText: 'My news',   // To remove the title set this to an empty String
							displayType: 'reveal', // Animation type - current options are 'reveal' or 'fade'
							direction: 'ltr',       // Ticker direction - current options are 'ltr' or 'rtl'
							pauseOnItems: 2000,    // The pause on a news item before being replaced
							fadeInSpeed: 600,      // Speed of fade in animation
							fadeOutSpeed: 300      // Speed of fade out animation
						});
					});	
				</script>";  */
				
				
		return $data;
	}
	function login()
	{
		$data='<?=validation_errors();?>';
		$data.='<div id="panellogin2">';	
			$data.='<form method="post" action="'.base_url().'main/login" id="frmlogin">';
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
	function linkterkait()
	{
		$data='<div class="boxnav">';
			$data.='<h3 class="titlenav">Link terkait</h3>';
			$data.='<div class="boxnavcontent2">';
				
				$data.='<ul id="listads">';
				$query=$this->db->query("SELECT * FROM linkterkait ORDER BY id_link DESC LIMIT 6");
				foreach ($query->result() as $row)
				{
					$data.='<li><a href="'.$row->url.'" target="_blank"><p>'.$row->singkatan.'</p><span>'.$row->deskripsi.'</span></a></li>';
				}
				$data.='</ul>';
				
				$data.='<div class="clear"></div>';
				$data.='<a href="'.base_url().'linkterkait/daftarlink" class="linkadv">More Link</a>';
				$data.='<div class="clear"></div>';
			$data.='</div>';
		$data.='</div>';
		
		return $data;
	}
	function testimonial()
	{
		$data='<div id="nav" style="margin-bottom:10px">';
				$data.='<div class="testimonial-box">';
					$data.='<div id="slider2">';
						$data.='<div class="panelContainer">';
						
						$i=0;
						$query=$this->db->query("select * from agenda ORDER BY id_agenda DESC LIMIT 5");
						foreach ($query->result() as $row)
						{
							$i=$i+1;
							$data.='<div class="panel" title="Panel '.$i.' ">';
								$data.='<div class="wrapper">';
									$data.='<div class="testimonial-box'.$i.'">';
										$data.='<a href="'.base_url().'agenda" style="color:#ffffff;"><div style="height:55px; width:230px;">'.substr($row->kegiatan,0,120).'</div>';
										$data.='<div class="testi-auther"><strong>'.$row->tgl.'</strong>, '.$row->author.'</div></a>';
									$data.='</div>';
								$data.='</div>';
							$data.='</div>';
						}
							
							
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

}
