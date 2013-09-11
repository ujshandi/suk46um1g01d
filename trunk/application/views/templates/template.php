<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title><?php echo $title_page; ?></title>
	<?=$include?>
	<script type="text/javascript">var  base_url = "<?php echo base_url(); ?>"</script>
	<script  type="text/javascript">
		$(document).ready(function() {
		});
	</script>
</head>
<body>
	<div id="container">
		<?=$header?>
		<?=""//$sliderTop?>
		<!-- Start newslider-minimal 
			<div class="sliderkit newslider-minimal">						
				<div class="sliderkit-legend">Agenda:</div>
				<div class="sliderkit-panels">
				<php foreach($agenda as $b){ ?>
					<div class="sliderkit-panel">
						<a href="#" title="[link title]"><=$b->tgl." : ".$b->kegiatan?></a>
					</div>
					<} ?>
				</div>
			</div>		
		< end of newslider-minimal -->
		<div id="content">
			<div id="maincontent">
				<div class="boxbig">
					<div class="boxbigcontent">
						<?=$wrapper;?>
					</div>
					<div class="boxbigcontentbottom"></div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
