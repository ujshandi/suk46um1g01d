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

						<div class="subpost">
            
			            
            	   <img src="<?= base_url(); ?>images/avatar/<?= $row->foto ?>" class="catimage" width="62" height="62">            			
            	<div class="sub_article" style="width: 500px;">
                <h2 class="subtitle"><?= $row->nama_asli; ?></h2>
               
               
				
                <div style="color:#333;font-size:12px"><br />
                  <table width="500" border="0" cellspacing="3" cellpadding="0" >
                    <tr>
                      <td width="150" style="font-size:12px" >Username</td>
                      <td style="font-size:12px">: <?= $row->username; ?></td>
                    </tr>
                    <tr>
                      <td width="150" style="font-size:12px">Email</td>
                      <td style="font-size:12px">: <?= $row->email; ?></td>
                    </tr>
                    <tr>
                      <td width="150" style="font-size:12px">Status</td>
                      <td style="font-size:12px">: <?= $row->nama_level; ?></td>
                    </tr>
                    
                  </table>
                  <br />
                </div>
            </div></div>
                   <div class="clear"></div>

					<?php endforeach;?>	
                   
					<br /><div align="right" >
                    
                    
                     <form action="<?= base_url() ?>index.php/forum/member_update" method="post">
                     <input type="hidden" value="<?= $row->id_user ?>" name="id_user"/>
                    
                    
                    <!--button type="submit" class="buttons buttons-orange"><span class="pencil"></span>Update</button-->
					
                    <a href="<?= base_url() ?>index.php/forum/member" class="buttons buttons-orange"><span class="cancel"></span>
                     Kembali</a>
                    </form>
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