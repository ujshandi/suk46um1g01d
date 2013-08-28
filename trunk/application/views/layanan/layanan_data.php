<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Admin Page</title>
	<meta name="description" content="Website Description" />
	<meta name="keywords" content="Website Kwywords" />
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>public/css/backend.css" />
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>public/css/jquery/ui.css" />
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
	function hapus(id,tipe)
	{
		var confir = confirm('Anda yakin akan menghapusnya?');
		
		if(confir==true)
		{
			location.href='<?=base_url()?>layanan/hapus/'+id+'/'+tipe;
		}
	}
	function info(id)
	{
		$(function(){
			$('#dialog'+id).dialog({ 
			autoOpen: false,
			height: 300, 
			width: 600,
			modal: true, 
			/*close: function (event,ui) { $( "#selectClass" ).dialog( "destroy" );  }, 
			open: function (event,ui) { $("#selectClass").html(ajax_load).load(url); } */
		});
			$( "#dialog"+id ).dialog( "open" );
		});
	}
	</script>
</head>
<body>
<div id="container">
	
	<?=$headermenu?>
	
		<div id="content">
			<div id="maincontent">
				<div class="boxbig">
				<h1 class="titlebig">Daftar Layanan <?=$kategori?></h1>
					<div class="boxbigcontent">
					<a href="<?=base_url()?>layanan/add/<?=$tipe?>" class="button" >Tambah</a>
					<div align="left" style="margin-top:-13px;">
					<form method="post" action="<?=base_url()?>layanan/search2">
					<input type="hidden" name="tipe" value="<?=$tipe?>" />
					<input type="text" name="search" class="textboxcontact" value="Cari <?=$kategori?>" onblur="if(this.value.length == 0) this.value='Cari <?=$kategori?>';" onclick="if(this.value == 'Cari <?=$kategori?>') this.value='';" style="width:150px;" />
					</form><br />
					</div>
					<table class="data">
					<thead>
						<tr>
							<th width="5%">No</th>
							<th>Artikel</th>
							<th width="15%">Author</th>
							<th width="10%">Status</th>
							<th width="11%"></th>
						</tr>
					</thead>
					<tbody>
						<?php $i=0; foreach($data as $row): ?>
						<tr>
							<td align="center"><?=$i=$i+1?></td>
							<td><a href="javascript:info('<?=$i?>');"><?=$row->judul?></a></td>
							<td><?=$this->converterModel->getNama($row->author)?></td>
							<td><?=$row->status?></td>
							<td>
								<a href="<?=base_url()?>layanan/edit/<?=$row->id_layanan?>/<?=$tipe?>" title="Edit"><img src="<?=base_url()?>public/images/icon/edit.png" /></a>
								<a href="javascript:info('<?=$i?>');" title="Preview"><img src="<?=base_url()?>public/images/icon/info.png" /></a>
								<a href="javascript:hapus('<?=$row->id_layanan?>','<?=$tipe?>');" title="Hapus"><img src="<?=base_url()?>public/images/icon/delete.png" /></a>
							</td>
						</tr>
						<?php endforeach;?>
					</tbody>
					</table>
					<?=$pagination?>
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
<?php $i=0; foreach($data as $row): ?>
	<?php $i=$i+1; ?>
	<div id="dialog<?=$i?>" title="<?=$row->judul?>" style="display:none"> 
		<?=$row->konten?>
	</div>
<?php endforeach; ?>
</body>
</html>
