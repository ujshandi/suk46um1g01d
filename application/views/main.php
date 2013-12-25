
<!-- slider -->
	<!--div class="boxcontentsmall">
	<!--h1 class="titlesmall">Pengumuman</h1-->
		
	<!--/div>
	<br />
<!-- end slider -->
			
<!-- Start newslider-vertical -->
	<div class="sliderkit newslider-vertical">
		<h1 class="titlebig">Berita</h1>
		<div class="sliderkit-panels">
			<?php foreach($berita as $b){ ?>
			<div class="sliderkit-panel">
				<div class="sliderkit-news">
				 <!--<img src="<?=base_url()?>public/jquery.sliderkit.1.9.2/lib/images/photos/small/sample-03.jpg" alt="[alternative text]" /> -->
					<a href="#" title="<?=$b->judul_berita?>"></a>
					<h3><a href="#"><?=$b->judul_berita?></a></h3>
					<?=$b->tanggal?>
					<p style="width:100%;text-align:justify;"><?=$b->deskripsi_singkat?></p>
					<a class="sliderkit-news-readmore" href="<?=base_url()?>berita/detail/<?=$b->id_berita?>">Read more</a>
				</div>
			</div>
			<?}?> 
		</div>
		<div class="sliderkit-nav">
			<div class="sliderkit-nav-clip">
				<ul>
					<?php foreach($berita as $b){ ?>
					<li style="height:70px;">
						<a href="#" title="[link title]"><?=$b->judul_berita?></a>
					</li>
					<? }?>
				</ul>
			</div>
		</div>
	</div>
<!-- // end of newslider-vertical -->
	<br />
<!-- Start beritaFoto -->
	<div style="height:200px;">
		<h1 class="titlebig">Berita Foto 
			<!--div style="float:right;">
				<a href="#" style="color:#fff;">Prev</a>
				<a href="#" style="color:#fff;">Next</a>
			</div-->
		</h1>
		<!-- Start photoslider-bullets -->
		<div class="sliderkit photoslider-bullets" style="/* border:1px solid #ff0000; */width:100%;height:100%;">
			<div class="sliderkit-nav">
				<div class="sliderkit-nav-clip">					
					<ul>
						<?php foreach($beritafoto as $b){ ?>
						<li><a href="#" title="<?=$b->judul_berita?>"></a></li>						
						<?}?>
					</ul>
				</div>
			</div>
			<div class="sliderkit-panels">
					<?php foreach($beritafoto as $b){ ?>
				<div class="sliderkit-panel">
					<img src="<?=$b->gambar?>" alt="[Alternative text]" />
				</div>
				<?}?>
			</div>
		</div>		
	</div>
<!-- // end of beritaFoto -->
	<br />
	<br />
	<br />
<!-- pengumuman -->
	<div class="boxcontentsmall2">
	<br />
	<h1 class="titlebig">Pengumuman</h1>
		<div class="sliderkit photoslider-mini2">
			<div class="sliderkit-panels">
				<!--<div class="sliderkit-btn sliderkit-go-btn sliderkit-go-prev"><a href="#" title="Previous"><span>Previous</span></a></div>
				<div class="sliderkit-btn sliderkit-go-btn sliderkit-go-next"><a href="#" title="Next"><span>Next</span></a></div>
				-->
				<div class="sliderkit-panel">
					<img src="<?=base_url()?>public/jquery.sliderkit.1.9.2/lib/images/photos/!sample-01.jpg" alt="[Alternative text]" />
				</div>
				<div class="sliderkit-panel">
					<img src="<?=base_url()?>public/jquery.sliderkit.1.9.2/lib/images/photos/!sample-02.jpg" alt="[Alternative text]" />
				</div>
				<div class="sliderkit-panel">
					<img src="<?=base_url()?>public/jquery.sliderkit.1.9.2/lib/images/photos/!sample-03.jpg" alt="[Alternative text]" />
				</div>
				<div class="sliderkit-panel">
					<img src="<?=base_url()?>public/jquery.sliderkit.1.9.2/lib/images/photos/!sample-04.jpg" alt="[Alternative text]" />
				</div>
				<div class="sliderkit-panel">
					<img src="<?=base_url()?>public/jquery.sliderkit.1.9.2/lib/images/photos/!sample-05.jpg" alt="[Alternative text]" />
				</div>
			</div>
			
		</div>
		<!--ul id="js-news" class="js-hidden">
		</?php foreach($agenda as $b){ ?>
			<li class="news-item"></?=$b->tgl." : ".$b->kegiatan?></li>
		</?} ?>
		</ul-->
	</div>
	<br />
