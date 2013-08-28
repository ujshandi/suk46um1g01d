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

					<h1 class="titlebig">Profil Member</h1>

					<div class="boxbigcontent">
                    		
					<?php foreach($fields as $row): ?>

					<form method="post" action="<?= base_url() ?>index.php/forum/member_simpanedit"  id="frmcontact">
                    
                    <label style="margin-left:-15px;">Nama Asli</label><br />

					<input type="text" name="txtnama" id="txtnama" class="required" size="80" value="<?= $row->nama_asli; ?>"/> <span>*</span><br />
					                                                    
                    <label style="margin-left:-15px;">Username</label><br />
					
                    <input type="text" name="txtusername" id="txtusername" class="required" size="80" value="<?= $row->username; ?>"/> <span>*</span><br />
                    
                    <label style="margin-left:-15px;">Password</label><br />
					
                    <input type="password" name="txtpassword" id="txtpassword" class="required" size="80" value="<?= $row->password; ?>"/> <span>*</span><br />
                    
                    <label style="margin-left:-15px;">Email</label><br />
					
                    <input type="text" name="txtemail" id="txtemail" class="required" size="80" value="<?= $row->email; ?>"/> <span>*</span><br />
                    
					<label style="margin-left:-15px;">Status</label><br />
                    <?= $row->nama_level; ?><br /><br /><br />
                    
					<div align="right">

                        <a href="<?= base_url() ?>index.php/forum/member" class="buttons buttons-orange" type="reset"><span class="cancel"></span>Batal</a>
						<button class="buttons buttons-orange" type="submit"><span class="disk"></span>Simpan</button>

					</div>
						
					

					</form>

					<?php endforeach;?>	
                                           
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