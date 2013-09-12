<?php
class backend_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	function headermenu($id="1")
	{
	
		$st1="";$st2="";$st3="";$st4="";$st5="";
		switch($id)

		{

			case"1"; $st1='class="active"'; break;

			case"2"; $st2='class="active"'; break;

			case"3"; $st3='class="active"'; break;

			case"4"; $st4='class="active"'; break;

			/*case"5"; $st5='class="active"'; break;

			case"6"; $st6='class="active"'; break;

			case"7"; $st7='class="active"'; break;*/

		}
		
		$data='<div id="wrapper">';
		$data.='<div id="header">';
			
			$data.='<div id="headertop">';
			$data.='<a href="#" class="replace" id="logo"><span></span></a>';
				$data.='<div id="loginarea">';
				$data.='<p class="notlogin">Login Sebagai : <b>'.$this->session->userdata('nama').'</b></p>';
				$data.='<p><a href="'.base_url().'backend/logout" class="butlogin" style="margin-left:20px;">Logout</a></p>';
				$data.='<div id="panellogin">';
				
					$data.='<form method="post" action="#" id="frmlogin">';
					$data.='<div>';
					$data.='<label for="lgnusername">Username:</label>';
					$data.='<input type="text" name="username" id="lgnusername" /><br />';
					$data.='<label for="lgnpassword">Password:</label>';
					$data.='<input type="text" name="password" id="lgnpassword" /><br />';
					$data.='<label></label> <input type="submit" name="submitlogin" class="submitlogin" value="Login" />';
					$data.='<a href="#" class="linkforgot">Forgot Password?</a>';
					$data.='</div>';
					$data.='</form>';
					
				$data.='</div>';
			$data.='</div>';
			
			$data.='</div>';
			
			$data.='<div id="placemainmenu">';

				$data.='<ul id="mainmenu">';

					//$data.='<li '.$st1.' ><a href="'.base_url().'">Beranda</a></li>';

					$data.='<li '.$st2.' ><a href="'.base_url().'forum_registered">FORUM</a></li>';
					$level=$this->session->userdata('id_level');
					if($level!="6")
					{
					$data.='<li '.$st3.' ><a href="'.base_url().'backend/main">Backend</a></li>';
					}
					//$data.='<li '.$st4.' ><a href="'.base_url().'">MAIL</a></li>';
										
				$data.='</ul>';
				
				$data.='<div class="clear"></div>';

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
		$level=$this->session->userdata('id_level');

		switch($level)
		{
			case"1"; $menu=$this->menuSuperAdmin($id);	break;
			case"2"; $menu=$this->menuSuperAdmin($id);	break;
			case"3"; $menu=$this->menuSuperAdmin($id);	break;
			case"4"; $menu=$this->menuAuthor($id); 		break;
			case"5"; $menu=$this->menuAuthor($id); 		break;
		}
		
		return $menu;
	}
	function menuSuperAdmin($id)
	{
		//style dropdown menu 1
		if($id=="1"||$id=="1.1"||$id=="1.2"||$id=="1.3"||$id=="1.4"||$id=="1.5"||$id=="1.6"){ $style1="display:block"; }else{ $style1="display:none"; }
		//style dropdown menu 2
		if($id=="2"||$id=="2.1"||$id=="2.2"||$id=="2.3"||$id=="2.4"||$id=="2.5"){ $style2="display:block"; }else{ $style2="display:none"; }
		//style dropdown menu 8
		if($id=="8"||$id=="8.1"||$id=="8.2"||$id=="8.3"||$id=="8.4"){ $style8="display:block"; }else{ $style8="display:none"; }
		
		$menu='<div id="nav">';
		
			$menu.='<div class="boxnav">';
				$menu.='<h3 class="titlenav">Main Menu </h3>';
				
					$menu.='<div class="boxnavcontent">';
						$menu.='<ul class="menunav">';
							/* $menu.="<li><a href=\"javascript:dropdown('menubar');\">";
							$menu.='<img src="'.$this->setBg("1","0",$id).'" align="left"/>Menubar</a></li>';
								$menu.='<ul class="sub" id="menubar" style="'.$style1.'">';
									$menu.='<li class="submenu"><a href="'.base_url().'direktori/edit">';
										$menu.='<img src="'.$this->setBg("1","1.1",$id).'" align="left"/>'.COMPANY_NAME;
									$menu.='</a></li>'; */
									
									/* $menu.='<li class="submenu"><a href="'.base_url().'nuptk/edit">';
										$menu.='<img src="'.$this->setBg("1","1.2",$id).'" align="left"/>NUPTK';
									$menu.='</a></li>';
									$menu.='<li class="submenu"><a href="'.base_url().'sekretariat/edit">';
										$menu.='<img src="'.$this->setBg("1","1.3",$id).'" align="left"/>Sekretariat';
									$menu.='</a></li>';
									$menu.='<li class="submenu"><a href="'.base_url().'pppp/edit">';
										$menu.='<img src="'.$this->setBg("1","1.4",$id).'" align="left"/>PPPP';
									$menu.='</a></li>';
									$menu.='<li class="submenu"><a href="'.base_url().'pptk/edit">';
										$menu.='<img src="'.$this->setBg("1","1.5",$id).'" align="left"/>PPTK';
									$menu.='</a></li>';
									$menu.='<li class="submenu"><a href="'.base_url().'ppmp/edit">';
										$menu.='<img src="'.$this->setBg("1","1.6",$id).'" align="left"/>PPMP';
									$menu.='</a></li>'; */
							//	$menu.='</ul></li>';
							$menu.="<li><a href=\"javascript:dropdown('profil');\">";
							$menu.='<img src="'.$this->setBg("2","0",$id).'" align="left" />Kota Sukabumi</a></li>';
								$menu.='<ul class="sub" id="profil" style="'.$style2.'">';
								$menu.='<li class="submenu"><a href="'.base_url().'profil/sejarahview">';
										$menu.='<img src="'.$this->setBg("2","2.2",$id).'" align="left"/>Sejarah';
									$menu.='</a></li>';
									$menu.='<li class="submenu"><a href="'.base_url().'profil/visimisi">';
										$menu.='<img src="'.$this->setBg("2","2.1",$id).'" align="left"/>Visi dan Misi';
									$menu.='</a></li>';
									
									//$menu.='<li class="submenu"><a href="#">';
										//$menu.='<img src="'.$this->setBg("2","2.3",$id).'" align="left"/>Struktur Organisasi';
									//$menu.='</a></li>';
									$menu.='<li class="submenu"><a href="'.base_url().'profil/lambangview">';
										$menu.='<img src="'.$this->setBg("2","2.4",$id).'" align="left"/>Lambang';
									$menu.='</a></li>';
									$menu.='<li class="submenu"><a href="'.base_url().'profil/geografiview">';
										$menu.='<img src="'.$this->setBg("2","2.5",$id).'" align="left"/>Geografis';
									$menu.='</a></li>';
									$menu.='<li class="submenu"><a href="'.base_url().'profil/sosialview">';
										$menu.='<img src="'.$this->setBg("2","2.5",$id).'" align="left"/>Sosial Ekonomi';
									$menu.='</a></li>';
									$menu.='<li class="submenu"><a href="'.base_url().'profil/angkaview">';
										$menu.='<img src="'.$this->setBg("2","2.5",$id).'" align="left"/>Sukabumi Dalam Angka';
									$menu.='</a></li>';
								$menu.='</ul></li>';
							$menu.='<li><a href="'.base_url().'program_kerja/data">';
								$menu.='<img src="'.$this->setBg("3","0",$id).'" align="left" />Program Kerja';
							$menu.='</a></li>';
							$menu.='<li><a href="'.base_url().'peraturan/data">';
								$menu.='<img src="'.$this->setBg("4","0",$id).'" align="left" />Peraturan';
							$menu.='</a></li>';
							$menu.='<li><a href="'.base_url().'panduan/data">';
								$menu.='<img src="'.$this->setBg("5","0",$id).'" align="left" />Pedoman / Panduan';
							$menu.='</a></li>';
							$menu.='<li><a href="'.base_url().'statistik/data">';
								$menu.='<img src="'.$this->setBg("6","0",$id).'" align="left"  />Data dan Statistik';
							$menu.='</a></li>';
							/* $menu.='<li><a href="'.base_url().'belajar/data">';
								$menu.='<img src="'.$this->setBg("7","0",$id).'" align="left" />Substansi Pembelajaran';
							$menu.='</a></li>'; */
							$menu.="<li><a href=\"javascript:dropdown('layanan');\">";
							$menu.='<img src="'.$this->setBg("8","0",$id).'" align="left"/>Layanan</a></li>';
								$menu.='<ul class="sub" id="layanan" style="'.$style8.'">';
									$menu.='<li class="submenu"><a href="'.base_url().'layanan/data/1">';
										$menu.='<img src="'.$this->setBg("8","8.1",$id).'" align="left"/>Perijinan';
									$menu.='</a></li>';
									/* $menu.='<li class="submenu"><a href="'.base_url().'layanan/data/2">';
										$menu.='<img src="'.$this->setBg("8","8.2",$id).'" align="left"/>Hibah';
									$menu.='</a></li>';
									$menu.='<li class="submenu"><a href="'.base_url().'layanan/data/3">';
										$menu.='<img src="'.$this->setBg("8","8.3",$id).'" align="left"/>Akreditasi';
									$menu.='</a></li>';
									$menu.='<li class="submenu"><a href="'.base_url().'layanan/data/4">';
										$menu.='<img src="'.$this->setBg("8","8.4",$id).'" align="left"/>Beasiswa';
									$menu.='</a></li>'; */
								$menu.='</ul></li>';
							$menu.='<li><a href="'.base_url().'linkterkait">';
								$menu.='<img src="'.$this->setBg("9","0",$id).'" align="left"/>Link Terkait';
							$menu.='</a></li>';
							$menu.='<li><a href="'.base_url().'berita">';
								$menu.='<img src="'.$this->setBg("10","0",$id).'" align="left"/>Berita';
							$menu.='</a></li>';
							$menu.='<li><a href="'.base_url().'pengumuman">';
								$menu.='<img src="'.$this->setBg("11","0",$id).'" align="left"/>Pengumuman';
							$menu.='</a></li>';
							$menu.='<li><a href="'.base_url().'polling">';
								$menu.='<img src="'.$this->setBg("12","0",$id).'" align="left"/>Polling';
							$menu.='</a></li>';
							$menu.='<li><a href="'.base_url().'agenda/data">';
								$menu.='<img src="'.$this->setBg("13","0",$id).'" align="left"/>Agenda';
							$menu.='</a></li>';
							$menu.='<li><a href="'.base_url().'galeri/daftar_galeri">';
								$menu.='<img src="'.$this->setBg("14","0",$id).'" align="left" />Galeri Foto';
							$menu.='</a></li>';
							$menu.='<li><a href="'.base_url().'pesan">';
								$menu.='<img src="'.$this->setBg("15","0",$id).'" align="left" />Pesan Pengunjung';
							$menu.='</a></li>';
							$menu.='<li><a href="'.base_url().'faq">';
								$menu.='<img src="'.$this->setBg("16","0",$id).'" align="left" />FAQ';
							$menu.='</a></li>';
							$menu.='<li><a href="'.base_url().'download/data">';
								$menu.='<img src="'.$this->setBg("17","0",$id).'" align="left" />Download';
							$menu.='</a></li>';
							$menu.='<li><a href="'.base_url().'user">';
								$menu.='<img src="'.$this->setBg("18","0",$id).'" align="left" />User';
							$menu.='</a></li>';
							$menu.='<li class="last"><a href="'.base_url().'forum/publik">';
								$menu.='<img src="'.$this->setBg("19","0",$id).'" align="left" />Forum';
							$menu.='</a></li>';
						$menu.='</ul>';
					$menu.='</div>';
				$menu.='</div>';
			$menu.='</div>';
		
		return $menu;
	}
	function menuAuthor($id)
	{
		//style dropdown menu 8
		if($id=="8"||$id=="8.1"||$id=="8.2"||$id=="8.3"||$id=="8.4"){ $style8="display:block"; }else{ $style8="display:none"; }
		
		$menu='<div id="nav">';
		
			$menu.='<div class="boxnav">';
				$menu.='<h3 class="titlenav">Main Menu </h3>';
				
					$menu.='<div class="boxnavcontent">';
						$menu.='<ul class="menunav">';
						
						$menu.='<li><a href="'.base_url().'program_kerja/data">';
							$menu.='<img src="'.$this->setBg("3","0",$id).'" align="left" />Program Kerja';
						$menu.='</a></li>';
						$menu.='<li><a href="'.base_url().'belajar/data">';
							$menu.='<img src="'.$this->setBg("7","0",$id).'" align="left" />Substansi Pembelajaran';
						$menu.='</a></li>';
						$menu.="<li><a href=\"javascript:dropdown('layanan');\">";
						$menu.='<img src="'.$this->setBg("8","0",$id).'" align="left"/>Layanan</a></li>';
							$menu.='<ul class="sub" id="layanan" style="'.$style8.'">';
								$menu.='<li class="submenu"><a href="'.base_url().'layanan/data/1">';
									$menu.='<img src="'.$this->setBg("8","8.1",$id).'" align="left"/>Perijinan';
								$menu.='</a></li>';
							/* 	$menu.='<li class="submenu"><a href="'.base_url().'layanan/data/2">';
									$menu.='<img src="'.$this->setBg("8","8.2",$id).'" align="left"/>Hibah';
								$menu.='</a></li>';
								$menu.='<li class="submenu"><a href="'.base_url().'layanan/data/3">';
									$menu.='<img src="'.$this->setBg("8","8.3",$id).'" align="left"/>Akreditasi';
								$menu.='</a></li>';
								$menu.='<li class="submenu"><a href="'.base_url().'layanan/data/4">';
									$menu.='<img src="'.$this->setBg("8","8.4",$id).'" align="left"/>Beasiswa';
								$menu.='</a></li>'; */
						$menu.='</ul></li>';
						$menu.='<li><a href="'.base_url().'berita">';
								$menu.='<img src="'.$this->setBg("10","0",$id).'" align="left"/>Berita';
						$menu.='</a></li>';
						$menu.='<li><a href="'.base_url().'user">';
							$menu.='<img src="'.$this->setBg("18","0",$id).'" align="left" />User';
						$menu.='</a></li>';
						$menu.='<li class="last"><a href="'.base_url().'forum/publik">';
								$menu.='<img src="'.$this->setBg("19","0",$id).'" align="left" />Forum';
							$menu.='</a></li>';
								
					$menu.='</ul>';
					$menu.='</div>';
					
			$menu.='</div>';
				
		$menu.='</div>';
		
		return $menu;
	}

}
