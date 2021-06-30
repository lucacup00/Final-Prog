<?php

if(isset($_GET['failedSignup']) && $_GET['failedSignup'] == true){
  $alert0= '<div class="alert my-0 alert-success alert-dismissible fade show font2" role="alert">
  <strong>Messaggio:</strong> Utente già registrato.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
echo $alert0;
if($alert0!=""){
  ?>
<script>
setTimeout(() => {
    window.location = "./index.php";
}, 2000)
</script>
<?php
}

}
 //Allert ACCOUNT CREATO CON SUCCESSO
 if(isset($_GET['Signup']) && $_GET['Signup'] == true){
    $alert= '<div class="alert my-0 alert-success alert-dismissible fade show font2" role="alert">
          <strong>Messaggio</strong> Account creato con successo.Puoi Effetuare il login.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    echo $alert;
         if($alert!=""){
          ?>
<script>
setTimeout(() => {
    window.location = "./index.php";
}, 2000)
</script>
<?php
    }
}

// ALLERT PASSWORD NON CORRISPONDONO
else if(isset($_GET['passwordWrong']) && $_GET['passwordWrong'] == true){
  $alert1= '<div class="alert my-0 alert-success alert-dismissible fade show font2" role="alert">
  <strong>Messaggio:</strong> Password non corrispondono.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
echo $alert1;
if($alert1!=""){
  ?>
<script>
setTimeout(() => {
    window.location = "./index.php";
}, 2000)
</script>
<?php
}

}
// ALLERT HAI EFFETTUATO IL LOGIN
elseif(isset($_GET['loggedIn']) && $_GET['loggedIn'] == true){
$alert2= '<div class="alert my-0 alert-success alert-dismissible fade show font2" role="alert">
<strong>Messaggio:</strong> Hai Effetuato il login! 🙂 
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
echo $alert2;
if($alert2!=""){
?>
<script>
setTimeout(() => {
    window.location = "./index.php";
}, 2000)
</script>
<?php
}
}
//ALLERT PASSWORD SBAGLIATA NELLA FASE DI LOGIN
else if(isset($_GET['passwordErro']) && $_GET['passwordErro'] == true){
$alert3= '<div class="alert my-0 alert-danger alert-dismissible fade show font2" role="alert">
<strong>Messaggio:</strong> Password Errata! 🙂 
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
echo $alert3;
if($alert3!=""){
?>
<script>
setTimeout(() => {
    window.location = "./index.php";
}, 2000)
</script>
<?php
}
}
//UTENTE NON REGISTRATO.
else if(isset($_GET['signUpFirst']) && $_GET['signUpFirst'] == true){
$alert4= '<div class="alert my-0 alert-danger alert-dismissible fade show font2" role="alert">
<strong>Messaggio:</strong> Registarti Prima!
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
echo $alert4;
if($alert4!=""){
?>
<script>
setTimeout(() => {
    window.location = "./index.php";
}, 2000)
</script>
<?php
}
}
//SEI USCITO DAL TUO ACCOUNT
else if(isset($_GET['loggedOut']) && $_GET['loggedOut'] == true){
$alert5= '<div class="alert my-0 alert-danger alert-dismissible fade show font2" role="alert">
<strong>Messaggio:</strong> Sei Uscito dal tuo Account!! Accedi Per Tornare
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
echo $alert5;
if($alert5!=""){
?>
<script>
setTimeout(() => {
    window.location = "./index.php";
}, 2000)
</script>
<?php
}
}
else if(isset($_GET['inseritoAnnuncio']) && $_GET['inseritoAnnuncio'] == true){
$alert6= '<div class="alert my-0 alert-success alert-dismissible fade show font2" role="alert">
<strong>Messaggio:</strong> Annuncio inserito correttamente
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
echo $alert6;
if($alert6!=""){
?>
<script>
setTimeout(() => {
    window.location = "./index.php";
}, 2000)
</script>
<?php
}
}
else if(isset($_GET['inseritoAnnuncioFalito']) && $_GET['inseritoAnnuncioFalito'] == true){
$alert7= '<div class="alert my-0 alert-danger alert-dismissible fade show font2" role="alert">
<strong>Messaggio:</strong> Inserimento annuncio Fallito
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
echo $alert7;
if($alert7!=""){
?>
<script>
setTimeout(() => {
    window.location = "./index.php";
}, 2000)
</script>
<?php
}
}

