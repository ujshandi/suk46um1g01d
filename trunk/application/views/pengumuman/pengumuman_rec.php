	<script type="text/javascript">
	
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
		var data2	= document.getElementById('editor1').value;
		
		if(data1!="" && data2!="")
		{
			document.getElementById('frmcontact2').submit();
		}
		else
		{
			alert('Harap Isi Semua Field (*) !!');
		}
	}
	</script>
	<h1 class="titlebig">Tambah Pengumuman</h1>
	<div class="boxbigcontent">
		<div class="boxess">
			<form method="post" action="<?=base_url()?>pengumuman/simpan" id="frmcontact2">
				<label>Judul</label>
				<input type="text" name="judul" id="f1" class="textboxcontact" value="<?=$pengumuman->judul?>" size="80" /> <span class="mand">*</span>
				<input type="hidden" name="id_pengumuman" id="id_pengumuman" class="textboxcontact" value="<?=$pengumuman->id_pengumuman?>"  /> <span class="mand">*</span>
				<br />
				<br />
				<label>Isi Pengumuman</label>
				<div class="ckWow2">						
					<textarea name="deskripsi" id="editor1" class="editor" cols="100" rows="200" ><?=$pengumuman->deskripsi?></textarea>
					<?php echo display_ckeditor($ckeditor); ?>
				</div>
				<br />
				<br />
				<div class="boxBtn">
					<a href="javascript:simpan();" class="button"><span class="disk"></span>Simpan</a>
					<a href="<?=base_url()?>pengumuman" class="button"><span class="cancel"></span>Batal</a>
				</div>
			</form>
		</div>
	</div>
	<div class="boxbigcontentbottom"></div>
			
