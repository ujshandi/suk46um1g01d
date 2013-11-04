

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
				<h1 class="titlebig">Visi dan Misi</h1>
					<div class="boxbigcontent">
						<div style="margin-top:-50px">
							<form action="<?=base_url()?>profil/updatevisimisi" method="post"  id="frmcontact2">
							<h3>Visi</h3>
							<textarea name="visi" id="editor1" class="editor" cols="400" rows="600" ><?=$visi?></textarea>
								<?php echo display_ckeditor($ckeditor); ?><br />
							<br />
							<h3>Misi</h3>
							<textarea name="misi" id="editor2" class="editor" cols="400" rows="600" ><?=$misi?></textarea>
								<?php echo display_ckeditor($ckeditor2); ?><br />
							<br />
							<div>
								<a href="javascript:simpan();" class="button" >Simpan</a>
							</div>
						</form>
						</div>
					</div>
					<div class="boxbigcontentbottom"></div>
				