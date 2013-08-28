<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Beranda <?=COMPANY_NAME?></title>
	<?=$include?>
</head>
<body>
<div id="container">
	
	<?=$header?>
	
	<?=$sliderTop?>
			  
		<div id="content">
			
			<div id="maincontent">
	
				<div class="boxbig">
					<h1 class="titlebig">Berita</h1>
					<div class="boxbigcontent" style="height:225px">
						
					<div id="feature">
					  <div id="panes">
					  	<?php foreach($berita as $b): ?>
						<div style="display: none;">
							<fieldset id="imgBerita">
								<a href="<?=base_url()?>berita/detail/<?=$b->id_berita?>"><img src="<?=base_url()?>uploads/img/medium/<?=$b->gambar?>"  alt="" /></a>
							</fieldset> 
							<p><strong><a href="<?=base_url()?>berita/detail/<?=$b->id_berita?>"><?=$b->judul_berita?></a></strong><br />   
							<?=$b->deskripsi_singkat?>
							</p>
						</div>
						<?php endforeach; ?>
					</div><!-- /# end panes -->
					
					<div id="navi">
					<ul>
					<?php foreach($berita as $b2): ?>
					<li><a class="" href="#">
						<img src="<?=base_url()?>uploads/img/thumbnail/<?=$b2->gambar?>" alt="" />
						</a>
					</li>
					<?php endforeach; ?>
					</ul>	 
					</div><!-- /# end navigator -->	  
					
						</div>	

					</div>
					<div class="boxbigcontentbottom"></div>
				</div>
				
				<div class="contentleft">
					<div class="boxcontentsmall">
						<h1 class="titlesmall">Program Kerja</h1>
					<?php foreach($program as $dProgram): ?>
					
						<div class="boxsmallcontent">
							<a href="#"><h3><?=$dProgram->nama_program?></h3>
							<p><?=$dProgram->deskripsi_singkat?></p></a>
						</div>
					<?php endforeach; ?>
						<div class="boxsmcontentbottom"></div>
					</div>
					
					<div class="boxcontentsmall">
						<h1 class="titlesmall">Pedoman / Panduan</h1>
						<?php $i=0; foreach($panduan as $dPanduan): ?>
						<?php $i=$i+1; ?>
						<div class="boxsmallcontent">
							<h3><a href="<?=base_url()?>panduan/detail/<?=$dPanduan->id_panduan?>"><?=$dPanduan->judul?></a></h3>
							<p><?=$dPanduan->deskripsi_singkat?>
							<br /><a href="<?=base_url()?>panduan/detail/<?=$dPanduan->id_panduan?>" class="more_slider">Selengkapnya &#187;</a></p>
							<br /><br /><?php if($i!=count($panduan)){ echo "<hr />"; }else{ echo "<br>"; } ?>
						</div>
						<?php endforeach; ?>
						<div class="boxsmcontentbottom"></div>
					</div>
				</div>
				
				<div class="contentright">
				<h1 class="titlesmall">Substansi Pembelajaran</h1>
					<?php foreach($belajar as $dBelajar): ?>
					<div class="boxcontentsmall">
						
						<div class="boxsmallcontent">
							<a href="#"><h3><?=$dBelajar->judul?></h3>
							<p><?=$dBelajar->deskripsi_singkat?></p></a>
						</div>
					</div>
					<?php endforeach; ?>
						<div class="boxsmcontentbottom"></div>
					
				</div>
				
				<?=$polling?>
				<?="";//tutup hula $pengumuman?>
								
			</div>
			
			</div>
			
			<div id="nav">
				<?=$mainmenu?>
				<?=$login?>
				<?=$linkterkait?>
				<?=$testimonial?>	
				<?=$footer?>
			</div>
			<ul id="js-news" class="js-hidden">
				<li class="news-item">jQuery News Ticker now has support for multiple tickers per page!</li>
				<li class="news-item">jQuery News Ticker now has support for right-to-left languages!</li>
				<li class="news-item">jQuery News Ticker now has support for loading content via an RSS feed!</li>
				<li class="news-item">jQuery News Ticker now has an optional fade effect between items!</li>
				<li class="news-item">New updates have been made to jQuery News Ticker! Check below for more details!</li>
				<li class="news-item">jQuery News Ticker is now compatible with jQuery 1.3.2! See below for further details and for latest download.</li>
				<li class="news-item">Further updates to jQuery News Ticker are coming soon!</li>
			</ul>
</div>
</body>
</html>
