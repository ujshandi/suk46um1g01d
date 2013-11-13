
	
	<script type="text/javascript">
	
	$(function() {
		$("#butslide").click(function(){
				$("#panellogin").slideToggle("fast");
				$(this).toggleClass("active"); return false;
		}); 
		$('#tabsnav').tabs({ fx: { opacity: 'toggle' } });
		$('a.popup').lightBox({fixedNavigation:true});
	});
	
	</script>

	<script>
		function simpan()
		{
			document.getElementById('frmcontact2').submit();
		}
	</script>
	
	<h1 class="titlebig">Sejarah</h1>
	<div class="boxbigcontent">
		<div class="boxess">
			<form action="<?=base_url()?>profil/updatesejarah" method="post"  id="frmcontact2">
				<div class="ckWow">
					<textarea name="isi" id="editor1" class="editor" cols="400" rows="600" ><?=$sejarah?></textarea>
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