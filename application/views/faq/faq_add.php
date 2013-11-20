	<script type="text/javascript">

	$(function() {
		$("#butslide").click(function(){
			$("#panellogin").slideToggle("fast");
			$(this).toggleClass("active"); return false;
		}); 

		$('#tabsnav').tabs({ fx: { opacity: 'toggle' } });
		$('a.popup').lightBox({fixedNavigation:true});
	});

	function dropdown(id){
		var stat = document.getElementById(id).style.display;
		if(stat=="none"){
			$('.sub').hide();
			$('#'+id).show();
		}else{
			$('.sub').hide();
		}
	}

	function simpan(){
		var data1	= document.getElementById('f1').value;
		var data2	= document.getElementById('editor1').value;

		if(data1!="" && data2!=""){
			document.getElementById('frmcontact2').submit();
		}
		else{
			alert('Harap Isi Semua Field (*) !!');
		}

	}

	</script>

	
	<script type="text/javascript" src="<?= base_url() ?>public/js/jquery.validate.js"></script>
    
    <script type="text/javascript">
	$.validator.setDefaults({
		submitHandler: function() { document.getElementById('frmcontact2').submit(); }
	});

$().ready(function() {
	
	$("#frmcontact2").validate({
			rules: {
			
			
			txtjudul: {
				required: true,
				minlength: 4
			},
			editor1: {
				required: true,
				minlength: 10
			}
			
		},
		messages: {
			
			txtjudul: {
				required: "* Judul tidak boleh kosong",
				minlength: "* Minimal 4 karakter"
			},
									
			editor1: {
				required: "* Isi tidak boleh kosong",
				minlength: "* Minimal 10 karakter"
			}
		}
	});
});
</script>
	<h1 class="titlebig">Tambah FAQ</h1>
	<div class="boxbigcontent">
		<div class="boxess">
			<form method="post" action="<?= base_url() ?>faq/simpan" id="frmcontact2">
				<label>Pertanyaan</label>
				<input type="text" name="txtjudul" id="txtjudul" class="required" size="80"/> <span class="mand">*</span>
				<br />
				<br />
				<label>Jawab</label>
				<div class="ckWow3">
					<textarea name="editor" id="editor1" cols="100" rows="200"></textarea>
					<?php echo display_ckeditor($ckeditor); ?>
				</div>
				<br />
				<br />
				<div class="boxBtn">
					<button type="submit" class="button" style="height:20px;"><span class="disk"></span>Simpan</button>
					<a href="<?=base_url()?>faq/" class="button"><span class="cancel"></span>Batal</a>
				</div>
			</form>
		</div>
	</div>
	<div class="boxbigcontentbottom"></div>