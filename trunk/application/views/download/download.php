<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Download Center</title>
	<?=$include?>
</head>
<body>
<div id="container">

	<?=$header?>
	<?=$sliderTop?>
	
		<div id="content">
			<div id="maincontent">
				<div class="boxbig">
					<h1 class="titlebig">Download</h1>
					<div class="boxbigcontent">
						<div align="right">
						<form method="post" action="<?=base_url()?>index.php/download/search">
						<input type="text" name="search" class="textboxcontact" value="Cari File" onblur="if(this.value.length == 0) this.value='Cari File';" onclick="if(this.value == 'Cari File') this.value='';" style="width:200px;" />
						</form><br />
						</div>
						<?php foreach($download as $d): ?>
						<?php $i=$i+1; ?>
						<h2 class="subtitle"><a href="<?=base_url()?>uploads/file/<?php echo "$d->file"; ?>" target="_blank"><?=$offset+$i?>. <?=$d->nama?></a></h2>
						<div>
						<p><?=$d->deskripsi?>.<a href="<?=base_url()?>uploads/file/<?php echo "$d->file"; ?>" target="_blank" class="linkadv">Download</a></p><br /><br />
						</div>
						<?php endforeach; ?>
						<?=$pagination?>
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