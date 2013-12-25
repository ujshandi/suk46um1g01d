
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
			location.href='<?=base_url()?>galeri/hapus_img/'+id;
		}
	}
	function imgFile(id)
	{
		$(function(){
			$('#img'+id).dialog({ 
			autoOpen: false,
			height: 400, 
			width: 620,
			modal: true, 
			/*close: function (event,ui) { $( "#selectClass" ).dialog( "destroy" );  }, 
			open: function (event,ui) { $("#selectClass").html(ajax_load).load(url); } */
		});
			$( "#img"+id ).dialog( "open" );
		});
	}
	function tambah()
	{
		$(function(){
			$('#formadd').dialog({ 
			autoOpen: false,
			height: 180, 
			width: 600,
			modal: true, 
		});
			$( "#formadd" ).dialog( "open" );
		});
	}
	function simpan()
	{
		var data1	= document.getElementById('f1').value;
		
		if(data1!="")
		{
			document.getElementById('frmcontact').submit();
		}
		else
		{
			alert('Harap Isi Semua Field (*) !!');
		}
	}
	</script>

				<h1 class="titlebig"><?=$namaGaleri?></h1>
					<div class="boxbigcontent">
					<a href="javascript:tambah();" class="button" >Tambah</a>
					<a href="<?=base_url()?>galeri/daftar_galeri" class="button" >Kembali</a>
					
					<table class="data">
					<thead>
						<tr>
							<th width="4%">No</th>
							<th>Deskripsi Foto</th>
							<th width="4%"></th>
						</tr>
					</thead>
					<tbody>
						<?php $i=0; foreach($galeri as $row): ?>
						<?php $idGaleri= $row->id_galeri; ?>
						<tr>
							<td><?=$i=$i+1?></td>
							<td><a href="javascript:imgFile('<?=$i?>');"><?=$row->deskripsi?></a></td>
							<td>
								<a href="javascript:hapus('<?=$row->id_img?>');" title="Hapus"><img src="<?=base_url()?>public/images/icon/delete.png" /></a>
							</td>
						</tr>
						<div id="img<?=$i?>" title="<?=$row->deskripsi?>" style="display:none"> 
							<img src="<?=base_url()?>uploads/galeri/<?=$row->img?>" alt="Photo" width="599px" height="355px" />
						</div>
						<?php endforeach;?>
					</tbody>
					</table>
					</div>
					<div class="boxbigcontentbottom"></div>

<div id="formadd" title="Tambah File" style="display:none">
	<form method="post" action="<?=base_url()?>index.php/galeri/simpan_img"  id="frmcontact" enctype="multipart/form-data">
	<input type="hidden" name="idgaleri" value="<?=$idGaleri?>" />
	<div>
		<label style="margin-left:-15px;">Deskripsi Foto</label>
		<input type="text" name="deskripsi" id="f1" class="textboxcontact" size="70" /> <span>*</span><br />
		<label style="margin-left:-15px;">File</label>
		<input type="file" name="gambar" id="f3" class="textboxcontact" />
		<br /><br />
		<div>
		<a href="javascript:simpan();" class="button" >Simpan</a>
		</div>
	</div>
	</form>
</div>
