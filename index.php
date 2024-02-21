<?php 
require_once __DIR__ . '/utils/functions.php';
//RECUPERO I DATI
$password_length= $_GET['length'] ?? '';


/*SALVO IL VALORE DELLA FUNZIONE NELLA SESSIONE
SOLO SE MI E' STATA FORNITA PRIMA LA LUNGHEZZA DELLA PASSWORD*/
if($password_length){
    session_start();
    //SALVO IL VALORE DELLA FUNZIONE NELLA SESSIONE
    $_SESSION['random_password'] = get_random_password($password_length);
    var_dump($_SESSION);
}

/*FACCIO IL REDIRECT SOLO DOPO IL SALVATAGGIO
 DEL VALORE NELLA SESSIONE*/
if(isset($_SESSION['random_password'])){
    header('Location: password.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="bg-black">
    <div class="container">
        <header class="text-center my-5 text-white">
            <h1>Strong Password Generator</h1>
            <h2>Genera una password sicura</h2>
        </header>
        <main>
            <div class="form-container text-white bg-ligthblue">
                <form action="" method="GET">
                    <div class="mb-3 d-flex align-items-center justify-content-between">
                        <label for="length" class="form-label">Lunghezza Password:</label>
                        <input type="number" class="p-1" name="length" placeholder="Lunghezza della password" min="3" max="20">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </main>
    </div>
</body>
</html>