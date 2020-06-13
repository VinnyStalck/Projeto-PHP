<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "hexagon";

# Conecta com o banco de dados
$conexao = mysqli_connect($host, $usuario, $senha, $banco);

# Verifica se ocorreu algum erro na conexão
if (!$conexao) {
    die("Erro ao conectar ao banco de dados: ".mysqli_connect_error());
}