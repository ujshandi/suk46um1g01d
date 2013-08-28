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
	</script>
	
</head>
<body>
<p><a class="skiplink" href="#maincontent">Skip over navigation</a></p>
<div id="container">
	<div id="wrapper">
		<div id="header">
			<div id="headertop">
				<a href="#" class="replace" id="logo"><span></span>Rushhour - Your Company Slogan</a>
				<div id="loginarea" align="center">
					<p style="color:#FFFFFF; font-size:12px; padding-top:2px;">You are not log in</p>
				</div>
			</div>
		</div>
		
		<div id="content">
			<div id="maincontent" style="height:429px;">
			<?php echo validation_errors(); ?>
				<div id="panellogin2">
					<form method="post" action="<?=base_url()?>backend/checkUser" id="frmlogin">
						<div>
							<label for="lgnusername">Username:</label> <input type="text" name="username" id="lgnusername" /><br />
							<label for="lgnpassword">Password:</label> <input type="password" name="password" id="lgnpassword" /><br />
							<label></label> <input type="submit" name="submitlogin" class="submitlogin" value="Login" /> <a href="#" class="linkforgot">Forgot Password?</a>
						</div>
					</form>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		
		<div id="footer">
			<p id="texttwitter"></p>
		</div>
	</div>
</div>
</body>
</html>
