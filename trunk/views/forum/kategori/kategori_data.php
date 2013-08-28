<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title><?=COMPANY_NAME?></title>
	        
	<?=$include?>
    <script src="<?=base_url()?>public/js/jquery.js" type="text/javascript"></script>

	<script src="<?=base_url()?>public/js/ui_core.js" type="text/javascript"></script>

	<script src="<?=base_url()?>public/js/ui_tabs.js" type="text/javascript"></script>

	<script src="<?=base_url()?>public/js/ui.dialog.js" type="text/javascript"></script>

	<script src="<?=base_url()?>public/js/lightbox.js" type="text/javascript"></script>

	<script type="text/javascript">
	
	function hapus(id)

	{

		var confir = confirm('Anda yakin akan menghapusnya?');

		

		if(confir==true)

		{

			location.href='<?=base_url()?>forum_registered/kathapus/'+id;

		}

	}
	
	</script>

<body>

<div id="container">



	<?=$header?>
<br />

		  

		<div id="content">

			<div id="maincontent">

				                
				<div class="boxbig">

					<h1 class="titlebig">Kategori Forum &nbsp;(<?= $jumlah ?>)</h1>

					<div class="boxbigcontent">
					<div align="right">
                     <?php 
					$level	= $this->session->userdata('id_level');
					if($level=="1" || $level=="2" || $level=="3"){ 
					?>
					<p><a href="<?=base_url()?>forum_registered/kategori_add" class="buttons buttons-orange"><span class="add"></span>Tambah</a>
                   	<?php } ?>
                    </p></div>
					
					<table class="data">

					<thead>

						<tr>
                        	<th width="10%">No.</th>
                            <th width="75%">Kategori</th>
                            <th></th>
                        </tr>

					</thead>

					<tbody>
						
                        
                        
						<?php $i=1+$offset; foreach($fields as $row): ?>

						<tr>

							<td width="4%" align="center"><?=$i++?></td>

							<td><a href="<?= base_url() ?>forum_registered/katdetail/<?= $row->id_kategori; ?>"><?=$row->nama_kategori?></a></td>

							<td align="center" width="12%">
                            <?php if($level=="1" || $level=="2" || $level=="3"){ ?>
								<?php if($level <= $row->id_level){ ?> 
                            	<a href="<?=base_url()?>forum_registered/katupdate/<?=$row->id_kategori?>" title="Edit"><img src="<?=base_url()?>public/images/icon/edit.png" /></a>

								<!--<a href="javascript:info('<?=$i-1?>');" title="Preview"><img src="<?=base_url()?>images/icon/info.png" /></a>-->

								<a href="javascript:hapus('<?=$row->id_kategori?>');" title="Hapus"><img src="<?=base_url()?>public/images/icon/delete.png" /></a>
							<?php } } ?>
							</td>

						</tr>

						<?php endforeach;?>

					</tbody>

					</table>

					<?=$pagination?>

					</div>
                    
					<div class="boxbigcontentbottom"></div>

				</div>

				

			</div>

			

			<div id="nav">

				<?=$mainmenu;?>

				<?=$memberonline?>

				<?=$statistik?>

				<!-- <?=$testimonial?> -->
                
          </div><div class="clear"></div>

				<?=$footer?>

			</div>

	</div>
    
    <?php $i=0; foreach($pengumuman as $row): ?>

	<?=$i=$i+1?>

	<div id="dialog<?=$i?>" title="<?=$row->judul?>" style="display:none"> 

		<?=$row->deskripsi?>

	</div>

	<?php endforeach; ?>
    

</body>

</html>