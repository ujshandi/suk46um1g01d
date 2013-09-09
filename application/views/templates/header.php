<?=''//$header?>

<link type="text/css" href="<?=base_url()?>public/menu/menu.css" rel="stylesheet" />
    
    <script type="text/javascript" src="<?=base_url()?>public/menu/menu.js"></script>
<style type="text/css">
 div#menu {
    margin:30px auto;
    width:90%;
} 


</style>
	<div id="wrapper">
	<div id="header">
	
	<div id="headertop">
			<a href="#" class="replace" id="logo"><span></span></a>
				
				<div id="loginarea">
				<p class="notlogin"> 
				<form method="post" action="'.base_url().'main/search" id="frmsearch" style="margin:-3px 0 0 -5px;">
				<input type="text" name="search" class="textboxsearch" value="Cari" onblur="if(this.value.length == 0) this.value=\'Cari\" onclick="if(this.value == \'Cari\') this.value=\'\" /> <input type="submit" name="submitsearch" class="submitsearch" value="Cari" />
				</form> </p><p class="notlogin" style="margin-left:-10px;"><span style="margin-right:5px;">|</span> <a href="'.base_url().'sitemap">Peta Situs</a></p>
				</div>
				
			</div>
			
<!--<div id="placemainmenu">	-->
<div id="menu">
    <ul class="menu">
        <li><a href="#" class="parent"><span>Home</span></a></li>
        <li><a href="#" class="parent"><span>Kota Sukabumi</span></a>
            <div><ul>
                <li><a href="#"><span>Profil</span></a></li>
                <li><a href="#"><span>Visi dan Misi</span></a></li>
                <li><a href="#"><span>Sejarah</span></a></li>
                <li><a href="#"><span>Lambang</span></a></li>
                <li><a href="#"><span>Geografis</span></a></li>
                <li><a href="#"><span>Sosial Ekonomi</span></a></li>
                <li><a href="#"><span>Sukabumi Dalam Angka</span></a></li>
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
                        <li><a href="#"><span>DPRD</span></a></li>
                        <li><a href="#"><span>Walikota</span></a></li>
                        <li><a href="#"><span>Sekretariat Daerah</span></a></li>
                        <li><a href="#"><span>Staf Ahli Walikota</span></a></li>
                        <li><a href="#"><span>SKPD</span></a></li>
                        <li><a href="#"><span>Kecamatan</span></a></li>
                        <li><a href="#"><span>Kelurahan</span></a></li>
                        <li><a href="#"><span>Rekap RW RT</span></a></li>
                    </ul></div>
		</li>
		<li><a href="#" class="parent"><span>Industri</span></a>
			<div><ul>
                        <li><a href="#"><span>Perencanaan Strategis</span></a></li>
                        <li><a href="#"><span>Daftar Perencanaan</span></a></li>
                        <li><a href="#"><span>Industri Per Komoditi</span></a></li>
                        <li><a href="#"><span>Perkembangan Industri</span></a></li>
                        <li><a href="#"><span>Daftar IUJK</span></a></li>
                        
                    </ul></div>
		</li>
		<li><a href="#" class="parent"><span>Informasi Umum</span></a>
			<div><ul>
					<li class="parent"><a href="#"><span>Pendidikan</span></a>
							<div>
							<ul>
								<li><a href="#"><span>TK/RA</span></a></li>
								<li><a href="#"><span>SD/MI</span></a></li>
								<li><a href="#"><span>SMP/MTS</span></a></li>
								<li><a href="#"><span>SMA/MA</span></a></li>
								<li><a href="#"><span>SMK</span></a></li>
								<li><a href="#"><span>Perguruan Tinggi</span></a></li>
								<li><a href="#"><span>Kursus</span></a></li>
								<li><a href="#"><span>Bimbingan Belajar</span></a></li>
							</ul>
							</div>
					</li>
					<li class="parent"><a href="#"><span>Kesehatan</span></a>
							<div>
							<ul>
								<li><a href="#"><span>Rumah Sakit</span></a></li>
								<li><a href="#"><span>Puskesmas</span></a></li>
								<li><a href="#"><span>Klinik</span></a></li>
								<li><a href="#"><span>Apotek</span></a></li>
								<li><a href="#"><span>Laboratorium</span></a></li>
							</ul>
							</div>
					</li>
					<li class="parent"><a href="#"><span>Pariwisata</span></a>
							<div>
							<ul>
								<li><a href="#"><span>Rekreasi</span></a></li>
								<li><a href="#"><span>Belanja</span></a></li>
								<li><a href="#"><span>Olahraga</span></a></li>
								<li><a href="#"><span>Hotel</span></a></li>
								<li><a href="#"><span>Restoran</span></a></li>
								<li><a href="#"><span>Radio/Televisi</span></a></li>
							</ul>
							</div>
					</li>    
					<li class="parent"><a href="#"><span>BUMD</span></a></li>
					<li class="parent"><a href="#"><span>Lainnya</span></a>
							<div>
							<ul>
								<li><a href="#"><span>Sarana Ibadah</span></a></li>
								<li><a href="#"><span>Perbankan</span></a></li>
								<li><a href="#"><span>ATM</span></a></li>
								<li><a href="#"><span>Transportasi</span></a></li>
								<li><a href="#"><span>Panti Asuhan</span></a></li>
								<li><a href="#"><span>Asuransi</span></a></li>
								<li><a href="#"><span>Gedung Pertemuan</span></a></li>
								<li><a href="#"><span>Terminal/Pom Bensin</span></a></li>
							</ul>
							</div>
					</li>
                </ul>
			</div>
		</li>
        <li><a href="#"><span>Berita</span></a></li>
        
        <li class="last"><a href="#"><span>Forum</span></a></li>
    </ul>
</div>
</div>
<div class="clear"></div>
			
			</div>
<div id="copyright" style="display:none">Menu by <a href="http://apycom.com/">Apycom jQuery Menus</a></div>