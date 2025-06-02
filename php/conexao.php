<?php
$servidor = "localhost";
$usuario = "root";
$senha = "root";
$bancodedados = "bd_sistema_chamado";


$conexao = new mysqli($servidor, $usuario, $senha, $bancodedados);

if ($conexao->connect_error) {
    die ("error: ".$conexao->connect_error);
}
?>
