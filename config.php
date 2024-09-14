<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '1808';
    $dbName = 'formulario-lucas';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if($conexao->connect_errno)
    {
        echo "Erro";
    }
    else
    {
        echo "Conexão efetuada com sucesso";
    }

?>