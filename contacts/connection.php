<?php

$server = "localhost";
$user = "root";
$password = "";

$connection = new mysqli($server, $user, $password);

if($connection->connetion-error) {
    die("Falha na conexão" . $connection->connetion_error);

}
