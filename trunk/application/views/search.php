
					<h1 class="titlebig">Pencarian</h1>
					<div class="boxbigcontent">
										
						<!-- berita -->
						<?php 
							$d4=count($berita);
							if($d4!=0){ 
						?>
							<h2 class="subtitle">Arsip Berita</h2>
							<div>
								<ol style="margin:5px 5px 5px 5px; font-size:12px;">
									<?php foreach($berita as $dat4): ?>
									<li style="margin:4px 0 4px 0;">
									<a href="<?=base_url()?>berita/detail/<?=$dat4->id_berita?>">
									<?=$dat4->deskripsi_singkat?> </a></li>
									<?php endforeach;?>
								</ol>
							</div>
						<?php } ?>
						
						<!-- download -->
						<?php 
							$d5=count($download);
							if($d5!=0){ 
						?>
							<h2 class="subtitle">Daftar Download</h2>
							<div>
								<ol style="margin:5px 5px 5px 5px; font-size:12px;">
									<?php foreach($download as $dat5): ?>
									<li style="margin:4px 0 4px 0;">
									<a href="<?=base_url()?>uploads/file/<?=$dat5->file?>">
									<?=$dat5->nama?><br /><?=$dat5->deskripsi?></a></li>
									<?php endforeach;?>
								</ol>
							</div>
						<?php } ?>
						
						
					</div>
					<div class="boxbigcontentbottom"></div>
			