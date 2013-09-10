

	<script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "exact",
		elements : "editor1",
		theme : "advanced",
		skin : "o2k7",
		plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups,autosave",
		// Theme options
		theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,formatselect,fontselect,fontsizeselect,|,justifyleft,justifycenter,justifyright,justifyfull,|,bullist,numlist,|,link,unlink,|,preview,fullscreen,",
		theme_advanced_buttons2 : "",
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
	
				<h1 class="titlebig">Edit Program Kerja</h1>
					<div class="boxbigcontent">
					<div style="margin-top:-20px">
					<form method="post" action="<?=base_url()?>index.php/program_kerja/simpanedit"  id="frmcontact">
					<?php foreach($data as $row): ?>
					<input type="hidden" name="id" value="<?=$row->id_program?>" />
					<input type="hidden" name="author" value="<?=$row->author?>" />
					
						<label style="margin-left:-15px;">Nama Program</label><br />
						<input type="text" name="nama" id="f1" class="textboxcontact" size="110" value="<?=$row->nama_program?>" /> <span>*</span><br />
						<label style="margin-left:-15px;">Deskripsi Singkat</label><br />
						<textarea name="des_singkat" id="f2" class="textboxcontact" cols="106"><?=$row->deskripsi_singkat?></textarea> <span>*</span><br />
						
						<?php 
							if($this->session->userdata('id_level')!="5"){ 
						 	if($row->status=="publish"){ $st2="selected"; }else{ $st1="selected"; } 
						?>
							<label style="margin-left:-15px;">Status</label>
						 	<select name="status" style="margin:10px 0 0 -80px;" class="textboxcontact">
								<option value="pending" <?=$st1?> >Pending</option>
								<option value="publish" <?=$st2?> >Publish</option>
							</select>
							<br />
						<?php }else{ ?>
							<input type="hidden" name="status" value="<?=$row->status?>" />
						<?php } ?>
						
						<label style="margin-left:-15px;">Deskripsi</label><br /><br />
						<textarea name="deskripsi" id="editor1" rows="19"><?=$row->deskripsi?></textarea>
						<br /><br />
						<div align="right">
                        
                        <a href="javascript:simpan();" class="buttons buttons-orange"><span class="disk"></span>Simpan</a>
						<a href="<?=base_url()?>index.php/program_kerja/data" class="buttons buttons-orange"><span class="cancel"></span>Batal</a>
						
						</div>
					
					</form>
					</div>
					<?php endforeach; ?>
					</div>
					<div class="boxbigcontentbottom"></div>
				