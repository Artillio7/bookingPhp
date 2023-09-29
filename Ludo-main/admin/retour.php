<?php
	session_start();
	include 'dbconnection.php';
$id=$_POST['id'];



$req=$connect->query("update games set disponibilité='1' where id='$id'");


$req=$connect->query("delete from booking where id='$id'");


$req=$connect->query("delete from booking_user where id='$id'");


echo '<meta http-equiv="refresh" content="2; url=\'booking.php\'">';

echo "<script>alert ('La retour de jeu a ete effectue');</script>";

?>