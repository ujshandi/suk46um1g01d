<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Arsip Berita</title>
	<?=$include?>
<body>
<div id="container">

	<?=$header?>
	<?=$sliderTop?>
		  
		<div id="content">
			<div id="maincontent">
				<div class="boxbig">
					<h1 class="titlebig">Arsip Berita</h1>
					<div class="boxbigcontent">
					
					<!-- AddThis Button BEGIN -->
					<div class="addthis_toolbox addthis_default_style ">
					<a class="addthis_button_preferred_1"></a>
					<a class="addthis_button_preferred_2"></a>
					<a class="addthis_button_preferred_3"></a>
					<a class="addthis_button_preferred_4"></a>
					<a class="addthis_button_compact"></a>
					<a class="addthis_counter addthis_bubble_style"></a>
					</div>
					<script type="text/javascript">var addthis_config = {"data_track_clickback":true};</script>
					<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4ddf457554a5a461"></script>
					<!-- AddThis Button END -->
					
					<?php foreach($data as $m): ?>
						<ul id="listnews">
						<li><h2 align="left"><a><?=$m->judul_berita?></a></h2>
							<ul class="listinfo">
								<li class="posted">di posting oleh <strong><?=$this->converterModel->getNama($m->author)?></strong> pada <strong><?=$this->converterModel->setTanggal($m->tanggal)?></strong></li>
							</ul>
							<p style="font-size:12px"><img src="<?=base_url()?>uploads/img/medium/<?=$m->gambar?>" align="left" style="margin:5px 5px 5px 5px; width:260px; height:140px;" /><?=$m->isi?></p>
							<div class="clear"></div>
						</li>
						</ul>
					<?php endforeach;?>	
						<p><a href="<?=base_url()?>index.php/berita/arsip" class="more_slider" style="width:15%;">
							<b><u>Arsip Berita</u></b></a><br /></p>
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