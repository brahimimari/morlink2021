<?php
	include('pages/database.php');
	$id = $_GET['id'];
	$sql_menu33 = "select * from catalogue where id = $id";
	$res33 = mysql_query($sql_menu33);
	$data33 = mysql_fetch_array($res33);
	$vue = $data33['vue'];
	$catalogue = $data33['fichier'];
	$newVue = $vue+1; 
	echo $sql = "update catalogue set vue = $newVue where id = $id";
	mysql_query($sql);
	header('Location: documents/'.$catalogue);
	exit();
?>