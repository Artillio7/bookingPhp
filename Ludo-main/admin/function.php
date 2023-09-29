<?php
	
	include 'dbconnection.php';
//function produit

	function get_pro(){
		global $connect;
		$run_pro = $connect->query("select * from games");
		$dir_name=dirname(__FILE__)."/image/";
		
			while($row_pro=$run_pro->fetch(PDO::FETCH_ASSOC)){
			echo "<div class='prod-box'>
						<img src=";
						echo '"';
						echo "image";
						echo "/";
						echo $row_pro['img'];
						echo '"';
						echo ">
						<div class='prod-trans'>
							<div class='prod-feature'>";
								echo "<br><br><br><br><br><br><br><p>";
								echo $row_pro['titre'];
								echo"</p><br>
								<p style='color:#fff;'>prix: $";
								echo $row_pro['prix'];
								echo "/30 jours</p><br><br><br><br>
								<a href='admin_index.php?add_booking=";
								
								echo $row_pro['id'];
								echo "'><button>Commande</button></a>";
					echo "</div>
						</div>
					</div>
			";
			}
		
	}
	
//function search


function get_prod_search(){
	global $connect;
	if(isset($_GET['search'])){
		$searcharea=$_GET['searcharea'];
		$get_prod_search=$connect->query("select * from games where p_key_word like '$searcharea'");
		if($get_prod_search->rowcount() > 0){
			while($row_prod_search=$get_prod_search->fetch()){
			echo "<div class='prod-box'>
						<img src=";
						echo '"';
						echo "image";
						echo "/";
						echo $row_prod_search['img'];
						echo '"';
						echo ">
						<div class='prod-trans'>
							<div class='prod-feature'>";
								echo "<br><br><br><br><br><br><br><p>";
								echo $row_prod_search['titre'];
								echo"</p><br>
								<p style='color:#fff;'>prix: $";
								echo $row_prod_search['prix'];
								echo "/30 jours</p><br><br><br><br>
								<a href='admin_index.php?add_booking=";
								echo $row_prod_search['id'];
								echo "'><button>Commande</button></a>";
					echo "</div>
						</div>
					</div>
			";
			}
		}else{
			echo "<div class='c'>&nbsp;&nbsp;</div>
			<div class='error'><p style='color:#fff;font-weight:bold;text-align:center; width:1200px;'>Aucun jeu de se nom</p></div>";
		}
	}
}

//function search update


function get_prod_search_update(){

	if(isset($_GET['search'])){
		$searcharea=$_GET['searcharea'];
		$get_prod_search=$connect->query("select * from games where p_key_word like '$searcharea'");

		if($run_prod_search->rowcount() > 0){
			while($row_prod_search=$run_prod_search->fetch()){
			echo "<div class='prod-box'>
						<img src=";
						echo '"';
						echo "image";
						echo "/";
						echo $row_prod_search['img'];
						echo '"';
						echo ">
						<div class='prod-trans'>
							<div class='prod-feature'>";
								echo "<br><br><br><br><br><br><br><p>";
								echo $row_prod_search['titre'];
								echo"</p><br>
								<p style='color:#fff;'>prix: $";
								echo $row_prod_search['prix'];
								echo "/30 jours</p><br><br><br><br>";
								echo "<a href='mise-a-jour-jeu.php?update=";
								echo $row_prod_search['id'];
								echo "'><button>mise a jour</button></a>";
					echo "</div>
						</div>
					</div>
			";
			}
		}else{
			echo "<div class='c'>&nbsp;&nbsp;</div>
			<div class='error'><p style='color:#fff;font-weight:bold;text-align:center; width:1200px;'>Aucun jeu de se nom</p></div>";
		}
	}
}

//function search supprimer


