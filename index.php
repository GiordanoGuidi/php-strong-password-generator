<?php 
require_once __DIR__ . '/utils/functions.php';
//RECUPERO I DATI
$password_length= $_GET['length'] ?? '';
//!VALIDAZIONE LUNGHEZZA PASSWORD DEVE ESSERE UN NUMERO COMPRESO TRA 3 E 20
//!FAR USCIRE UN ALERT CHE MI COMUNICA SE IL CAMPO E' SBAGLIATO
//! mostrare la passsword in un alert
var_dump($password_length);


/*SALVO IL VALORE DELLA FUNZIONE NELLA SESSIONE
SOLO SE MI E' STATA FORNITA PRIMA LA LUNGHEZZA DELLA PASSWORD*/
if(isset($password_length) && is_numeric($password_length)
 && $password_length > 3 && $password_length < 20){
    session_start();
    //SALVO IL VALORE DELLA FUNZIONE NELLA SESSIONE
    $_SESSION['random_password'] = get_random_password($password_length);
    var_dump($_SESSION);
}

/*FACCIO IL REDIRECT SOLO DOPO IL SALVATAGGIO
 DEL VALORE NELLA SESSIONE*/
if(isset($_SESSION['random_password'])){
    header('Location: templates/password.php');
}

?>

<!DOCTYPE html>
<html lang="en">
    <!--HEAD-->
<?php include __DIR__ .'/layout/head.php'?>
<body class="bg-black">
    <div class="container">
        <!--HEADER-->
        <?php include __DIR__ .'/layout/header.php' ?>
        <main>
            <?php if( isset($password_length) && is_numeric($password_length) 
            && $password_length < 3 || $password_length > 20) :?>
            <div class="alert alert-danger" role="alert">
                <p>Il valore deve essre un numero maggiore di 3 e minore di 20</p>
            </div>
            <?php endif;?>
            <!--FORM-->
            <?php include __DIR__ .'/templates/form.php'  ?> 
        </main>
    </div>
</body>
</html>