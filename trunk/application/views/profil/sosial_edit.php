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
				<h1 class="titlebig">Sosial dan Ekonomi</h1>
					<div class="boxbigcontent">
						<div style="margin-top:-70px">
							<form action="<?=base_url()?>profil/updatesosial" method="post"  id="frmcontact2">

							<textarea name="sosial" id="editor1" class="editor" cols="400" rows="600" ><?=$sosial?></textarea>
								<?php echo display_ckeditor($ckeditor); ?><br />
							<br />
							<div>
								<a href="javascript:simpan();" class="button" >Simpan</a>
							</div>
							</form>
						</div>
					</div>
					<div class="boxbigcontentbottom"></div>
				