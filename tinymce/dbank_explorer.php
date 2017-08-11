<?php

// look up for the path
require_once( dirname(__FILE__) .'/dbank-uploader-config.php');

global $wpdb;

// check for rights
if ( !is_user_logged_in() || !current_user_can('edit_posts') ) 
	wp_die(__("You are not allowed to be here"));
	
?>

<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>dbank uploader</title>
<script type="text/javascript" src="http://www.dbank.com/minidisk_v2/js/Dbank.ServiceFrame.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo get_option('siteurl') ?>/wp-includes/js/tinymce/tiny_mce_popup.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo get_option('siteurl') ?>/wp-includes/js/tinymce/utils/mctabs.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo get_option('siteurl') ?>/wp-includes/js/tinymce/utils/form_utils.js"></script>
<script language="javascript" type="text/javascript">
    function init() {
    	tinyMCEPopup.resizeToInnerSize();
    }
    
    function insert_dbank_att(atturl) {
    	if(window.tinyMCE) {
    		window.tinyMCE.execInstanceCommand('content', 'mceInsertContent', false, atturl);
    		//Peforms a clean up of the current editor HTML. 
    		//tinyMCEPopup.editor.execCommand('mceCleanup');
    		//Repaints the editor. Sometimes the browser has graphic glitches. 
    		tinyMCEPopup.editor.execCommand('mceRepaint');
    		tinyMCEPopup.close();
    	}
    	
    	return;
    }
</script>
</head>
<body onload="tinyMCEPopup.executeOnLoad('init();');document.body.style.display='';" style="display: none">
<div id="db_win_holder"></div>
<div id="db_links" style="width:475px"></div>
<script type="text/javascript">
var db_win_holder = document.getElementById('db_win_holder');
var dbank_win = new Dbank.ServiceFrame(db_win_holder, 'http://www.dbank.com/minidisk_v2/file.jsp',
<?php
	echo "'".dbank_URLPATH."blank.htm');";
?>

dbank_win.addEvent('data', function(msg){
    msg = msg.replace(/\[url=([^\]]*)\]([^\[]*)\[\/url\]\s*/g, '<a href="$1" target="_blank">$2</a></br>');
    insert_dbank_att(msg);
});

</script>
</body>
</html>
