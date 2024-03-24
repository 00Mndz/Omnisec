<?php

$usuario = 'root';
$senha = '';
$database = 'cadastrooni';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) {
    die("falha ao conectar ao bando de dados");

}