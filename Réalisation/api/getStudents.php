<?php
$dbh = new PDO("mysql:host=localhost;dbname=ordinateur","root","abde1234");
$sql = " SELECT * FROM latitude ";
$studentsQuery = $dbh->query($sql);
$getStudents = $studentsQuery->fetchAll(PDO::FETCH_ASSOC);
print_r(json_encode($getStudents));
?>
