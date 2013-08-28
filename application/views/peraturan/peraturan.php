<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Peraturan</title>
	<?=$include?>
</head>
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
						<select name="tahun" onchange="location.href='<?=base_url()?>index.php/peraturan/index/<?=$kat?>/'+this.value;">
							<option value="">Tahun</option>
							<?php foreach($tahun as $thn): ?>
							<option value="<?=$thn->tahun?>"><?=$thn->tahun?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<?php foreach($peraturan as $row): ?>
						<h2 class="subtitle"><a href="<?=base_url()?>file_peraturan/<?=$row->link_file?>" target="_blank"><?=$row->nama_peraturan?></a></h2>
						<div>
						<p><?=$row->deskripsi?><br /><a href="<?=base_url()?>file_peraturan/<?=$row->link_file?>" target="_blank" class="linkadv">Download</a><br /><br />
						</p>
						</div>
					<?php endforeach; ?>
					<?php if(count($peraturan)==0){ echo "<p>belum ada data untuk tahun ini, silahkan pilih tahun lainya!!</p>"; } ?>
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