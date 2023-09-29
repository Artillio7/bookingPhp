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
					<li><a href="../utilisateur/utilisateur_index.php"><img src="image/login.png" />CLIENT</a></li>
				</ul>
			</nav>
		</header>
		<section>
		<br><br><br><br><br><br>
		<form method="POST" action="retour.php">

		<?php
			include 'dbconnection.php';
			$row=$connect->prepare("select * from booking");
			$row->execute(array());
			if($row->rowcount() > 0){
				echo '<table border="1">';
				echo "<tr>
							<td style='width: 500px;height: 70px; background: #125487;'><h3><font color='#abcdef'>Titre</font></h3></td>
							<td style='width: 500px;height: 70px; background: #125487;'><h3><font color='#abcdef'>Date Retour</font></h3></td>
							<td style='width: 500px;height: 70px; background: #125487;'><h3><font color='#abcdef'></font></h3></td>
					  </tr>";
				while($ros=$row->fetch()){
					$r=$ros['id'];
					$d=$ros['datera'];
					$titre=$connect->query("select * from games where id='$r'");
					
					while($re=$titre->fetch()){
						echo '<table border="1">';
						echo "<td style='width: 500px;height: 70px; background: #125487;'><h3><font color='#abcdef'>".$re['titre']."</font></h3></td>";
						echo "<td style='width: 500px;height: 70px; background: #125487;'><h3><font color='#abcdef'>".$d."</font></h3></td>";
						echo "<td style='height: 70px; background: #125487;'><a href='retour.php'><button value='";
						echo $re['id'];
						echo"' name='id'><h3>Retour jeu</h3></button></a></td>";
						echo "<tr>";
					}
				}
				echo "</table>";

			}else{
				echo '<center><font color="#d2e4e4" size="9">Aucun jeu vous été commander</font></center>';
			}
		?>
		</form>
		<br><br><br><br><br><br>
		<section>
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
				Email:&nbsp; Online.library@gmail.com <br><br>
				Mobile:&nbsp; &nbsp; +21627******

			</p>
		</footer>

	</div>
</body>
</html>