<?php
$dbh = new PDO("mysql:host=localhost;dbname=ordinateur","root","abde1234");
$sql = " INSERT INTO latitude(ID,libellé,prix,) VALUES (:ID,:libellé,:prix,)";
$addStudentsQuery = $dbh->prepare($sql);
$addStudentsQuery->bindParam(":ID",$_POST["ID"],PDO::PARAM_STR);
$addStudentsQuery->bindParam(":libellé",$_POST["libellé"],PDO::PARAM_STR);
$addStudentsQuery->bindParam(":prix",$_POST["prix"],PDO::PARAM_STR);
$addStudentsQuery->execute();
?>
