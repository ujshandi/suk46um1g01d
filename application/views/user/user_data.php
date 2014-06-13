
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
				location.href='<?=base_url()?>user/hapus/'+id;
			}
		}
		function info(id)
		{
			$(function(){
				$('#dialog'+id).dialog({ 
				autoOpen: false,
				height: 250,
				width: 600,
				modal: true,
				/*close: function (event,ui) { $( "#selectClass" ).dialog( "destroy" );  }, 
				open: function (event,ui) { $("#selectClass").html(ajax_load).load(url); } */
			});
				$( "#dialog"+id ).dialog( "open" );
			});
		}
	</script>

    <h1 class="titlebig">Daftar User</h1>
    <div class="boxbigcontent">
            <a href="<?=base_url()?>user/add" class="button" >Tambah</a>
            <div align="left" style="margin-top:-5px;">
                    <form method="post" action="<?=base_url()?>user/search">
                            <input type="text" name="search" class="textboxcontact" value="Cari User" onblur="if(this.value.length == 0) this.value='Cari User';" onclick="if(this.value == 'Cari User') this.value='';" style="width:150px;" />
                    </form>
            </div>
            <table class="data">
            <thead>
                    <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Level</th>
                            <th></th>
                    </tr>
            </thead>
            <tbody>
                    <?php $i=0; foreach($fields as $row): ?>
                    <tr>
                            <td width="4%" align="center"><?=$i=$i+1?></td>
                            <td><a href="javascript:info('<?=$i?>');" title="Detail Data"><?=$row->nama_asli?></a></td>
                            <td><?=$row->username?></td>
                            <td><?=$row->nama_level?></td>
                            <td align="center" >
                                    <a href="<?=base_url()?>user/hakakses/<?=$row->id_user?>" title="Hak akses">Hak Akses</a>
                                    <a href="<?=base_url()?>user/edit/<?=$row->id_user?>" title="Edit"><img src="<?=base_url()?>public/images/icon/edit.png" /></a>
                                    <a href="javascript:hapus('<?=$row->id_user?>');" title="Hapus"><img src="<?=base_url()?>public/images/icon/delete.png" /></a>
                            </td>
                    </tr>
                    <?php endforeach;?>
            </tbody>
            </table>
            <br />
            <?=$pagination?>
    </div>
    <div class="boxbigcontentbottom"></div>
		
<?php $i=0; foreach($fields as $row): ?>
<?php $i=$i+1;?>	
<div id="dialog<?=$i?>" title="Detail Data User" style="display:none"> 
	<br /><br />
	<table class="data">
		<tbody>
			<tr>
				<td><label>Nama Lengkap</label></td>
				<td><input type="text" disabled="disabled" size="60" value="<?=$row->nama_asli?>" /></td>
			</tr>
			<tr>
				<td><label>Username</label></td>
				<td><input type="text" disabled="disabled" size="60" value="<?= $row->username; ?>" /></td>
			</tr>	
			<tr>
				<td>
					<label>Password</label>
				</td>
				<td>
					<input type="text" disabled="disabled" size="60" value="<?= $row->password; ?>" />
				</td>
			</tr>
			<tr>
				<td><label>Level User</label></td>
				<td><input type="text" disabled="disabled" size="60" value="<?= $row->nama_level; ?>" /><td>
			</tr>
		</tbody>
	</table>
</div>
<?php endforeach; ?>
