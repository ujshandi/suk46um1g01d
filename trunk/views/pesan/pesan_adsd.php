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

		var data1	= document.getElementById('oleh').value;

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

	

</head>

<body>

<div id="container">

	<?=$headmenu?>

		<div id="content">

			<div id="maincontent">

				<div class="boxbig">

				<h1 class="titlebig">Detail Pesan Pengunjung</h1>

					<div class="boxbigcontent">
                    
					<div class="psn-guest">
                    <p><?= $isi ?></p>
                    </div>
                     <br />
                   	                   
                  	 <div align="right"><b><?= $pengirim ?>&nbsp;|&nbsp;<?= $email ?></b></div>
                     <div align="right"><?= $tanggal ?></div>
                     <br />
                     <h2 class="title">Jawab : </h2>
                     
                     <!-- tambah tanggapan pesan -->
                     <form method="post" action="<?=base_url()?>pesan/simpantanggapi"  id="frmcontact">

					<div>

						
                        <input type="text" name="id" class="textboxcontact" value="<?=$id_pesan?>"/>
                        <input type="text" id="oleh" name="oleh" class="textboxcontact" value="<?=$this->session->userdata('id_level')?>"/>
						<input type="text" name="tanggal" class="textboxcontact" value="<?=$tgl?>"/>
						

						

						<textarea name="isi" id="editor"></textarea>

						<br /><br />

						<div>

						<a href="<?=base_url()?>pesan" class="button" >Cancel</a>

						<a href="javascript:simpan();" class="button" >Simpan</a>

						</div>
                        </div>

					

					</form>
                     
					</div>
					
                    
                	
                
					<div class="boxbigcontentbottom"></div>
			
        
                
				</div>
				
                </div>
				

			</div>

			

			<?=$mainmenu?>

			

			<div class="clear"></div>

		</div>

		<div id="footer">

			<p id="texttwitter"></p>

			<!--<ul id="menufooter">

				<li><a href="#">Home</a></li>

				<li><a href="#">News</a></li>

				<li><a href="#">About Us</a></li>

				<li><a href="#">Services</a></li>

				<li><a href="#">Contact Us</a></li>

				<li class="last"><a href="#">Follow us on Twitter</a></li>

			</ul>-->

			<ul id="menufooterright">

				<li><?=COPYRIGHT?></li>

				<li class="last"><a href="#">Back to top</a></li>

			</ul>

		</div>

	</div>

</div>

</body>

</html>