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

	function hapus(id)

	{

		var confir = confirm('Anda yakin akan menghapusnya?');

		

		if(confir==true)

		{

			location.href='<?=base_url()?>berita/hapus/'+id;

		}

	}

	function info(id)

	{

		$(function(){

			$('#dialog'+id).dialog({ 

			autoOpen: false,

			height: 500, 

			width: 800,

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
	<?=$headmenu?>
		<div id="content">
			<div id="maincontent">
				<div class="boxbig">
				<h1 class="titlebig">Arsip Berita</h1>
					<div class="boxbigcontent">
					<a href="<?= base_url() ?>berita/addData/" class="button" >Tambah</a>
					<div align="left" style="margin-top:-13px;">
					<form method="post" action="<?=base_url()?>berita/search2">
					<input type="text" name="search" class="textboxcontact" value="Cari Berita" onblur="if(this.value.length == 0) this.value='Cari Berita';" onclick="if(this.value == 'Cari Berita') this.value='';" style="width:150px;" />
					</form><br />
					</div>
					<table class="data">
<!-- =============== EDIT DIDIEU ===================== -->
					<thead>
						<tr>
                        	<th width="50px">No.</th>
                            <th width="120px">Tanggal</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Author</th>
							<th>Status</th>
                            <th width="50px"></th>
                        </tr>
					</thead>
					<tbody>
                    	<?php $i=0; foreach ($fields as $m) : ?>
						<tr>
                        	<td width="4%" align="center"><?=$i=$i+1?></td>
                        	<td><?= $m->tanggal ; ?></td>
                            <td><?= $m->judul_berita ; ?></td>
                            <td><?= $m->deskripsi_singkat ; ?></td>
                            <td><?=$this->converterModel->getNama($m->author)?></td>
							<td><?= $m->status ; ?></td>
                        	<td align="center" width="12%">

								<a href="<?=base_url()?>berita/edit/<?= $m->id_berita; ?>" title="Edit"><img src="<?=base_url()?>public/images/icon/edit.png" /></a>

								<a href="javascript:info('<?= $i; ?>');" title="Preview"><img src="<?=base_url()?>public/images/icon/info.png" /></a>

								<a href="javascript:hapus('<?= $m->id_berita; ?>');" title="Hapus"><img src="<?=base_url()?>public/images/icon/delete.png" /></a>
                        </tr>
						<?php endforeach; ?>
					</tbody>
					</table>
					<br />
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

<?php $i=0; foreach($fields as $m): ?>
	<?php $i=$i+1; ?>
	<div id="dialog<?=$i?>" title="<?=$m->judul_berita?>" style="display:none"> 	
     <table >
        <tr>
            <td><?=$m->tanggal?></td>
        </tr>
         <tr>
            <td><img src="<?=base_url()?>uploads/img/medium/<?=$m->gambar?>" align="left" style="margin:5px 5px 5px 5px; width:260px; height:140px;" /><?=$m->isi?></td>
        </tr>
        </table>	    
	</div>
<?php endforeach; ?>

</body>
</html>