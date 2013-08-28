<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title><?=COMPANY_NAME?></title>
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>style/styles.css" />
	<?=$include?>
<script>	
	function simpan()

	{
		var data1	= document.getElementById('txtnama').value;
		var data2	= document.getElementById('txtusername').value;
		var data3	= document.getElementById('txtpassword').value;
		var data4	= document.getElementById('txtpassword2').value;
		
		if(data4 != data3)
		{
			alert('Kedua password tidak sama !!');
		}
		else if(data1!="" && data2!="" && data3 !="" && data3 != data4)
		{
			document.getElementById('frmcontact').submit();
		}
		else 
		{
			alert('Harap Isi Semua Field (*) !!');
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

					
					<h1 class="titlebig">Registrasi Member</h1>
				                  
					<div class="boxbigcontent">
					
					<form method="post" action="<?=base_url()?>index.php/forum/simpanregister"  id="frmcontact" enctype="multipart/form-data">
					<table width="100%" border="0">
					<input type="hidden" name="id_level" value="6" />
					<tr height="35">
						<td>Nama Lengkap</td>
						<td><input type="text" name="nama_asli" id="txtnama" class="textboxcontact" style="width:200px;" /> <span>*</span></td>
					</tr>
					<tr height="35">
						<td>Username</td>
						<td><input type="text" name="username" id="txtusername" class="textboxcontact" style="width:150px" /> <span>*</span></td>
					</tr>
					<tr height="35">
                        <td>Password</td>
						<td><input type="password" name="password" id="txtpassword" class="textboxcontact" style="width:150px" /> <span>*</span></td>
					</tr>
					<tr height="35">
                        <td>Ulangi Password</td>
						<td><input type="password" name="password2" id="txtpassword2" class="textboxcontact" style="width:150px"/> <span>*</span></td>
					</tr>
					<tr height="35">
                        <td>Email</td>
						<td><input type="text" name="email" id="email" class="textboxcontact" style="width:250px"/></td>
					</tr>
					<tr>
						<td colspan="2" align="right">
						<a href="javascript:simpan();" class="buttons buttons-orange"><span class="add"></span>Register</a></td>
					</tr>
					</table>	  
				</form>		                        
		</div>
                    
                    

					<div class="boxbigcontentbottom"></div>

				</div>
			</div>

			

			<div id="nav">

				<?=$login?>

				<?=$memberonline?>

				<?=$statistik?>

				<!-- <?=$testimonial?> -->
                
          </div><div class="clear"></div>

				<?=$footer?>

			</div>

	</div>

</body>

</html>