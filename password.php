<?php 
//RECUPERO IL VALORE DELLA RANDOM PASSWORD
session_start();
$random_password = $_SESSION['random_password'] ;
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
<body class="bg-black text-white">
    <div class="container mt-5 bg-ligthblue rounded-2 p-3">
        <p> La tua nuova email è : <strong class="text-black"><?= $random_password ?></strong></p>
        <a href="index.php">Torna al Password Generator</a>
    </div>
</body>
</html>