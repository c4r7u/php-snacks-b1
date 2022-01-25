<?php 
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];

    if(strlen($name) <= 3 || strpos($mail, '@') === false) {
        echo 'Accesso Negato';
    } else {
        echo 'Accesso Riuscito';
    };
?>