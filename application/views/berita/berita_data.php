
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

	<h1 class="titlebig">Arsip Berita</h1>
	<div class="boxbigcontent">
		<a href="<?= base_url() ?>berita/addData/" class="button" >Tambah</a>
		<div align="left" style="margin-bottom:-10px;">
			<form method="post" action="<?=base_url()?>berita/search2">
				<input type="text" name="search" class="textboxcontact" value="Cari Berita" onblur="if(this.value.length == 0) this.value='Cari Berita';" onclick="if(this.value == 'Cari Berita') this.value='';" style="width:150px;" />
			</form>
		</div>
		<br />
		<table class="data">
<!-- =============== EDIT DIDIEU ===================== -->
		<thead>
			<tr>
				<th width="50px">No.</th>
				<th width="120px">Tanggal</th>
				<th>Judul</th>
				<th>Kategori</th>
				<th>Klasifikasi</th>
				<!--<th>Deskripsi</th> -->
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
				<td><?= $m->kategori ; ?></td>
				<td><?= $m->klasifikasi ; ?></td>
				<!--<td><?='';// $m->deskripsi_singkat ; ?></td> -->
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