elseif(isset($_GET['formatoNonValido']) && $_GET['formatoNonValido'] == true){
    $alert8= '<div class="alert my-0 alert-danger alert-dismissible fade show font2" role="alert">
    <strong>Messaggio:</strong> Formato del File non valido.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  echo $alert8;
  if($alert8!=""){
    ?>
<script>
setTimeout(() => {
    window.location = "./index.php";
}, 2000)
</script>
<?php
  }
}
elseif(isset($_GET['Modifica']) && $_GET['Modifica'] == true){
    $alert9= '<div class="alert my-0 alert-success alert-dismissible fade show font2" role="alert">
    <strong>Messaggio:</strong> Annuncio modificato correttamente.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  echo $alert9;
  if($alert9!=""){
    ?>
<script>
setTimeout(() => {
    window.location = "./imieiAnnunci.php";
}, 2000)
</script>
<?php
  }
}
elseif(isset($_GET['Aggiunto']) && $_GET['Aggiunto'] == true){
    $alert10= '<div class="alert my-0 alert-success alert-dismissible fade show font2" role="alert">
    <strong>Messaggio:</strong> Annuncio inserito correttamente al carrello.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  echo $alert10;
  if($alert10!=""){
    ?>
<script>
setTimeout(() => {
    window.location = "./shop.php";
}, 2000)
</script>
<?php
  }
}
elseif(isset($_GET['AnnuncioCancellatoCarrello']) && $_GET['AnnuncioCancellatoCarrello'] == true){
  $alert11= '<div class="alert my-0 alert-success alert-dismissible fade show font2" role="alert">
  <strong>Messaggio:</strong> Annuncio eliminato tra i preferiti.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
echo $alert11;
if($alert11!=""){
  ?>
<script>
setTimeout(() => {
    window.location = "./Vistacarrello.php";
}, 2000)
</script>
<?php
}
}
elseif(isset($_GET['Mex']) && $_GET['Mex'] == true){
  $alert12= '<div class="alert my-0 alert-success alert-dismissible fade show font2" role="alert">
  <strong>Messaggio:</strong> Messaggio inviato correttamente.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
echo $alert12;
if($alert12!=""){
  ?>
<script>
setTimeout(() => {
    window.location = "./Shop.php";
}, 2000)
</script>
<?php
}
else if(isset($_GET['Mex']) && $_GET['Mex'] == false){
  $alert13= '<div class="alert my-0 alert-success alert-dismissible fade show font2" role="alert">
  <strong>Messaggio:</strong> Messaggio non inviato correttamente.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
echo $alert13;
if($alert13!=""){
  ?>
<script>
setTimeout(() => {
    window.location = "./Shop.php";
}, 2000)
</script>
<?php
}
}





}else if(isset($_GET['emailVerified']) && $_GET['emailVerified'] == true){
  $alert14= '<div class="alert my-0 alert-success alert-dismissible fade show font2" role="alert">
  <strong>Messaggio:</strong> Email è stato validata.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
echo $alert14;
if($alert14!=""){
  ?>
<script>
setTimeout(() => {
    window.location = "./index.php";
}, 2000)
</script>
<?php
}
}
else if(isset($_GET['emailnotVerified']) && $_GET['emailnotVerified'] == true){
  $alert15= '<div class="alert my-0 alert-success alert-dismissible fade show font2" role="alert">
  <strong>Messaggio:</strong> Email non è stato  validata.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
echo $alert15;
if($alert15!=""){
  ?>
<script>
setTimeout(() => {
    window.location = "./index.php";
}, 2000)
</script>
<?php
}
}

else if(isset($_GET['passwordChanged']) && $_GET['passwordChanged'] == true){
  $alert16= '<div class="alert my-0 alert-success alert-dismissible fade show font2" role="alert">
  <strong>Messaggio:</strong>La Password è stata Modificata!!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
echo $alert16;
if($alert16!=""){
  ?>
<script>
setTimeout(() => {
    window.location = "./index.php";
}, 2000)
</script>
<?php
}
}

else if(isset($_GET['passwordnotChanged']) && $_GET['passwordnotChanged'] == true){
  $alert17= '<div class="alert my-0 alert-success alert-dismissible fade show font2" role="alert">
  <strong>Messaggio:</strong>Password non è stato Modificato!!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
echo $alert17;
if($alert17!=""){
  ?>
<script>
setTimeout(() => {
    window.location = "./index.php";
}, 2000)
</script>
<?php
}
}


?>