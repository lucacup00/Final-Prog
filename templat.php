<?php
session_start();?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />


    <style>
    .border {
        border: 1px solid red;
    }

    .hide {
        overflow-x: hidden;
    }

    .carousel-control-next,
    .carousel-control-prev

    /*, .carousel-indicators */
        {
        filter: invert(100%);
        width: 60%
    }

    .btn-2{
        backgroud-color:black !important;
    }
    </style>


    <title>Informazione Kite </title>

</head>

<body>


    <?php
        include './Nav.php';
        include './connessione.php';
        include 'links.php';
        include './alert.php';
        $idAnnuncio=$_GET['IdAnnuncio'];

        $sql="SELECT utenti.Nome ,utenti.Telefono, utenti.Cognome , utenti.Email, annunci.NomeKite, annunci.AnnoAquisto, annunci.idAnnuncio , annunci.Costo , annunci.Descrizione , annunci.misura , marca.Marca,Categorie.idCategorie,Categorie.Tipo,Immagini.Percorso,Immagini.KsAnnuncio FROM annunci,utenti,marca,Categorie,Immagini where annunci.KsUtenti=utenti.idUtente AND annunci.KsMarca = marca.idMarca AND annunci.KsCategoria=Categorie.idCategorie AND Immagini.KsAnnuncio=annunci.idAnnuncio   AND annunci.idAnnuncio=$idAnnuncio";

        
        $res=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($res);
        
            $nomeUtente=$row['Nome'];
            $emailUtente=$row['Email'];
            $cognomeUtente=$row['Cognome'];
            
            $misura=$row['misura'];
            $nomeKite=$row['NomeKite'];
            $Foto=$row['Percorso'];
            $annoAcquisto=$row['AnnoAquisto'];
            $Descrizione=$row['Descrizione'];
            $Marca=$row['Marca'];
            $Costo=$row['Costo'];
            $idAnnuncio=$row['idAnnuncio'];
            $Telefono=$row['Telefono'];

            
                   


        ?>


    <!-- template code here -->


   
    <div class="row featurette hide w-100 my-4 rounded-3  shadow-lg">
        <div class="col-md-7  d-flex justify-content-center align-items-center flex-column shadow-lg">
            <h2 class="featurette-heading text-dark font2 ">Titolo Annuncio: <?php echo $nomeKite; ?></h2>
            <h2 class="text-dark font2 ">Misura: <?php  echo $misura.'mq2' ?></h2>
            <h4 class="text-dark font2 ">Anno di acquisto: <?php  echo $annoAcquisto;  ?></h4>

            <h4 class="text-dark font2 ">Marca: <?php  echo $Marca ?></h4>
            <h4 class="text-dark font2 ">Pubblicato da: <?php  echo $cognomeUtente." ".$nomeUtente; ?></h4>
            <h4 class="text-dark font2 ">Email: <?php  echo $emailUtente ?></h4>
            <h4 class="text-dark font2 ">Prezzo: <?php  echo $Costo.'€' ?></h4>

            <p class="lead font2">Descrizione: <?php echo $Descrizione;  ?></p>
            

            <div class="d-flex justify-content-between align-items-center">
                                
                           
            
            <button type="button" class="btn btn-primary mx-1" data-toggle="modal" data-target="#MexModal">
                                   Invia un messaggio
                                </button>
                                
                                
                                <button type="button" class="btn btn-primary mx-1" data-toggle="modal" data-target="#exampleModal">
                                   Numero di Telefono
                                </button>
                               
                                
                                
                            </div>
            

        </div>
        <div class="col">

            <?php
        $sql0="SELECT * FROM Immagini where KsAnnuncio=$idAnnuncio";
        $res0=mysqli_query($conn,$sql0);
        ?>

            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">

                <?php
                for($i=0;$row0=mysqli_fetch_assoc($res0);$i++){  
                $Foto=$row0['Percorso'];
                
                if($i==0){
                echo '<div class="carousel-item   active" >
                    <img src="./img/'.$Foto.'" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        
                    </div>
                </div>';
               
                }else{
                echo '<div class="carousel-item " >
                    <img src="./img/'.$Foto.'" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        
                    </div>
                </div>';

                }



                }
              ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="next">
                <span class="carousel-control-next-icon " aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

        </div>

       

        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Numero di telefono</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php
        echo "<h3>+39 $Telefono</h3>";
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>




<!--invio messaggio-->
<div class="modal fade" id="MexModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font2" id="exampleModalLabel"><b>Invia un messaggio</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      
    <?php
      echo'<form action="./email/messaggio.php?IdAnnuncio='.$idAnnuncio.'"  method="POST">
                     
                     <div class="form-group">
                        <label for="exampleFormControlTextarea1"  class="font2"><b>Invia un messaggio</b></label>
                        <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
               
               
                    <a>
                      <button type="submit" class="btn btn-primary font2">Submit</button>
                     </a>
                     
                 </form>
                 
                 </div>
                 <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                 
                 </div>
                 </div>
                 </div>
                 </div>';
?>      













    </div>
    </div>













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