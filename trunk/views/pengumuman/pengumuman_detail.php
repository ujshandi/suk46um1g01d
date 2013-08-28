<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?=COMPANY_NAME?></title>
	<?=$include?>
<body>
<div id="container">

	<?=$header?>
	<?=$sliderTop?>
		  
		<div id="content">
			<div id="maincontent">
				<div class="boxbig">
					<h1 class="titlebig">Pengumuman</h1>
					<div class="boxbigcontent">
					<?php foreach($pengumuman as $row): ?>
						<h2 class="subtitle"><?=$row->judul?></h2>
						<small><p align="right"><?=$this->converterModel->setTanggal($row->tgl)?></p></small>
						<div style="margin-top:-10px">
						<p><?=$row->deskripsi?></p>
						</div>
					<?php endforeach;?>	
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