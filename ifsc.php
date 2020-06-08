<?php
if (isset($_POST['submit'])) {
	$ifsc=$_POST['ifsc'];
	$json=@file_get_contents('https://ifsc.razorpay.com/'.$ifsc);
	$arr=json_decode($json);
	if (isset($arr->BRANCH)) {
	echo "Branch:-".$arr->BRANCH."<br>";
	echo "State:-".$arr->STATE."<br>";
	echo "City:-".$arr->CITY."<br>";
	echo "District:-".$arr->DISTRICT."<br>";
	echo "Contact:-".$arr->CONTACT."<br>";
	echo "Address:-".$arr->ADDRESS."<br>";
	}
	else{
		echo "Invalid IFSC code.";
	}
}
?>


<form method="post">
	<input type="textbox" name="ifsc"/ required>
	<input type="submit" name="submit"/>
</form>