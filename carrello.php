<?php
include './alert.php';
session_start();


$idAnnuncio=$_GET['IdAnnuncio'];
echo "id annuncio è :$idAnnuncio";
$KsUtente=$_SESSION['IdUser'];

include './connessione.php';
include './links.php';

$sql="SELECT * 
FROM  carrello 
where KsUtenti='$KsUtente'";
$Ris=mysqli_query($conn,$sql);
    



$row=mysqli_fetch_assoc($Ris);
$idCarrello=$row['idCarrello'];

echo "id carrello è :$idCarrello";

$sql1="INSERT INTO `carrello_annunci`(`KsCarrello`, `KsAnnuncio`) VALUES($idCarrello,$idAnnuncio)";
$Ris2=mysqli_query($conn,$sql1);

if($Ris2){
    header('Location:./shop.php?Aggiunto=true');
}




?>