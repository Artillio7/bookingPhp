<?php
session_start();
include 'dbconnection.php';
?>
<html>
    <head>
        <meta charset="utf-8" />
        <title>GAMESTORE</title>
        <link rel="stylesheet" href="style.css" /><label></label>
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

    <div id="main-nav">
        <center>
        <div id="search">
            <form action="" method="GET">
                <input class="search-area" type="text" name="searcharea" placeholder="chercher votre jeu">
                <button class="search-btn" type="submit" name="search"><img src="IMG/43.jpg"></button>
            </form>
        </div>
        </center>
    </div>
    
    <table border="0.7">
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    </table>

</body>
</html>
