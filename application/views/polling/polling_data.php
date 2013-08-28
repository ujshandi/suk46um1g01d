<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Admin Page</title>
	<meta name="description" content="Website Description" />
	<meta name="keywords" content="Website Kwywords" />
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>public/css/backend.css" />
	<script src="<?=base_url()?>public/js/jquery.js" type="text/javascript"></script>
	<script src="<?=base_url()?>public/js/ui_core.js" type="text/javascript"></script>
	<script src="<?=base_url()?>public/js/ui_tabs.js" type="text/javascript"></script>
	<script src="<?=base_url()?>public/js/lightbox.js" type="text/javascript"></script>
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
			location.href='<?=base_url()?>polling/hapus/'+id;
		}
	}
	</script>
	
</head>
<body>
<div id="container">
	<?=$headmenu?>
		<div id="content">
			<div id="maincontent">
				<div class="boxbig">
				<h1 class="titlebig">Polling</h1>
					<div class="boxbigcontent">
					<a href="<?=base_url()?>polling/add" class="button" >Tambah</a>
					<table class="data">
					<thead>
						<tr><th><center>No</center></th><th>Pertanyaan</th><th>Status</th><th></th></tr>
					</thead>
					<tbody>
						<?php $i=0; foreach($polling as $row): ?>
						<?php if($row->status=="true"){ $status="Aktif"; }else{ $status="Non Aktif"; } ?>
						<?php $tot=$row->hasil1+$row->hasil2+$row->hasil3+$row->hasil4; ?>
						<tr>
							<td align="center"><?=$i=$i+1?></td>
							<td>
							<strong><?=$row->pertanyaan?></strong>
							<ol class="small" style="margin-left:15px;">
								<li><?=$row->pilihan1?> = <strong><?=$this->converterModel->hitungPersen($row->hasil1,$tot,0)?></strong> </li>
								<li><?=$row->pilihan2?>	= <strong><?=$this->converterModel->hitungPersen($row->hasil2,$tot,0)?></strong> </li>
								<li><?=$row->pilihan3?> = <strong><?=$this->converterModel->hitungPersen($row->hasil3,$tot,0)?></strong> </li>
								<li><?=$row->pilihan4?> = <strong><?=$this->converterModel->hitungPersen($row->hasil4,$tot,0)?></strong> </li>
							</ol>
							<small><b>Total Voter : <?=$tot?></b></small>
							</td>
							<td><?=$status?></td>
							<td align="center">
							<a href="<?=base_url()?>polling/edit/<?=$row->id_polling?>" title="Edit"><img src="<?=base_url()?>public/images/icon/edit.png" /></a>
							<a href="javascript:hapus('<?=$row->id_polling?>');" title="Hapus"><img src="<?=base_url()?>public/images/icon/delete.png" /></a>
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
</body>
</html>