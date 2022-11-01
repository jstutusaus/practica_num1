<?php 
include "databaseCV.php";

$nom=$_POST['nom'];
$direccio=$_POST["direccio"];
$telefon=$_POST["telefon"];
$correu=$_POST["correu"];
$data=$_POST["data"];
$pais=$_POST["pais"];
$mobil=$_POST["mobil"];
$estat=$_POST["estat"];
$vehicle=$_POST["vehicle"];

$sql="INSERT INTO DB_CV_1 (nom, direccio, telefon, correu, data, pais, mobil, estat, vehicle) VALUE('$nom', '$direccio', '$telefon', '$correu', '$data', '$pais', '$mobil', '$estat', '$vehicle')";
echo mysqli_query($conn1, $sql);



?>