
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
			location.href='<?=base_url()?>program_kerja/hapus/'+id;
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
				<h1 class="titlebig">Daftar Program Kerja</h1>
					<div class="boxbigcontent">
					<a href="<?=base_url()?>program_kerja/add" class="button" >Tambah</a>
					<div align="left" style="margin-top:-13px;">
					<form method="post" action="<?=base_url()?>program_kerja/search2">
					<input type="text" name="search" class="textboxcontact" value="Cari Program Kerja" onblur="if(this.value.length == 0) this.value='Cari Program Kerja';" onclick="if(this.value == 'Cari Program Kerja') this.value='';" style="width:150px;" />
					</form><br />
					</div>
					<table class="data">
					<thead>
						<tr>
							<th width="5%">No</th>
							<th width="19%">Tgl</th>
							<th>Nama Program</th>
							<th width="15%">Author</th>
							<th width="10%">Status</th>
							<th width="11%"></th>
						</tr>
					</thead>
					<tbody>
						<?php $i=0; foreach($data as $row): ?>
						<tr>
							<td align="center"><?=$i=$i+1?></td>
							<td><?=$row->tgl?></td>
							<td><a href="javascript:info('<?=$i?>');"><?=$row->nama_program?></a></td>
							<td><?=$this->converterModel->getNama($row->author)?></td>
							<td><?=$row->status?></td>
							<td>
								<a href="<?=base_url()?>program_kerja/edit/<?=$row->id_program?>" title="Edit"><img src="<?=base_url()?>public/images/icon/edit.png" /></a>
								<a href="javascript:info('<?=$i?>');" title="Preview"><img src="<?=base_url()?>public/images/icon/info.png" /></a>
								<a href="javascript:hapus('<?=$row->id_program?>');" title="Hapus"><img src="<?=base_url()?>public/images/icon/delete.png" /></a>
							</td>
						</tr>
						<?php endforeach;?>
					</tbody>
					</table>
					<?=$pagination?>
					</div>
					<div class="boxbigcontentbottom"></div>
				</div>
				
