<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Layanan <?=$kategori?></title>
	<?=$include?>
<body>
<div id="container">

	<?=$header?>
	<?=$sliderTop?>
		  
		<div id="content">
			<div id="maincontent">
				<div class="boxbig">
					<h1 class="titlebig"><?=$kategori?></h1>
					<div class="boxbigcontent">
					<div align="right">
					<form method="post" action="<?=base_url()?>layanan/search">
					<input type="hidden" name="tipe" value="<?=$tipe?>" />
					<input type="text" name="search" class="textboxcontact" value="Cari <?=$kategori?>" onblur="if(this.value.length == 0) this.value='Cari <?=$kategori?>';" onclick="if(this.value == 'Cari <?=$kategori?>') this.value='';" style="width:200px;" />
					</form><br />
					</div>
					<table class="data">
					<thead>
						<tr><th width="4%"></th><th>Artikel</th><th width="20%"><center>Author</center></th></tr>
					</thead>
					<tbody>
					<?php 
						$i=0;
						foreach($data as $d): ?>
						<tr>
							<td align="center"><?=$i=($i+1)+$offset?></td>
							<td><a href="<?=base_url()?>layanan/detail/<?=$d->id_layanan?>/<?=$d->kategori?>"><?=$d->judul?></a></td>
							<td align="center"><?=$this->converterModel->getNama($d->author)?></td>
						</tr>
					<?php endforeach; ?>
					</tbody>
					</table>
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
