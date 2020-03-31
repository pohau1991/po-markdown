<?php
	include_once("../classes/MarkDown.php");
	if(isset($_POST['sampleForMarkdown']) && strlen($_POST['sampleForMarkdown'])){
		$string = new MarkDown($_POST['sampleForMarkdown']);
		echo $string->displayMarkedDownString();
	}else{
		echo '<p class="error-msg">Empty String Detected</p>';	
	}
	
?>