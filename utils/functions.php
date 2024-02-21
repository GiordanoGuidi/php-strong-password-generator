<?php 
//#FUNZIONI
//FUNZIONE CHE GENERA UNA PASSWORD CASUALE DI TOT LETTERE
function get_random_password($password_length)
{
    $letter = ['abcdefghilmnopqrstuvz'];
    $letter_string = str_split(implode($letter));
    $password=[];
    for($i=0; $i < $password_length; $i++){
        $password[]= $letter_string[array_rand($letter_string)];
    }
    return implode($password);
}
?>
