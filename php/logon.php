<?php 
$email = $_POST['email'];
$senha = $_POST['senha'];

include 'conexão.php';

$select = "SELECT * FROM tb_user WHERE  email = $email";

$query = $conexão->query($select);
$resultado = $query->fetch_assoc();

$email_banco = $resultado ['email'];
$senha_banco = $resultado['senha'];

if ($email == $email_banco && $senha == $senha_banco ) {
   header('location: ../home.html');

}else {
        echo "<script>alert('usuário ou Senha invalida incorreto'); history.back() </script>";

}















?>
