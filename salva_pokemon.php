<?php
$nome = $_GET['nome'];
$tipo = $_GET['tipo'];

$sql = "INSERT INTO pokedex (`nome`,`tipo`) values ('$nome','$tipo')";
$host = "localhost";
$user = "root";
$senha = "";
$dbname = "pokemon";
$con = mysqli_connect($host, $user, $senha, $dbname) or die ("Não foi possivel conectar-se com o banco de dados");
$res = mysqli_query($con, $sql) or die ("Erro ao inserir o pokemon");
echo "pokemon na pokedex";
?>