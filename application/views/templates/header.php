<script type="text/javascript">
	window.setTimeout("waktu()",1000);  
function waktu() {   
	var waktu = new Date();
	var jam = waktu.getHours();
	var menit = waktu.getMinutes();
	var detik = waktu.getSeconds();
	var teksjam = new String();
	if ( menit <= 9 )
		menit = "0" + menit;
	if ( detik <= 9 )
		detik = "0" + detik;
	teksjam = jam + ":" + menit + ":" + detik;
	setTimeout("waktu()",1000);  
	document.getElementById("output").innerHTML = teksjam;
}
//alert(themes_active);
var menujs=document.createElement('script');
var menucss=document.createElement('link');

menujs.setAttribute("type","text/javascript");
menucss.setAttribute("rel", "stylesheet")
  menucss.setAttribute("type", "text/css")
  

switch (themes_active){
 	
  case "green" :
	menujs.setAttribute("src", "<?=base_url()?>public/menu_green/menu.js");
	menucss.setAttribute("href", "<?=base_url()?>public/menu_green/menu.css");
  break;  
  case "red" :
	menujs.setAttribute("src", "<?=base_url()?>public/menu_red/menu.js");
	menucss.setAttribute("href", "<?=base_url()?>public/menu_red/menu.css");
  break;  
  case "gray" :
	menujs.setAttribute("src", "<?=base_url()?>public/menu_gray/menu.js");
	menucss.setAttribute("href", "<?=base_url()?>public/menu_gray/menu.css");
  break;  
  default : 
	menujs.setAttribute("src", "<?=base_url()?>public/menu/menu.js");
	menucss.setAttribute("href", "<?=base_url()?>public/menu/menu.css");
  
}

document.getElementsByTagName("head")[0].appendChild(menujs);
document.getElementsByTagName("head")[0].appendChild(menucss);

