<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title><?php echo $title_page; ?></title>
	<?=$include?>
<link type="text/css" href="<?=base_url()?>public/menu/menu.css" rel="stylesheet" />
	<script type="text/javascript">var  base_url = "<?php echo base_url(); ?>"</script>
	<script  type="text/javascript">
		$(document).ready(function() {
		});
	</script>
</head>
<body>
	<div id="container">
		<?=$header?>
		
		<div class="sliderkit photoslider-mini transition-demo01" style="margin:0 auto;">						
			<!--<div class="sliderkit-btn sliderkit-go-btn sliderkit-go-prev"><a rel="nofollow" href="#" title="Previous"><span>Previous</span></a></div>
			<div class="sliderkit-btn sliderkit-go-btn sliderkit-go-next"><a rel="nofollow" href="#" title="Next"><span>Next</span></a></div>-->
			<!-- Place caption textbox here if needed 
					<div class="sliderkit-panel-textbox">
						<div class="sliderkit-panel-text">
							<h4>Caption title 1</h4>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
						</div>
						<div class="sliderkit-panel-overlay"></div>
					</div>
					 End Place caption textbox here if needed -->
			<div class="sliderkit-panels">
				<div class="sliderkit-panel">
					<img style="width:990px;" src="<?=base_url()?>public/jquery.sliderkit.1.9.2/lib/images/photos/sample-01.jpg" alt="[Alternative text]" />
					
				</div>
				<div class="sliderkit-panel">
					<img src="<?=base_url()?>public/jquery.sliderkit.1.9.2/lib/images/photos/sample-02.jpg" alt="[Alternative text]" />
					
				</div>
				<div class="sliderkit-panel">
					<img src="<?=base_url()?>public/jquery.sliderkit.1.9.2/lib/images/photos/sample-03.jpg" alt="[Alternative text]" />
					
				</div>
				<div class="sliderkit-panel">
					<img src="<?=base_url()?>public/jquery.sliderkit.1.9.2/lib/images/photos/sample-04.jpg" alt="[Alternative text]" />
					
				</div>
				<div class="sliderkit-panel">
					<img src="<?=base_url()?>public/jquery.sliderkit.1.9.2/lib/images/photos/sample-05.jpg" alt="[Alternative text]" />
					
				</div>
			</div>
			<div class="sliderkit-timer-wrapper">
				<div class="sliderkit-timer"></div>
			</div>
		</div>
		<ul id="js-news" class="js-hidden">
		<?php foreach($agenda as $b){ ?>
			<li class="news-item"><?=$b->tgl." : ".$b->kegiatan?></li>
		<?} ?>
		</ul>
		<br />
		<div id="content">
			<table border="0" width="100%" colspan="0" cellpadding="0">
				<tr>
					<td>
						<div id="maincontent">
							<div class="boxbig">
								<div class="boxbigcontent">
									<?=$wrapper;?>
								</div>
								<!--div class="boxbigcontentbottom"></div-->
							</div>
						</div>
						<div id="nav">
						<!-- hot list -->
						<div class="boxnav">
							<h3 class="titlenav">Hot List</h3>
							<div class="boxnavcontent2">								
								<p style="text-align: center;">&nbsp;</p>
								<div class="clear"></div>							
							</div>
						</div>		
						<!-- end hot list -->
						
						<!-- Sukabumi tautan -->
						<div class="boxnav">
							<h3 class="titlenav">Tautan</h3>
							<div class="boxnavcontent2">
								<div style="padding:5px;">
									<marquee width="300" height="auto" bgcolor="" direction="UP" behavior="SCROLL" onmouseout="this.start();" onmouseover="this.stop();" scrollamount="3" style="font-size:12px;color:#000000;font-family:arial;"> 
										<ul>
											<li><a target="_blank" href="http://tapem.sukabumi.go.id/">Bagian Tata Pemerintahan Setda Kota Sukabumi</a></li>
											<li><a target="_blank" href="http://kpu-sukabumikota.go.id/">Komisi Pemilihan Umum</a></li>
											<li><a target="_blank" href="http://kotasukabumi.siap-ppdb.com/">Siap PPDB</a></li>
											<li><a target="_blank" href="http://dprd-sukabumikota.go.id/">DPRD</a></li>
											<li><a target="_blank" href="http://rspdkotasukabumi.com/">RSPD</a></li>
											<li><a target="_blank" href="http://sukabumikota.siap.web.id/">Disdik</a></li>
											<li><a target="_blank" href="http://pn-sukabumikota.go.id/">Pengadilan Negeri</a></li>
											<li><a target="_blank" href="http://sukabumikota.kemenag.go.id/">Kementrian Agama RI Kota Sukabumi</a></li>
											<li><a target="_blank" href="http://beji.sukabumi.go.id/">Kecamatan Gunung Puyuh</a></li>
											<li><a target="_blank" href="http://cimanggis.sukabumi.go.id/">Kecamatan Cikole</a></li>
											<li><a target="_blank" href="http://limo.sukabumi.go.id/">Kecamatan Citamiang</a></li>
											<li><a target="_blank" href="http://panmas.sukabumi.go.id/">Kecamatan Waru Doyong</a></li>
											<li><a target="_blank" href="http://cipayung.sukabumi.go.id/">Kecamatan Baros</a></li>
											<li><a target="_blank" href="http://sukmajaya.sukabumi.go.id/">Kecamatan Lembursitu</a></li>
											<li><a target="_blank" href="http://cilodong.sukabumi.go.id/">Kecamatan Cibeureum</a></li>
										</ul>
									</marquee>
								</div>
							</div>
						</div>
						<!-- Sukabumi tautan -->
						
						<!-- Ayat pilihan -->
							<div class="boxnav">
								<h3 class="titlenav">Ayat Pilihan</h3>
								<div class="boxnavcontent2">									
									<img src="http://www.mahesajenar.com/scripts/ayatimg.php?&text=000000&bg=D3D3D3&border=D3D3D3&sc=8B0000&c=51" />


									<div class="clear"></div>									
								</div>
							</div>
						<!-- end Ayat pilihan -->
						
						<!-- Sukabumi dalam Media -->
							<div class="boxnav">
								<h3 class="titlenav">Sukabumi Dalam Media</h3>
								<div class="boxnavcontent2" id="rsswidget">									
									 <div id="branding"  style="float: left;"></div><br />
									

									<div class="clear"></div>									
								</div>
							</div>
						<!-- Sukabumi dalam Media -->
						
						<!-- Sukabumi dalam Media -->
							<!--div class="boxnav">
								<h3 class="titlenav">Help Desk</h3>
								<div class="boxnavcontent2">									
									<div class="ymHD">
									<a href="ymsgr:sendIM?ourvisi"> <img src="http://opi.yahoo.com/online?u=ourvisi&amp;m=g&amp;t=14&amp;l=us"/>
									</a>
									<div class="clear"></div>									
									</div>
								</div>
							</div-->
						<!-- Sukabumi dalam Media -->
						
						<!-- Sukabumi download -->
							<div class="boxnav">
								<h3 class="titlenav">Kotak Download</h3>
								<div class="boxnavcontent2">
									<div style="padding:5px;">
										<p><a href="#">Kota Sukabumi Selayang Pandang</a></p>
										<p><a href="#">Kota Sukabumi Bahan Pokok</a></p>
										<p><a href="#">Kota Sukabumi Berita Kota</a></p>
										<p><a href="#">Kota Sukabumi Kalender</a></p>
									</div>
								</div>
							</div>
						<!-- Sukabumi download -->
						
						<?=$linkterkait?>
						<!--?=$polling?-->
						
						<!--?=$login?-->
						<!-- jadwal sholat -->
						<div class="boxnav">
							<h3 class="titlenav">Jadwal Sholat</h3>
							<div class="boxnavcontent2">								
								<p style="text-align: center;"><iframe src="http://www.jadwalsholat.org/adzan/ajax.row.php?id=257" frameborder="0" width="220" height="220"></iframe></p>								
								<div class="clear"></div>							
							</div>
						</div>		
						<!-- end jadwal sholat -->
						
						</div>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="footBg">
		<div id="footer">
			<p id="texttwitter"></p>
			
			<ul id="menufooter">
				<li><a href="'.base_url().'">Beranda</a></li>			
				
			</ul>
			
			<ul id="menufooterright">
				<li><?=COPYRIGHT?></li>
				<li class="last"><a href="#">Back to top</a></li>
			</ul>
		</div>
	</div>
</body>
</html>
