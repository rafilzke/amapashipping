<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'amapashipping');

//define('HOST', 'aspometerfa.mysql.dbaas.com.br');
//define('USER', 'aspometerfa');
//define('PASS', 'Topinfo@2019');
//define('DB', 'aspometerfa');


$conexao = 'mysql:host=' . HOST . ';dbname=' . DB;
try {
    $conecta = new PDO($conexao, USER, PASS);
    $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $erro_conexao) {
    echo 'Erro ao conectar no banco de dados ' . $erro_conexao->getMessage();
}

