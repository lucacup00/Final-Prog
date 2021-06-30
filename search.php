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

    <link href="style.css" rel="stylesheet">


    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

    <style>
         .button-visita {
	background-color: black !important;
	color: white !important;
}

    </style>


</head>


<body class="skin">

    <main>
        <?php
    include 'Nav.php';
?>



        <div class="container my-4">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">


                <?php
                    
                    $ricerca=mysqli_real_escape_string($conn,$_GET['search']);
                    if($ricerca==""){
                        echo 'inserire un paremetro adeguato';

                    }

                   
                    
                    
                    $sql="SELECT * 
                    FROM annunci,utenti,marca,Categorie,Immagini 
                    WHERE annunci.KsUtenti=utenti.idUtente AND annunci.KsMarca = marca.idMarca AND 
                    annunci.KsCategoria=Categorie.idCategorie AND Immagini.KsAnnuncio=annunci.idAnnuncio 
                    AND  MATCH(`NomeKite`,`Descrizione`) against ('$ricerca')  GROUP BY Immagini.KsAnnuncio";
                    $res=mysqli_query($conn,$sql);

                    $num=mysqli_num_rows($res);

                         
                    if($num==1){
                    
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
                                    <div class="col">
                                    <div class="card shadow-sm carta" >
                                    <img src="./img/'.$Foto.'" class="bd-placeholder-img card-img-top tondo" width="200px" height="400px"/>
                                        <div class="card-body">
                                        <h6 class="text-primary text-new"><span class="text-dark text-span-new">Il nome del Kite</span> :<b>'.$nomeKite.' </b></h6>

                                        <h6  class="text-primary text-new"><span class="text-dark text-span-new">Costo </span>:<b> '.$costo.'$</b></h6>
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
                                    </div>';
                                }
                        }
                        else if($num==0){

                            $sql2="SELECT *
                            FROM annunci,utenti,marca,Categorie,Immagini
                             WHERE annunci.KsUtenti=utenti.idUtente AND annunci.KsMarca = marca.idMarca 
                             AND annunci.KsCategoria=Categorie.idCategorie AND Immagini.KsAnnuncio=annunci.idAnnuncio 
                             AND MATCH(`Marca`) against ('$ricerca') GROUP BY Immagini.KsAnnuncio"; 
                              $res2=mysqli_query($conn,$sql2);
    
                              $num2=mysqli_num_rows($res2);

                        

                          while($row2=mysqli_fetch_assoc($res2)){
                                                
                            $nomeKite=$row2['NomeKite'];
                            $annoAcquisto=$row2['AnnoAquisto'];
                            $Foto=$row2['Percorso'];
                            $misura=$row2['misura'];
                            $Descrizione=$row2['Descrizione'];
                            $telefono=$row2['Telefono'];
                            $emailUtente=$row2['Email'];               
                            $cognomeUtente=$row2['Cognome'];
                            $nomeUtente=$row2['Nome'];
                            $marca=$row2['Marca'];
                            $costo=$row2['Costo'];
                            $idAnnuncio=$row2['idAnnuncio'];
                            $Categoria=$row2['Tipo'];

                            

                        
                            echo' 
                            <div class="col">
                                <div class="card shadow-sm carta">
                                    <img src="./img/'.$Foto.'" class="bd-placeholder-img card-img-top tondo" width="200px" height="400px"/>
                                        <div class="card-body">
                                            <h6 class="text-primary text-new"><span class="text-dark text-span-new">Il nome del Kite</span> :<b>'.$nomeKite.' </b></h6>

                                            <h6  class="text-primary text-new"><span class="text-dark text-span-new">Costo </span>:<b> '.$costo.'$</b></h6>
                                            <h6  class="text-primary text-new"><span class="text-dark text-span-new">Descrizione </span>:<b> '.$Descrizione.'</b></h6>
                                            <h6  class="text-primary text-new"><span class="text-dark text-span-new">Marca </span>:<b> '.$marca.'</b></h6> 
                                            <h6  class="text-primary text-new"><span class="text-dark text-span-new">Misura </span>:<b> '.$misura. 'mq2</b></h6> 
                                            
                                            <div class="d-flex justify-content-between align-items-center">
                                        

                                                    <a href="./templat.php?IdAnnuncio='. $idAnnuncio.'">
                                                        <button class="btn btn-sm btn button-new font">Visita</button>
                                                    </a>
                                                    <a  href="./carrello.php?IdAnnuncio='. $idAnnuncio.'">  
                                                    <span class="iconify" data-icon="noto-v1:shopping-cart" data-inline="false" data-width="35" data-height="35"></span>            
                                                        
                                                    </a>
                                        
                                        
                                        
                                            </div>
                                        </div>
                                </div>
                            </div>';
                            
                        }

                    } 
                    else if($num==0 && $num2==0){
                        echo'Nessuna ricerca';
                    }   
                   

                    ?>

            </div>
        </div>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"
            integrity="sha256-qM7QTJSlvtPSxVRjVWNM2OfTAz/3k5ovHOKmKXuYMO4=" crossorigin="anonymous"></script>

</body>