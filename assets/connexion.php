<?php
$dns = 'mysql:host=localhost;dbname=chatbot';
$user = 'root';
$password = '';

try{
    $db = new PDO( $dns, $user, $password);
    // echo "connexion established" ;

}
catch (Exception $message){
    echo "There is an issue <br>" . "<pre>$message</pre>" ;
}
