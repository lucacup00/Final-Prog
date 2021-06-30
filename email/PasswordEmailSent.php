<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../style.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Reset your Password</title>
  </head>
  <body>
  <?php
    

?>
  <div class="d-flex justify-content-center my-4 ">
  <form class="w-50" action="<?php echo $_SERVER['PHP_SELF']; ?>" method='POST'>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label font2 "><b>Enter Your Email Here</b></label>
    <input type="email" name="EmailPassword" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>

    <!-- Optional JavaScript; choose one of the two! -->
<?php

require './mailsender.php';
include './connessione2.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
 $EmailChangePassword=$_POST['EmailPassword'];
 $sql="SELECT * FROM `utenti` WHERE `Email`='$EmailChangePassword'";
 $res=mysqli_query($conn,$sql);
 $rows=mysqli_num_rows($res);
 if($rows){
     $data=mysqli_fetch_array($res);
     $Username=$data['Username'];
     $Token=$data['Token'];
    $body="Hi, $Username.Click here to Reset Your Password
    http://localhost/sitoKite/PasswordChange.php?Token=$Token";
    $resEmail=send_mail($EmailChangePassword, "Reset Your Password",$body);

    if($resEmail){
        echo "Email è stato inviato per resettare il password";
        /*  header('location:./index.php?resetPassword=true');  */
    }else{
        echo "Email non è stato inviato! Verificato un errore  ";
       /*  header('location:./index.php?resetPasswordFailed=true'); */
    }
 
}
}

?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"
            integrity="sha256-qM7QTJSlvtPSxVRjVWNM2OfTAz/3k5ovHOKmKXuYMO4=" crossorigin="anonymous"></script>
  </body>
</html>