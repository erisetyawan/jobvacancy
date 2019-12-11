<?php 
$id = $_GET["page"];
if (isset($id)){
	if ($id=='home'){
		include "home.php";
	}
	if ($id=='detail'){
		include "detail.php";
	}else{
		include "404.php";
	}
}else if (empty($page)){
	include "home.php";
}else{
	include "404.php";
}
?>

