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
	
				<h1 class="titlebig">Tanggapi Pesan Pengunjung</h1>

					<div class="boxbigcontent">
                    
                    <div class="psn-guest">
                    <p><?= $isi ?></p>
                    </div>
                     <br />
                   	                   
                  	 <div align="right"><b><?= $pengirim ?>&nbsp;|&nbsp;<?= $email ?></b></div>
                     <div align="right"><?= $tanggal ?></div>
                     <br />
                     <h2 class="title">Jawab : </h2>

					<form method="post" action="<?=base_url()?>pesan/simpantanggapi"  id="frmcontact">

					<div>
						<input type="hidden" name="id_pesan" class="textboxcontact" value="<?= $id_pesan; ?>"/>
						<input type="hidden" name="tgl" class="textboxcontact" value="<?= $tgl; ?>"/>
						<input type="hidden" id="f1" name="oleh" class="textboxcontact" value="<?=$this->session->userdata('id_level')?>"/>
						

						<textarea name="isitanggapi" id="editor1">isi disini</textarea>
							<?php echo display_ckeditor($ckeditor); ?>
						<br /><br />

						<div align="right">
						
                        <a href="javascript:simpan();" class="button"><span class="disk"></span>Simpan</a>
						<a href="<?=base_url()?>pesan" class="button"><span class="cancel"></span>Batal</a>
						
						</div>
						<br />
					</div>

					</form>

					</div>

					<div class="boxbigcontentbottom"></div>

