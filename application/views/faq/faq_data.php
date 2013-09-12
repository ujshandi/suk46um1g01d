
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

			location.href='<?=base_url()?>faq/hapus/'+id;

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

	

				<h1 class="titlebig">Daftar FAQ</h1>

					<div class="boxbigcontent">
                    
                    <a href="<?=base_url()?>faq/add" class="button" >Tambah</a>
					
					<table class="data">

					<thead>

						<tr>
                        <th>No</th>
                        <th>Pertanyaan</th>
                        
                        <th></th>
                      </tr>

					</thead>

					<tbody>
						<?php $i= 1+$offset ?>
						<?php foreach($fields as $row): ?>

						<tr>

							<td width="4%" align="center"><?=$i++;?></td>

							
                          <td><a href="<?=base_url()?>faq/detail/<?=$row->id_faq?>" title="Detail"><?=$row->pertanyaan?></a></td>
                            
							<td align="center" width="12%">
                            
                            <a href="javascript:hapus('<?=$row->id_faq?>');" title="Hapus"><img src="<?=base_url()?>public/images/icon/delete.png" /></a>

							</td>

						</tr>

						<?php endforeach;?>

					</tbody>

					</table>

					<?=$pagination?>

					</div>

					<div class="boxbigcontentbottom"></div>

