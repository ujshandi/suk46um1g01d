<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title><?=COMPANY_NAME?></title>
	        
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

					<h1 class="titlebig">Sub Kategori Forum</h1>

					<div class="boxbigcontent">
					<div align="right">
                    <select style="height:26px; width:300px;" name="id_kategori" onchange="location.href='<?=base_url()?>forum_registered/frm_list_by_kat/'+this.value;">

									<option value="" selected="selected"> -- All Kategori --&nbsp;&nbsp;</option>

									<?php foreach($kategori as $s): ?>
									<?php if($s->id_kategori == $id_kategori){ $style="selected"; }else{ $style=""; } ?>
									<option value="<?=$s->id_kategori?>" <?=$style?> ><?=$s->nama_kategori?></option>

									<?php endforeach; ?>

					</select>
					</div>
					<?php
						if(count($fields)=="0"){ echo "<p>Tidak ada data yang di post</p>"; }
					?>
                    <?php foreach($fields as $row): ?>
                   <div class="subpost">
            
			            
            	   <img src="<?= base_url(); ?>public/images/avatar/<?= $row->foto_profil ?>" class="catimage" width="62" height="62">            			
            	<div class="sub_article" style="width: 500px;">
                <h3><a href=""><?= $row->nama_subkategori; ?></a></h3>
               
                <div class="post-info2">Posted  by <a href="#" title=""><?=$row->nama_asli?></a> <?= $row->tanggal_sub; ?></a>, <a href="" title="View all <?= $row->nama_kategori; ?>" rel="category tag"><?= $row->nama_kategori; ?></a></div>
				
                <div style="color:#333;font-size:12px">
                   <?= $row->deskripsi_sub; ?><br />
                </div>
				<?php 
					$level	= $this->session->userdata('id_level');
					if($level!="6"){ 
				?>
				 <div align="right" style="margin-bottom:0px"><a href="<?= base_url() ?>forum_registered/frmupdate/<?=$row->id_subkategori?>" class="buttons buttons-orange"><span class="pencil"></span>Update</a> <a href="<?= base_url() ?>forum_registered/frmhapus/<?=$row->id_subkategori?>" class="buttons buttons-orange"><span class="bin"></span>Hapus</a></div>
				 <?php } ?>
					 
            </div></div>
                   <div class="clear"></div>
                    <?php endforeach; ?>
                    
                    	<!--<a href="<?= base_url() ?>index.php/forum_registered/frm_list" class="buttons buttons-orange"><span class="cancel"></span>kembali</a>-->
						 <?php 
					if($level!="6"){ 
					?>
					<div align="right" style="margin-top:40px">
                     <a href="<?= base_url() ?>forum_registered/frmadd" class="buttons buttons-orange"><span class="add"></span>Tambah Subkategori</a>
					 </div>
					 <?php } ?>

					</div>
                    <?=$pagination?>
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