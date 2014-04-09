
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
		var data3	= document.getElementById('f3').value;
		
		if(data1!="" && data2!="" && data3!="")
		{
			document.getElementById('frmcontact2').submit();
		}
		else
		{
			alert('Harap Isi Semua Field (*) !!');
		}
	}
	</script>

				<h1 class="titlebig">Edit Link</h1>
					<div class="boxbigcontent">
						<div class="boxess">
					<form method="post" action="<?=base_url()?>linkterkait/simpanedit"  id="frmcontact2">
					<div>
						<label>Singkatan</label>
						<?php foreach($link as $dat): ?>
						<input type="hidden" name="id" value="<?=$dat->id_link?>" />
						<input type="hidden" name="jenis" value="<?=$jenis?>" />
						<input type="text" name="singkatan" id="f1" class="textboxcontact" size="50" value="<?=$dat->singkatan?>" /> <span class="mand">*</span><br /><br />
						<label>Deskripsi</label>
						<input type="text" name="deskripsi" id="f2" class="textboxcontact" size="50" value="<?=$dat->deskripsi?>" /> <span class="mand">*</span><br /><br />
						<label>URL</label>
						<input type="text" name="url" id="f3" class="textboxcontact" size="50" value="<?=$dat->url?>" /> <span class="mand">*</span><br /><br />
						<label></label> <i>http://www.example.com</i><br /><br />
			
						<label>Upload Icon link</label>
						<input type="text" name="img" id="img" onclick="openKCFinder_singleFile(this,'/link','images')" size="20" class="textboxcontact" />
						
						<?php endforeach; ?>
						<div align="right">
                        <a href="javascript:simpan();" class="button"><span class="disk"></span>Simpan</a>
						<a href="<?=base_url()?>linkterkait/<?=($jenis=='terkait'?'':'opd')?>" class="button"><span class="cancel"></span>Batal</a>
						
						</div>
					</div>
					</form>
					</div>
					</div>
					<div class="boxbigcontentbottom"></div>
				
		
