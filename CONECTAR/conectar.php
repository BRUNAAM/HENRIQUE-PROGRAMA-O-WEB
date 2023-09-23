<?php
include('conectar.php');
if (!empty($_GET['action']))
if ($_GET['action']== 'excluir') {
$id_pokemon = $_GET['id_pokemon'];
$sql_delete = "DELETE FROM pokedex WHERE id_pokemon = '$id_pokemon'";
if (mysqli_query($con, $sql_delete)){
    echo "<b>Excluido com sucesso</b><br>";
}else {
    {echo "<b> erro ao excluir</br> <br>"}
}
}