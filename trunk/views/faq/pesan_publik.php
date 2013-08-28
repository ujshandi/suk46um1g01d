<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title><?=COMPANY_NAME?></title>
    
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

		var data1	= document.getElementById('txtpengirim').value;

		var data2	= document.getElementById('txtemailpengirim').value;

		var data3	= document.getElementById('editor').value;

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
			editor: {
				required: true,
				minlength: 10
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
			},
			
			editor: {
				required: "* Isi Pesan tidak boleh kosong",
				minlength: "* Minimal 10 karakter"
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

	<?=$sliderTop?>

	

		<div id="content">

			

			<div id="maincontent">

				

				<div id="maincontent">

				<div class="boxbig">

					<h1 class="titlebig">Pesan Anda</h1>
                    
                    <div class="boxbigcontent">
                    
                        <ul class="bullet-disc-blue">
                        <li style="padding-left:15px"><p>Menu Pesan Anda ini adalah media interaksi online antara pengguna dengan penyelenggara/pengelola layanan <?=COMPANY_NAME?>.</p></li>
                        <li style="padding-left:15px"><p>Kirimkan pesan-pesan Anda baik berupa saran, kritik ataupun pertanyaan seputar <?=COMPANY_NAME?>.</p></li>
                        <li style="padding-left:15px"><p>Kiriman pesan-pesan Anda akan difilter terlebih dahulu sebelum di tampilkan untuk umum, sehingga apabila terdapat pesan-pesan yang tidak berkenan hanya pengelola saja yang membacanya tanpa mengganggu kenyamanan pengguna yang lain.</p></li>
                        </ul>
                        
                        
<div id="tabvanilla" class="tabsmiim">

            <ul id="tabsmiim" >
                <li><a href="#daftar">Daftar Pesan</a></li>
                <li><a href="#tambah">Tambah Pesan</a></li>
            </ul>
			<br />
            <div id="daftar" class="tabscont">

<!-- array pesan -->	
		
						<?php $i=0; foreach($pesan_anda as $row): ?>
                        <div class="psn">
                            <div class="psn-guest">
                                
                                <p><?= $row->isi ?></p>
                                </div>
                                <br />
                                      
                                <div align="right"><b><?= $row->pengirim ?>&nbsp;|&nbsp;<?= $row->email_pengirim; ?></b></div>
                                <div align="right"><?= $row->tanggal ?></div>
                                <br />
                                <h3 class="title">Jawab : </h3>
                     
							
					
                            <div class="psn-op">
                                <p><?= $row->isitanggapi ?></p>
                                </div>
                            	<br />
                   	                   
                                <div align="right"><b><?= $row->nama_level ?></b></div>
                                 <div align="right"><?= $row->tanggaltanggapi ?></div>
                                 <br />
                       </div>
                       <br />
                        <?php endforeach;?>
<!--  end array pesan -->                       
					<?=$pagination?>

					</div>

<!--  -->
                </div><!--/daftar-->
                <div id="tambah" >
                 
                 <form method="post" action="<?= base_url() ?>pesan/simpan" id="frmcontact">
                 
                 <label style="margin-left:-15px;" for="txtpengirim">Nama Lengkap</label><br />

				 <input type="text" name="txtpengirim" id="txtpengirim" size="80" class="required" minlength="2"/> <span>*</span><br />
               
                 <label style="margin-left:-15px;" for="txtemailpengirim">Email</label><br />

				 <input type="text" name="txtemailpengirim" id="txtemailpengirim" class="required" size="80" /> <span>*</span><br />
				 
                 <label style="margin-left:-15px;">Isi</label><br /><br />
                 
                 <textarea name="editor" id="editor" ></textarea><br />
                
                 <div align="right">

						<!--<a href="<?=base_url()?>index.php/pesan/publik" class="button" style="padding:20" >Cancel</a>-->
						<input class="button" type="reset" value="Batal"></input>
						<input class="button" type="submit" value="Simpan"/>

				 </div>
						                 
                 </form>
                </div>
       
             </div><!--/widget-->



					<div class="boxbigcontentbottom"></div>

				</div>

				

				<?=$pengumuman?>

				<?=$polling?>

				

			</div>

			

			</div>

			

			<div id="nav">

				<?=$mainmenu?>

				<?=$login?>

				<?=$linkterkait?>

				<?=$testimonial?>

				<?=$footer?>

			</div>

</div>

</body>

</html>