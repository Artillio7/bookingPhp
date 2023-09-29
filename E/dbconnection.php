<?php

try{
	$connect = new PDO("mysql:host=localhost:3306;dbname=e2105825", "root", "");
} 	
catch (PDOException $th){
	die($th->getMessage());
}
?>