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
    
    <script type="text/javascript">
$.validator.setDefaults({
	submitHandler: function() { document.getElementById('frmcontact').submit(); }
});

$().ready(function() {
	
	$("#frmcontact").validate({
		rules: {
			
			
			txtpengirim: {
				required: true,
				minlength: 4
			},
						
			txtemailpengirim: {
				required: true,
				email: true
			}
			
		},
		messages: {
			
			txtpengirim: {
				required: "* Nama anda tidak boleh kosong",
				minlength: "* Minimal 4 karakter"
			},
			
			txtemailpengirim: {
				required: "* Email anda tidak boleh kosong",
				email: "* Silahkan masukan alamat email yang valid"
			}
		}
	});
	
	
});
</script>
	
   
    
    
<style type="text/css">
#frmcontact { width: 500px; }
#frmcontact label { width: 250px; }
#frmcontact label.error, #frmcontact input.submit { margin-left: 20px; padding:5px ; color:#FF0000}

</style>

</head>

<body>

<div id="container">



	<?=$header?>
<br />

		  

		<div id="content">

			<div id="maincontent">

				                
<div class="boxbig">

					<h1 class="titlebig"></h1>

					<div class="boxbigcontent">
                    
                    <?php foreach($datas as $row): ?>

						<div class="subpost">
            
			            
            	   <img src="<?= base_url(); ?>public/images/avatar/<?= $row->foto ?>" class="catimage" width="62" height="62"/>            			
            	<div class="sub_article" style="width: 500px;">
                <h3><a href=""><?= $row->judul_post; ?></a></h3>
               
                <div class="post-info2">Posted  by <a href="" title=""><?=$row->nama_asli?></a>, <?= $row->tanggal_post; ?></a><a href="<?=base_url()?>forum/subkategori/<?=$row->id_subkategori?>" title="View all <?= $row->nama_subkategori; ?>" rel="category tag"><?= $row->nama_subkategori; ?></a> | <?=$this->forumpostreply_model->count_comment($row->id_post);?> comments</div>
				
                <div style="color:#333;font-size:12px">
                   <?= $row->isi_post; ?><br />
                </div>
            </div></div>
                   <div class="clear"></div>

					<?php endforeach;?>	
    
                    
                   	<p style="padding-left:20px">Tanggapan Anda :</p>				
					<?php foreach($fields as $row): ?>

						<div class="subpost" style="padding-left:30px">
            
			            
            	<img src="<?= base_url(); ?>public/images/avatar/<?= $row->foto ?>" class="catimage" width="62" height="62">            			
            	<div class="sub_article" style="width: 470px;">
                               
                <div class="post-info2">Posted  by <a href="" title=""><?= $row->nama_pengirim ?></a> <?= $row->tanggal_post_reply; ?></a></div>
				
                <div style="color:#333;font-size:12px">
                   <?= $row->isi_post_reply; ?><br />
                </div>
            	</div></div>
                   <div class="clear"></div>

					<?php endforeach;?>	
					<br />
                    
                    <div id="tambah" >
                    <h2 class="subtitle"><img src="<?= base_url() ?>public/images/icon/add.png"/>&nbsp;Tambahkan Komentar Anda</h2>
                 
                 <form method="post" action="<?= base_url() ?>forum/simpanposreply" id="frmcontact">
                 <input type="hidden" name="id_post" value="<?= $row->id_post ?>"/>
                 <label style="margin-left:-15px;" for="txtpengirim">Nama Lengkap</label><br />

				 <input type="text" name="txtpengirim" id="txtpengirim" size="80" class="required" minlength="2"/> <span>*</span><br />
               
                 <label style="margin-left:-15px;" for="txtemailpengirim">Email</label><br />

				 <input type="text" name="txtemailpengirim" id="txtemailpengirim" class="required" size="80" /> <span>*</span><br />
				 
                 <label style="margin-left:-15px;">Isi</label><br /><br />
                 
                 <textarea name="editor" id="editor" ></textarea><br />
                
                 <div align="right">

						<!--<a href="<?=base_url()?>index.php/pesan/publik" class="button" style="padding:20" >Cancel</a>-->
						<a href="<?= base_url() ?>forum/publik" class="buttons buttons-orange"><span class="cancel"></span>Kembali</a>
						<button class="buttons buttons-orange" type="submit"><span class="disk"></span>Simpan</button>

				 </div>
						                 
                 </form>
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