
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
			location.href='<?=base_url()?>pengumuman/hapus/'+id;
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

				<h1 class="titlebig">Daftar Pengumuman</h1>
					<div class="boxbigcontent">
					<a href="<?=base_url()?>pengumuman/add" class="button" >Tambah</a>
					<div align="left" style="margin-bottom:4px;">
					<form method="post" action="<?=base_url()?>pengumuman/search">
					<input type="text" name="search" class="textboxcontact" value="Cari Pengumuman" onblur="if(this.value.length == 0) this.value='Cari Pengumuman';" onclick="if(this.value == 'Cari Pengumuman') this.value='';" style="width:150px;" />
					</form>
					</div>
					<table class="data">
					<thead>
						<tr><th>No</th><th width="20%">Tgl</th><th>Judul</th><th></th></tr>
					</thead>
					<tbody>
						<?php $i=0; foreach($pengumuman as $row): ?>
						<tr>
							<td width="4%" align="center"><?=$i=$i+1?></td>
							<td><?=$row->tgl?></td>
							<td><?=$row->judul?></td>
							<td align="center" width="12%">
								<a href="<?=base_url()?>pengumuman/edit/<?=$row->id_pengumuman?>" title="Edit"><img src="<?=base_url()?>public/images/icon/edit.png" /></a>
								<!--<a href="javascript:info('<?=$i?>');" title="Preview"><img src="<?=base_url()?>public/images/icon/info.png" /></a> -->
								<a href="javascript:hapus('<?=$row->id_pengumuman?>');" title="Hapus"><img src="<?=base_url()?>public/images/icon/delete.png" /></a>
							</td>
						</tr>
						<?php endforeach;?>
					</tbody>
					</table>
					<?=$pagination?>
					</div>
					<div class="boxbigcontentbottom"></div>
			
				
			
