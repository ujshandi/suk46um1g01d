<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Admin Page</title>
	<meta name="description" content="Website Description" />
	<meta name="keywords" content="Website Kwywords" />
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>public/css/backend.css" />
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>public/media/jquery/ui.css" />
	<script src="<?=base_url()?>public/js/jquery.js" type="text/javascript"></script>
	<script src="<?=base_url()?>public/js/ui_core.js" type="text/javascript"></script>
	<script src="<?=base_url()?>public/js/ui_tabs.js" type="text/javascript"></script>
	<script src="<?=base_url()?>public/js/ui.dialog.js" type="text/javascript"></script>
	<script src="<?=base_url()?>public/js/lightbox.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?=base_url()?>public/js/nicEdit.js"></script>
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
	function hapus(id)
	{
		var confir = confirm('Anda yakin akan menghapusnya?');
		
		if(confir==true)
		{
			location.href='<?=base_url()?>galeri/hapus_img/'+id;
		}
	}
	function imgFile(id)
	{
		$(function(){
			$('#img'+id).dialog({ 
			autoOpen: false,
			height: 400, 
			width: 620,
			modal: true, 
			/*close: function (event,ui) { $( "#selectClass" ).dialog( "destroy" );  }, 
			open: function (event,ui) { $("#selectClass").html(ajax_load).load(url); } */
		});
			$( "#img"+id ).dialog( "open" );
		});
	}
	function tambah()
	{
		$(function(){
			$('#formadd').dialog({ 
			autoOpen: false,
			height: 180, 
			width: 600,
			modal: true, 
		});
			$( "#formadd" ).dialog( "open" );
		});
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
				<h1 class="titlebig"><?=$namaGaleri?></h1>
					<div class="boxbigcontent">
					<a href="javascript:tambah();" class="button" >Tambah</a>
					<a href="<?=base_url()?>galeri/daftar_galeri" class="button" >Kembali</a>
					
					<table class="data">
					<thead>
						<tr>
							<th width="4%">No</th>
							<th>Deskripsi Foto</th>
							<th width="4%"></th>
						</tr>
					</thead>
					<tbody>
						<?php $i=0; foreach($galeri as $row): ?>
						<?php $idGaleri= $row->id_galeri; ?>
						<tr>
							<td><?=$i=$i+1?></td>
							<td><a href="javascript:imgFile('<?=$i?>');"><?=$row->deskripsi?></a></td>
							<td>
								<a href="javascript:hapus('<?=$row->id_img?>');" title="Hapus"><img src="<?=base_url()?>public/images/icon/delete.png" /></a>
							</td>
						</tr>
						<div id="img<?=$i?>" title="<?=$row->deskripsi?>" style="display:none"> 
							<img src="<?=base_url()?>uploads/galeri/<?=$row->img?>" alt="Photo" width="599px" height="355px" />
						</div>
						<?php endforeach;?>
					</tbody>
					</table>
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
<div id="formadd" title="Tambah File" style="display:none">
	<form method="post" action="<?=base_url()?>index.php/galeri/simpan_img"  id="frmcontact" enctype="multipart/form-data">
	<input type="hidden" name="idgaleri" value="<?=$idGaleri?>" />
	<div>
		<label style="margin-left:-15px;">Deskripsi Foto</label>
		<input type="text" name="deskripsi" id="f1" class="textboxcontact" size="70" /> <span>*</span><br />
		<label style="margin-left:-15px;">File</label>
		<input type="file" name="gambar" id="f3" class="textboxcontact" />
		<br /><br />
		<div>
		<a href="javascript:simpan();" class="button" >Simpan</a>
		</div>
	</div>
	</form>
</div>
</body>
</html>