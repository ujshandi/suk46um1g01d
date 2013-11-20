
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
					
					
						<ul id="listnews">
						<li><h2 align="left"><a><?=$data->judul_berita?></a></h2>
							<ul class="listinfo">
								<li class="posted">di posting oleh <strong><?=$this->converterModel->getNama($data->author)?></strong> pada <strong><?=$this->converterModel->setTanggal($data->tanggal)?></strong></li>
							</ul>
							<p style="font-size:12px"><img src="<?=base_url()?>uploads/img/medium/<?=$data->gambar?>" align="left" style="margin:5px 5px 5px 5px; width:260px; height:140px;" /><?=$data->isi?></p>
							<div class="clear"></div>
						</li>
						</ul>
					
						<p><a href="<?=base_url()?>index.php/berita/arsip" class="more_slider" style="width:15%;">
							<b><u>Arsip Berita</u></b></a><br /></p>
					</div>
					<div class="boxbigcontentbottom"></div>
				