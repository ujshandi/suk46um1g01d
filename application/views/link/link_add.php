
	<script type="text/javascript">
	bkLib.onDomLoaded(function() {
		new nicEditor().panelInstance('editor');
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
		var data3	= document.getElementById('f3').value;
		
		if(data1!="" && data2!="" && data3!="")
		{
			document.getElementById('frmcontact').submit();
		}
		else
		{
			alert('Harap Isi Semua Field (*) !!');
		}
	}
	</script>
	

				<h1 class="titlebig">Tambah <?=$title_page?></h1>
					<div class="boxbigcontent">
					<form method="post" action="<?=base_url()?>linkterkait/simpan"  id="frmcontact">
					<div>
						<label>Singkatan</label>
						<input type="hidden" name="jenis" value="<?=$jenis?>" />
						<input type="text" name="singkatan" id="f1" class="textboxcontact" size="50" /> <span>*</span><br />
						<label>Deskripsi</label>
						<input type="text" name="deskripsi" id="f2" class="textboxcontact" size="80" /> <span>*</span><br />
						<label>URL</label>
						<input type="text" name="url" id="f3" class="textboxcontact" size="80" /> <span>*</span><br />
						<label></label> <i>http://www.example.com</i><br />
						<div align="right">
                        <a href="javascript:simpan();" class="button"><span class="disk"></span>Simpan</a>
						<a href="<?=base_url()?>linkterkait/<?=($jenis=='terkait'?'':'opd')?>" class="button"><span class="cancel"></span>Batal</a>
						
						</div>
					</div>
					</form>
					</div>
					<div class="boxbigcontentbottom"></div>
			