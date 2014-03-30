
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
			location.href='<?=base_url()?>artikel/hapus/'+id;
		}
	}
	</script>
	
				<h1 class="titlebig">Daftar Artikel</h1>
					<div class="boxbigcontent">
					<a href="<?=base_url()?>artikel/add" class="button" >Tambah</a>
					<div align="left" style="margin-bottom:-10px;">
					<form method="post" action="<?=base_url()?>artikel/search2">
					<input type="text" name="search" class="textboxcontact" value="Cari Data" onblur="if(this.value.length == 0) this.value='Cari Data';" onclick="if(this.value == 'Cari Data') this.value='';" style="width:150px;" />
					</form><br />
					</div>
					<table class="data">
					<thead>
						<tr>
							<th width="4%">No</th>
							<th width="30%">Judul Artikel</th>
							<th width="30%">Penulis</th>
							<th width="30%">Tanggal</th>
							<!--<th>Deskripsi</th> -->
							<th width="8%"></th>
						</tr>
					</thead>
					<tbody>
						<?php $i=0; foreach($artikel as $row): ?>
						<tr>
							<td><?=$i=$i+1?></td>
							<td><?=$row->judul?></td>
							<td><?=$row->penulis?></td> 
							<td><?=$row->tanggal?></td> 
							<td>
								<!--<a href="<?=base_url()?>artikel/edit/<?=$row->id_artikel?>" title="Edit"><img src="<?=base_url()?>public/images/icon/edit.png" /></a> -->
								<a href="javascript:hapus('<?=$row->id_artikel?>');" title="Hapus"><img src="<?=base_url()?>public/images/icon/delete.png" /></a>
							</td>
						</tr>
						<?php endforeach;?>
					</tbody>
					</table>
					<?=$pagination?>
					</div>
					<div class="boxbigcontentbottom"></div>
				
	
