<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Galeri Foto View</title>
	<meta name="description" content="Website Description" />
	<meta name="keywords" content="Website Kwywords" />
	<link href="<?=base_url()?>favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>public/css/style.css" />
	<script src="<?=base_url()?>public/js/jquery.js" type="text/javascript"></script>
	<script src="<?=base_url()?>public/js/ui_core.js" type="text/javascript"></script>
	<script src="<?=base_url()?>public/js/ui_tabs.js" type="text/javascript"></script>
	
	<!-- Jquery Slider script -->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>slideshows/slide01/slide_style.css" />
	<script type="text/javascript" src="<?=base_url()?>slideshows/slide01/slider.js"></script>
	
	<script type="text/javascript">
	$(function() {
		$("#navi ul").tabs("#panes > div", {
		effect: 'fade', 
		fadeOutSpeed: 500, 
		rotate: true
		}).slideshow({ 
			 autoplay: true, 
			 interval: 2500 
		}); 
	 });  
	</script> 
	
	<!-- slider -->
	<script type="text/javascript" src="<?=base_url()?>slideshows/slide02/s3slider.js"></script>
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>slideshows/slide02/slider.css" />
	<script type="text/javascript">
		$(document).ready(function() {
			$('#slider1').s3Slider({
				timeOut: 8000 
			});
		});
		jQuery(window).bind("load", function() {
			jQuery("div#slider2").codaSlider()
			// jQuery("div#slider2").codaSlider()
			// etc, etc. Beware of cross-linking difficulties if using multiple sliders on one page.
		});
		function dd(id)
		{
			var stat = document.getElementById(id).style.display;
			if(stat=="none"){
				$('.sub').hide();
				$('#'+id).show();
			}else{
				$('.sub').hide();
			}
		}
	</script>
	<!-- slider -->
	<script src="<?=base_url()?>slideshows/slide02/jquery-easing.1.2.pack.js" type="text/javascript"></script>
	<script src="<?=base_url()?>slideshows/slide02/jquery-easing-compatibility.1.2.pack.js" type="text/javascript"></script>
	<script src="<?=base_url()?>slideshows/slide02/coda-slider.1.1.1.pack.js" type="text/javascript"></script>
	
	<script src="<?=base_url()?>public/js/lightbox.js" type="text/javascript"></script>
	<script type="text/javascript">
	$(function() {
		$('#tabsnav').tabs({ fx: { opacity: 'toggle' } });
		$('a.popup').lightBox({fixedNavigation:true});
	});
	</script>
	
</head>
<body>
<div id="container">

	<?=$header?>
	<?=$sliderTop?>
	
		<div id="content">
			
			<div id="maincontent">
				
				<div id="maincontent">
				<div class="boxbig">
					<h1 class="titlebig"><?=$namaGaleri?></h1>
					<div class="boxbigcontent">
						<ul id="listgallery">
						<?php foreach($galeri as $row): ?>
						<li>
							<a href="<?=base_url()?>uploads/galeri/<?=$row->img?>" class="popup" title="<?=$row->deskripsi?>">
							<img src="<?=base_url()?>uploads/galeri/thumbnail/<?=$row->img?>" alt="Photo" width="160" height="126" />
							<br /><?=$row->deskripsi?></a>
						</li>
						<?php endforeach; ?>
						</ul>
						<div class="clear"></div>
						<p>
							<a href="<?=base_url()?>galeri" class="more_slider" style="width:10%;">
							<b><u>Galeri</u></b></a><br />
						</p>
					</div>
					<div class="boxbigcontentbottom"></div>
				</div>
				
				<?=$pengumuman?>
				<?=$polling?>
				
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