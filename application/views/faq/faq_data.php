<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>Admin Page</title>

	<meta name="description" content="Website Description" />

	<meta name="keywords" content="Website Kwywords" />

	<link rel="stylesheet" type="text/css" href="<?=base_url()?>public/css/backend.css" />

	<link rel="stylesheet" type="text/css" href="<?=base_url()?>public/media/jquery/ui.css" />

	<script src="<?=base_url()?>public/js/jquery.js" type="text/javascript"></script>

	<script src="<?=base_url()?>public/js/ui_core.js" type="text/javascript"></script>

	<script src="<?=base_url()?>public/js/ui_tabs.js" type="text/javascript"></script>

	<script src="<?=base_url()?>public/js/ui.dialog.js" type="text/javascript"></script>

	<script src="<?=base_url()?>public/js/lightbox.js" type="text/javascript"></script>

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

	

</head>

<body>

<div id="container">

	<?=$headmenu?>

		<div id="content">

			<div id="maincontent">

				<div class="boxbig">

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

				</div>

				

			</div>

			

			<?=$mainmenu?>

			

			<div class="clear"></div>

		</div>

		<div id="footer">

			<p id="texttwitter"></p>

			<!--<ul id="menufooter">

				<li><a href="#">Home</a></li>

				<li><a href="#">News</a></li>

				<li><a href="#">About Us</a></li>

				<li><a href="#">Services</a></li>

				<li><a href="#">Contact Us</a></li>

				<li class="last"><a href="#">Follow us on Twitter</a></li>

			</ul>-->

			<ul id="menufooterright">

				<li><?=COPYRIGHT?></li>

				<li class="last"><a href="#">Back to top</a></li>

			</ul>

		</div>

	</div>

</div>

<div id="dialog<?=$i?>" title="Detail Pesan Pengunjung" style="display:none"> 

		wew

</div>

</body>

</html>