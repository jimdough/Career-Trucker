<script language="javascript"> 
	function qdisplay(id, disp) {
		if(!(id instanceof Array)) id = [id];
		var len = id.length;
		for(var i = 0; i < len; i++) {
			var e = document.getElementById(id[i]);
			if(e) e.style.display = disp;
	}}
</script>
<link href="/longForm.css" rel="stylesheet" type="text/css" />
<?php if($form_incomplete): ?>
<p style="border:1px solid #800; color:#800; background-color:#fcc;"><strong>Please complete the form</strong></p>
<?php endif; ?>
<div id="longContactForm" style="width:600px;">
<form method="post">
<div class="sectionBreak">
