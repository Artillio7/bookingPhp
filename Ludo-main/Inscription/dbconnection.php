<?php

try {
	$connect = new PDO("mysql:host=localhost:3306;dbname=ludo", "root", "");
} catch (PDOException $th) {
	die($th->getMessage());
}
