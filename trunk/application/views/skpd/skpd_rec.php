

	<script type="text/javascript">

	$(function() {
		$("#butslide").click(function(){
				$("#panellogin").slideToggle("fast");
				$(this).toggleClass("active"); return false;
		}); 
		$('#tabsnav').tabs({ fx: { opacity: 'toggle' } });
		$('a.popup').lightBox({fixedNavigation:true});
		
		
		$("#cmbKlasifikasi").change(function(){
			switch($(this).val()){
				case "gambar" : 
						$("#klasifikasi_teks").hide();
						$("#klasifikasi_video").hide();
						$("#klasifikasi_gambar").show();
				break;		
				case "video" : 
						$("#klasifikasi_teks").hide();
						$("#klasifikasi_video").show();
						$("#klasifikasi_gambar").hide();
				break;		
				default :
						$("#klasifikasi_teks").show();
						$("#klasifikasi_video").hide();
						$("#klasifikasi_gambar").hide();
				break;		
				
			}
		
		});
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
		var data2	= 'x';//document.getElementById('f2').value;
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
	<h1 class="titlebig">Tambah skpd</h1>
	<div class="boxbigcontent">
		<div class="boxess">
		<?= validation_errors(); ?>
		<form method="post" action="<?= base_url() ?>skpd/saveData" id="frmcontact2" enctype="multipart/form-data">			
			<input type="hidden" name="author" value="<?=$this->session->userdata('userid')?>" />
			<input type="hidden" name="id" value="<?=$skpd->id_skpd?>" />			
			<label>Nama SKPD</label>
			<input type="text" name="nama" class="textboxcontact" id="f1" size="60" value="<?=$skpd->nama?>" /> <span class="mand">*</span>
				<br />
				<br />
				

			<div  >
			<label>Profil</label>
			<div class="ckWow2">
			<textarea name="profil" cols="80" class="editor" id="f2"><?=$skpd->profil?></textarea>
			<?php echo display_ckeditor($ckeditor1); ?>
			
			 </div>
			 </div>
				<br />
				<br />
			<div >
			<label>Produk</label>
			<div class="ckWow2">
			<textarea name="produk" cols="80" class="editor" id="f3"><?=$skpd->produk?></textarea>
			<?php echo display_ckeditor($ckeditor2); ?>
			 
			 </div>
			 </div>
				<br />
				<br />
			<div >
			<label>Kegiatan</label>
			<div class="ckWow2">
			<textarea name="berita" cols="80" class="editor" id="f4"><?=$skpd->berita?></textarea>
			<?php echo display_ckeditor($ckeditor3); ?>
			
			 </div>
			 </div>
				<br />
				<br />
			
			
			
			
			<div class="boxBtn">
				<a href="javascript:simpan();" class="button"><span class="disk"></span>Simpan</a>
				<a href="<?=base_url()?>skpd" class="button"><span class="cancel"></span>Batal</a>
			</div>
		</form>
		</div>
	</div>
	<div class="boxbigcontentbottom"></div>
