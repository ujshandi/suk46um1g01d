
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
				