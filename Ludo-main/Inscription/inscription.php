<?php
session_start();
include 'dbconnection.php';

//post value

if (isset($_POST['inscription'])) {
	$nom=@$_POST['nom'];
	$prenom=@$_POST['prenom'];
	$annee=@$_POST['annee'];
	$loisirs=@$_POST['loisirs'];
	$dir_name=dirname(__FILE__)."/photos/";
	$img=@$_FILES['img']['name'];
	$img_type=@$_FILES['img']['type'];
	$img_size=@$_FILES['img']['size'];
	$img_error=@$_FILES['img']['error'];
	$img_tmp=@$_FILES['img']['tmp_name'];
	$motdepasse=@$_POST['motdepasse'];
	$adress=@$_POST['adress'];
	
	if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['annee']) && !empty($_POST['loisirs']) && !empty(($_FILES['img']['name'])) && !empty($_POST['motdepasse']) && !empty($_POST['adress'])) {
print_r($_POST);
		//move upload img
	move_uploaded_file($img_tmp,$dir_name.$img);

//insert pro
$request = $connect->prepare("INSERT INTO utilisateurs VALUES (NULL,?,?,?,?,?,?,?)");
$request->execute(array($_POST['nom'], $_POST['prenom'], $_POST['annee'], $_POST['loisirs'], $_POST['motdepasse'], $_FILES['img']['name'], $_POST['adress']));



	}
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>LUDOTHEQUE</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
</head>

<body>
<div class="box1">
				<h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">LUDOTHEQUE</h1><br>
				<h1 style="text-align: center; font-size: 25px;">INSCRIPTION</h1><br>
				<form name="f" action="inscription.php"  method="POST" enctype="multipart/form-data">
					<div class="f">
					<p style="color: white;">Nom:</p>
					<input type="text" name="nom" placeholder="Nom" required="" style="height:40px;" /><br><br>
					<p style="color: white;">Prenom:</p>
					<input type="text" name="prenom" placeholder="Prenom" required="" style="height:40px;" /><br><br>
					<p style="color: white;">Année De Naissance:</p>
					<input type="number" name="annee" placeholder="Année de naissance" required="" style="height:40px;" /><br><br>
					<p style="color: white;">Loisirs:</p>
					<div class="f">
						<p style="color: white;" for="voyage">Voyage: </p>
						<input type="checkbox" name="loisirs" value="Voyage"  style="height:10px;" /><br><br>
						<p style="color: white;"  for="voyage">Sport: </p>
						<input type="checkbox" name="loisirs" value="Sport"  style="height:10px;" /><br><br>>
						<P style="color: white;" for="lecture">Lecture: </p>
						<input type="checkbox" name="loisirs" value="Lecture" style="height:10px;" /><br><br>
	
					</div>
					
					<p style="color: white;">Mot de Passe:</p>
					<input type="password" name="motdepasse" placeholder="Mot de Passe" required="" style="height:40px;" /><br><br>
					<p style="color: white;">Photo:</p>
					<input type="file"  name="img" required="" style="height:40px;" /><br>
					<p style="color: white;">Adresse(exemple : 11 BD CAHRLES NICOLLE):</p>
					<input type="text" name="adress" placeholder="Adresse" required="" style="height:40px;" /><br><br>
					
					<input type="submit" value=Valider name="inscription">
					 <a href="index.php">Retour</a> <br><br>
					</div>
				</form>
			</div>
		  </div>
	
</body>

</html>