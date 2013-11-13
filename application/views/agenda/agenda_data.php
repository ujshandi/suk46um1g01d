
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
			location.href='<?=base_url()?>agenda/hapus/'+id;
		}
	}
	</script>

	<h1 class="titlebig">Daftar Agenda</h1>
	<div class="boxbigcontent">
		<a href="<?=base_url()?>agenda/add" class="button" ></span>Tambah</a>
		<div align="left" style="margin-bottom:10px;">
			<form method="post" action="<?=base_url()?>agenda/search">
				<input type="text" name="search" class="textboxcontact" value="Cari Agenda" onblur="if(this.value.length == 0) this.value='Cari Agenda';" onclick="if(this.value == 'Cari Agenda') this.value='';" style="width:150px;" />
			</form>
		</div>
		<table class="data">
		<thead>
			<tr>
				<th width="4%">No</th>
				<th width="30%">Tgl</th>
				<th>Kegiatan</th>
				<th width="8%"></th>
			</tr>
		</thead>
		<tbody>
			<?php $i=0; foreach($agenda as $row): ?>
			<tr>
				<td><?=$i=$i+1?></td>
				<td><?=$row->tgl?></td>
				<td><?=$row->kegiatan?></td>
				<td>
					<a href="<?=base_url()?>agenda/edit/<?=$row->id_agenda?>" title="Edit"><img src="<?=base_url()?>public/images/icon/edit.png" /></a>
					<a href="javascript:hapus('<?=$row->id_agenda?>');" title="Hapus"><img src="<?=base_url()?>public/images/icon/delete.png" /></a>
				</td>
			</tr>
			<?php endforeach;?>
		</tbody>
		</table>
		<?=$pagination?>
	</div>
	<div class="boxbigcontentbottom"></div>
