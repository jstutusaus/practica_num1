<?php 

include "databaseCV.php";
$id=$_POST['id'];
$nom=$_POST['nom'];
$direccio=$_POST["direccio"];
$telefon=$_POST["telefon"];
$correu=$_POST["correu"];
$data=$_POST["data"];
$pais=$_POST["pais"];
$mobil=$_POST["mobil"];
$estat=$_POST["estat"];
$vehicle=$_POST["vehicle"];


$sql="UPDATE DB_CV_1 SET nom ='$nom', direccio ='$direccio', telefon ='$telefon', correu ='$correu', data ='$data', pais ='$pais', mobil ='$mobil', estat ='$estat', vehicle ='$vehicle', WHERE id='$id'";

echo mysqli_query($conn1, $sql);

?>