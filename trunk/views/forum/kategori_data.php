<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title><?=COMPANY_NAME?></title>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>public/css/styles.css" />
   	<?=$include?>

<body>

<div id="container">



	<?=$header?>
<br />

		  

		<div id="content">

			<div id="maincontent">

				                
<div class="boxbig">

					
					<h1 class="titlebig">Kategori Forum &nbsp;(<?= $jumlah ?>)</h1>

					<div class="boxbigcontent">
					
					<?php foreach($fields as $row): ?>

						<div class="blog_entry">
            	
                <!-- inside -->
            	<div class="inside">
                
        		<!-- Thumbnail -->
            	<div class="thumbnail">
                	<img src="<?= base_url() ?>public/images/comment.png" width="100" height="100" alt="" />
                </div>
        		<!-- /Thumbnail -->
                
        		<!-- Resume -->
            	<div class="resume">
                	<h3 class="cufon"><a href="<?= base_url() ?>forum/subkategori/<?= $row->id_kategori; ?>"><?=$row->nama_kategori;?></a></h3>
                    <p class="bigline"><?=$row->deskripsi?></p>
                </div>
        		<!-- /Resume -->
                
                <br class="clear" />
             	</div>   
                <!-- /inside -->
                
        		<!-- info -->
            	<div class="infos">
                	<p class="date cufon"><?= $row->nama_asli; ?></p>
                	<p class="comments" style="color:#FFFFFF"><a href="#">1 comment</a></p>
                	<p class="readmore cufon"><a href="<?= base_url() ?>forum/subkategori/<?= $row->id_kategori; ?>" title="<?= $row->tanggal; ?>">Selengkapnya..</a></p>
              </div>
        		<!-- /info -->
            </div>
            <!-- /Blog entry -->

					<?php endforeach;?>	
					<div>
                    <?=$pagination?></div>
                                                
		
                    <?php 
					$level	= $this->session->userdata('id_level');
					if($level=="1" || $level=="2" || $level=="3"){ 
					?>
					<br /><div align="right">	
                     <a href="<?= base_url() ?>forum_registered/kategori_add" class="buttons buttons-orange"><span class="add"></span>Tambah Kategori</a></div>
					 <?php } ?>
                    
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

</body>

</html>
