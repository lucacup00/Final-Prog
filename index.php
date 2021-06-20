<?php
include 'connessione.php';
include './links.php';
include './alert.php';
session_start();
?>
<?php
include 'modal.php';


?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />




    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">

    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <link href="style.css" rel="stylesheet">

    <style>
    .hide {
        overflow-x: hidden;
    }

    .position-right {
        float: right;
    }
    </style>

    <title>Index</title>

</head>

<body class="skin">


    <main>
        <?php
    include 'Nav.php';

    
    ?>




        <div class="container my-5">


            <div class="row p-3 pb-0 pe-lg-0 pt-lg-2 align-items-center rounded-3 border shadow-lg">
                <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                    <h1 class="display-4 fw-bold lh-1">Kite Force</h1>
                    <p class="lead">La soluzione per acquistare e vendere materiale sportivo a livello locale
                        oppure fatti spedire articoli nuovi dai negozi.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                        <a data-bs-toggle="modal" data-bs-target="#RegistrationModal"
                            class="btn btn-primary btn-lg px-4 me-md-2">Registrati</a>
                        <a href=" InserimentoKite.php" class="btn btn-outline-secondary btn-lg px-4 a">Inserisci
                            un Kite in
                            vendita</a>
                    </div>
                </div>

                <div class="col-md-9  col-lg-5 py-4">

                    <video class="p-3 p-md-3  rounded-2 " style="border-radius: 105px !important;" loop id="video"
                        width="300" height="600" autoplay muted>
                        <source src="b.mp4" type="video/mp4">
                    </video>
                </div>


            </div>
        </div>





        <section class="py-4 text-center skin hide">
            <div class="row py-lg-5 skin">
                <div class="container-fluid  mx-auto skin">
                    <h1 class="fw-light text-new">Esplora le nostre sezioni</h1>
                    <p class="lead text-muted text-pr">Il portale in cui puoi vendere e acquistare Kite usati.
                    </p>



                    <div class="d-flex my-4 flex-wrap justify-content-center  align-items-center">
                        <div class=" sfumatura mx-2 my-4 elemento1 card meteo" style="width: 20rem; height:8rem;">
                            <div class="card-body">

                                <span class="iconify " data-icon="openmoji:kite" data-inline="false" data-width="40"
                                    data-height="40"></span><br>
                                <a href="kite.php" type='button' class=" scritta my-3 card-link">Kites</a>

                            </div>
                        </div>

                        <div class=" sfumatura mx-2 my-4 elemento2 card meteo" style="width: 20rem; height:8rem;">
                            <div class="card-body">
                                <span class=" iconify " data-icon="mdi:kitesurfing" data-inline="false" data-width="37"
                                    data-height="37"></span><br>
                                <a href="surfboards.php" type='button' class=" scritta my-3 card-link">Surfboards</a>
                            </div>
                        </div>
                        <div class=" sfumatura mx-2 my-4 elemento3 card meteo" style="width: 20rem; height:8rem;">
                            <div class="card-body">
                                <span class="iconify" data-icon="emojione-v1:womans-clothes" data-inline="false"
                                    data-width="40" data-height="40"></span><br>
                                <a href="./mute.php" type='button' class=" scritta my-3 card-link">Mute</a>
                            </div>
                        </div>
                        <div class=" sfumatura mx-2 my-4 elemento4 card meteo" style="width: 20rem; height:8rem;">
                            <div class="card-body">
                                <span class="iconify" data-icon="entypo:tools" data-inline="false" data-width="40"
                                    data-height="40"></span><br>
                                <a href="trapezi.php" type='button' class=" scritta my-3 card-link">Trapezi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div class="container my-5 g-4">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
                <div class="col d-flex align-items-start">
                    <span class="iconify bi text-muted flex-shrink-0 me-3" data-icon="emojione-v1:money-bag"
                        data-inline="false" data-width="60" data-height="60"></span>
                    <div>
                        <h4 class="fw-bold mb-0">Truffe</h4>
                        <p>Se un ogetto costa troppo poco, non sempre è un affare</p>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <span class="iconify bi text-muted flex-shrink-0 me-3" data-icon="flat-color-icons:two-smartphones"
                        data-inline="false" data-width="60" data-height="60"></span>
                    <div>
                        <h4 class="fw-bold mb-0">Sicurezza</h4>
                        <p>Proteggi i tuoi dati: non inviare documenti e informazioni personali</p>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <span class="iconify bi text-muted flex-shrink-0 me-3" data-icon="bx:bx-user-circle"
                        data-inline="false" data-width="60" data-height="60"></span>
                    <div>
                        <h4 class="fw-bold mb-0">Affidabilità</h4>
                        <p>Cerca l'oggetto più vicino a te e incontra il venditore</p>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <span class="iconify bi text-muted flex-shrink-0 me-3" data-icon="logos:paypal" data-inline="false"
                        data-width="50" data-height="50"></span>
                    <div>
                        <h4 class="fw-bold mb-0">Pagamenti</h4>
                        <p>I metodi di pagamento tracciabili sono più sicuri</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="d-flex container my-5">





            <div class="row">
                <div class="col-lg-4">
                    <iframe width="550" height="450" style="border-radius: 2rem;"
                        src="https://embed.windy.com/embed2.html?lat=40.789&lon=13.601&detailLat=40.246&detailLon=12.480&width=650&height=450&zoom=7&level=surface&overlay=wind&product=ecmwf&menu=&message=true&marker=true&calendar=now&pressure=&type=map&location=coordinates&detail=&metricWind=default&metricTemp=default&radarRange=-1"
                        frameborder="0"></iframe>
                </div>
                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777"
                            dy=".3em">140x140</text>
                    </svg>

                    <h2>Heading</h2>
                    <p>Some representative placeholder content for the three columns of text below the carousel.
                        This is
                        the first column.</p>
                    <p><a class="btn btn-secondary" href="#">View details »</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777"
                            dy=".3em">140x140</text>
                    </svg>

                    <h2>Heading</h2>
                    <p>Another exciting bit of representative placeholder content. This time, we've moved on to the
                        second column.</p>
                    <p><a class="btn btn-secondary" href="#">View details »</a></p>
                </div><!-- /.col-lg-4 -->

            </div>
        </div>



















        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
        </script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"
            integrity="sha256-qM7QTJSlvtPSxVRjVWNM2OfTAz/3k5ovHOKmKXuYMO4=" crossorigin="anonymous"></script>

</body>

</html>