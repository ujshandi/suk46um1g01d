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
	
</head>
<body>
<div id="container">
	<?=$headmenu?>
		<div id="content">
			<div id="maincontent">
				<div class="boxbig">
				<h1 class="titlebig">Edit Data dan Statistik</h1>
					<div class="boxbigcontent">
					<?php foreach($statistik as $row): ?>
					<form method="post" action="<?=base_url()?>statistik/simpanedit"  id="frmcontact" enctype="multipart/form-data">
					<input type="hidden" name="id" value="<?=$row->id_statistik?>" />
					<input type="hidden" name="namafile" value="<?php echo "$row->file"; ?>" />
					<div>
						<label style="margin-left:-15px;">Nama Kategori</label>
						<input type="text" name="kategori" id="f1" class="textboxcontact" size="70" value="<?=$row->kategori?>" /> <span>*</span><br />
						<label style="margin-left:-15px;">Ganti File</label>
						<input type="file" name="file" id="f2" class="textboxcontact" />
						<br /><br />
						<div align="right">
                        <a href="javascript:simpan();" class="buttons buttons-orange"><span class="disk"></span>Simpan</a>
						<a href="<?=base_url()?>statistik/data" class="buttons buttons-orange"><span class="cancel"></span>Batal</a>						
						</div>
					</div>
					</form>
					<?php endforeach; ?>
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