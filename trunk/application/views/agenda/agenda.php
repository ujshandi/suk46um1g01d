<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Agenda Kegiatan</title>
	<?=$include?>
</head>
<body>
<div id="container">

	<?=$header?>
	<?=$sliderTop?>
	
		<div id="content">
			<div id="maincontent">
				<div class="boxbig">
					<h1 class="titlebig">Daftar Agenda Kegiatan</h1>
					<div class="boxbigcontent">
					
						<?php $i=0;
							foreach($agenda as $d): ?>
						<?php $i=$i+1; ?>
						<h2 class="subtitle"><?=$d->tgl?> <small>( <?=$d->author?> )</small></h2>
						<div>
						<p><?=$d->kegiatan?></p><br />
						</div>
						<?php endforeach; ?>
						<?=$pagination?>
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
