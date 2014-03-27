

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
	<h1 class="titlebig">Tambah Berita</h1>
	<div class="boxbigcontent">
		<div class="boxess">
		<?= validation_errors(); ?>
		<form method="post" action="<?= base_url() ?>berita/saveData" id="frmcontact2" enctype="multipart/form-data">			
			<input type="hidden" name="author" value="<?=$this->session->userdata('userid')?>" />
			<input type="hidden" name="id" value="<?=$berita->id_berita?>" />			
			<label>Judul Berita</label>
			<input type="text" name="txtjudul" class="textboxcontact" id="f1" size="60" value="<?=$berita->judul_berita?>" /> <span class="mand">*</span>
				<br />
				<br />
				
			<label>Kategori</label>
			<select name="cmbKategori">
				<option value="sukabumi" <?=(($berita->kategori=="sukabumi")?"selected=\"selected\"":"")?>>Sukabumi</option>
				<option value="nasional" <?=(($berita->kategori=="nasional")?"selected=\"selected\"":"")?>>Nasional</option>
				<option value="internasional" <?=(($berita->kategori=="internasional")?"selected=\"selected\"":"")?>>Internasional</option>
			</select >
				<br />
				<br />
			<div id="klasifikasi_teks" >
			<label>Deskripsi Singkat</label>
			<div class="ckWow2">
			<textarea name="deskripsi" cols="80" class="editor" id="f2"><?=$berita->deskripsi_singkat?></textarea>
			<?php echo display_ckeditor($ckeditor2); ?>
			 <span class="mand">*</span>
			 </div>
			 </div>
				<br />
				<br />
			<label>Author</label>
			<input type="text" name="txtauthor" class="textboxcontact" value="<?=$berita->author?>"  size="50" />
				<br />
				<br />
			
			<label>Klasifikasi</label>
			<select name="cmbKlasifikasi" id="cmbKlasifikasi">
				<option value="teks" <?=(($berita->klasifikasi=="teks")?"selected=\"selected\"":"")?>>Teks</option>
				<option value="gambar" <?=(($berita->klasifikasi=="gambar")?"selected=\"selected\"":"")?>>Gambar</option>
				<option value="video"<?=(($berita->klasifikasi=="video")?"selected=\"selected\"":"")?>>Video</option>
			</select>
				<br />
				<br />
			
			<div id="klasifikasi_teks" style="<?=(($berita->klasifikasi=="teks")?"":"display:none")?>">
				<label>Isi Berita</label>
				<div class="ckWow2">
					<textarea name="isi" id="editor1" class="editor" cols="81" rows="200" >isi</textarea>
					<?php echo display_ckeditor($ckeditor); ?>
				</div>
			</div>
			
			<div id="klasifikasi_gambar" style="<?=(($berita->klasifikasi=="gambar")?"":"display:none")?>">
				<label>Upload Gambar</label>
				<input type="text" name="gambar" id="gambar" onclick="openKCFinder_singleFile(this,'/images/berita','images')" size="20" class="textboxcontact" />
			</div>
			
			<div id="klasifikasi_video" style="<?=(($berita->klasifikasi=="video")?"":"display:none")?>">
				<label>Upload Video</label>
				<input type="text" name="video" id="video" onclick="openKCFinder_singleFile(this,'/images/berita','video')" size="20" class="textboxcontact" />
			</div>
				<br />
				<br />
			
			<label>Publish</label>
			<?				
				echo '<input type="radio" name="status"  value="publish" id="status1" '.($berita->status=='publish'?'checked="checked"':'').' />Yes';
				echo '&nbsp;&nbsp;&nbsp;<input type="radio" name="status" value="pending"  id="status2" '.($berita->status=='pending'?'checked="checked"':'').'/> No';
			?>
			
			<div class="boxBtn">
				<a href="javascript:simpan();" class="button"><span class="disk"></span>Simpan</a>
				<a href="<?=base_url()?>berita" class="button"><span class="cancel"></span>Batal</a>
			</div>
		</form>
		</div>
	</div>
	<div class="boxbigcontentbottom"></div>
