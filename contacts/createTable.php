<?php
require_once('./connection.php');

$sql = "CREATE TABLE contact (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(30) NULLABLE,
    phone VARCHAR(30) NOT NULL,
    create_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP

)";

if($connection->query($sql)) {
    echo "Tabela contact criada com sucesso";
} else {
    echo "erro na criação da tabela";
}

$connection->close();