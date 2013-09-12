
    
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

		content_css : "<?=base_url()?>public/media/css/word.css",



		// Drop lists for link/image/media/template dialogs

		template_external_list_url : "<?=base_url()?>public/media/lists/template_list.js",

		external_link_list_url : "<?=base_url()?>public/media/lists/link_list.js",

		external_image_list_url : "<?=base_url()?>public/media/lists/image_list.js",

		media_external_list_url : "<?=base_url()?>public/media/lists/media_list.js",



		// Replace values for the template plugin

		

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

		var data1	= document.getElementById('editor').value;

		
		if(data1!="")

		{

			document.getElementById('frmcontact').submit();

		}

		else

		{

			alert('Harap Isi Semua Field (*) !!');

		}

	}

	</script>

	
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
                     
                     
					</div>
					
                    <div class="boxbigcontent">
                    
					<div class="psn-op">
                    <p><?= $isitanggapi ?></p>
                    </div>
                    <br />
                   	                   
                  	 <div align="right"><b><?= $nama_level ?></b></div>
                     <div align="right"><?= $tanggaltanggapi ?></div>
                     <br />
                     
                     
                     <a href="<?=base_url()?>pesan" class="button">Kembali</a>
                     <?= $wew; ?>
                     
				  </div>
                	
                
					<div class="boxbigcontentbottom"></div>
			
        
            
