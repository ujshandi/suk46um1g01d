
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
		var data1	= document.getElementById('judul').value;
		var data2	= $('#penulis').val();
		var data3	= document.getElementById('file').value;
	//	alert(data2);
		if(data1!=""  && data2!="")
		{
			document.getElementById('frmcontact2').submit();
		}
		else
		{
			alert('Harap Isi Semua Field (*) !!');
		}
	}
	</script>
	
	<h1 class="titlebig">Tambah Artikel</h1>
	<div class="boxbigcontent">
		<div class="boxess">
			<form method="post" action="<?=base_url()?>artikel/simpan"  id="frmcontact2" enctype="multipart/form-data">
				<label>Judul Artikel</label>
				<input type="hidden" name="id_artikel" id="id_artikel" value=""/>
				<input type="text" name="judul" id="judul" class="textboxcontact" size="50" /> <span class="mand">*</span>
				<br />
				<br />
				<label>Penulis</label>
				<input type="text" name="penulis" id="penulis" class="textboxcontact" size="50" /> <span class="mand">*</span>
				<br />
				<br />
				
				
				<label>File</label>								
				<input type="text" id="file" name="file"  size="20" class="textboxcontact" />
				<input type="button" onclick="openKCFinder_singleFile('#file','/files/artikel','files')" value="..."/>
				<br />
				<br />
				<div class="boxBtn">
					<a href="javascript:simpan();" class="button"><span class="disk"></span>Simpan</a>
					<a href="<?=base_url()?>artikel/data" class="button"><span class="cancel"></span>Batal</a>
				</div>
			</form>
		</div>
	</div>
	<div class="boxbigcontentbottom"></div>
