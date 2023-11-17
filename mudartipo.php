<?php

session_start(),

include('conexao.php');
include('validaradmin.php');

$cpf = isset($_POST['cpf']) ? $_POST['cpf']:'';
$nivel = isset($_POST['nivel']) ? $_POST['nivel']:'';

$update = "UPDATE login set nivel = '$nivel' WHERE cpf = '$cpf'";
$query = mysqli_query($conexao, $update);

var_dump($update);

//header('Location: mudaracesso.php')

?>