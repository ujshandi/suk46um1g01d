

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
						<div style="margin:-60px 0 0 -15px;">
						<?= validation_errors(); ?>
						<form method="post" action="<?= base_url() ?>berita/saveData" id="frmcontact" enctype="multipart/form-data">
							<input type="hidden" name="author" value="<?=$this->session->userdata('userid')?>" />
							<label>Judul Berita</label>
							<input type="text" name="txtjudul" class="textboxcontact" id="f1" size="83" /> <span class="mand">*</span><br /><br />
							<label>Deskripsi Singkat</label>
							<textarea name="deskripsi" cols="81" id="f2"></textarea> <span class="mand">*</span><br /><br />
							<label>Author</label>
							<input type="text" name="txtauthor" class="textboxcontact" id="f1" size="50" /> <br /><br />
							<label>Upload Gambar</label>
							<input type="text" name="gambar" id="gambar" onclick="openKCFinder_singleFile(this,'/images/berita','images')" size="20" class="textboxcontact" />
							<br /> <br />
							<label>Isi Berita</label>
							<div class="ckWow">
							<textarea name="isi" id="editor1" class="editor" cols="100" rows="200" >isi</textarea>
								<?php echo display_ckeditor($ckeditor); ?><br />
							</div>
							<br /> <br />
							<label>Publish</label>
							<input type="radio" name="publish"  value="yes" <?=""; //($record['publish']=='yes'?'checked':'');?> />Yes
        <input type="radio" name="publish" value="no"  <?="";//($record['publish']=='no'?'checked':'');?>/> No
							<div style="/* border:1px solid #ff0000; */padding:5px;" align="right">
								<a href="javascript:simpan();" class="button"><span class="disk"></span>Simpan</a>
								<a href="<?=base_url()?>berita" class="button"><span class="cancel"></span>Batal</a>
							</div>
						</form>
						</div>
					</div>
					<div class="boxbigcontentbottom"></div>
				
