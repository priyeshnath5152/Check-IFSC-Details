<div id="result"></div>
<form method="post">
	<input type="textbox" name="ifsc" id="ifsc" / required>
	<input type="button" name="submit" value="submit" onclick="getIFSC()" />
</form>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
	function getIFSC(){
		var ifsc=jQuery('#ifsc').val();
		jQuery.ajax({
			url:'ifsc_get.php',
			data:'ifsc='+ifsc,
			type:'post',
			success:function(result){
				jQuery('#result').html(result);
			}
		})
	}
</script>