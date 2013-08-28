<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>Admin Page</title>

	<meta name="description" content="Website Description" />

	<meta name="keywords" content="Website Kwywords" />

	<link rel="stylesheet" type="text/css" href="<?=base_url()?>public/css/backend.css" />

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

		var data4	= document.getElementById('txtlevel').value;
		

		if(data1!="" && data2!="" && data3!="" && data4!="")

		{

			document.getElementById('frmcontact').submit();

		}

		else

		{

			alert('Harap Isi Semua Field (*) !!');

		}

	}

	</script>

	

</head>

<body>


<div id="container">

	<?=$headmenu?>

		<div id="content">

			<div id="maincontent">

				<div class="boxbig">

				<h1 class="titlebig">Edit User</h1>

					<div class="boxbigcontent">

					<form method="post" action="<?=base_url()?>user/simpanedit"  id="frmcontact">

					<div>

					<?php foreach($fields as $row): ?>

						<input type="hidden" name="id_user" value="<?=$row->id_user?>" />

						<label style="margin-left:-15px;">Nama Lengkap</label><br />

						<input type="text" name="nama_asli" id="txtnama" class="textboxcontact" size="80" value="<?=$row->nama_asli?>" /> <span>*</span><br />
                        <label style="margin-left:-15px;">Username</label><br />

						<input type="text" name="username" id="txtusername" class="textboxcontact" size="80" value="<?=$row->username?>" /> <span>*</span><br />
                        <label style="margin-left:-15px;">Password</label><br />

						<input type="password" name="password" id="txtpassword" class="textboxcontact" size="80" value="<?=$row->password?>" /> <span>*</span><br />

						<label style="margin-left:-15px;">Level User</label><br /><br />

						<select name="id_level" id="txtlevel">
									<option value="" selected="selected"> -- Level User --&nbsp;&nbsp;</option>
									<?php foreach($dlevel as $s): ?>
									<?php if($row->id_level==$s->id_level){ $style="selected"; }else{ $style=""; } ?>
									<option value="<?=$s->id_level?>" <?=$style?> ><?=$s->nama_level?></option>
									<?php endforeach; ?>
						</select><span>*</span><br />

						<br /><br />

					<?php endforeach; ?>

						<div align="right">
						
                        <a href="javascript:simpan();" class="buttons buttons-orange"><span class="disk"></span>Simpan</a>
						<a href="<?=base_url()?>user" class="buttons buttons-orange"><span class="cancel"></span>Batal</a>
						
						</div>

					</div>

					</form>

					</div>

					<div class="boxbigcontentbottom"></div>

				</div>

				

			</div>

			

			<?=$mainmenu?>

			

			<div class="clear"></div>

		</div>

		<div id="footer">

			<p id="texttwitter"></p>

			<ul id="menufooterright">

				<li><?=COPYRIGHT?></li>

				<li class="last"><a href="#">Back to top</a></li>

			</ul>

		</div>

	</div>

</div>

</body>

</html>