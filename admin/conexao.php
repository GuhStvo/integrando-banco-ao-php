<?php


$servername = "localhost"; // Padrão
$database = "loja";
$username = "root";
$password = "";

// Criar conexão
$conexao = mysqli_connect($servername, $username, $password, $database);

// mysqli_connect é responsável por fazer a conexão com o banco de mysql.
// A ordem deve ser: endereço do servidor (pode ser IP, URL ou localhost).
// Nome do usuário se estiver hospedado, caso seja local é sempre root.
// Password na máquina local fica em branco e nome do banco de dados.
//  Nomes de banco, tabelas, campos e variáveis sem espaço e sem ascentos.
// Ao invés de espaço use "_ (underline)".
?>