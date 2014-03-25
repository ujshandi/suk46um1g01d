<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	
	<script type='text/javascript'>
		var txt=" .:: <?=$title_page; ?> ::.";
		var kecepatan=175;var segarkan=null;
		function bergerak() { 
			document.title=txt;
			txt=txt.substring(1,txt.length)+txt.charAt(0);
			segarkan=setTimeout("bergerak()",kecepatan);
		}
		
		bergerak();
	</script>

	
	<?=$include?>
<!--<link type="text/css" href="<?=base_url()?>public/menu/menu.css" rel="stylesheet" /> -->
	<script type="text/javascript">var  base_url = "<?php echo base_url(); ?>"</script>
	<script  type="text/javascript">
		$(document).ready(function() {
		});
	</script>
</head>
<body>
	<div id="container">
		<?=$header?>
		<br />
		<div id="content">
			<table border="0" width="100%" colspan="0" cellpadding="0">
				<tr>
					<td>
						<div id="maincontent">
							<div class="">
								<div class="">
									<?=$wrapper;?>
								</div>
								<!--div class="boxbigcontentbottom"></div-->
							</div>
						</div>
						<div id="nav">
								<!-- sms walkot -->
							
						<div class="boxnav">
							<h3 class="titlenav">SMS WALIKOTA</h3>
							<div class="boxnavcontent2">	
							<style type="text/css">
								@font-face{
										font-family: 'digi';
										src: url('<?=base_url()?>/public/css/DS-DIGII.TTF');
								}
							</style>							
								<p style="text-align: center; font-family:digi;font-size:3em;font-weight:bold"><?=$smswalkot->sys_value?></p>
								<div class="clear"></div>							
							</div>
						</div>		
						<!-- hot list -->
						<div class="boxnav">
							<h3 class="titlenav">RSPD FM Kota Sukabumi 99.95</h3>
							<div class="boxnavcontent2">
								<table>
									<tbody>
										<tr> 
											<td align="center">
												<br />
												<b>Phone +62266220088</b>
											</td>
										</tr>
										<tr> 
											<td align="center">
												<b>&nbsp;</b>
											</td>
										</tr>
										<tr>
											<td>
												<!-- BEGIN GENERIC ALL BROWSER FRIENDLY HTML FOR NETSHOW V3-->
												<object id="MediaPlayer" classid="CLSID:22D6F312-B0F6-11D0-94AB-0080C74C7E95" codebase="http://activex.microsoft.com/activex/controls/mplayer/en/nsmp2inf.cab#Version=,1,52,701" standby="Loading Microsoft Windows Media Player components..." type="application/x-oleobject" height="35" width="313">
													<param name="AutoStart" value="False">
													<param name="ShowControls" value="True">
													<param name="ShowStatusBar" value="False">
													<param name="ShowDisplay" value="False">
													<param name="AutoRewind" value="True">
													<param name="http://180.250.131.4:8000" value="http://222.124.19.50:8000">
													<embed wmode="Transparent" type="application/x-mplayer2" pluginspage="http://www.microsoft.com/Windows/Downloads/Contents/Products/MediaPlayer/" src="http://180.250.131.4:8000" name="RSPD FM KOTA SUKABUMI" height="34" width="313">
													<param value="true" name="play"><param name="wmode" value="transparent">
												</object>
											</td>
										</tr>
									</tbody>
								</table>
							</div>		
						</div>		
						<!-- end hot list -->
						<!-- hot list -->
						<div class="boxnav">
							<h3 class="titlenav">Hot List</h3>
							<div class="boxnavcontent2">								
								<p style="text-align: center;">&nbsp;</p>
								<div class="clear"></div>							
							</div>
						</div>		
						<!-- end hot list -->						
						<!-- Sukabumi tautan -->
						
						<?=$linkopd;?>
						
						<!-- Sukabumi tautan -->						
						<!-- Ayat pilihan -->
							<div class="boxnav">
								<h3 class="titlenav">Ayat Pilihan</h3>
								<div class="boxnavcontent2">									
									<img src="http://www.mahesajenar.com/scripts/ayatimg.php?&text=000000&bg=D3D3D3&border=D3D3D3&sc=8B0000&c=51" />
									<div class="clear"></div>									
								</div>
							</div>
						<!-- end Ayat pilihan -->						
						<!-- Sukabumi dalam Media -->
							<div class="boxnav">
								<h3 class="titlenav">Sukabumi Dalam Media</h3>
								<div class="boxnavcontent2" id="rsswidget">
									<div id="branding"  style="float: left;"></div><br />

									<div class="clear"></div>									
								</div>
							</div>
						<!-- Sukabumi dalam Media -->
						<!-- Sukabumi dalam Media -->
							<!--div class="boxnav">
								<h3 class="titlenav">Help Desk</h3>
								<div class="boxnavcontent2">									
									<div class="ymHD">
									<a href="ymsgr:sendIM?ourvisi"> <img src="http://opi.yahoo.com/online?u=ourvisi&amp;m=g&amp;t=14&amp;l=us"/>
									</a>
									<div class="clear"></div>									
									</div>
								</div>
							</div-->
						<!-- Sukabumi dalam Media -->
						<!-- Sukabumi download -->
						<?=$download?>
							
						<!-- Sukabumi download -->
						<!--<=$linkterkait?> -->
						<!--?=$polling?-->
						<!--?=$login?-->
						<!-- jadwal sholat -->
						<div class="boxnav">
							<h3 class="titlenav">Jadwal Sholat</h3>
							<div class="boxnavcontent2">								
								<p style="text-align: center;"><iframe src="http://www.jadwalsholat.org/adzan/ajax.row.php?id=257" frameborder="0" width="220" height="220"></iframe></p>								
								<div class="clear"></div>							
							</div>
						</div>		
						<!-- end jadwal sholat -->
						</div>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="footBg">
		<div id="footer">
			<p id="texttwitter"></p>
			
			<ul id="menufooter">
				<li><a href="<?=base_url()?>">Beranda</a></li>			
					<li><a href="<?=base_url()?>faq/publik">FAQ</a></li>			
			</ul>
			
			<ul id="menufooterright">
				<li><?=COPYRIGHT?></li>
				<li class="last"><a href="#">Back to top</a></li>
			</ul>
		</div>
	</div>
</body>
</html>
