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

    .btn-danger {
        background-color: black !important;
        border: 2px solid black !important;
    }
    </style>

</head>

</html>

<?php




//Login modal
echo '<div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="LoginModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title font2" id="LoginModalLabel"><b>Accedi</b></h5>
                 <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <form action="login.php" method="post">

                     <div class="form-group">
                         <label class="font2" for="exampleInputPassword1"><b>Email</b></label>
                         <input type="Email" class="form-control font2" name="Email" id="LoginEmail" placeholder="Email">
                         <label class="text-danger" id="wr"></label>
                     </div>
                     <div class="form-group">
                         <label class="font2" for="exampleInputPassword1"><b>Password</b></label>
                         <input type="password" class="form-control font2" name="Password" id="LoginPassword" placeholder="Password">
                         <a class="text-dark" href="./email/PasswordEmailSent.php">Password dimenticata?</a>
                     </div>
                     <button type="submit" class="btn btn-primary font2">Submit</button>
                 </form>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-danger font2" data-bs-dismiss="modal">Close</button>

             </div>
         </div>
     </div>
 </div>';







echo '<div class="modal fade" id="RegistrationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title font2" id="exampleModalLabel "><b>Registrazione</b></h5>
                 <button type="button" class="btn-close button-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">

                 <form action="./email/registrazione.php" method="post">
                     <div class="mb-3">
                         <label class="form-label font2"><b>Nome</b></label>
                         <input type="Text" class="form-control" name="Nome" id="Nome" aria-describedby="emailHelp"required>
                         <label class="text-danger" id="wr2"></label>
                     </div>
                     <div class="mb-3">
                         <label class="form-label font2">Cognome</label>
                         <input type="Text" class="form-control" name="Cognome" id="Cognome"
                             aria-describedby="emailHelp" required>
                             <label class="text-danger" id="wr3"></label>

                     </div>
                    <div class="mb-3">
                         <label class="form-label font2">Email</label>
                         <input type="Text" class="form-control" name="Email" id="Email"
                             aria-describedby="emailHelp" required>
                             <label class="text-danger" id="wr4"></label>

                     </div>
                     <div class="mb-3">
                         <label class="form-label font2">Password</label>
                         <input type="password" class="form-control" name="Password" id="Password" required>
                         <label class="text-danger" id="wr5"></label>
                     </div>
                     <div class="mb-3">
                         <label class="form-label font2">Conferma Password</label>
                         <input type="password" class="form-control" name="ConfermaPassword" id="ConfermaPassword"
                             required>
                             <label class="text-danger" id="wr6"></label>
                     </div>

                     <div class="mb-3">
                     <label class="form-label font2">Inserisci la tua città</label>
                     <select class="form-select" name="città" aria-label="Default select example">
                     ';





$sql = "SELECT * FROM `Citta`";
$res = mysqli_query($conn, $sql);


while ($dataFetched = mysqli_fetch_assoc($res)) {
    $idCitta = $dataFetched['idCitta'];
    $cittaAll = $dataFetched['nomeCitta'];

    echo '<option value="' . $idCitta . '">' . $cittaAll . '</option>';
}



echo '</select>
</div>
                     <div class="mb-3">
                         <label class="form-label font2"><b>Via</b></label>
                         <input type="Text" class="form-control" name="Via" id="Via" required>
                         <label class="text-danger" id="wr7"></label>
                     </div>
                     <div class="mb-3">
                         <label class="form-label font2"><b>Telefono</b></label>
                         <input type="Text" class="form-control" name="Telefono" id="Telefono" required>
                         <label class="text-danger" id="wr8"></label>
                     </div>
                     <div class="mb-3">
                         <label class="form-label font2"><b>NumeroCivico</b></label>
                         <input type="Number" class="form-control" name="NumeroCivico" id="numC" required>
                         <label class="text-danger" id="wr9"></label>
                     </div>

                     <button type="submit" name="create" class="btn btn-primary font2">Submit</button>
                 </form>

             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-danger font2" data-bs-dismiss="modal">Close</button>
             </div>

         </div>
     </div>
 </div>

';

?>

<html>

<head>

</head>

