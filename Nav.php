<html>

<head>
    <style>
    .button-close {
        color: white !important;
        background-color: #333333 !important;
    }


    .btn-primary {
        background-color: #ff7514 !important;
        color: white !important;
        border: #ff7514 !important;
    }

    .navbar-custom {
        height: 100px;
    }

    #navbarDropdown::after {
        margin-top: 10px;
    }

    @media only screen and (max-width: 580px) {
        #navbarDropdown {

            color: yellow !important;
            width: 100% !important;
            padding: 0px;
            margin top: 100px !important;
        }

        #navbarDropdown::after {
            margin-top: 10px;
        }

        .responsive-div {
            display: flex;
            flex-direction: column;
        }

        .responsve-button {
            margin-top: 10px !important;
            width: 85px;
            height: 40px;
        }



        /*  #search {

            width: 20% !important;

        } */
    }
    </style>

</head>

</html>



<?php


echo '<nav class=" navbar navbar-expand-lg navbar-dark bg-dark skin ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Kite Force</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto my-0 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Shop.php">Shop</a>
                    </li>';
                    //diverso da loggato
                  if(!isset($_SESSION['loggedIn'])){
                   echo '<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Accedi/Registrati
                        </a>
                       <ul id="Main" class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class=" text-dark dropdown-item" data-bs-toggle="modal" data-bs-target="#RegistrationModal"
                                    href="#">Registrati</a></li>
                            <li><a class="text-dark dropdown-item" data-bs-toggle="modal" data-bs-target="#LoginModal"
                                    href="#">Accedi</a></li>

                        </ul>
                        </li>';
                    }
                   echo '<li class="nav-item">
                        <a class="nav-link" href="InserimentoKite.php" tabindex="-1">Inserisci Il tuo Kite</a>
                    </li>';
                    
                    
                    
              echo '</ul>
                
                <form action="./search.php" method="GET" class="d-flex responsive-div justify-content-center text-align-center my-0">
    
                    <input class="d-flex flex-wrap my-0" id="search" justify-content-center form-control mr-sm-2 ng-untouched ng-pristine ng-valid" name="search" type="search" placeholder="Search" aria-label="Search">
                     <div class="d-flex ">
                            <button class=" responsve-button   btn btn-md btn-primary py-0 my-0"><a  class="text-decoration-none text-light">Cerca</a></button>';
                            echo ' <a  href="meteo.php" > <span class=" responsive-anchor  mx-3 iconify my-2" data-icon="bi:wind" data-inline="false" data-width="40" data-height="40"></span>
                                </a> 
                    </div>';

                    //INSERIMENTO BUTTON DI LOGOUT
                    if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']==true){

                       echo'
                                <li class="d-flex nav-item active dropdown justify-content-center text-align">
                            <a class="d-flex nav-link dropdown-toggle text-align-center my-2" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Welcome'.$_SESSION['username'].'
                            </a>
                            <ul id="Main" class="dropdown-menu " aria-labelledby="navbarDropdown">
                            <li><a class="text-dark dropdown-item mx-0" data-bs-toggle="modal" 
                            href="./Vistacarrello.php">Carrello</a></li>
                                <li><a class="text-dark dropdown-item mx-0" data-bs-toggle="modal" 
                                        href="./imieiAnnunci.php">I tuoi annunci</a></li>
                                <li><a class="text-dark dropdown-item" data-bs-toggle="modal" 
                                        href="./logout.php">Logout</a></li>

                                </ul>
                                ';
                        
                       
                    }
                   echo'
                </form>
                 </div>
        </div>
    </nav>';
?>