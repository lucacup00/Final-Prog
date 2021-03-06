<?php
include './connessione.php';
session_start();
?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />


    <link href="style.css" rel="stylesheet">
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

    <title>Vendita kite usati </title>
</head>

<body>
    <?php
    include 'Nav.php';
    include 'alert.php';


    

    //se sei Loggato
    if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']==true){

        
    echo '<div class="my-4 container w-75 py-5">
    <form enctype="multipart/form-data" action="./inserimentoAnnuncio.php" method="POST" class="row align-items-center">
    <div class="mb-3">
        <label for="NomeLibroEmail1" class="form-label font2"><b>Titolo Annuncio</b></label>
        <input type="text" class="form-control" name="NomeKite" id="Nomekite" aria-describedby="NomeLibroHelp">
    
    </div>

    <div class="mb-3">
    <label for="NomeLibroEmail1" class="form-label font2"><b>Scegli la categoria</b></label>
    <select class="form-select" name="Categoria" aria-label="Default select example">
    <option selected>Scegli la tua categoria</option>';

    $sql0="SELECT * FROM `Categorie`";
    $res1=mysqli_query($conn,$sql0);


    while($dataFetched0=mysqli_fetch_assoc($res1)){
    $idCategoria=$dataFetched0['idCategorie'];
    $Categoria=$dataFetched0['Tipo'];
    echo '<option value="'.$idCategoria.'">'.$Categoria.'</option>';

    }
    echo '</select>
    </div>

    <div class="mb-3">
    <label for="NomeLibroEmail1" class="form-label font2"><b>Scegli la Marca</b></label>
    <select class="form-select" name="Marca" aria-label="Default select example">
    <option selected>Scegli La Marca</option>';

    $sql="SELECT * FROM `marca`";
    $res=mysqli_query($conn,$sql);


    while($dataFetched=mysqli_fetch_assoc($res)){
    $idMarca=$dataFetched['idMarca'];
    $Marca=$dataFetched['Marca'];
    echo '<option value="'.$idMarca.'">'.$Marca.'</option>';

    }
    echo '</select>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label font2"><b>Misura</b></label>
        <input type="text" class="form-control" name="misura" >
    </div>
    <div class="mb-3">
        <label  class="form-label font2"><b>Descrizione</b></label>
        <input type="text" class="form-control" name="Descrizione" >
    </div>
    <div class="mb-3">
        <label  class="form-label font2"><b>Costo</b></label>
        <input type="number" class="form-control" name="Costo" >
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label font2"><b>Anno di Acquisto</b></label>
        <input type="date" class="form-control" name="AnnoDiAcquisto" >
    </div>
    <label for="exampleInputPassword1" class="form-label font2"><b>Carica Files</b></label>
    <div class="d-flex  align-items-start">
    <input type="file" name="FotoKite[]" class="mx-1 form-control" id="exampleInputEmail1"
        aria-describedby="emailHelp" required>
    <input type="file" name="FotoKite[]" class="mx-1 form-control" id="exampleInputEmail1"
        aria-describedby="emailHelp">
    <input type="file" name="FotoKite[]" class="mx-1 form-control" id="exampleInputEmail1"
        aria-describedby="emailHelp">
    <input type="file" name="FotoKite[]" class="mx-1 form-control" id="exampleInputEmail1"
        aria-describedby="emailHelp">
    <input type="file" name="FotoKite[]" class="mx-1 form-control" id="exampleInputEmail1"
        aria-describedby="emailHelp">

</div>
    
    <button type="submit"  class="my-4 btn btn-primary">Submit</button>
    </form>
    </div>';
    }else{
        //altrimenti Loggati o Registrati per inserire l'annuncio
        echo '<div class="container my-5">
        <div class="jumbotron">
          <h1 class="display-4 ">Attenzione</h1>
          <p class="lead font2"><b>Devi Registrati pima di inserire Annuncio</b></p>
          <a id="anchorDiv" class="text-primary text-decoration-none font2" data-bs-target="#RegistrationModal" data-bs-toggle="modal" >Registrati qui</a>  
          <a id="anchorDiv" class=" mx-2 text-danger text-decoration-none font2" data-bs-target="#LoginModal" data-bs-toggle="modal" >Accedi  qui</a>
        
        </div>
        </div>';
        
        
    }
  
?>






    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"
        integrity="sha256-qM7QTJSlvtPSxVRjVWNM2OfTAz/3k5ovHOKmKXuYMO4=" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->

    <?php
include 'modal.php';
?>
</body>

</html>