<body>
    <script>
    const LoginEmail = document.getElementById('LoginEmail');
    const LoginPassword = document.getElementById('LoginPassword');
    const name = document.getElementById('Nome');
    const Cognome = document.getElementById('Cognome');
    const email = document.getElementById('Email');
    const password = document.getElementById('Password');
    const Confermapassword = document.getElementById('ConfermaPassword');
    const Via = document.getElementById('Via');
    const phone = document.getElementById('Telefono');
    const numC = document.getElementById('numC');


    let validEmail = false;
    let validPhone = false;
    let validUser = false;
    let validCognome = false;
    let validPassword = false;
    let validConfermaPassword = false;
    let validVia = false;
    let validnumC = false;
    let validLoginPassword = false;
    let validLoginEmail = false;
    /* $('#failure').hide();
    $('#success').hide(); */

    // console.log(name, email, phone);
    name.addEventListener('blur', () => {

        // Validate name here
        let regex = /^[a-zA-Z]([0-9a-zA-Z]){2,10}$/;
        let str = name.value;
        console.log(regex, str);
        if (regex.test(str)) {
            console.log('Your name is valid');
            name.classList.remove('is-invalid');
            validUser = true;
        } else {
            console.log('Your name is not valid');
            name.classList.add('is-invalid');
            validUser = false;


        }
    })

    Cognome.addEventListener('blur', () => {

        // Validate name here
        let regex = /^[a-zA-Z]([0-9a-zA-Z]){2,10}$/;
        let str = Cognome.value;
        console.log(regex, str);
        if (regex.test(str)) {
            console.log('Your cognome is valid');
            Cognome.classList.remove('is-invalid');
            validCognome = true;
        } else {

            console.log('Your Cognome is not valid');
            Cognome.classList.add('is-invalid');
            validCognome = false;

        }
    })

    /*  password.addEventListener('blur', () => {

        
         let str = password.value;
         console.log(regex, str);
         if (regex.test(str)) {
             console.log('Your password is valid');
             password.classList.remove('is-invalid');
             validPassword = true;
         } else {
             document.getElementById('wr5').innerHTML = 'Your password is not valid';
             console.log('Your password is not valid');
             password.classList.add('is-invalid');
             validPassword = false;

         }
     }) */

    /*     LoginPassword.addEventListener('blur', () => {

            
            let regex = /(?=.[a-z])(?=.[A-Z])(?=.\d)(?=.[@$!%?&])[A-Za-z\d@$!%?&]{8,15}$/;
            let str = LoginPassword.value;
            console.log(regex, str);
            if (regex.test(str)) {
                console.log('Your password is valid');
                LoginPassword.classList.remove('is-invalid');
                validLoginPassword = true;
            } else {
                document.getElementById('wr1').innerHTML = 'Your password is not valid';
                console.log('Your password is not valid');
                LoginPassword.classList.add('is-invalid');
                validLoginPassword = false;

            }
        }) */



    /*  Confermapassword.addEventListener('blur', () => {

         // Validate name here
         let regex = /(?=.[a-z])(?=.[A-Z])(?=.\d)(?=.[@$!%?&])[A-Za-z\d@$!%?&]{8,15}$/;
         let str = Confermapassword.value;
         console.log(regex, str);
         if (regex.test(str)) {
             console.log('Your Confermapassword is valid');
             Confermapassword.classList.remove('is-invalid');
             validConfermaPassword = true;
         } else {
             document.getElementById('wr6').innerHTML = 'Your password is not valid';
             console.log('Your password is not valid');
             Confermapassword.classList.add('is-invalid');
             validConfermaPassword = false;

         }
     }) */

    Via.addEventListener('blur', () => {

        // Validate name here
        let regex = /^[a-zA-Z]([0-9a-zA-Z]){5,40}$/;
        let str = Via.value;
        console.log(regex, str);
        if (regex.test(str)) {
            console.log('Your Via is valid');
            Via.classList.remove('is-invalid');
            validVia = true;
        } else {
            console.log('Your Via is not valid');
            Via.classList.add('is-invalid');
            validVia = false;

        }
    })

    numC.addEventListener('blur', () => {

        // Validate name here
        let regex = /^ (?=.[0-9]){5}$/;
        let str = Cap.value;
        console.log(regex, str);
        if (regex.test(str)) {
            console.log('Your numeroCivico is valid');
            Cap.classList.remove('is-invalid');
            validCap = true;
        } else {

            console.log('Your  CAP is not valid');
            Cap.classList.add('is-invalid');
            validCap = false;

        }
    })


    email.addEventListener('blur', () => {
        // Validate email here
        let regex = /^([_\-\.0-9a-zA-Z]+)@([_\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,7}$/;
        let str = email.value;
        console.log(regex, str);
        if (regex.test(str)) {
            console.log('Your email is valid');
            email.classList.remove('is-invalid');
            validEmail = true;
        } else {

            console.log('Your email is not valid');
            email.classList.add('is-invalid');
            validEmail = false;
        }
    })

    LoginEmail.addEventListener('blur', () => {

        // Validate name here
        let regex = /^([_\-\.0-9a-zA-Z]+)@([_\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,7}$/;
        let str = LoginEmail.value;
        console.log(regex, str);
        if (regex.test(str)) {
            console.log('Your password is valid');
            LoginEmail.classList.remove('is-invalid');
            validLoginEmail = true;
        } else {

            LoginEmail.classList.add('is-invalid');
            validLoginEmail = false;

        }
    })

    phone.addEventListener('blur', () => {
        // Validate phone here
        let regex = /^([0-9]){10}$/;
        let str = phone.value;
        console.log(regex, str);
        if (regex.test(str)) {
            console.log('Your phone is valid');
            phone.classList.remove('is-invalid');
            validPhone = true;
        } else {

            console.log('Your phone is not valid');
            phone.classList.add('is-invalid');
            validPhone = false;

        }
    })
    </script>
</body>

</html>