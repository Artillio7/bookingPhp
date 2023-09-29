<?php
session_start();
include 'dbconnection.php';
if (isset($_POST['submit'])) {
	if (!empty($_POST['nom']) && !empty($_POST['motdepasse'])) {
		$request = $connect->prepare("SELECT * FROM utilisateurs WHERE nom=? AND motdepasse=?");
		$request->execute(array($_POST['nom'], $_POST['motdepasse']));
		$nbr = $request->rowCount();
		if ($nbr > 0) {
			$data = $request->fetch();
			$_SESSION['nom'] = $data['nom'];
			$_SESSION['prenom'] = $data['prenom'];
			$_SESSION['id'] = $data['id'];
			header("Location:http://localhost/Ludo/accueil.html");
		} else {
			header("Location:index.php");
		}
	}
}