function get_prod_search_sup(){

	if(isset($_GET['search'])){
		$searcharea=$_GET['searcharea'];
		$get_prod_search=$connect->query("select * from games where p_key_word like '$searcharea'");

		if($run_prod_search->rowcount() > 0){
			while($row_prod_search=$run_prod_search->fetch()){
			echo "<div class='prod-box'>
						<img src=";
						echo '"';
						echo "image";
						echo "/";
						echo $row_prod_search['img'];
						echo '"';
						echo ">
						<div class='prod-trans'>
							<div class='prod-feature'>
								<a href='supprimer.php?delete=";
								echo $row_prod_search['id'];
								echo "'><img src='image/delete.png' style='width: 30;float: right;'></a>";
								echo "<br><br><br><br><br><br><br><p>";
								echo $row_prod_search['titre'];
								echo"</p><br>
								<p style='color:#fff;'>prix: $";
								echo $row_prod_search['prix'];
								echo "/30 jours</p>";
					echo "</div>
						</div>
					</div>
			";
			}
		}else{
			echo "<div class='c'>&nbsp;&nbsp;</div>
			<div class='error'><p style='color:#fff;font-weight:bold;text-align:center; width:1200px;'>Aucun jeu de se nom</p></div>";
		}
	}
}

//function update
function get_pro_update(){
	global $connect;
		$get_pro_up=$connect->prepare("select * from games");
		$get_pro_up->execute(array());
		
			while($row_pro_up=$get_pro_up->fetch()){
			echo "<div class='prod-box'>
						<img src=";
						echo '"';
						echo "image";
						echo "/";
						echo $row_pro_up['img'];
						echo '"';
						echo ">
						<div class='prod-trans'>
							<div class='prod-feature'>";
								echo "<br><br><br><br><br><br><br><p>";
								echo $row_pro_up['titre'];
								echo"</p><br>
								<p style='color:#fff;'>prix: $";
								echo $row_pro_up['prix'];
								echo "/30 jours</p><br><br><br><br>";
								echo "<a href='mise-a-jour-jeu.php?update=";
								echo $row_pro_up['id'];
								echo "'><button>mise a jour</button></a>";
					echo "</div>
						</div>
					</div>
			";
			}
		
	}

//function supprimer
function get_pro_sup(){
	global $connect;
		$get_pro_sup=$connect->prepare("select * from games");
		$get_pro_sup->execute(array());
		
			while($row_pro_sup=$get_pro_sup->fetch()){
			echo "<div class='prod-box'>
						<img src=";
						echo '"';
						echo "image";
						echo "/";
						echo $row_pro_sup['img'];
						echo '"';
						echo ">
						<div class='prod-trans'>
							<div class='prod-feature'>
								<a href='supprimer.php?delete=";
								echo $row_pro_sup['id'];
								echo "'><img src='image/delete.png' style='width: 30;float: right;'></a>";
								echo "<br><br><br><br><br><br><br><p>";
								echo $row_pro_sup['titre'];
								echo"</p><br>
								<p style='color:#fff;'>prix: $";
								echo $row_pro_sup['prix'];
								echo "/30 jours</p>";
					echo "</div>
						</div>
					</div>
			";
			}
		
	}


//panier function

function booking(){
	global $connect;
	if(isset($_GET['add_booking'])){
		$pro_id=$_GET['add_booking'];
		$req=$connect->query("select disponibilité from games where id='$pro_id'");
		
		if($pro_id==0){
			echo "<script>alert('Le jeu nest pas disponible pour le moment');</script>";
		}else{
			$get_booking=$connect->query("select * from booking where id='$pro_id'");
			
			
			if($get_booking->rowcount()  < 0){
				echo "<script>alert('Le jeu nest pas disponible pour le moment');</script>";
			}else{
				$now = date('Y-m-d');
				$start_date = strtotime($now);
				$end_date = strtotime("+30 day", $start_date);
				$datera=date('Y-m-d', $end_date);
				$insert_booking=$connect->query("insert into booking values('$pro_id','$datera')");

				$req=$connect->query("update games set disponibilité='0' where id='$pro_id'");

					if(isset($run_i_booking)){
						echo "<script>alert('La commande a ete effectue avec succes');</script>";
						echo '<meta http-equiv="refresh" content="2; url=\'admin_index.php\'">';
					}
			}
		}
	}
}
?>