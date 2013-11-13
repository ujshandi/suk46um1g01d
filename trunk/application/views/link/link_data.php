
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
			location.href='<?=base_url()?>linkterkait/hapus/'+id;
		}
	}
	</script>

				<h1 class="titlebig">Daftar <?=$title_page?> </h1>
					<div class="boxbigcontent">
					<a href="<?=base_url()?>linkterkait/<?=($jenis=='terkait'?'add':'add_opd')?>" class="button" >Tambah</a>
					<div align="left" style="margin-bottom:10px;">
						<form method="post" action="<?=base_url()?>linkterkait/search2">
							<input type="text" name="search" class="textboxcontact" value="Cari Link" onblur="if(this.value.length == 0) this.value='Cari Link';" onclick="if(this.value == 'Cari Link') this.value='';" style="width:150px;" />
						</form>
					</div>
					<table class="data">
					<thead>
						<tr><th>No</th><th>Singkatan</th><th>Deskripsi</th><th>URL</th><th></th></tr>
					</thead>
					<tbody>
						<?php $i=0; foreach($link as $row): ?>
						<tr>
							<td><?=$i=$i+1?></td>
							<td><?=$row->singkatan?></td>
							<td><?=$row->deskripsi?></td>
							<td><?=$row->url?></td>
							<td>
								<a href="<?=base_url()?>linkterkait/edit/<?=$row->id_link?>" title="Edit"><img src="<?=base_url()?>public/images/icon/edit.png" /></a>
								<a href="javascript:hapus('<?=$row->id_link?>');" title="Hapus"><img src="<?=base_url()?>public/images/icon/delete.png" /></a>
							</td>
						</tr>
						<?php endforeach;?>
					</tbody>
					</table>
					<?=$pagination?>
					</div>
					<div class="boxbigcontentbottom"></div>
