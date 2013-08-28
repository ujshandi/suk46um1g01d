<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Data dan Statistik</title>
	<?=$include?>
<body>
<div id="container">

	<?=$header?>
	<?=$sliderTop?>
		  
		<div id="content">
			<div id="maincontent">
				<div class="boxbig">
					<h1 class="titlebig">Data dan Statistik</h1>
					<div class="boxbigcontent">
					<div align="right">
					<form method="post" action="<?=base_url()?>statistik/search">
					<input type="text" name="search" class="textboxcontact" value="Cari Data" onblur="if(this.value.length == 0) this.value='Cari Data';" onclick="if(this.value == 'Cari Data') this.value='';" style="width:200px;" />
					</form><br />
					</div>
					<table class="data">
					<thead>
						<tr><th width="4%">No</th><th>Kategori</th></tr>
					</thead>
					<tbody>
					<?php $i=0; foreach($statistik as $row): ?>
						<tr>
							<td align="center"><?=$i=($i+1)+$offset?></td>
							<td><a href="<?=base_url()?>uploads/statistik/<?=$row->file?>" target="_blank">
							<?=$row->kategori?></a></td>
						</tr>
					<?php endforeach; ?>
					</tbody>
					</table>
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
