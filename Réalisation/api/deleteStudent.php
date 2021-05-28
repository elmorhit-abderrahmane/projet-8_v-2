<?php
$id = $_POST["sid"];
$dbh = new PDO("mysql:host=localhost;dbname=ordinateur", "root", "abde1234");
$sql = "DELETE FROM latitude WHERE id = $id";
$getStudents = $dbh->prepare($sql) ;
$getStudents->execute();
?>
