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

					<h1 class="titlebig">Daftar Member</h1>

					<div class="boxbigcontent">
                    
                   	<ul id="listusr">				
					<?php foreach($fields as $row): ?>

						<li><a href="<?= base_url() ?>index.php/forum/member_detail/<?= $row->id_user ?>"><img width="100" height="100" src="<?= base_url() ?>images/avatar/<?= $row->foto_profil; ?>"/>
                        <br /><?= $row->nama_asli ?>
                        </a></li>

					<?php endforeach;?>	<div class="clear"></div>
                    </ul>
					<br /><div align="right">	
                    </div>                           
		</div>
                    
                    

					<div class="boxbigcontentbottom"></div>

				</div>

				

			</div>

			

			<div id="nav">

				<?=$login;?>

				<?=$memberonline?>

				<?=$statistik?>

				<!-- <?=$testimonial?> -->
                
          </div><div class="clear"></div>

				<?=$footer?>

			</div>

	</div>

</body>

</html>