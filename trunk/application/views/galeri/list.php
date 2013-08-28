<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Galeri Foto</title>
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
					<h1 class="titlebig">Galeri Foto</h1>
					<div class="boxbigcontent">
						<ul id="listgallery">
						<?php foreach($galeri as $row): ?>
							<li>
							<a href="<?=base_url()?>index.php/galeri/viewGaleri/<?=$row->id_galeri?>" class="popup">
								<img src="<?=base_url()?>uploads/galeri/thumbnail/<?=$row->img_thubnail?>" width="160" height="126" alt="Photo" /><h4><?=$row->nama_galeri?></h4>
							</a>
							</li>
						<?php endforeach; ?>
						</ul>
						<div class="clear"></div>
						<?=$pagination?>
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