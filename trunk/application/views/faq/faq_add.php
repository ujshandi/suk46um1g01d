

	<script type="text/javascript" src="<?=base_url()?>public/js/tiny_mce/tiny_mce.js"></script>

	<script type="text/javascript">

	tinyMCE.init({

		// General options

		mode : "textareas",

		theme : "advanced",

		skin : "o2k7",

		plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups,autosave",

		// Theme options

		theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,formatselect,fontselect,fontsizeselect,|,justifyleft,justifycenter,justifyright,justifyfull,|,bullist,numlist,|,link,unlink,|,preview,fullscreen,",

		theme_advanced_buttons2 : "undo,redo,|,image,media,charmap,|,hr,sub,sup,|,forecolor,backcolor,|,ltr,rtl,|,code,|,tablecontrols,",

		theme_advanced_buttons3 : "",

		theme_advanced_toolbar_location : "top",

		theme_advanced_toolbar_align : "left",

		theme_advanced_statusbar_location : "bottom",

		theme_advanced_resizing : false,



		// Example word content CSS (should be your site CSS) this one removes paragraph margins

		content_css : "<?=base_url()?>public/media/css/word.css",



		// Drop lists for link/image/media/template dialogs

		template_external_list_url : "<?=base_url()?>public/media/lists/template_list.js",

		external_link_list_url : "<?=base_url()?>public/media/lists/link_list.js",

		external_image_list_url : "<?=base_url()?>public/media/lists/image_list.js",

		media_external_list_url : "<?=base_url()?>public/media/lists/media_list.js",



		// Replace values for the template plugin

		template_replace_values : {

			username : "Some User",

			staffid : "991234"

		}

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

	function simpan()

	{

		var data1	= document.getElementById('f1').value;

		var data2	= document.getElementById('editor').value;

		

		if(data1!="" && data2!="")

		{

			document.getElementById('frmcontact').submit();

		}

		else

		{

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
				required: "* Judul tidak boleh kosong",
				minlength: "* Minimal 4 karakter"
			},
									
			editor: {
				required: "* Isi tidak boleh kosong",
				minlength: "* Minimal 10 karakter"
			}
		}
	});
	
	
});
</script>
	   
<style type="text/css">
#frmcontact { width: 500px; }
#frmcontact label { width: 250px; }
#frmcontact label.error, #frmcontact input.submit { margin-left: 20px; padding:2px ; color:#FF0000}

</style>
	

				<h1 class="titlebig">Tambah FAQ</h1>

					<div class="boxbigcontent">
                    
                    <form method="post" action="<?= base_url() ?>faq/simpan"  id="frmcontact">
                    
                    <label style="margin-left:-15px;">Pertanyaan</label><br /><br />

					<input type="text" name="txtjudul" id="txtjudul" class="required" size="80"/> <span>*</span><br />
					                                                    
                    <label style="margin-left:-15px;">Jawab</label><br /><br />
					
                    <textarea name="editor" id="editor"></textarea><br />

					<div align="right">
						
						<button type="submit" class="buttons buttons-orange"><span class="disk"></span>Simpan</button>
                        <a href="<?=base_url()?>faq/" class="buttons buttons-orange"><span class="cancel"></span>Batal</a>

						</div>
						
					

					</form>

					</div>

					<div class="boxbigcontentbottom"></div>

			
