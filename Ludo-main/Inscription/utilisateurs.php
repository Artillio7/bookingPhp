<?php
include 'dbconnection.php';
$request = $connect->prepare("SELECT * FROM utilisateurs WHERE id=?");
$request->execute(array(htmlspecialchars($_GET['id'])));
$data = $request->fetch();
echo "Vous etes " . $data['nom'] . " " . $data['prenom'] . "<br>";
echo "Vous etes né en " . $data['annee'] . "<br>";
echo "Loisirs : " . $data['loisirs'] . "<br>";
echo "Votre mot de passe est : " . $data['motdepasse'] . "<br>";
echo "Votre photo : <br>" . $data['img'] . "<br>";
echo "Votre Adresse : <br>" . $data['adress'] . "<br>";
echo "<a href='inscription.php?id=" . $data['id'] . "'>Modifier mes données</a>";
