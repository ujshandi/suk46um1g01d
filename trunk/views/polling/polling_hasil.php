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
					<h1 class="titlebig">Hasil Polling</h1>
					<div class="boxbigcontent">
					<?php foreach($polling as $d): ?>
					<?php $tot=$d->hasil1+$d->hasil2+$d->hasil3+$d->hasil4; ?>
					<h4><?=$d->pertanyaan?></h4>
					<b>Hasil :</b>
					<table class="data">
					<thead>
						<tr><th width="4%"></th><th>Pilihan</th><th width="30%"><center>Hasil</center></th></tr>
					</thead>
					<tbody>
						<tr align="center">
							<td>1</td><td align="left"><?=$d->pilihan1?></td>
							<td><?=$this->converterModel->hitungPersen($d->hasil1,$tot,1)?></td>
						</tr>
						<tr align="center">
							<td>2</td><td align="left"><?=$d->pilihan2?></td>
							<td><?=$this->converterModel->hitungPersen($d->hasil2,$tot,1)?></td>
						</tr>
						<tr align="center">
							<td>3</td><td align="left"><?=$d->pilihan3?></td>
							<td><?=$this->converterModel->hitungPersen($d->hasil3,$tot,1)?></td>
						</tr>
						<tr align="center">
							<td>4</td><td align="left"><?=$d->pilihan4?></td>
							<td><?=$this->converterModel->hitungPersen($d->hasil4,$tot,1)?></td>
						</tr>
					</tbody>
					</table>
					<?php endforeach; ?>
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