<?php
require_once "conexao.php";
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
            <th>Opções</th>
</tr>
</thead>
<tbody>
    <tr>
        <td>1</td>
        <td>Thiago</td>
        <td>Alterar</td>
        <td>Excluir</td>
</tr>
</tbody>
</table>

   Óla mundo
   <form method="post">

</body>
</form>
</html>