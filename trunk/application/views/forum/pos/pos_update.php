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
			var subD	= document.getElementById('subkategori');
			subD.options.length = 0;
			
			var index 					= ajax.length;
			ajax[index]					= new sack();
			ajax[index].requestFile 	= '<?=base_url()?>index.php/ajax/getSubKategori/'+id;
			ajax[index].onCompletion 	= function(){ createSub(index) };
			ajax[index].runAJAX();
		}
		function createSub(index)
		{
			var subData 	= document.getElementById('subkategori');
			eval(ajax[index].response);
		}
	</script>      
	<?=$include?>

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

		var data1	= document.getElementById('f1').value;

		var data2	= document.getElementById('editor').value;

		

		if(data1!="" && data2!="")

		{

			document.getElementById('frmcontact').submit();

		}

		else

		{

			alert('Harap Isi Semua Field (*) !!');

		}

	}

	</script>

<script type="text/javascript" src="<?= base_url() ?>public/js/jquery.validate.js"></script>
    
    <script type="text/javascript">
	$.validator.setDefaults({
	submitHandler: function() { document.getElementById('frmcontact').submit(); }
});

$().ready(function() {
	
	$("#frmcontact").validate({
		rules: {
			
			
			txtjudul: {
				required: true,
				minlength: 4
			}
			
		},
		messages: {
			
			txtjudul: {
				required: "* Title tidak boleh kosong",
				minlength: "* Minimal 4 karakter"
			}
		}
	});
	
	
});
</script> 
    
<style type="text/css">
#frmcontact { width: 500px; }
#frmcontact label { width: 250px; }
#frmcontact label.error, #frmcontact input.submit { margin-left: 20px; padding:2px ; color:#FF0000}

</style>
</head>

<body>

<div id="container">



	<?=$header?>
<br />

		  

		<div id="content">

			<div id="maincontent">

				                
				<div class="boxbig">

					<h1 class="titlebig">Update Posting</h1>

					<div class="boxbigcontent">
					<?php foreach($fields as $row): ?>
                    <form method="post" action="<?= base_url() ?>forum_registered/simpaneditpos"  id="frmcontact">
                    <input type="hidden" name="user" value="<?=$row->id_user?>" />
                    <input type="hidden" name="id_post" value="<?=$row->id_post?>" />
                    <label style="margin-left:-15px;">Kategori</label><br /><br />
                    
                    <select style="height:29px; width:90%;" name="id_kategori" onchange="getSub(this.value);">

									<option value="" selected="selected"> -- kategori --&nbsp;&nbsp;</option>

									<?php foreach($kategori as $s): ?>
									<?php
										if($s->id_kategori == $row->id_kategori){ $style="selected"; }else{ $style=""; }
									?>
									<option value="<?=$s->id_kategori?>" <?=$style?> ><?=$s->nama_kategori?></option>

									<?php endforeach; ?>

					</select>&nbsp;<span>*</span><br/>
					 <label style="margin-left:-15px;">Subkategori</label><br /><br />
                   <select style="height:29px; width:90%;" id="subkategori" name="id_subkategori">
						<option value="" selected="selected"> -- All Sub Kategori --&nbsp;&nbsp;</option>
						<?php foreach($subkategori as $ss): ?>
							<?php if($ss->id_subkategori == $row->id_subkategori){ $style="selected"; }else{ $style=""; } ?>
						<option value="<?=$ss->id_subkategori?>" <?=$style?> ><?=$ss->nama_subkategori?></option>
						<?php endforeach; ?>
					</select>&nbsp;<span>*</span><br/>
                     
                    <label style="margin-left:-15px;">Judul Posting</label><br /><br />

					<input type="text" name="txtjudul" id="txtjudul" class="required" value="<?=$row->judul_post?>" size="80"/> <span>*</span><br />
					                                                    
                    <label style="margin-left:-15px;">Isi Posting</label><br /><br />
					
                    <textarea name="editor" id="editor"><?=$row->isi_post?></textarea><br />

					<div align="right">

						<button class="buttons buttons-orange" type="submit"><span class="disk"></span>Simpan</button>
                        <a href="<?=base_url()?>forum_registered/pos_list" class="buttons buttons-orange"><span class="cancel"></span>Batal</a>
												
						</div>
						
					

					</form>
                    
                    
                    <?php endforeach; ?>
                    

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