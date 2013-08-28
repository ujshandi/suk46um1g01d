<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Program Kerja</title>
	<?=$include?>
<body>
<div id="container">

	<?=$header?>
	<?=$sliderTop?>
		  
		<div id="content">
			<div id="maincontent">
				<div class="boxbig">
					<h1 class="titlebig">Pencarian</h1>
					<div class="boxbigcontent">
					
						<!-- program kerja -->
						<?php 
							$d1=count($programkerja);
							if($d1!=0){ 
						?>
							<h2 class="subtitle">Program Kerja</h2>
							<div>
								<ol style="margin:5px 5px 5px 5px; font-size:12px;">
									<?php foreach($programkerja as $dat1): ?>
									<li style="margin:4px 0 4px 0;">
									<a href="<?=base_url()?>index.php/program_kerja/detail/<?=$dat1->id_program?>">
									<?=$dat1->deskripsi_singkat?> </a></li>
									<?php endforeach;?>
								</ol>
							</div>
						<?php } ?>
					
						<!-- panduan -->
						<?php 
							$d2=count($panduan);
							if($d2!=0){ 
						?>
							<h2 class="subtitle">Pedoman / Panduan</h2>
							<div>
								<ol style="margin:5px 5px 5px 5px; font-size:12px;">
									<?php foreach($panduan as $dat2): ?>
									<li style="margin:4px 0 4px 0;">
									<a href="<?=base_url()?>index.php/panduan/detail/<?=$dat2->id_panduan?>">
									<?=$dat2->deskripsi_singkat?> </a></li>
									<?php endforeach;?>
								</ol>
							</div>
						<?php } ?>
						
						<!-- panduan -->
						<?php 
							$d3=count($belajar);
							if($d3!=0){ 
						?>
							<h2 class="subtitle">Substansi Pembelajaran</h2>
							<div>
								<ol style="margin:5px 5px 5px 5px; font-size:12px;">
									<?php foreach($belajar as $dat3): ?>
									<li style="margin:4px 0 4px 0;">
									<a href="<?=base_url()?>index.php/belajar/detail/<?=$dat3->id_belajar?>">
									<?=$dat3->deskripsi_singkat?> </a></li>
									<?php endforeach;?>
								</ol>
							</div>
						<?php } ?>
						
						<!-- berita -->
						<?php 
							$d4=count($berita);
							if($d4!=0){ 
						?>
							<h2 class="subtitle">Arsip Berita</h2>
							<div>
								<ol style="margin:5px 5px 5px 5px; font-size:12px;">
									<?php foreach($berita as $dat4): ?>
									<li style="margin:4px 0 4px 0;">
									<a href="<?=base_url()?>index.php/berita/detail/<?=$dat4->id_berita?>">
									<?=$dat4->deskripsi_singkat?> </a></li>
									<?php endforeach;?>
								</ol>
							</div>
						<?php } ?>
						
						<!-- download -->
						<?php 
							$d5=count($download);
							if($d5!=0){ 
						?>
							<h2 class="subtitle">Daftar Download</h2>
							<div>
								<ol style="margin:5px 5px 5px 5px; font-size:12px;">
									<?php foreach($download as $dat5): ?>
									<li style="margin:4px 0 4px 0;">
									<a href="<?=base_url()?>uploads/file/<?=$dat5->file?>">
									<?=$dat5->nama?><br /><?=$dat5->deskripsi?></a></li>
									<?php endforeach;?>
								</ol>
							</div>
						<?php } ?>
						
						<!-- statistik -->
						<?php 
							$d6=count($statistik);
							if($d6!=0){ 
						?>
							<h2 class="subtitle">Data dan Statistik</h2>
							<div>
								<ol style="margin:5px 5px 5px 5px; font-size:12px;">
									<?php foreach($statistik as $dat6): ?>
									<li style="margin:4px 0 4px 0;">
									<a href="<?=base_url()?>uploads/statistik/<?=$dat6->file?>">
									<?=$dat6->kategori?></a></li>
									<?php endforeach;?>
								</ol>
							</div>
						<?php } ?>
						
					</div>
					<div class="boxbigcontentbottom"></div>
				</div>
				
			</div>
			
			<div id="nav">
				<?=$mainmenu?>
				<?=$login?>
				<?=$linkterkait?>
				<?=$testimonial?>
				<?=$footer?>
			</div>
	</div>
</body>
</html>