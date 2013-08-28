<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Layanan <?=$kategori?> Detail</title>
	<?=$include?>
<body>
<div id="container">

	<?=$header?>
	<?=$sliderTop?>
		  
		<div id="content">
			<div id="maincontent">
				<div class="boxbig">
					<h1 class="titlebig">Layanan <?=$kategori?></h1>
					<div class="boxbigcontent">
					<?php foreach($data as $row): ?>
						<h2 class="subtitle"><?=$row->judul?></h2>
						<div>
						<p><?=$row->konten?></p>
						</div>
					<?php endforeach;?>	
						<p><a href="<?=base_url()?>index.php/layanan/index/<?=$row->kategori?>" class="more_slider" style="width:17%;">
							<b><u>Daftar Layanan</u></b></a><br /></p>
					</div>
					<div class="boxbigcontentbottom"></div>
				</div>
				
				<?=$pengumuman?>
				<?=$polling?>
				
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