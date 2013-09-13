
	<script type="text/javascript" src="<?=base_url()?>public/js/tiny_mce/tiny_mce.js"></script> 
	<script type="text/javascript">
	  tinyMCE.init({
		// General options
		mode : "exact",
		elements : "editor1",
		theme : "advanced",
		skin : "o2k7",
		
		plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups,autosave",
		// Theme options
		theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,formatselect,fontselect,fontsizeselect,",
		theme_advanced_buttons2 : "justifyleft,justifycenter,justifyright,justifyfull,|,bullist,numlist,|,link,unlink,|,preview,fullscreen,",
		theme_advanced_buttons3 : "",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "center",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : false,

		// Example word content CSS (should be your site CSS) this one removes paragraph margin
		content_css : "<?=base_url()?>public/media/css/word.css",
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
		var data2	= document.getElementById('f2').value;
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
	
    
				<h1 class="titlebig">Tambah Berita</h1>
					<div class="boxbigcontent">
						<div style="margin:-20px 0 0 -20px;">
						<?= validation_errors(); ?>
						<form method="post" action="<?= base_url() ?>berita/saveData" id="frmcontact" enctype="multipart/form-data">
						<input type="hidden" name="author" value="<?=$this->session->userdata('userid')?>" />
							<label>Judul Berita</label> 
							<input type="text" name="txtjudul" class="textboxcontact" id="f1" size="83" /> <span>*</span><br /><br />
							<label>Deskripsi Singkat</label> 
							<textarea name="deskripsi" cols="81" id="f2"></textarea><span>*</span><br /><br />
							<label>Upload Gambar</label> 
						   <input type="file" name="gambar" size="20" class="textboxcontact" /><br /> <br /> 
							<label>Isi Berita</label>
							<textarea name="isi" id="editor1" class="editor" cols="100" rows="200" >isi</textarea>
								<?php //echo display_ckeditor($ckeditor); ?><br />
							<div align="right">
                            <a href="javascript:simpan();" class="button" ><span class="disk"></span>Simpan</a>
							<a href="<?=base_url()?>berita" class="button" ><span class="cancel"></span>Batal</a>
							
							</div>
						</form>
						</div>
					</div>
					<div class="boxbigcontentbottom"></div>
				