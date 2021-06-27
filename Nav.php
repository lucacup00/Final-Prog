<html>

<head>
    <link href="style.css" rel="stylesheet">
    <link href="NavStyle.css" rel="stylesheet">
</head>

</html>



<?php


echo '<nav class=" transparent-navbar navbar navbar-expand-lg navbar-dark skin">
        <div class="container-fluid">
            <a class="navbar-brand font2" href="#">Kite Force</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto my-0 mb-lg-0">
                    <li class="nav-item">
                    <div class="d-flex align-items-center mx-2">
                        <a class="nav-link active font2" aria-current="page" href="index.php" >Home</a>
                        <a class="text-dark" href="./index.php" ><span class=" hover iconify" data-icon="ant-design:home-filled" data-inline="false"></span></a>
                        </div>
                    </li>
                    <li class="nav-item">
                    <div class="d-flex align-items-center mx-2">
                        <a class="nav-link font2" href="Shop.php ">Shop</a>
                        <a class="text-dark" href="./shop.php"><span class="hover iconify" data-icon="simple-icons:shopify" data-inline="false"></span></a>
                        </div>    
                        </li>';
//diverso da loggato
if (!isset($_SESSION['loggedIn'])) {
    echo '<li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle font2" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Accedi/Registrati
                            </a>
                            <ul id="Main" class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class=" text-dark dropdown-item font2" data-bs-toggle="modal" data-bs-target="#RegistrationModal"
                            href="#">Registrati</a></li>
                            <li><a class="text-dark dropdown-item font2" data-bs-toggle="modal" data-bs-target="#LoginModal"
                            href="#">Accedi</a></li>
                            </ul>
                            </li>';
}
echo '
                        
                        <li class="nav-item">
                        <div class="d-flex align-items-center mx-2">
                        <a class="nav-link font2" href="InserimentoKite.php" tabindex="-1">Inserisci Annuncio</a>
                        <a class="text-dark" href="./InserimentoKite.php"><span class=" hover iconify" data-icon="dashicons:insert" data-inline="false"></span></a>
                        </div>
                        </li>';



echo '</ul>
                        
                        <form action="./search.php" method="GET" class="d-flex responsive-div justify-content-center text-align-center my-0">
                        
                        <input class="d-flex flex-wrap my-0 " id="search" justify-content-center form-control mr-sm-2 ng-untouched ng-pristine ng-valid" name="search" type="search" placeholder="Search" aria-label="Search">
                        <div class="d-flex ">
                        <button class=" responsve-button searchB  btn btn-md btn-primary py-0 my-0"><a  class="text-decoration-none text-light">Cerca</a></button>';
echo ' <a  href="" > <span class=" responsive-anchor  mx-3 iconify my-2" data-icon="bi:wind" data-inline="false" data-width="40" data-height="40"></span>
                        </a> 
                        </div>';


//INSERIMENTO BUTTON DI LOGOUT
if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) {

    echo '
                                <li class="d-flex nav-item active dropdown justify-content-center text-align">
                            <a class="d-flex nav-link dropdown-toggle text-align-center my-2 font2" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Welcome ' . $_SESSION['username'] . '
                            </a>
                            <ul id="Main" class="dropdown-menu font2" aria-labelledby="navbarDropdown">
                            <li><a class="text-dark dropdown-item mx-0" data-bs-toggle="modal" 
                            href="./Vistacarrello.php">Carrello</a></li>
                                <li><a class="text-dark dropdown-item mx-0 font2" data-bs-toggle="modal" 
                                        href="./imieiAnnunci.php">I miei annunci</a></li>
                                <li><a class="text-dark dropdown-item font2" data-bs-toggle="modal" 
                                        href="./logout.php">Il mio Account</a></li>
                                        <li><a class="text-dark dropdown-item font2" data-bs-toggle="modal" 
                                        href="./logout.php">Logout</a></li>

                                </ul>
                                ';
}
echo '
                </form>
                 </div>
        </div>
    </nav>';
?>