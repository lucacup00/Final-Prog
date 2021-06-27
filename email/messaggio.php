
<?php
include './connessione2.php';


$id=$_GET['IdAnnuncio'];
echo $id;

$sql="SELECT utenti.Email
        FROM annunci,utenti 
        where annunci.KsUtenti=utenti.idUtente AND annunci.idAnnuncio=$id";    

      $res=mysqli_query($conn,$sql);

      if($res){
        echo'good';
      }

      $row=mysqli_fetch_assoc($res);
      $Email=$row['Email'];
      

require './mailsender.php';
if($_SERVER['REQUEST_METHOD']=="POST"){  
  $mex=$_POST['text'];
  

  


  
  $ris=send_mail($Email, "SEI STATO CONTATTATO DA UN POSSIBILE ACQUIRENTE",$mex);
  if($ris){
      header('Location: ../shop.php?Mex=true');
      

  }
  else{
    header('Location: ../shop.php?Mex=false');
  }
}



     






?>


  
