
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
	
				<h1 class="titlebig">Edit Download</h1>
					<div class="boxbigcontent">
					<?php foreach($download as $row): ?>
					<form method="post" action="<?=base_url()?>download/simpanedit"  id="frmcontact" enctype="multipart/form-data">
					<input type="hidden" name="id" value="<?=$row->id_download?>" />
					<input type="hidden" name="namafile" value="<?php echo "$row->file"; ?>" />
					<div>
						<label style="margin-left:-15px;">Nama</label>
						<input type="text" name="nama" id="f1" class="textboxcontact" size="70" value="<?=$row->nama?>" /> <span>*</span><br />
						<label style="margin-left:-15px;">Deskripsi Singkat</label>
						<textarea name="deskripsi" id="f2" style="margin-top:10px" cols="78" rows="5"><?=$row->deskripsi?></textarea> <span>*</span><br />
						<label style="margin-left:-15px;">Ganti File</label>
						<input type="file" name="file" id="f3" class="textboxcontact" />
						<br /><br />
						<div align="right">
                        <a href="javascript:simpan();" class="buttons buttons-orange"><span class="disk"></span>Simpan</a>
						<a href="<?=base_url()?>download/data" class="buttons buttons-orange"><span class="cancel"></span>Batal</a>
						
						</div>
					</div>
					</form>
					<?php endforeach; ?>
					</div>
					<div class="boxbigcontentbottom"></div>
			