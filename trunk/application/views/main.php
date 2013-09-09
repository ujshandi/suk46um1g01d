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
	
	<?=""//$sliderTop?>
	
	<ul id="js-news" class="js-hidden">
				<?php foreach($agenda as $b){ ?>
		<li class="news-item"><?=$b->tgl." : ".$b->kegiatan?></li>
		<?} ?>
	</ul>
	<!-- Start newslider-minimal -->
				<div class="sliderkit newslider-minimal">						
					<div class="sliderkit-legend">Agenda:</div>
					<div class="sliderkit-panels">
					<?php foreach($agenda as $b){ ?>
						<div class="sliderkit-panel">
							<a href="#" title="[link title]"><?=$b->tgl." : ".$b->kegiatan?></a>
						</div>
					
						<?} ?>
					</div>
				</div>				
				<!-- // end of newslider-minimal -->
	<!-- Start newslider-vertical -->
				<div class="sliderkit newslider-vertical">
					
					<div class="sliderkit-panels">
					  	<?php foreach($berita as $b){ ?>
						<div class="sliderkit-panel">
							<div class="sliderkit-news">
								<a href="#" title="[Titre de l'article]"><img src="<?=base_url()?>public/jquery.sliderkit.1.9.2/lib/images/photos/small/sample-03.jpg" alt="[alternative text]" /></a>
								<h3><a href="#"><?=$b->judul_berita?></a></h3>
								<p><?=$b->deskripsi_singkat?></p>
								<a class="sliderkit-news-readmore" href="#">Read more</a>
							</div>
						</div>
						<?}?>
					
					</div>
					<div class="sliderkit-nav">
						<div class="sliderkit-nav-clip">
							<ul>
							  	<?php foreach($berita as $b){ ?>
								<li><a href="#" title="[link title]"><?=$b->judul_berita?></a></li>
								<? }?>
							</ul>
						</div>
					</div>
				</div>
				<!-- // end of newslider-vertical -->
				
				
			  
		<div id="content">
			
			<div id="maincontent">
			
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
					
					<!-- pengumuman -->
					<div class="boxcontentsmall">
					<h1 class="titlesmall">Pengumuman</h1>
						<div class="sliderkit photoslider-mini transition-demo01">						
						<div class="sliderkit-btn sliderkit-go-btn sliderkit-go-prev"><a rel="nofollow" href="#" title="Previous"><span>Previous</span></a></div>
						<div class="sliderkit-btn sliderkit-go-btn sliderkit-go-next"><a rel="nofollow" href="#" title="Next"><span>Next</span></a></div>
						<div class="sliderkit-panels">
							<div class="sliderkit-panel">
								<img src="<?=base_url()?>public/jquery.sliderkit.1.9.2/lib/images/photos/sample-01.jpg" alt="[Alternative text]" />
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
					</div>
					<!-- end pengumuman -->
				</div>
				
		
				
				<?=$polling?>
				<?="";//tutup hula $pengumuman?>
								
			</div>
			
			</div>
			
			<div id="nav">
				<?=$mainmenu?>
				<?=$login?>
				<?=$linkterkait?>
				<?="";//$testimonial?>	
				<?=$footer?>
			</div>
			
</div>
</body>
</html>
