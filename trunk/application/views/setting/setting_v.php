	<script type="text/javascript">
	

	function simpan()
	{
		
			document.getElementById('frmcontact2').submit();
		
	}	
	</script>
    
	<h1 class="titlebig">Data <?=$title_page?></h1>
	<div class="boxbigcontent">
		<div class="boxess">
			<?= validation_errors(); ?>
			<form method="post" action="<?= base_url() ?>setting/simpan" id="frmcontact2" enctype="multipart/form-data">
				<div class="ckWow">
				<input type="hidden" value="themes" name="sys_key"/>
				<label>Themes</label>
				<select name="sys_value">	
					<option value="blue" <?=($themes->sys_value=="blue"?"selected":"")?>>Biru</option>
					<option value="red" <?=($themes->sys_value=="red"?"selected":"")?>>Merah</option>
					<option value="green" <?=($themes->sys_value=="green"?"selected":"")?> >Hijau</option>
					<option value="gray" <?=($themes->sys_value=="gray"?"selected":"")?>>Abu-abu</option>
				</select>
				<br /><br />
				</div>
				<br />
				<div class="boxBtn">
					<a href="javascript:simpan();" class="button"><span class="disk"></span>Simpan</a>					
				</div>
			</form>
		</div>
	</div>
	<div class="boxbigcontentbottom"></div>