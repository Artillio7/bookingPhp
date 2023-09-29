<?php
session_start();
include 'dbconnection.php';

//post value

if (isset($_POST['inscription'])) {
	$nom=@$_POST['nom'];
	$prenom=@$_POST['prenom'];
	$annee=@$_POST['annee'];
	$dir_name=dirname(__FILE__)."/photos/";
	$img=@$_FILES['img']['name'];
	$img_type=@$_FILES['img']['type'];
	$img_size=@$_FILES['img']['size'];
	$img_error=@$_FILES['img']['error'];
	$img_tmp=@$_FILES['img']['tmp_name'];
	$motdepasse=@$_POST['motdepasse'];
	$adress=@$_POST['adress'];
	
	if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['annee'])  && !empty(($_FILES['img']['name'])) && !empty($_POST['motdepasse']) && !empty($_POST['adress'])) {
		print_r($_POST);
//move upload img
		move_uploaded_file($img_tmp,$dir_name.$img);

//insert pro
		$request = $connect->prepare("INSERT INTO member VALUES (NULL,?,?,?,?,?,?)");
		$request->execute(array($_POST['nom'], $_POST['prenom'], $_POST['annee'] , $_POST['motdepasse'], $_FILES['img']['name'], $_POST['adress']));
	}
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Log In</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
</head>
<header>
    <h4 class="titre">GAMESTORE</h4>
      <i class="fas fa-gamepad"></i>
      <button class="e">
        <a href="shop.php">Simulation</a>
        <a href="inscription.php ">Action/Aventure</a>
        <a href="">Réflexion</a>
      </button>
      <a href="">About </a><a href="">FAQ </a><a href="">Contact </a>
      <div  class="b" >
      <a class="c" href="Log In.php"><i class="fas fa-user-circle">Login</i></a>
      <a class="c" href="booking.php"><i class="fas fa-cart-plus"></i>Booking</i></a>
      </div>
  </header>
 <body>

<div class="box1">
				<br><h1 style="text-align: center; font-size: 25px;">Log In</h1><br>
					<form name="f" action="inscription.php"  method="POST" enctype="multipart/form-data">
					<div class="f">
					<p style="color: white;">Nom:</p>
					<input type="text" name="nom" placeholder="Nom" required="" style="height:40px;" /><br><br>
					<p style="color: white;">Prenom:</p>
					<input type="text" name="prenom" placeholder="Prenom" required="" style="height:40px;" /><br><br>
					<p style="color: white;">Année De Naissance:</p>
					<input type="number" name="annee" placeholder="Année de naissance" required="" style="height:40px;" /><br><br>
					<p style="color: white;">Mot de Passe:</p>
					<input type="password" name="motdepasse" placeholder="Mot de Passe" required="" style="height:40px;" /><br><br>
					<p style="color: white;">Photo:</p>
					<input type="file"  name="img" required="" style="height:40px;" /><br>
					<p style="color: white;">Adresse (exemple : 16 Bd charles nicolle):</p>
					<input type="text" name="adress" placeholder="Adresse" required="" style="height:40px;" /><br><br>
					
					<input type="submit" value=Valider name="inscription">
					 <a href="Game'storrent.html">Retour</a> <br><br>
					</div>
				</form>
			</div>
		  </div>
	
</body>
</html>