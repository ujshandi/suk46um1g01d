
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
	function simpan()
	{
		var data1	= document.getElementById('txtnama').value;
		var data2	= document.getElementById('txtusername').value;
		var data3	= document.getElementById('txtpassword').value;
		var data4	= document.getElementById('txtlevel').value;
		if(data1!="" && data2!="" && data3!="" && data4!="")
		{
			document.getElementById('frmcontact').submit();
		}
		else
		{
			alert('Harap Isi Semua Field (*) !!');
		}
	}
	</script>

        <h1 class="titlebig">Edit User</h1>
        <div class="boxbigcontent">
        <form method="post" action="<?=base_url()?>user/simpanedit"  id="frmcontact">
                <div class="boxess2">
                        <?php foreach($fields as $row): ?>
                        <input type="hidden" name="id_user" value="<?=$row->id_user?>" />
                        <label style="margin:-1px 0 0 0;">Nama Lengkap</label>
                        <input type="text" name="nama_asli" id="txtnama" class="textboxcontact" size="50" value="<?=$row->nama_asli?>" /> 
                        <span class="mand">*</span>
                        <br /><br />
                        <label style="margin:-1px 0 0 0;">Username</label>
                        <input type="text" name="username" id="txtusername" class="textboxcontact" size="50" value="<?=$row->username?>" /> 
                        <span class="mand">*</span>
                        <br /><br />
                        <label style="margin:-1px 0 0 0;">Password</label>
                        <input type="password" name="password" id="txtpassword" class="textboxcontact" size="50" value="<?=$row->password?>" />
                        <span class="mand">*</span>
                        <br /><br />
                        <label style="margin:-1px 0 0 0;">Level User</label>
                        <select name="id_level" id="txtlevel">
                                <option value="" selected="selected"> -- Level User --&nbsp;&nbsp;</option>
                                <?php foreach($dlevel as $s): ?>
                                <?php if($row->id_level==$s->id_level){ $style="selected"; }else{ $style=""; } ?>
                                <option value="<?=$s->id_level?>" <?=$style?> ><?=$s->nama_level?></option>
                                <?php endforeach; ?>
                        </select> <span class="mand">*</span>
                        <br /><br />
                        <br /><br />
                        <?php endforeach; ?>
                        <div class="boxBtn">						
                                <a href="javascript:simpan();" class="button"><span class="disk"></span>Simpan</a>
                                <a href="<?=base_url()?>user" class="button"><span class="cancel"></span>Batal</a>
                        </div>
                </div>
        </form>
        </div>
        <div class="boxbigcontentbottom"></div>
		