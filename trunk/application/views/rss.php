<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Daftar RSS</title>
	<?=$include?>
</head>
<body>
<div id="container">
	<?=$header?>
	<?=$sliderTop?>
		  
		<div id="content">
			
			<div id="maincontent">
				
				<div id="maincontent">
				<div class="boxbig">
					<h1 class="titlebig">Daftar RSS</h1>
					<div class="boxbigcontent">
					
						<ul class="menunav2">
							<li><a href="<?=base_url()?>index.php/rss/berita" target="_blank"><?=$img2?>RSS Berita</a></li>
							<li><a href="<?=base_url()?>index.php/rss/programkerja" target="_blank"><?=$img2?>RSS Program Kerja</a></li>
							<li><a href="<?=base_url()?>index.php/rss/panduan" target="_blank"><?=$img2?>RSS Pedoman / Panduan</a></li>
							<li><a href="<?=base_url()?>index.php/rss/belajar" target="_blank"><?=$img2?>RSS Substansi Pembelajaran</a></li>
							<li><a href="<?=base_url()?>index.php/rss/layanan" target="_blank"><?=$img2?>RSS Layanan</a></li>
							<li><a href="<?=base_url()?>index.php/rss/download" target="_blank"><?=$img2?>RSS Download</a></li>
						</ul>
					</div>
					<div class="boxbigcontentbottom"></div>
				</div>
				
				<?=$pengumuman?>
				<?=$polling?>
				
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