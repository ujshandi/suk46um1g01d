<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Pedoman / Panduan</title>
	<?=$include?>
<body>
<div id="container">

	<?=$header?>
	<?=$sliderTop?>
		  
		<div id="content">
			<div id="maincontent">
				<div class="boxbig">
					<h1 class="titlebig">Pedoman / Panduan</h1>
					<div class="boxbigcontent">
					<div align="right">
					<form method="post" action="<?=base_url()?>panduan/search">
					<input type="text" name="search" class="textboxcontact" value="Cari Panduan" onblur="if(this.value.length == 0) this.value='Cari Panduan';" onclick="if(this.value == 'Cari Panduan') this.value='';" style="width:200px;" />
					</form><br />
					</div>
					<?php foreach($data as $row): ?>
						<h2 class="subtitle"><a href="<?=base_url()?>panduan/detail/<?=$row->id_panduan?>"><?=$row->judul?></a></h2>
						<div>
						<p><?=$row->deskripsi_singkat?> <a href="<?=base_url()?>program_kerja/detail/<?=$row->id_panduan?>" class="more_slider">Selengkapnya &#187;</a><br /><br />
						</p>
						</div>
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
