<?php
$id = $_POST["sid"];
$dbh = new PDO("mysql:host=localhost;dbname=ordinateur","root","abde1234");
$sql = "UPDATE latitude SET ID = :ID,libellé = :libellé,prix = :prix WHERE id = $id";
$addStudentsQuery = $dbh->prepare($sql);
$addStudentsQuery->bindParam(":ID",$_POST["ID"],PDO::PARAM_STR);
$addStudentsQuery->bindParam(":libellé",$_POST["libellé"],PDO::PARAM_STR);
$addStudentsQuery->bindParam(":prix",$_POST["prix"],PDO::PARAM_STR);
$addStudentsQuery->execute();
?>
