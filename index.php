<?php 
require_once __DIR__ . '/utils/functions.php';
//RECUPERO I DATI
$password_length= $_GET['length'] ?? '';
// var_dump($password_length);
// var_dump(get_random_password($password_length));

//SALVO IL VALORE DELLA FUNZIONE NELLA SESSIONE
session_start();
$_SESSION['random_email'] = get_random_password($password_length);
var_dump($_SESSION);









?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="bg-secondary">
    <div class="container">
        <header class="text-center my-5">
            <h1>Strong Password Generator</h1>
            <h2 class="text-white">Genera una password sicura</h2>
        </header>
        <main>
            <div class="container bg-warning">
                <form action="" method="GET">
                    <div class="mb-3 d-flex align-items-center justify-content-between">
                        <label for="length" class="form-label">Lunghezza Password:</label>
                        <input type="number" class="form-control w-50" name="length">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <p><?= get_random_password($password_length)?></p>
            </div>
        </main>
    </div>
    
    
</body>
</html>