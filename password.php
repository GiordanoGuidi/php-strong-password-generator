<?php 
//RECUPERO IL VALORE DELLA RANDOM PASSWORD
session_start();
$random_password = $_SESSION['random_password'] ;
var_dump($random_password)
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> La tua nuova email è : <strong><?= $random_password ?></strong></p>
    
</body>
</html>