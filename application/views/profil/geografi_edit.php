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

	<script>
		function simpan()
		{
			document.getElementById('frmcontact2').submit();
		}
	</script>
	
	<h1 class="titlebig">Geografi dan Demografi</h1>
	<div class="boxbigcontent">
		<div class="boxess">
			<form action="<?=base_url()?>profil/updategeografi" method="post" id="frmcontact2">
				<div class="ckWow">
					<textarea name="geografi" id="editor1" class="editor" cols="400" rows="600" ><?=$geografi?></textarea>
					<?php echo display_ckeditor($ckeditor); ?>
				</div>
				<br />
				<div class="boxBtn">
					<a href="javascript:simpan();" class="button" >Simpan</a>
				</div>
			</form>
		</div>
	</div>
	<div class="boxbigcontentbottom"></div>