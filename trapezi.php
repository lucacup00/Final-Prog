<?php
include 'connessione.php';
include './links.php';
include './alert.php';
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
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <link href="style.css" rel="stylesheet">
    
    <style>
         .button-visita {
	background-color: black !important;
	color: white !important;
}

    </style>
    <title>Shop</title>

</head>



<body class="skin">


    <main>
        <?php
    include 'Nav.php';

    
    ?>





        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php

                    

                $sql="SELECT utenti.Nome ,utenti.Telefono, utenti.Cognome , utenti.Email, annunci.NomeKite, annunci.AnnoAquisto, annunci.idAnnuncio , annunci.Costo , annunci.Descrizione , annunci.misura , marca.Marca,Categorie.idCategorie,Categorie.Tipo,Immagini.Percorso,Immagini.KsAnnuncio FROM annunci,utenti,marca,Categorie,Immagini where annunci.KsUtenti=utenti.idUtente AND annunci.KsMarca = marca.idMarca AND annunci.KsCategoria=Categorie.idCategorie AND Immagini.KsAnnuncio=annunci.idAnnuncio AND Categorie.idCategorie=4  GROUP BY Immagini.KsAnnuncio";
                    $res=mysqli_query($conn,$sql);

                    

                    while($row=mysqli_fetch_assoc($res)){
                    
                    $nomeKite=$row['NomeKite'];
                    $annoAcquisto=$row['AnnoAquisto'];
                    $Foto=$row['Percorso'];
                    $misura=$row['misura'];
                    $Descrizione=$row['Descrizione'];
                    $telefono=$row['Telefono'];
                    $emailUtente=$row['Email'];               
                    $cognomeUtente=$row['Cognome'];
                    $nomeUtente=$row['Nome'];
                    $marca=$row['Marca'];
                    $costo=$row['Costo'];
                    $idAnnuncio=$row['idAnnuncio'];
                    $Categoria=$row['Tipo'];

                    

                
                    echo' 
                    <div class="col my-4">
                    <div class="card shadow-sm carta effect" >
                    <img src="./img/'.$Foto.'" class="bd-placeholder-img card-img-top tondo" width="200px" height="400px"/>
                        <div class="card-body">
                         <h6 class="text-primary text-new"><span class="text-dark text-span-new">Il nome del Kite</span> :<b>'.$nomeKite.' </b></h6>
           
                        <h6  class="text-primary text-new"><span class="text-dark text-span-new">Costo </span>:<b> '.$costo.'€</b></h6>
                        <h6  class="text-primary text-new"><span class="text-dark text-span-new">Descrizione </span>:<b> '.$Descrizione.'</b></h6>
                        <h6  class="text-primary text-new"><span class="text-dark text-span-new">Marca </span>:<b> '.$marca.'</b></h6> 
                        <h6  class="text-primary text-new"><span class="text-dark text-span-new">Misura </span>:<b> '.$misura. 'mq2</b></h6> 
                        
                        <div class="d-flex justify-content-between align-items-center">  

                                                    <a href="./templat.php?IdAnnuncio='. $idAnnuncio.'">
                                                        <button class="btn btn-sm btn button-visita font">Visita</button>
                                                    </a>
                                                    <a  href="./carrello.php?IdAnnuncio='. $idAnnuncio.'">  
                                                    <span class="iconify" data-icon="noto-v1:shopping-cart" data-inline="false" data-width="35" data-height="35"></span>            
                                                        
                                                    </a>
                    
                        </div>
                            
                        </div>
                        </div>
                    </div>
                    </div>';
                }
                
               
            ?>
            </div>
        </div>
        </div>
    </main>






    <?php
include 'modal.php';


?>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"
        integrity="sha256-qM7QTJSlvtPSxVRjVWNM2OfTAz/3k5ovHOKmKXuYMO4=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- Optional JavaScript choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>






    <!-- bootstrap scripts -->
    <!-- Latest compiled and minified CSS -->


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <scrip src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></scrip>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></scrip>
    -->

</body>

</html>