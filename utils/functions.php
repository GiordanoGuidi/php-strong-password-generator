<?php 
//#FUNZIONI
//FUNZIONE CHE GENERA UNA PASSWORD CASUALE DI TOT LETTERE
function get_random_password($password_length)
{

    $password = '';
    $letter = 'abcdefghilmnopqrstuvz';
    $numbers = '123456789';
    $special_characters = '!£$%&/()=?^*éç°#¶§';

    $characters = $letter . strtoupper($letter) . $special_characters;
    //Numero totale di caratteri
    $total_characters = mb_strlen($characters);
    
    
    while(mb_strlen($password) < $password_length){
        //Prendo un indice random
        $random_index = rand(0, $total_characters -1 );
        //Prendo un carattere a caso
        $random_character = $characters[$random_index];
        $password .= $random_character;
        
    }
    return $password;
}
?>