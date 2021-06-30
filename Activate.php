<?php
session_start();
include "./connessione.php";

if(isset($_GET['Token'])){
    $Token=real_escape_string($_GET['Token']);
   
    $update="UPDATE `utenti` SET `Status`='Active' WHERE `Token`='$Token'";
    $esc=mysqli_query($conn,$update);
    if($esc){
        
         header('location:./index.php?emailVerified=true');
    }
    else{
        
        header('location:./index.php?emailnotVerified=true'); 
    }
}
?>