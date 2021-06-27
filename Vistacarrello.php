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

    <title>Kites</title>

</head>
<style>
.tondo {
    padding: 10px;
    border-radius: 40px;
}



.carta {
    padding: 10px;
    border-radius: 40px;

    padding: 10px !important;
    box-shadow: 5px 10px black !important;

}

.text-new {
    color: black !important;
    font-family: Zen Dots;
}

.text-span-new {
    color: b !important;
}

.button-new {
    color: white !important;
    background-color: black !important;
}

.elemento1 {
    background-color: #2650ff !important;

}

.elemento2 {
    background-color: #f2a700 !important;

}

.elemento3 {
    background-color: #9924FF !important;

}

.elemento4 {
    background-color: #07BB9C !important;

}

.sfumatura {
    box-shadow: 0 8px 6px -6px black;
}

.scritta {
    font-family: LFTEtica;
    font-size: 25px;
}

.buttonElement {
    color: black;
    border: 2px solid white;

}

a {
    text-decoration: none !important;
    color: white !important;
}
</style>

<body class="skin">


    <main>
        <?php
    include 'Nav.php';
    $idUtente=$_SESSION['IdUser'];

    $sql1="SELECT * FROM `carrello` WHERE KsUtenti=$idUtente";
    $res1=mysqli_query($conn,$sql1);

    
    $row1=mysqli_fetch_assoc($res1);
    $idCarrello=$row1['idCarrello'];

    

    
    ?>





        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 my-4">
                <?php

                    

                $sql="SELECT utenti.Nome ,utenti.Telefono, utenti.Cognome , utenti.Email, annunci.NomeKite, 
                annunci.AnnoAquisto, annunci.idAnnuncio , annunci.Costo , annunci.Descrizione , annunci.misura , 
                marca.Marca,Categorie.idCategorie,Categorie.Tipo,Immagini.Percorso,Immagini.KsAnnuncio ,carrello_annunci.idCarrelloAnnunci
                FROM annunci,utenti,marca,Categorie,Immagini,carrello,carrello_annunci
                where annunci.KsUtenti=utenti.idUtente AND 
                annunci.KsMarca = marca.idMarca AND annunci.KsCategoria=Categorie.idCategorie AND 
                Immagini.KsAnnuncio=annunci.idAnnuncio AND annunci.idAnnuncio=carrello_annunci.KsAnnuncio
                AND carrello_annunci.KsCarrello=$idCarrello 
                GROUP BY Immagini.KsAnnuncio";
                    $res=mysqli_query($conn,$sql);



                    $num=mysqli_num_rows($res);

                    if($num==0){
                        echo 'Ancora non hai aggiunto nessun articolo tra i preferiti';
                    }else{
                        
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
                        $idCarrelloAnnunci=$row['idCarrelloAnnunci'];
    
                        
    
                    
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
                                    <button class="btn btn-sm btn button-new">Visita</button>
                                </a>
                                <a  href="./Removepreferiti.php?idCarrelloAnnunci='. $idCarrelloAnnunci.'">  
                                          
                                <button class="btn btn-sm btn button-new">Rimuovi dai preferiti</button>  
                                </a>
                                
                                
                                
                            </div>
                            </div>
                        </div>
                        </div>';
                    }
                    
                   
                    }

                    
                ?>
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