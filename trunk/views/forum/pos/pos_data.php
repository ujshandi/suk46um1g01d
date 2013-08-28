<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title><?=COMPANY_NAME?></title>
	<script src="<?=base_url()?>public/js/ajax.js" type="text/javascript"></script>
	<script>
		var ajax = new Array();
		
		function getSub(id)
		{
			var subD	= document.getElementById('id_subkategori');
			subD.options.length = 0;
			
			var index 					= ajax.length;
			ajax[index]					= new sack();
			ajax[index].requestFile 	= '<?=base_url()?>index.php/ajax/getSubKategori/'+id;
			ajax[index].onCompletion 	= function(){ createSub(index) };
			ajax[index].runAJAX();
		}
		function createSub(index)
		{
			var subData 	= document.getElementById('id_subkategori');
			eval(ajax[index].response);
		}
	</script>
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

			location.href='<?=base_url()?>forum_registered/frmhapus/'+id;

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

					<h1 class="titlebig">Posting Forum</h1>

					<div class="boxbigcontent">
					<div align="right">
                    <select style="height:26px; width:250px;" id="id_kategori" name="id_kategori" onchange="getSub(this.value);">

									<option value="" selected="selected"> -- All Kategori --&nbsp;&nbsp;</option>

									<?php foreach($kategori as $s): ?>

									<option value="<?=$s->id_kategori?>"><?=$s->nama_kategori?></option>

									<?php endforeach; ?>

					</select>
                    <select style="height:26px; width:250px;" id="id_subkategori" name="id_subkategori" onchange="location.href='<?=base_url()?>forum_registered/pos_list_by_kat/'+document.getElementById('id_kategori').value+'/'+this.value;">

									<option value="" selected="selected"> -- All Sub Kategori --&nbsp;&nbsp;</option>

									<?php foreach($subkategori as $a): ?>

									<option value="<?=$a->id_subkategori?>"><?=$a->nama_subkategori?></option>

									<?php endforeach; ?>

					</select>
               			</div>
					<?php
						if(count($fields)=="0"){ echo "<p>Tidak ada data yang di post</p>"; }
					?>
                    <?php foreach($fields as $row): ?>
                   <div class="subpost">
            
			            
            	   <img src="<?= base_url(); ?>public/images/avatar/<?= $row->foto ?>" class="catimage" width="62" height="62">            			
            	<div class="sub_article" style="width: 500px;">
                <h3><a href="<?= base_url() ?>forum/detail_post_byid/<?= $row->id_post ?>"><?=$row->judul_post?></a></h3>
               
                <div class="post-info2">Posted  by <a href="#" title=""><?=$row->nama_asli?></a> <?= $row->tanggal_post; ?></a>, <a href="" title="View all <?= $row->nama_kategori; ?>" rel="category tag"><?= $row->nama_kategori; ?></a> / <a href="" title="View all <?= $row->nama_subkategori; ?>" rel="category tag"><?= $row->nama_subkategori; ?></a> | <a href="<?= base_url() ?>forum/detail_post_byid/<?= $row->id_post ?>" title="Komentar <?= $row->nama_subkategori; ?>"><?=$this->forumpostreply_model->count_comment($row->id_post);?> comments</a></div>
				
                <div style="color:#333;font-size:12px">
                   <?= $row->isi_post; ?><br />
                </div>
				<?php 
					$level	= $this->session->userdata('id_level');
					if($level!="6"){ 
				?>
				 <div align="right" style="margin-bottom:0px"><a href="<?= base_url() ?>forum_registered/posupdate/<?=$row->id_post?>" class="buttons buttons-orange"><span class="pencil"></span>Update</a> <a href="<?= base_url() ?>forum_registered/poshapus/<?=$row->id_post?>" class="buttons buttons-orange"><span class="bin"></span>Hapus</a></div>
				 <?php } ?>
					 
            </div></div>
                   <div class="clear"></div>
                    <?php endforeach; ?>

					<div align="right" style="margin-top:40px">
                     <a href="<?= base_url() ?>forum_registered/postadd" class="buttons buttons-orange"><span class="add"></span>Tambah Posting</a>
					 </div>

					</div>
                    <?=$pagination?>
					<div class="boxbigcontentbottom"></div> 

				</div>

				

			</div>

			

			<div id="nav">

				<?=$mainmenu;?>

				<?=$memberonline?>

				<?=$statistik?>

                
          </div><div class="clear"></div>

				<?=$footer?>

			</div>

	</div>			

</body>

</html>