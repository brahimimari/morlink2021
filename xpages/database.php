<?php
$hote="localhost";
$motdepass='';
$nomutilisateur="root";
$nomdelabas="morlink";

$connection= @mysql_connect($hote,$nomutilisateur,$motdepass) or die("Erreur de connexion: ".mysql_error($link));
mysql_select_db($nomdelabas,$connection);

$conn=mysqli_connect("localhost",$nomutilisateur,$motdepass,$nomdelabas);
// $hote="localhost";
// $motdepass='Warcraft01@';
// $nomutilisateur="p42pw6uh_site";
// $nomdelabas="p42pw6uh_site";
// $connection=mysql_connect($hote,$nomutilisateur,$motdepass) or die("Erreur de connexion: ".mysql_error($link));
// mysql_select_db($nomdelabas,$connection);
?>

