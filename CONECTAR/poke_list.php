<?php
$consulta = "SELECT * FROM pokedex";
$resultado = mysqli_query($con, $consulta);
?>
<table border="1">
    <thead>
        <tr>
        <td>E</td>
        <td>X</td>
        <td>Nome</td>
        <td>Tipo</td>
        </tr>
</thead>
<?php
while ($row = mysqli_fetch_array($resultado, MYSQLI_BOTH)) {
    $link="<a href='poke_list.php?action=excluir$id_pokemon=$row[id_pokemon]'>Excluir>"

echo "<tr><td>$row[idPokemon]</td>";
    echo "<td>$excluir</td>";
    echo "<td>$link</td>";
    echo "<td>$row[nome]</td>";
    echo "<td>$row[tipo]</td></tr>"; 
}
?>
</table>