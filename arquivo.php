<?php
echo 'conectar ao banco de dados procedual ';
$host = "localhost";
$user = "root";
$senha = "";
$dbname = "pokemon";
$con = mysqli_connect($host, $user, $senha, $dbname) or die ("Não foi possivel conectar-se com o banco de dados");

$consulta = "SELECT * FROM pokedex";
$resultado = mysqli_query($con, $consulta);
$resultado2 = mysqli_query($con, $consulta);

$xyz = mysqli_fetch_array($resultado, MYSQLI_BOTH);
echo "pokemon: $xyz[nome]";

while($row = mysqli_fetch_array($resultado,MYSQLI_BOTH)){
    echo "$row[id_pokemon] $row[nome] $row[tipo] ";
}


?>