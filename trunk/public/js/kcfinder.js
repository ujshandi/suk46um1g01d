function openKCFinder(url_desti,dirname,filetype) {
    window.KCFinder = {
        callBack: function(url) {
        //    alert(<?=$this->session->userdata('kcfinder');?>);
			window.KCFinder = null;
			//var path =  url.split(url);
			//var folder = url.substring(0,url.lastIndexOf("/")+1);
			$(url_desti).val(url);
			//$(url_desti).val(base_url+url);
			//alert(window.KCFinder.dir);
      
        }
    };
    window.open(base_url+'public/kcfinder-2.51/browse.php?type='+filetype+'&dir='+dirname,
        'kcfinder_image', 'status=0, toolbar=0, location=1, menubar=0, ' +
        'directories=0, resizable=1, scrollbars=0, width=800, height=600'
    );
}


function openKCFinder_singleFile(url_desti,dirname,filetype) {
    window.KCFinder = {};
    window.KCFinder.callBack = function(url) {
        // Actions with url parameter here
        //    alert(<?=$this->session->userdata('kcfinder');?>);
			window.KCFinder = null;
			//var path =  url.split(url);
			//var folder = url.substring(0,url.lastIndexOf("/")+1);
			$(url_desti).val(url);
			//$(url_desti).val(base_url+url);
			//alert(window.KCFinder.dir);
    };
    window.open(base_url+'public/kcfinder-2.51/browse.php?type='+filetype+'&dir='+dirname, 'kcfinder_single', 'status=0, toolbar=0, location=1, menubar=0, ' +
        'directories=0, resizable=1, scrollbars=0, width=800, height=600');
}

function openKCFinder_multipleFiles() {
    window.KCFinder = {};
    window.KCFinder.callBackMultiple = function(files) {
          window.KCFinder = null;
            $(url_desti).text("");
			var list = "";
            for (var i = 0; i < files.length; i++){
                list += files[i] + "\n";
			}
			//alert(list);
			$(url_desti).text(list);	
    };
    window.open('/kcfinder/browse.php', 'kcfinder_multiple');
}