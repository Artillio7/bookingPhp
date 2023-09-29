<?php
session_start();
if (empty($_SESSION)) {
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
	<div class="box">
 			<h1 style="text-align: center; font-size: 25px;">Log In</h1><br>
				<form name="f" action="connect.php"  method="POST" enctype="multipart/form-data">
					<div class="f">
					<p style="color: white;">Nom:</p>
					<input type="text" name="nom" placeholder="Nom" required="" style="height:40px;" /><br><br>
					<p style="color: white;">Mot de Passe:</p>
					<input type="password" name="motdepasse" placeholder="Mot de Passe" required="" style="height:40px;" /><br><br>
					
					<a href="C:\wamp64\www\Ludo\acceuil.html"  ><input type="submit" value="Valider" name="submit"></a><br><br>
					<a  href="inscription.php">S'inscrire</a>
			</form>
		</div>
	</body>

</html>
<?php
} else {
?>
	<a href="deconnexion.php">Se déconnecter</a>
<?php
}
?>