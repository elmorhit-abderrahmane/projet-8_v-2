<?php


$servername = "localhost";
$username = "root";
$dbname="ordinateur";
$password ="abde1234";

// Creer la connexion
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Checker connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM latitude";
$result = mysqli_query($conn, $sql);

// détermine le nombre de ligne : mysqli_num_rows() 
if (mysqli_num_rows($result) > 0) {
  //Récupère une ligne de résultat sous forme de tableau associatif :mysqli_fetch_assoc()
  echo "<table border='2'>";
  echo "<tr><th> ID </th>";
  echo "<th> libellé </th>";
  echo "<th> prix </th></tr>";
  while($row = mysqli_fetch_assoc($result)) {
    echo  "<tr>"."<td>".$row["ID"]."</td>" ."<td>". $row["libellé"]. "</td>"."<td>". $row["prix"]. "</td>"."</tr>";
  }
  echo "</table>";
}
else {
  echo "la table est vide";
}

mysqli_close($conn);
?> 