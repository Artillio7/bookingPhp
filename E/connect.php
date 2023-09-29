<?php
session_start();
include 'dbconnection.php';
if (isset($_POST['submit'])){
	if (!empty($_POST['nom']) && !empty($_POST['motdepasse'])) {
		$request = $connect->prepare("SELECT * FROM `member` WHERE nom =? AND motdepasse=?");
		$request->execute(array($_POST['nom'], $_POST['motdepasse']));
		$nbr = $request->rowCount();
		if ($nbr > 0) {
			$data = $request->fetch();
			$_SESSION['FirstName'] = $data['FirstName'];
			$_SESSION['Name'] = $data['Name'];
			$_SESSION['ID_Member'] = $data['ID_Member'];
			header("Location:http://localhost/Ludo/accueil.html");
		} 
		else {
			header("Location:index.php");
		}
	}
}
?>