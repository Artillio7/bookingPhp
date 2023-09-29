<?php 	
	session_start();
	include 'dbconnection.php';
	//post value

	if (isset($_POST['addpro'])) {
		$type=@$_POST['type'];
		$disponibilité=@$_POST['disponibilité'];
		$p_key_word=@$_POST['p_key_word'];
		$titre=@$_POST['titre'];
		$description=@$_POST['description'];
		$dir_name=dirname(__FILE__)."/image/";
		$img=@$_FILES['img']['name'];
		$img_type=@$_FILES['img']['type'];
		$img_size=@$_FILES['img']['size'];
		$img_error=@$_FILES['img']['error'];
		$img_tmp=@$_FILES['img']['tmp_name'];
		$prix=@$_POST['prix'];
		$age=@$_POST['age'];
		
		if (!empty($_POST['type']) && !empty($_POST['disponibilité']) && !empty($_POST['p_key_word']) && !empty($_POST['titre']) && !empty($_POST['description']) && !empty(($_FILES['img']['name'])) && !empty($_POST['prix']) && !empty($_POST['age']) && !empty($_POST['nbjoueur']) && !empty($_POST['activité']) && !empty($_POST['nature'])) {
	print_r($_POST);
			//move upload img
		move_uploaded_file($img_tmp,$dir_name.$img);
	
	//insert pro
	$request = $connect->prepare("INSERT INTO games VALUES (NULL,?,?,?,?,?,?,?,?,?,?,?)");
	$request->execute(array($_POST['type'], $_POST['disponibilité'], $_POST['p_key_word'], $_POST['titre'], $_POST['description'], $_FILES['img']['name'], $_POST['prix'], $_POST['age'], $_POST['nbjoueur'], $_POST['activité'], $_POST['nature']));
	//$request = $connect->prepare("SELECT * FROM games WHERE id=?");
	//$request->execute(array(htmlspecialchars($_GET['id'])));
	
		//$run_pro=mysql_query($request);
		//echo '<meta http-equiv="refresh" content="2; url=\'addpro.php\'">';	
		//echo "<script>alert ('L'ajout est termine avec success');</script>";
	}	
	}
?>	

<html>
<head>
	<title>
		LUDOTHEQUE
	</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>


<body>
	<div class="wrapper">
		<header>
		<div class="logo">
			<img src="image/logo.PNG">
			
		</div>

			<nav>
				<ul>
					<li><a href="admin_index.php">ACCUEIL</a></li>
					<li><a href="addpro.php">AJOUTER_JEU</a></li>
					<li><a href="update.php">MISE_A_JOUR_JEU</a></li>
					<li><a href="delete.php">SUPPRIMER_JEU</a></li>
					<li><a href="booking.php">VOS_JEUX</a></li>
					<li><a href="feedback.php">COMMENTAIRES</a></li>
					<li><a href="../utilisateur/student_index.php"><img src="image/login.png" />CLIENT</a></li>
				</ul>
			</nav>
		</header>
		<section>
		<br><br>
		<div class="log_img">
		   <br>
		   
			<div class="box1">
				<h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">LUDOTHEQUE</h1><br>
				<h1 style="text-align: center; font-size: 25px;">Ajout d'un jeu</h1><br>
				<form name="f" action="addpro.php" method="POST" enctype="multipart/form-data">
					<div class="f">
					<p style="color: white;">Titre du jeu:</p>
					<input type="text" name="titre" placeholder="Titre du jeu" required="" style="height:40px;" /><br><br>
					<p style="color: white;">Disponibilité:</p>
					<input type="text" name="disponibilité" placeholder="Disponibilité" required="" style="height:40px;" /><br><br>
					<p style="color: white;">Type du jeu:</p>
					<input type="text" name="type" placeholder="Type du jeu" required="" style="height:40px;" /><br><br>
					<p style="color: white;">Prix:</p>
					<input type="number" name="prix" placeholder="Prix" required="" style="height:40px;" /><br><br>
					<p style="color: white;">Tranche D'Age:</p>
					<input type="number" name="age" placeholder="Tranche D'Age" required="" style="height:40px;" /><br><br>
					<p style="color: white;">Photo:</p>
					<input type="file" name="img" required="" style="height:40px;" /><br>
					<p style="color: white;">Mot de recherche(exemple : Titre du jeue):</p>
					<input type="text" name="p_key_word" placeholder="Mot de recherche" required="" style="height:40px;" /><br><br>
					<p style="color: white;">Description:</p>
					<input type="text" name="description" placeholder="Description" required="" style="height:40px;" /><br><br>
					<p style="color: white;">NOMBRE DE JOUEUR:</p>
					<input type="text" name="nbjoueur" placeholder="Nombre de Joueur" required="" style="height:40px;" /><br>
					<p style="color: white;">Activité:</p>
					<input type="text" name="activité" placeholder="Activité" required="" style="height:40px;" /><br><br>
					<p style="color: white;">Nature:</p>
					<input type="text" name="nature" placeholder="Nature" required="" style="height:40px;" /><br><br>
					<input class="submit" type="submit" name="addpro" value="Ajouter jeu" onclick="verif();" style="height: 40px;border-radius: 0px;border: 0px;font-size: larger;" />
					</div>
				</form>
			</div>
		  </div>
		<br><br><br><br><br><br>
		</section>
		<footer>
				<br>
			<h3 style="color:white;text-align: center;">Contact us through social media</h3><br>

			<div style="margin:0px 485px; width: 600px; height: 50px;">
				<ul>
				<li><a href="https://facebook.com" class="fa"><img src="image/fa.png"></a></li>
				<li><a href="https://instagram.com" class="fa"><img src="image/insta.png"></a></li>
				<li><a href="https://youtube.com" class="fa"><img src="image/you.png"></a></li>
				<li><a href="https://gmail.com" class="fa"><img src="image/gm.png"></a></li>
				</ul>
			</div>

			<br>
			<p style="color:white;text-align: center;">
				<br>
				Email:&nbsp; ebenlas@gmail.com <br><br>
				Mobile:&nbsp; &nbsp; +33632******


			</p>
		</footer>

	</div>
</body>
</html>