<!-- end pengumuman -->

<!-- chanel -->
	<h1 class="titlebig">Sukabumi's Channel</h1>
		<div class="sliderkit-panels">
			<!--<iframe width="647" height="375" frameborder="0" src="http://www.youtube.com/embed/HTJXLFdI0rc"> </iframe> -->
			<!--<iframe width="647" height="375" frameborder="0" src="http://www.youtube.com/embed?listType=playlist&list=PemerintahKotaSukabumi"> </iframe> -->
			<!-- http://www.youtube.com/embed?listType=search&list=sukabumi--> 
			
			<!-- AgnesMonicaENT-->
			<iframe id="fr" src="http://www.youtube.com/subscribe_widget?p=PemerintahKotaSukabumi" style="overflow: hidden; height: 375px; width: 647px; border: 0;" scrolling="no" frameBorder="0"></iframe>
		</div>
	<br />
<!-- endChanel -->


<script type="text/javascript">

$(window).load(function(){ 
				$("#js-news").ticker({titleText:"Agenda",controls:false});
				//$(window).load() must be used instead of $(document).ready() because of Webkit compatibility		
				// News slider > Vertical
				$(".newslider-vertical").sliderkit({
					shownavitems:5,
					verticalnav:true,
					navitemshover:true,
					circular:true
				});
				
				// News slider > Horizontal
				$(".newslider-horizontal").sliderkit({
					auto:false,
					shownavitems:5,
					panelfx:"sliding",
					panelfxspeed:1000,
					panelfxeasing:"easeInOutExpo", //"easeOutExpo", "easeOutCirc", etc.
					mousewheel:true,
					keyboard:true,
					fastchange:false
				});
				
				// News slider > Minimal
				$(".newslider-minimal").sliderkit({
					auto:true,
					circular:true,
					shownavitems:1,
					panelfx:"sliding",
					panelfxspeed:400,
					panelfxeasing:"easeOutCirc",
					mousewheel:false,
					verticalnav:true,
					verticalslide:true
				});
				
					//pengumuman
				$(".photoslider-mini2").sliderkit({
					auto:true,
					autospeed:3000,
					panelbtnshover:true,
					circular:true,
					fastchange:false
				});
				
				//slideshow
				$(".transition-demo01").sliderkit({
					auto:1,
					autostill:true,
					timer:true,
					circular:true,
					panelfx:"fancy",
					/* delaycaptions:{
						delay:00,
						position:"bottom",
						transition:"fading",//sliding
						duration:150
					//	easing:"easeOutExpo"
					}, */
					imagefx:{
						fxType: "random", // curtain, zipper, wave, fountain, random
						fxDelay: 150, // delay between strips in ms
						fxDuration: 800 // delay between strips in ms
					},
					debug:1
					
				});
				
				//link terkait
				
				 
				 $(".photoslider-bullets").sliderkit({
					auto:false,
					circular:true,
					mousewheel:true,
					shownavitems:5,
					panelfx:"sliding",
					panelfxspeed:1000,
					panelfxeasing:"easeOutExpo" // "easeOutExpo", "easeInOutExpo", etc.
				});
	
			});	
// Photo slider > Bullets nav
				
</script>
