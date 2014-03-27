
					<h1 class="titlebig">Daftar Download</h1>
					<div class="boxbigcontent">
						<div align="right">
						<form method="post" action="<?=base_url()?>index.php/download/search">
					<!--	<input type="text" name="search" class="textboxcontact" value="Cari File" onblur="if(this.value.length == 0) this.value='Cari File';" onclick="if(this.value == 'Cari File') this.value='';" style="width:200px;" /> -->
						</form><br />
						</div>
						<?php $i=0;
						foreach($downloadList as $d): ?>
						<?php $i=$i+1; ?>
						<h2 class="subtitle"><a href="<?=base_url()?>uploads/file/<?php echo "$d->file"; ?>" target="_blank"><?=$offset+$i?>. <?=$d->nama?></a></h2>
						<div>
						
						</div>
						<?php endforeach; ?>
						<?=$pagination?>
					</div>
					<div class="boxbigcontentbottom"></div>
