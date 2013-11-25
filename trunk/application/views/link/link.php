<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Daftar Link Terkait</title>
	<?=$include?>
<body>
<div id="container">

	<?=$header?>
	<?=$sliderTop?>
		  
		<div id="content">
			<div id="maincontent">
				<div class="boxbig">
					<h1 class="titlebig">Daftar Link</h1>
					<div class="boxbigcontent">
					<div align="right">
					<form method="post" action="<?=base_url()?>index.php/linkterkait/search">
					<input type="text" name="search" class="textboxcontact" value="Cari Link" onblur="if(this.value.length == 0) this.value='Cari Link';" onclick="if(this.value == 'Cari Link') this.value='';" style="width:200px;" />
					</form><br />
					</div>
					<?php $i=0; foreach($link as $row): ?>
						<?php $i=$i+1; ?>
						<h2 class="subtitle"><a href="<?=$row->url?>" target="_blank"><?=$i+$offset?>. <?=$row->singkatan?></a></h2>
						<p><a href="<?=$row->url?>" target="_blank"><?=$row->deskripsi?></a></p>
						
					<?php endforeach;?>
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