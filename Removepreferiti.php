<?php

$id=$_GET['idCarrelloAnnunci'];
echo $id;

include 'connessione.php';

$sql="DELETE FROM carrello_annunci WHERE idCarrelloAnnunci= $id";
 $res=mysqli_query($conn,$sql);
if(!$res)
{
    die("Qery errata" . $sql);
    header("Location: ./index.php "); 

}


else{
    header("Location: ./Vistacarrello.php?AnnuncioCancellatoCarrello=true ");

}

?>