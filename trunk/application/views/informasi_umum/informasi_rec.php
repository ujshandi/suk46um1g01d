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
		var data1	= document.getElementById('txtkategori').value;
	//	var data2	= document.getElementById('txtkategori').value;
		if(data1!="")
		{
			document.getElementById('frmcontact2').submit();
		}
		else
		{
			alert('Harap Isi Semua Field (*) !!');
		}
	}	
	</script>
    
	<h1 class="titlebig">Data <?=$title_page?></h1>
	<div class="boxbigcontent">
		<div class="boxess">
			<?= validation_errors(); ?>
			<form method="post" action="<?= base_url() ?>informasi_umum/saveData" id="frmcontact2" enctype="multipart/form-data">
				<div class="ckWow">
					<input type="hidden" name="txtkategori" id="txtkategori" value="<?=$data->kategori?>"/>
					<textarea name="isi" id="editor1" class="editor" cols="400" rows="600" ><?=$data->isi?></textarea>
					<?php echo display_ckeditor($ckeditor); ?>
				</div>
				<br />
				<div class="boxBtn">
					<a href="javascript:simpan();" class="button"><span class="disk"></span>Simpan</a>
					<a href="<?=base_url()?>berita" class="button"><span class="cancel"></span>Batal</a>
				</div>
			</form>
		</div>
	</div>
	<div class="boxbigcontentbottom"></div>