
	<script type="text/javascript" src="<?=base_url()?>script/nicEdit.js"></script>
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
		var data4	= document.getElementById('f4').value;
		var data5	= document.getElementById('f5').value;
		
		if(data1!="" && data2!="" && data3!="" && data4!="" && data5!="")
		{
			document.getElementById('frmcontact').submit();
		}
		else
		{
			alert('Harap Isi Semua Field (*) !!');
		}
	}
	</script>

				<h1 class="titlebig">Tambah Polling</h1>
					<div class="boxbigcontent">
					<form method="post" action="<?=base_url()?>polling/simpan"  id="frmcontact">
					<div>
						<label>Pertanyaan</label>
						<input type="text" name="pertanyaan" id="f1" class="textboxcontact" size="80" /> <span>*</span><br />
						<label>Pilihan 1</label>
						<input type="text" name="pil1" id="f2" class="textboxcontact" size="60" /> <span>*</span><br />
						<label>Pilihan 2</label>
						<input type="text" name="pil2" id="f3" class="textboxcontact" size="60" /> <span>*</span><br />
						<label>Pilihan 3</label>
						<input type="text" name="pil3" id="f4" class="textboxcontact" size="60" /> <span>*</span><br />
						<label>Pilihan 4</label>
						<input type="text" name="pil4" id="f5" class="textboxcontact" size="60" /> <span>*</span><br /><br />
						<div align="right">
                        
                        <a href="javascript:simpan();" class="buttons buttons-orange"><span class="disk"></span>Simpan</a>
						<a href="<?=base_url()?>polling" class="buttons buttons-orange"><span class="cancel"></span>Batal</a>
						
						</div>
					</div>
					</form>
					</div>
					<div class="boxbigcontentbottom"></div>
			
