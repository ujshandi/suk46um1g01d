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
			document.getElementById('frmcontact').submit();
		}
		else{
			alert('Harap Isi Semua Field (*) !!');
		}
	}
	</script>

	
	<script type="text/javascript" src="<?= base_url() ?>public/js/jquery.validate.js"></script>
    
    <script type="text/javascript">
	$.validator.setDefaults({
	submitHandler: function() { document.getElementById('frmcontact').submit(); }
});

$().ready(function() {
	
	$("#frmcontact").validate({
		rules: {
			
			
			txtjudul: {
				required: true,
				minlength: 4
			},
			editor: {
				required: true,
				minlength: 10
			}
			
		},
		messages: {
			
			txtjudul: {
				required: "* Pertanyaan tidak boleh kosong",
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
	
	

				<h1 class="titlebig">Edit FAQ</h1>

					<div class="boxbigcontent">
                    
                    <form method="post" action="<?= base_url() ?>faq/simpanedit"  id="frmcontact">
                    <?php foreach($fields as $row): ?>
                    <input type="hidden" name="id_faq" id="id_faq" class="required" value="<?= $row->id_faq ?>" size="80"/>
                    <label style="margin-left:-15px;">Pertanyaan</label><br /><br />

					<input type="text" name="txtjudul" id="txtjudul" value="<?= $row->pertanyaan ?>" class="required" size="80"/> <span>*</span><br />
					                                                    
                    <label style="margin-left:-15px;">Jawab</label><br /><br />
					
                    <textarea name="editor" id="editor1"><?= $row->jawab ?></textarea><br />
			<?php echo display_ckeditor($ckeditor); ?>
					<div align="right">
						
						<button type="submit" value="Update"class="button"><span class="disk"></span>Simpan</button>
						<a href="<?=base_url()?>faq" class="button"><span class="cancel"></span>Batal</a>

						</div>
						
					<?php endforeach; ?>

					</form>

					</div>

					<div class="boxbigcontentbottom"></div>

			
