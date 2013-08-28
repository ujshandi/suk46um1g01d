<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title><?=COMPANY_NAME?></title>
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>public/css/styles.css" />
    <script src="<?=base_url()?>public/js/jquery.js" type="text/javascript"></script>
        
   	<script src="<?=base_url()?>public/js/ui_core.js" type="text/javascript"></script>

	<script src="<?=base_url()?>public/js/ui_tabs.js" type="text/javascript"></script>

	<script src="<?=base_url()?>public/js/lightbox.js" type="text/javascript"></script>
	
	<script type="text/javascript" src="<?=base_url()?>public/js/tiny_mce/tiny_mce.js"></script>

	<script type="text/javascript">

	tinyMCE.init({

		// General options

		mode : "textareas",

		theme : "advanced",

		skin : "o2k7",

		plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups,autosave",

		// Theme options

		theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,formatselect,fontselect,fontsizeselect,|,justifyleft,justifycenter,justifyright,justifyfull,|,bullist,numlist,|,link,unlink,|,preview,fullscreen,",

		theme_advanced_buttons2 : "undo,redo,|,image,media,charmap,|,hr,sub,sup,|,forecolor,backcolor,|,ltr,rtl,|,code,|,tablecontrols,",

		theme_advanced_buttons3 : "",

		theme_advanced_toolbar_location : "top",

		theme_advanced_toolbar_align : "left",

		theme_advanced_statusbar_location : "bottom",

		theme_advanced_resizing : false,



		// Example word content CSS (should be your site CSS) this one removes paragraph margins

		content_css : "<?=base_url()?>public/media/css/tiny_mce/css/word.css",



		// Drop lists for link/image/media/template dialogs

		template_external_list_url : "<?=base_url()?>public/media/lists/template_list.js",

		external_link_list_url : "<?=base_url()?>public/media/lists/link_list.js",

		external_image_list_url : "<?=base_url()?>public/media/lists/image_list.js",

		media_external_list_url : "<?=base_url()?>public/media/lists/media_list.js",



		// Replace values for the template plugin

		template_replace_values : {

			username : "Some User",

			staffid : "991234"

		}

	});

	$(function() {

		$("#butslide").click(function(){

				$("#panellogin").slideToggle("fast");

				$(this).toggleClass("active"); return false;

		}); 

		$('#tabsnav').tabs({ fx: { opacity: 'toggle' } });

		$('a.popup').lightBox({fixedNavigation:true});

	});

	function dropdown(id)

	{

		var stat = document.getElementById(id).style.display;

		if(stat=="none"){

			$('.sub').hide();

			$('#'+id).show();

		}else{

			$('.sub').hide();

		}

	}

	function simpan()

	{

		var data1	= document.getElementById('txtnama').value;
		var data2	= document.getElementById('txtusername').value;
		var data3	= document.getElementById('txtpassword').value;

		if(data1!="" && data2!="" && data3!="")

		{

			document.getElementById('frmcontact').submit();

		}

				
		else 
		
		{
			alert('Harap Isi Semua Field (*) !!');
		}

	}

	</script>
    
    <?=$include?>
	
    <script type="text/javascript" src="<?= base_url() ?>public/js/jquery-ui-personalized-1.5.2.packed.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>public/js/sprinkle.js"></script>
		
	<script src="<?=base_url()?>public/js/jquery.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?= base_url() ?>public/js/jquery.validate.js"></script>
   <!-- <script type="text/javascript">
	$.validator.setDefaults({
		submitHandler: function() { alert("kangen mamiim..!"); }
	});
	
	$().ready(function() {
		// validate the comment form when it is submitted
		$("#frmcontact").validate();
		
		
	});
	</script> -->
    
<style type="text/css">
#frmcontact { width: 500px; }
#frmcontact label { width: 250px; }
#frmcontact label.error, #frmcontact input.submit { margin-left: 20px; padding:5px ; color:#FF0000}

</style>

</head>

<body>

<div id="container">



	<?=$header?>
<br /><br />

		  

		<div id="maincontent">

				<div class="boxbig">

				<h1 class="titlebig">Edit User</h1>

					<div class="boxbigcontent">

					<form method="post" action="<?=base_url()?>forum/simpanuser2"  id="frmcontact" enctype="multipart/form-data">

					<div>
					<table width="100%" border="0">
					<?php foreach($fields as $row): ?>

						<input type="hidden" name="id_user" value="<?=$row->id_user?>" />
					<tr height="35">
						<td>Nama Lengkap</td>
						<td><input type="text" name="nama_asli" id="txtnama" class="textboxcontact" style="width:200px;" value="<?=$row->nama_asli?>" /> <span>*</span></td>
					</tr>
					<tr height="35">
						<td>Username</td>
						<td><input type="text" name="username" id="txtusername" class="textboxcontact" style="width:150px" value="<?=$row->username?>" /> <span>*</span></td>
					</tr>
					<tr height="35">
                        <td>Password</td>
						<td><input type="password" name="password" id="txtpassword" class="textboxcontact" style="width:150px" value="<?=$row->password?>" /> <span>*</span></td>
					</tr>
					<tr height="35">
                        <td>Email</td>
						<td><input type="text" name="email" id="email" class="textboxcontact" style="width:250px" value="<?=$row->email?>" /></td>
					</tr>
					<tr height="35px">
						<td>Ganti Foto profil</td>
						<td><input type="file" name="file" id="file" class="textboxcontact" style="width:300px" /></td>
					</tr>
					<tr>
						<td>Foto profil</td>
						<td>
						<img src="<?=base_url()?>public/images/avatar/<?=$row->foto_profil?>" width="80px" height="80px"  />
						</td>
					</tr>
					<?php endforeach; ?>
					<tr>
						<td colspan="2" align="right">
						<a href="javascript:simpan();" class="buttons buttons-orange"><span class="pencil"></span>Update</a></td>
					</tr>
					</table>
						<div>
							</div>

					</div>

					</form>

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