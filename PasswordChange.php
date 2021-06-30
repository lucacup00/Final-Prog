<?php
session_start();


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../style.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./passwordChange.css">
    <title>Change Your Password Here</title>
  
  </head>
  <body>
  <?php
  include './Nav.php';
 $Token=$_GET['Token'];
 
  echo '<div class="d-flex justify-content-center my-4 w-100  ">
  <form class="w-50" action="'.$_SERVER['REQUEST_URI'].'"  method="POST">
  <div class="mb-3 w-100">
    <label for="exampleInputEmail1" class="form-label font2 "><b>Enter your new Password</b></label>
    <input type="password" name="newPassword" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text ">We ll never share your email with anyone else.</div>
  </div>
  <div class="mb-3 w-100">
    <label for="exampleInputEmail1" class="form-label font2"><b>Enter your new confirm Password</b></label>
    <input type="password" name="newConfermaPassword" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>';
?>


<?php
include './connessione.php';
$Token=$_GET['Token'];
/* echo $Token; */
if($_SERVER['REQUEST_METHOD']=="POST"){

    $newPassword=$_POST['newPassword'];
    $newconfermapassword=$_POST['newConfermaPassword'];

   /*  echo $newPassword." ".$newconfermapassword; */

    if($newPassword==$newconfermapassword){

        $encryptedPassword=password_hash($newPassword,PASSWORD_BCRYPT);
        $encryptedConfermaPassword=password_hash($newconfermapassword,PASSWORD_BCRYPT);
        $sql="UPDATE `utenti` SET `PasswordUtente`='$encryptedPassword',`ConfermaPassword`='$encryptedConfermaPassword' WHERE `Token`='$Token'";
        $queryRes=mysqli_query($conn,$sql);
        if($queryRes){
            ?>
            <script>
            alert("Password è stato modificato")
             window.location='./index.php';
            </script>

            <?php

        }else{
            ?>
            <script>
            alert("Password non è stato modificato")
            window.location='./index.php';
            </script>

            <?php
        }
    }else{
        echo 'Password non concidono';
    }
    

   
    

}



?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <scrip src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></scrip>
    <scrip src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></scrip>
    -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"
            integrity="sha256-qM7QTJSlvtPSxVRjVWNM2OfTAz/3k5ovHOKmKXuYMO4=" crossorigin="anonymous"></script>
  </body>
</html>