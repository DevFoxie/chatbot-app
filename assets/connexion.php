<?php
<<<<<<< HEAD
$dns = 'mysql:host=localhost;dbname=chatbot';
=======
$dns = 'mysql:host=127.0.0.1;dbname=chatbot';
>>>>>>> 242b788 (2nd commit)
$user = 'root';
$password = '';

try{
    $db = new PDO( $dns, $user, $password);
    // echo "connexion established" ;

}
catch (Exception $message){
    echo "There is an issue <br>" . "<pre>$message</pre>" ;
}
