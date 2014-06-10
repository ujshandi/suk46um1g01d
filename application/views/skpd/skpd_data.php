
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

			location.href='<?=base_url()?>skpd/hapus/'+id;

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

	<h1 class="titlebig">Daftar SKPD</h1>
	<div class="boxbigcontent">
		<a href="<?= base_url() ?>skpd/addData/" class="button" >Tambah</a>
		<div align="left" style="margin-bottom:-10px;">
			<form method="post" action="<?=base_url()?>skpd/search2">
				<input type="text" name="search" class="textboxcontact" value="Cari skpd" onblur="if(this.value.length == 0) this.value='Cari skpd';" onclick="if(this.value == 'Cari skpd') this.value='';" style="width:150px;" />
			</form>
		</div>
		<br />
		<table class="data">
<!-- =============== EDIT DIDIEU ===================== -->
		<thead>
			<tr>
				<th width="50px">No.</th>
				<th width="120px">Nama SKPD</th>				
				<th width="120px">Kelompok SKPD</th>				
				<th width="50px"></th>
			</tr>
		</thead>
		<tbody>
			<?php $i=0; foreach ($fields as $m) : ?>
			<tr>
				<td width="4%" align="center"><?=$i=$i+1?></td>
				<td><?= $m->nama ; ?></td>				
				<td><?= ($m->kelompok=="1"?"Sekretariat Daerah":(($m->kelompok=="2")?"Setingkat Badan":(($m->kelompok=="3")?"Setingkat Dinas":
                                        (($m->kelompok=="4")?"Setingkat Kantor":(($m->kelompok=="5")?"Kecamatan":
                                        (($m->kelompok=="6")?"BUMD":(($m->kelompok=="7")?"Link Lain":"")))))))  ?></td>
				<td align="center" width="12%">

					<a href="<?=base_url()?>skpd/edit/<?= $m->id_skpd; ?>" title="Edit"><img src="<?=base_url()?>public/images/icon/edit.png" /></a>

					<a href="javascript:info('<?= $i; ?>');" title="Preview"><img src="<?=base_url()?>public/images/icon/info.png" /></a>

					<a href="javascript:hapus('<?= $m->id_skpd; ?>');" title="Hapus"><img src="<?=base_url()?>public/images/icon/delete.png" /></a>
			</tr>
			<?php endforeach; ?>
		</tbody>
		</table>
		<br />
		<?=$pagination?>
	</div>
	<div class="boxbigcontentbottom"></div>
