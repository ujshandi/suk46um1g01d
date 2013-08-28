<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title><?=COMPANY_NAME?></title>
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>style/styles.css" />
	<?=$include?>

<body>

<div id="container">



	<?=$header?>
<br />

		  

		<div id="content">

			<div id="maincontent">

				                
<div class="boxbig">

					<h1 class="titlebig"></h1>

					<div class="boxbigcontent">
                                       			
					<?php foreach($fields as $row): ?>

						<div class="subpost">
            
			            
            	   <img src="<?= base_url(); ?>images/avatar/<?= $row->foto ?>" class="catimage" width="62" height="62">            			
            	<div class="sub_article" style="width: 500px;">
                <h3><a href="<?= base_url() ?>index.php/forum/detail_post_byid/<?= $row->id_post ?>"><?= $row->judul_post; ?></a></h3>
               
                <div class="post-info2">Posted  by <a href="" title=""><?=$row->nama_asli?></a> <?= $row->tanggal_post; ?></a>, <a href="<?=base_url()?>index.php/forum/subkategori/<?=$row->id_subkategori?>" title="View all <?= $row->nama_subkategori; ?>" rel="category tag"><?= $row->nama_subkategori; ?></a> | <a href="<?= base_url() ?>index.php/forum/detail_post_byid/<?= $row->id_post ?>" title="Komentar <?= $row->nama_subkategori; ?>"><?=$this->forumpostreply_model->count_comment($row->id_post);?> comments</a></div>
				
                <div style="color:#333;font-size:12px">
                   <?= $row->isi_post; ?><br />
                </div>
            </div></div>
                   <div class="clear"></div>

					<?php endforeach;?>	
					<br /><div align="right">
					<?php $idKategori=$row->id_kategori; if($idKategori==""){ $idKategori="1"; } ?>	
                     <a href="<?=base_url()?>index.php/forum/subkategori/<?=$idKategori?>" class="buttons buttons-orange"><span class="cancel"></span>Kembali</a>
					  <?php 
					$level	= $this->session->userdata('id_level');
					if($level=="1" || $level=="2" || $level=="3"){ 
					?>
                     <a href="<?= base_url() ?>index.php/forum_registered/frmadd" class="buttons buttons-orange"><span class="add"></span>Tambah Posting</a>
					 <?php } ?>
					 </div>                           
		</div>
                    
                    

					<div class="boxbigcontentbottom"></div>

				</div>

				

			</div>

			

			<div id="nav">

				<?php
					$userid	= $this->session->userdata('userid');
					if($userid=="")
					{
						echo $login;
					}
					else
					{
						echo $mainmenu;
					}
				?>

				<?=$memberonline?>

				<?=$statistik?>

				<!-- <?=$testimonial?> -->
                
          </div><div class="clear"></div>

				<?=$footer?>

			</div>

	</div>

</body>

</html>