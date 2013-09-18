<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title><?php echo $title_page; ?></title>
	<?=$include?>
<link type="text/css" href="<?=base_url()?>public/menu/menu.css" rel="stylesheet" />
	<script type="text/javascript">var  base_url = "<?php echo base_url(); ?>"</script>
	<script  type="text/javascript">
		$(document).ready(function() {
		});
	</script>
</head>
<body>
	<div id="container">
		<?=$header?>
		
		<div class="sliderkit photoslider-mini transition-demo01" style="margin:0 auto;">						
			<!--<div class="sliderkit-btn sliderkit-go-btn sliderkit-go-prev"><a rel="nofollow" href="#" title="Previous"><span>Previous</span></a></div>
			<div class="sliderkit-btn sliderkit-go-btn sliderkit-go-next"><a rel="nofollow" href="#" title="Next"><span>Next</span></a></div>-->
			<!-- Place caption textbox here if needed 
					<div class="sliderkit-panel-textbox">
						<div class="sliderkit-panel-text">
							<h4>Caption title 1</h4>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
						</div>
						<div class="sliderkit-panel-overlay"></div>
					</div>
					 End Place caption textbox here if needed -->
			<div class="sliderkit-panels">
				<div class="sliderkit-panel">
					<img style="width:990px;" src="<?=base_url()?>public/jquery.sliderkit.1.9.2/lib/images/photos/sample-01.jpg" alt="[Alternative text]" />
					
				</div>
				<div class="sliderkit-panel">
					<img src="<?=base_url()?>public/jquery.sliderkit.1.9.2/lib/images/photos/sample-02.jpg" alt="[Alternative text]" />
					
				</div>
				<div class="sliderkit-panel">
					<img src="<?=base_url()?>public/jquery.sliderkit.1.9.2/lib/images/photos/sample-03.jpg" alt="[Alternative text]" />
					
				</div>
				<div class="sliderkit-panel">
					<img src="<?=base_url()?>public/jquery.sliderkit.1.9.2/lib/images/photos/sample-04.jpg" alt="[Alternative text]" />
					
				</div>
				<div class="sliderkit-panel">
					<img src="<?=base_url()?>public/jquery.sliderkit.1.9.2/lib/images/photos/sample-05.jpg" alt="[Alternative text]" />
					
				</div>
			</div>
			<div class="sliderkit-timer-wrapper">
				<div class="sliderkit-timer"></div>
			</div>
		</div>
		<ul id="js-news" class="js-hidden">
		<?php foreach($agenda as $b){ ?>
			<li class="news-item"><?=$b->tgl." : ".$b->kegiatan?></li>
		<?} ?>
		</ul>
		<br />
		<div id="content">
			<table border="0" width="100%" colspan="0" cellpadding="0">
				<tr>
					<td>
						<div id="maincontent">
							<div class="boxbig">
								<div class="boxbigcontent">
									<?=$wrapper;?>
								</div>
								<!--div class="boxbigcontentbottom"></div-->
							</div>
						</div>
						<div id="nav">
						<!--?=$login?-->
						<?=$linkterkait?>
						<?=$download?>
						<?=$polling?>
						</div>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="footBg">
		<?=$footer?>
	</div>
</body>
</html>
