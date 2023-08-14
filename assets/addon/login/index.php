<?php
	$page = '../index.php';
	if (!headers_sent()){
	  header("Location:$page");
	  exit();
	}else{
	  echo "<meta http-equiv=refresh content=0;URL=$page>";
	  exit();
	}
?>