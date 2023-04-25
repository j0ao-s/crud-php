<?php

    $db_name = 'test';
    $db_host = 'localhost:3306';
    $db_user = 'root';
    $db_password = '';

    $pdo = new PDO("mysql:dbname=".$db_name.";host=".$db_host, $db_user, $db_password);

    /*Cria uma nova instância de um objeto PDO que representa a conexão com o banco de dados MySQL. O parâmetro mysql:dbname define o nome do banco de dados a ser usado, enquanto host define o endereço do servidor de banco de dados a ser usado. Os parâmetros $db_user e $db_password são usados para autenticar o usuário que está acessando o banco de dados.*/
?>