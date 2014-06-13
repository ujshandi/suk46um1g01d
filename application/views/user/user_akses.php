
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
//		var data1	= document.getElementById('txtnama').value;
//		var data2	= document.getElementById('txtusername').value;
//		var data3	= document.getElementById('txtpassword').value;
//		var data4	= document.getElementById('txtlevel').value;
//		if(data1!="" && data2!="" && data3!="" && data4!="")
//		{
			document.getElementById('frmcontact').submit();
//		}
//		else
//		{
//			alert('Harap Isi Semua Field (*) !!');
//		}
	}
	</script>

<h1 class="titlebig">Hak Akses User</h1>
<div class="boxbigcontent">
<form method="post" action="<?=base_url()?>user/simpanakses"  id="frmcontact">
<div class="boxess2">
        <?php foreach($fields as $row): ?>
        <input type="hidden" name="id_user" value="<?=$row->id_user?>" />
        <label style="margin:-1px 0 0 0;">Nama Lengkap</label>
        <input disabled="disabled" readonly="readonly" type="text" name="nama_asli" id="txtnama" class="textboxcontact" size="50" value="<?=$row->nama_asli?>" /> 
        <span class="mand">*</span>
        <br /><br />
        <label style="margin:-1px 0 0 0;">Username</label>
        <input disabled="disabled" readonly="readonly" type="text" name="username" id="txtusername" class="textboxcontact" size="50" value="<?=$row->username?>" /> 
        <span class="mand">*</span>
        <br /><br />
        <div style="padding:5px 15px;">
            <table class="data">
            <thead>
                <tr>
                    <th align="center"width="10px">No.</th>
                    <th align="center">Nama Menu</th>
                    <th align="center" width="15%">Bisa Akses ?</th>                                        
                </tr>
            </thead>
            <tbody>
                <?php $i=0; foreach($akses as $rowAkses): ?>
                     <tr>
                            <td align="center"><?=$i=$i+1?></td>                            
                            <td><?=$rowAkses->menu_name?></td>
                            <td align="center">
                                <input type="hidden" name="url<?=$i-1?>" value="<?=$rowAkses->url?>"/>
                                <input type="hidden" name="menu_id<?=$i-1?>" value="<?=$rowAkses->menu_id?>"/>
                                <?php if ($rowAkses->url!="#") {?>
                                <input type="checkbox" name="chk<?=$i-1?>"  <?=(($rowAkses->akses=="0")?"":"checked='checked'")?>/>
                                <?php } ?>
                            </td>
                            
                    </tr>
                <?php endforeach; ?>
                
            </tbody>
             </table>
            <input type="hidden" name="count" value="<?=$i?>"/>
        </div>
            
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
		