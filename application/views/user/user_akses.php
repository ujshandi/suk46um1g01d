
	<script type="text/javascript">
	
	$(function() {
		$("#butslide").click(function(){
			$("#panellogin").slideToggle("fast");
			$(this).toggleClass("active"); return false;
		});
		$('#tabsnav').tabs({ fx: { opacity: 'toggle' } });
		$('a.popup').lightBox({fixedNavigation:true});
                
                loadLevelAkses = function(level){
            
            $("#divLevelAkses").load("<?=base_url()?>/user/loadLevelAkses/"+level);
                }

                $("#id_level").change(function(){
                    
                    loadLevelAkses($(this).val());

                });
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

<h1 class="titlebig">Hak Akses Per Level User</h1>
<div class="boxbigcontent">
<form method="post" action="<?=base_url()?>user/simpanakses"  id="frmcontact">
<div class="boxess2">
       
      
        <label style="margin:-1px 0 0 0;">Level User</label>
                        <select name="id_level" id="id_level">
                                <option value="-1" selected="selected"> -- Level User --&nbsp;&nbsp;</option>
                                <?php foreach($dlevel as $s): ?>
                               
                                <option value="<?=$s->id_level?>"  ><?=$s->nama_level?></option>
                                <?php endforeach; ?>
                        </select> <span class="mand">*</span>
      
        <div style="padding:5px 15px;" id="divLevelAkses">
            <table class="data">
            <thead>
                <tr>
                    <th align="center"width="10px">No.</th>
                    <th align="center">Nama Menu</th>
                    <th align="center" width="15%">Bisa Akses ?</th>                                        
                </tr>
            </thead>
            <tbody>
               
                     <tr>
                         <td align="center">&nbsp;</td>                            
                         <td align="center">&nbsp;</td>                            
                         <td align="center">&nbsp;</td>                            
                            
                            
                    </tr>
               
                
            </tbody>
             </table>
            
        </div>
            
        
       
        <div class="boxBtn">						
                <a href="javascript:simpan();" class="button"><span class="disk"></span>Simpan</a>
                <a href="<?=base_url()?>user" class="button"><span class="cancel"></span>Batal</a>
        </div>
</div>
</form>
</div>
<div class="boxbigcontentbottom"></div>
		