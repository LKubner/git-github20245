<?php
require_once "conecta.php";
$conexao = conectar();
$sql = "SELECT * FROM usuario";
$result = mysqli_query($conexao, $sql);
if ($result) {
    $usuarios = mysqli_fetch_all($result, MYSQLI_ASSOC);
} else {
    echo mysqli_errno($conexao) . ": " . mysqli_error($conexao);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="form.php">Cadastrar</a><br>
    <table>
         <thead>
        <tr>
            <th>Id</th>
            <th>Email</th>
            <th colspan="2"> Opções</th>
</tr>
</thead>
<tbody>
<?php
            foreach ($usuarios as $usuario) {
                echo "<tr><td>" . $usuario['id_usuario'] . "</td>";
                echo "<td>" . $usuario['email'] . "</td>";
                echo '<td><a href="formalterar.php?id_usuario=' .
                    $usuario['id_usuario'] . '">Alterar</td>';
                echo '<td><a href="excluir.php?id_usuario=' .
                    $usuario['id_usuario'] . '">Excluir</td>';
            }
            ?>
        </tbody>
    </table>
</body>

</html>