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
		new nicEditor().panelInstance('editor1');
		new nicEditor().panelInstance('editor2');
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
	</script>
	
</head>
<body>
<div id="container">
	<div id="wrapper">
		<div id="header">
			<div id="headertop">
				<a href="#" class="replace" id="logo"><span></span>Rushhour - Your Company Slogan</a>
				<div id="loginarea">
					<p class="notlogin">You are not log in</p>
					<p class="loginbut"><a href="#" class="butlogin" id="butslide">Login</a> <span>or</span> <a href="#" class="butlogin">Logout</a></p>
					<div id="panellogin">
						<form method="post" action="#" id="frmlogin">
							<div>
								<label for="lgnusername">Username:</label> <input type="text" name="username" id="lgnusername" /><br />
								<label for="lgnpassword">Password:</label> <input type="text" name="password" id="lgnpassword" /><br />
								<label></label> <input type="submit" name="submitlogin" class="submitlogin" value="Login" /> <a href="#" class="linkforgot">Forgot Password?</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div id="content">
			<div id="maincontent">
				<div class="boxbig">
				<h1 class="titlebig">Visi dan Misi</h1>
					<div class="boxbigcontent">
					<form action="#" method="post">
					<h3>Visi</h3>
					<textarea name="visi" id="editor1" style="width: 100%; height:80px;">
						<b>Some Initial Content was in this textarea</b>
					</textarea>
					<br />
					<h3>Misi</h3>
					<textarea name="misi" id="editor2" style="width: 100%; height:80px;">
						<b>Some Initial Content was in this textarea</b>
					</textarea>
					<br />
					<div>
						<a href="#" class="button" >Preview</a>
						<a href="#" class="button" >Simpan</a>
					</div>
					</form>
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
