<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Admin Page</title>
	<meta name="description" content="Website Description" />
	<meta name="keywords" content="Website Kwywords" />
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>public/css/backend.css" />
	<script src="<?=base_url()?>public/js/jquery.js" type="text/javascript"></script>
	<script src="<?=base_url()?>public/js/ui_core.js" type="text/javascript"></script>
	<script src="<?=base_url()?>public/js/ui_tabs.js" type="text/javascript"></script>
	<script src="<?=base_url()?>public/js/lightbox.js" type="text/javascript"></script>
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
		var data4	= document.getElementById('f4').value;
		
		if(data1!="" && data2!="" && data3!="" && data4!="")
		{
			document.getElementById('frmcontact').submit();
		}
		else
		{
			alert('Harap Isi Semua Field (*) !!');
		}
	}
	</script>
	
</head>
<body>
<div id="container">
	<?=$headmenu?>
		<div id="content">
			<div id="maincontent">
				<div class="boxbig">
				<h1 class="titlebig">Tambah Peraturan</h1>
					<div class="boxbigcontent">
					<form method="post" action="<?=base_url()?>peraturan/simpan"  id="frmcontact" enctype="multipart/form-data">
					<div>
						<label style="margin-left:-15px;">Tahun</label>
						<input type="text" name="tahun" id="f1" class="textboxcontact" size="10" /> <span>*</span><br />
						<label style="margin-left:-15px;">Kategori</label>
						<select name="kategori" class="textboxcontact" id="f2">
							<option value="1">Instruksi Presiden</option>
							<option value="2">Keputusan Menteri</option>
							<option value="3">Peraturan Menteri</option>
							<option value="4">Peraturan Pemerintah</option>
							<option value="5">Peraturan Presiden</option>
							<option value="6">Undang-Undang</option>
						</select> <span>*</span><br />
						<label style="margin-left:-15px;">Nomor Peraturan</label>
						<input type="text" name="nama" id="f3" class="textboxcontact" size="70" /> <span>*</span><br />
						<label style="margin-left:-15px;">Deskripsi Singkat</label>
						<textarea name="deskripsi" id="f4" style="margin-top:10px" cols="80" rows="5"></textarea> <span>*</span><br />
						<label style="margin-left:-15px;">File</label>
						<input type="file" name="file" id="f5" class="textboxcontact" />
						<br /><br />
						<div align="right">
                        <a href="javascript:simpan();" class="buttons buttons-orange"><span class="disk"></span>Simpan</a>
						<a href="<?=base_url()?>peraturan/data" class="buttons buttons-orange"><span class="cancel"></span>Batal</a>
						
						</div>
					</div>
					</form>
					</div>
					<div class="boxbigcontentbottom"></div>
				</div>
				
			</div>
			
			<?=$mainmenu?>
			
			<div class="clear"></div>
		</div>
		<div id="footer">
			<p id="texttwitter"></p>
			<ul id="menufooterright">
				<li><?=COPYRIGHT?></li>
				<li class="last"><a href="#">Back to top</a></li>
			</ul>
		</div>
	</div>
</div>
</body>
</html>
