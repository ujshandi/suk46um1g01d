	<!-- Start newslider-vertical -->
				<div class="sliderkit newslider-vertical">
					<h1 class="titlesmall">Berita</h1>
					<div class="sliderkit-panels">
					  	<?php foreach($berita as $b){ ?>
						<div class="sliderkit-panel">
							<div class="sliderkit-news">
								<a href="#" title="[Titre de l'article]"><img src="<?=base_url()?>public/jquery.sliderkit.1.9.2/lib/images/photos/small/sample-03.jpg" alt="[alternative text]" /></a>
								<h3><a href="#"><?=$b->judul_berita?></a></h3>
								<p><?=$b->deskripsi_singkat?></p>
								<a class="sliderkit-news-readmore" href="#">Read more</a>
							</div>
						</div>
						<?}?>
					
					</div>
					<div class="sliderkit-nav">
						<div class="sliderkit-nav-clip">
							<ul>
							  	<?php foreach($berita as $b){ ?>
								<li><a href="#" title="[link title]"><?=$b->judul_berita?><br><?=$b->tanggal?></a>
								
								</li>
								<? }?>
							</ul>
						</div>
					</div>
				</div>
				<!-- // end of newslider-vertical -->
				
				<!-- pengumuman -->
					<div class="boxcontentsmall">
					<h1 class="titlesmall">Pengumuman</h1>
						<div class="sliderkit photoslider-mini transition-demo01">						
						<div class="sliderkit-btn sliderkit-go-btn sliderkit-go-prev"><a rel="nofollow" href="#" title="Previous"><span>Previous</span></a></div>
						<div class="sliderkit-btn sliderkit-go-btn sliderkit-go-next"><a rel="nofollow" href="#" title="Next"><span>Next</span></a></div>
						<div class="sliderkit-panels">
							<div class="sliderkit-panel">
								<img src="<?=base_url()?>public/jquery.sliderkit.1.9.2/lib/images/photos/sample-01.jpg" alt="[Alternative text]" />
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
					</div>
					<!-- end pengumuman -->
		
