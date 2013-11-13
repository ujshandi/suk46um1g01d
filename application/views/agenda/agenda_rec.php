
	<script type="text/javascript">
	$(function() {
		$( "#f1" ).datepicker();
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

		if(data1!="")
		{
			document.getElementById('frmcontact').submit();
		}
		else
		{
			alert('Harap Isi Semua Field (*) !!');
		}
	}
	</script>

	<h1 class="titlebig">Tambah Agenda</h1>
	<div class="boxbigcontent">
		<form method="post" action="<?=base_url()?>agenda/simpan" id="frmcontact" enctype="multipart/form-data">
		<input type="hidden" name="author" value="superadmin" />
		<input type="hidden" name="id" value="<?=$agenda->id_agenda?>" />
		<div>
			<label style="margin-left:-15px;">Tgl Agenda</label>
			<input type="text" name="tgl" id="f1" class="textboxcontact" size="15" value="<?=$agenda->tgl?>" /> <span class="mand">*</span><br />
			<label style="margin-left:-15px;">Deskripsi Kegiatan</label>
			<textarea name="kegiatan" id="f2" style="margin-top:10px" cols="78" rows="3"><?=$agenda->kegiatan?></textarea> <span class="mand">*</span><br /><br />
			<div align="right">
				<a href="javascript:simpan();" class="button"><span class="disk"></span>Simpan</a>
				<a href="<?=base_url()?>agenda/data" class="button"><span class="cancel"></span>Batal</a>
			</div>
		</div>
	</form>
	</div>
	<div class="boxbigcontentbottom"></div>
