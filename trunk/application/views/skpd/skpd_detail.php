


<h1 class="titlebig"><?=$data->nama?></h1>

<div class="boxbigcontent">
		<br/><br/>
		<!-- Start tabs-standard -->
					<div class="sliderkit tabs-noheight" style="width:648px">
						<div class="sliderkit-nav">
							<div class="sliderkit-nav-clip">
								<ul>
									<li><a href="#" title="[link title]">Profil</a></li>
									<li><a href="#" title="[link title]">Produk</a></li>
									<li><a href="#" title="[link title]">Berita/Kegiatan</a></li>
									
								</ul>
							</div>
						</div>
						<div class="sliderkit-panels" style="width:620px">
							<div class="sliderkit-panel">
								<div class="sliderkit-news">									
									<?=$data->profil;?>
									
								</div>
							</div>
							<div class="sliderkit-panel">
								<div class="sliderkit-news">
							
										<?=$data->produk;?>
								</div>
							</div>
							<div class="sliderkit-panel">
								<div class="sliderkit-news">
									<?=$data->berita;?>
								</div>
							</div>
							
						</div>
					</div>
					<!-- // end of tabs-standard -->

</div>
<script  type="text/javascript">
	$(window).load(function(){ 
		$(".tabs-noheight").sliderkit({
					auto:false,
					tabs:true,
					mousewheel:false,
					freeheight:true,
					circular:true,
					panelfx:"none"
				});
	});
	
</script>
<div class="boxbigcontentbottom"></div>
				
