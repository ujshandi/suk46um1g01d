
					<h1 class="titlebig">Arsip Berita</h1>

					<div class="boxbigcontent">
					<div align="right">
					<form method="post" action="<?=base_url()?>index.php/berita/search">
					<input type="text" name="search" class="textboxcontact" value="Cari Berita" onblur="if(this.value.length == 0) this.value='Cari Berita';" onclick="if(this.value == 'Cari Berita') this.value='';" style="width:200px;" />
					</form><br />
					</div>
					<?php foreach($data as $m): ?>
						<ul id="listnews">
							<li><h2><a href="<?=base_url()?>index.php/berita/detail/<?=$m->id_berita?>"><?=$m->judul_berita?></a></h2>
								<ul class="listinfo">
									<li class="posted">di posting oleh <strong><?=$this->converterModel->getNama($m->author)?></strong> pada <strong><?=$this->converterModel->setTanggal($m->tanggal)?></strong></li>
								</ul>
								<p style="font-size:12px"><a href="<?=base_url()?>index.php/berita/detail/<?=$m->id_berita?>"><img src="<?=base_url()?>uploads/img/medium/<?=$m->gambar?>" align="left" style="margin:5px 5px 5px 5px; width:260px; height:140px;" /></a><?=$m->deskripsi_singkat?></p>
								<a href="<?=base_url()?>index.php/berita/detail/<?=$m->id_berita?>" class="more_slider">Selengkapnya &raquo;</a>
								<div class="clear"></div>
							</li>
						</ul>
					<?php endforeach;?>
					<?=$pagination?>
					</div>
					<div class="boxbigcontentbottom"></div>
	