</script>
<!--<link type="text/css" href="<?=base_url()?>public/menu_red/menu.css" rel="stylesheet" />   
<script type="text/javascript" src="<?=base_url()?>public/menu_red/menu.js"></script> -->
<style type="text/css">
 div#menu {
    margin:33px auto;
    width:85%;
}
</style>
<div id="wrapper">
	<div id="header">
		<div id="headertop">
			<a href="#" class="replace" id="logo"><span></span></a>
			<div id="loginarea">
				<p class="notlogin"> 
					<form method="post" action="<?=base_url()?>'main/search" id="frmsearch" style="margin:-3px 0 0 -5px;">
						<input type="text" name="search" class="textboxsearch" value="Search Site" onblur="if(this.value.length == 0) this.value=\'Search Site\" onclick="if(this.value == \'Cari\') this.value=\'\" /> <input type="submit" name="submitsearch" class="submitsearch" value="Cari" />
					</form> 
				</p>
				<p class="notlogin" style="margin-left:-3px;"><a href="<?=base_url()?>sitemap">Peta Situs</a></p>
				<p class="notlogin" style="margin-left:-10px;">
					<span style="margin-right:5px;float:left;">|</span> <a href="javascript:void(0)" class="login arrowup">LOGIN</a>
				</p>               
				<div style="display: block;" class="loginform">
					<form  accept-charset="UTF-8" method="post" id="user-login-form">
						<div style="height:100px;">
							<div class="login-error"></div><div class="form-item" id="edit-name-wrapper">
								<label for="edit-name">Username : <span class="form-required" title="This field is required.">*</span></label>
								<input maxlength="60" name="name" id="edit-name" size="15" class="form-text required" type="text">
							</div>
							<div class="form-item" id="edit-pass-wrapper">
								<label for="edit-pass">Password : <span class="form-required" title="This field is required.">*</span></label>
								<input name="pass" id="edit-pass" maxlength="60" size="15" class="form-text required" type="password">
							</div>
							<input name="op" id="edit-submit-1" value="Log in" class="form-submit" type="submit">
							<div class="item-list">
								<ul>
									<li class="first"></li>
									<li>
										<a href="http://www.greenglobeideas.com/user/register" title="Create a new user account." class="gi-user-register">
											Register
										</a>
									</li>
									<li class="last">
										<a href="http://www.greenglobeideas.com/user/password" title="Request new password via e-mail.">Forgot password?</a>
									</li>
								</ul>
							</div>
							<input name="form_build_id" id="form-2ae27b14231ea39ddf4acf9006aed4e9" value="form-2ae27b14231ea39ddf4acf9006aed4e9" type="hidden">
							<input name="form_id" id="edit-user-login-block" value="user_login_block" type="hidden">
						</div>
					</form>
		        </div>
				<div class="datetime">
					<div style="float:right; /* padding: 5px 10px; display: block; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px;	background-color: #f1f1f1;border:1px solid #a5a5a5; opacity:0.9; filter:alpha(opacity=90); */">
						<? 
					//	setlocale(LC_ALL, 'id_ID.UTF8', 'id_ID.UTF-8', 'id_ID.8859-1', 'id_ID', 'IND.UTF8', 'IND.UTF-8', 'IND.8859-1', 'IND', 'Indonesian.UTF8', 'Indonesian.UTF-8', 'Indonesian.8859-1', 'Indonesian', 'Indonesia', 'id', 'ID', 'en_US.UTF8', 'en_US.UTF-8', 'en_US.8859-1', 'en_US', 'American', 'ENG', 'English');
					setlocale (LC_TIME, 'id_ID');


echo strftime("%A, %d %B %Y") ;
						//echo date("l").", ".date('d M Y');
						
						?>
					<span id="output">14:44:51</span>
					</div>
				</div>
			</div>
		</div>
		
		<div id="menu">
		    <ul class="menu">
		        <li><a href="<?=base_url()?>" class="parent"><span>Home</span></a></li>
		        <li><a href="#" class="parent"><span>Kota Sukabumi</span></a>
		            <div><ul>
		               <!-- <li><a href="#"><span>Profil</span></a></li> -->
		                <li><a href="<?=base_url()?>profil/sejarah"><span>Sejarah</span></a></li>
						<li><a href="<?=base_url()?>profil/visi_misi"><span>Visi dan Misi</span></a></li>		                
		                <li><a href="<?=base_url()?>profil/lambang"><span>Lambang</span></a></li>
		                <li><a href="<?=base_url()?>profil/geografis"><span>Geografis</span></a></li>
		                <li><a href="<?=base_url()?>profil/sosial"><span>Sosial Ekonomi</span></a></li>
		                <li><a href="<?=base_url()?>profil/angka"><span>Sukabumi Dalam Angka</span></a></li>
		                <!-- <li><a href="#" class="parent"><span>Sub Item 2</span></a>
		                    <div><ul>
		                        <li><a href="#"><span>Sub Item 2.1</span></a></li>
		                        <li><a href="#"><span>Sub Item 2.2</span></a></li>
		                    </ul></div>
		                </li>-->
		                
		            </ul></div>
		        </li>
		        <li><a href="#" class="parent"><span>Pemerintahan</span></a>
					<div><ul>
		                        <li><a href="<?=base_url()?>pemerintahan/dprd"><span>DPRD</span></a></li>
		                        <li><a href="<?=base_url()?>pemerintahan/walikota"><span>Walikota</span></a></li>
		                        <li><a href="<?=base_url()?>pemerintahan/sekda"><span>Sekretariat Daerah</span></a></li>
		                        <li><a href="<?=base_url()?>pemerintahan/stafwalikota"><span>Staf Ahli Walikota</span></a></li>
		                        
		                        <li><a href="<?=base_url()?>pemerintahan/skpd"><span>SKPD</span></a>
									<?=$menuskpd?>
		                        </li>
		                        
		                        <li><a href="<?=base_url()?>pemerintahan/kecamatan"><span>Kecamatan</span></a></li>
		                        <li><a href="<?=base_url()?>pemerintahan/kelurahan"><span>Kelurahan</span></a></li>
		                        <li><a href="<?=base_url()?>pemerintahan/rtrw"><span>Rekap RW RT</span></a></li>
		                        <li><a href="<?=base_url()?>pemerintahan/kim"><span>Kelompok Informasi Masyarakat (KIM)</span></a></li>
		                    </ul></div>
				</li>
				<li><a href="#" class="parent"><span>Industri</span></a>
					<div><ul>
		                        <li><a href="<?=base_url()?>industri/rencana_strategis"><span>Perencanaan Strategis</span></a></li>
		                        <li><a href="<?=base_url()?>industri/daftar_rencana"><span>Daftar Perencanaan</span></a></li>
		                        <li><a href="<?=base_url()?>industri/komoditi"><span>Industri Per Komoditi</span></a></li>
		                        <li><a href="<?=base_url()?>industri/perkembangan"><span>Perkembangan Industri</span></a></li>
		                        <li><a href="<?=base_url()?>industri/iujk"><span>Daftar IUJK</span></a></li>
		                        <li><a href="<?=base_url()?>industri/koperasi"><span>Daftar Koperasi</span></a></li>
		                        <li><a href="<?=base_url()?>industri/ukm"><span>Daftar UKM</span></a></li>
		                        
		                    </ul></div>
				</li>
				<li><a href="#" class="parent"><span>Informasi Umum</span></a>
					<div><ul>
							<li class="parent"><a href="#"><span>Pendidikan</span></a>
									<div>
									<ul>
										<li><a href="<?=base_url()?>informasi_umum/tk"><span>TK/RA</span></a></li>
										<li><a href="<?=base_url()?>informasi_umum/sd"><span>SD/MI</span></a></li>
										<li><a href="<?=base_url()?>informasi_umum/smp"><span>SMP/MTS</span></a></li>
										<li><a href="<?=base_url()?>informasi_umum/sma"><span>SMA/MA</span></a></li>
										<li><a href="<?=base_url()?>informasi_umum/smk"><span>SMK</span></a></li>
										<li><a href="<?=base_url()?>informasi_umum/pt"><span>Perguruan Tinggi</span></a></li>
										<li><a href="<?=base_url()?>informasi_umum/kursus"><span>Kursus</span></a></li>
										<li><a href="<?=base_url()?>informasi_umum/bimbel"><span>Bimbingan Belajar</span></a></li>
									</ul>
									</div>
							</li>
							<li class="parent"><a href="#"><span>Kesehatan</span></a>
									<div>
									<ul>
										<li><a href="<?=base_url()?>informasi_umum/rs"><span>Rumah Sakit</span></a></li>
										<li><a href="<?=base_url()?>informasi_umum/puskesmas"><span>Puskesmas</span></a></li>
										<li><a href="<?=base_url()?>informasi_umum/klinik"><span>Klinik</span></a></li>
										<li><a href="<?=base_url()?>informasi_umum/apotek"><span>Apotek</span></a></li>
										<li><a href="<?=base_url()?>informasi_umum/lab"><span>Laboratorium</span></a></li>
									</ul>
									</div>
							</li>
							<li class="parent"><a href="#"><span>Pariwisata</span></a>
									<div>
									<ul>
										<li><a href="<?=base_url()?>informasi_umum/rekreasi"><span>Rekreasi</span></a></li>
										<li><a href="<?=base_url()?>informasi_umum/belanja"><span>Belanja</span></a></li>
										<li><a href="<?=base_url()?>informasi_umum/olahraga"><span>Olahraga</span></a></li>
										<li><a href="<?=base_url()?>informasi_umum/hotel"><span>Hotel</span></a></li>
										<li><a href="<?=base_url()?>informasi_umum/restoran"><span>Restoran</span></a></li>
										<li><a href="<?=base_url()?>informasi_umum/radio"><span>Radio/Televisi</span></a></li>
									</ul>
									</div>
							</li>    
							<li class="parent"><a href="<?=base_url()?>informasi_umum/bumd"><span>BUMD</span></a></li>
							<li class="parent"><a href="#"><span>Lainnya</span></a>
									<div>
									<ul>
										<li><a href="<?=base_url()?>informasi_umum/ibadah"><span>Sarana Ibadah</span></a></li>
										<li><a href="<?=base_url()?>informasi_umum/bank"><span>Perbankan</span></a></li>
										<li><a href="<?=base_url()?>informasi_umum/atm"><span>ATM</span></a></li>
										<li><a href="<?=base_url()?>informasi_umum/transportasi"><span>Transportasi</span></a></li>
										<li><a href="<?=base_url()?>informasi_umum/panti"><span>Panti Asuhan</span></a></li>
										<li><a href="<?=base_url()?>informasi_umum/asuransi"><span>Asuransi</span></a></li>
										<li><a href="<?=base_url()?>informasi_umum/gedung"><span>Gedung Pertemuan</span></a></li>
										<li><a href="<?=base_url()?>informasi_umum/terminal"><span>Terminal/Pom Bensin</span></a></li>
									</ul>
									</div>
							</li>
		                </ul>
					</div>
				</li>
		        <li><a href="#"><span>Berita</span></a>
					<div>
						<ul>
							<li><a href="<?=base_url()?>berita/arsip/sukabumi"><span>Kota Sukabumi</span></a></li>
							<li><a href="<?=base_url()?>berita/arsip/nasional"><span>Nasional</span></a></li>
							<li><a href="<?=base_url()?>berita/arsip/internasional"><span>Internasional</span></a></li>
						</ul>
					</div>
				</li>
		        
		        <li class="last"><a href="#"><span>Forum</span></a>
					<div>
						<ul>
							<li><a href="#"><span>Pemerintah Kota Sukabumi</span></a></li>							
							<li><a href="#"><span>Umum</span></a></li>							
						</ul>
					</div>
				</li>
		    </ul>
		</div> <!-- end div menu -->
	</div>
	<div class="clear"></div>
</div>
</div>
<div id="copyright" style="display:none">Menu by <a href="http://apycom.com/">Apycom jQuery Menus</a></div>
