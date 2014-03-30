
					<h1 class="titlebig">Daftar Artikel</h1>
					<div class="boxbigcontent">
						<div align="right">
						<form method="post" action="<?=base_url()?>index.php/artikel/search">
						<!--<input type="text" name="search" class="textboxcontact" value="Cari File" onblur="if(this.value.length == 0) this.value='Cari File';" onclick="if(this.value == 'Cari File') this.value='';" style="width:200px;" /> -->
						</form><br />
						</div>
						<?php $i=0;
						  foreach($artikellist as $d): ?>
						<?php $i=$i+1; ?>
						<h2 class="subtitle"><a href="<?=base_url()?>uploads/file/<?php echo "$d->file"; ?>" target="_blank"><?=$offset+$i?>. <?=$d->judul?></a></h2>
						<h4 class="">&emsp; Oleh : <?=$d->penulis?></h4>
						<div>
						
						</div>
						<?php endforeach; ?>
						<?=$pagination?>
					</div>
					<div class="boxbigcontentbottom"></div>
		
