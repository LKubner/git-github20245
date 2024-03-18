<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Alterar Usuario </title>
</head>
<body>
<form action="alterar.php" method="post">
        ID <input type="number" name="id_usuario" value="<?= $usuario['id_usuario'] ?>"><br>
        Email <input type="email" name="email" value="<?= $usuario['email'] ?>"><br>
        Senha <input type="password" name="senha" value="<?= $usuario['senha'] ?>"><br>
        <input type="submit" value="Salvar"><br>
    </form>
</body>
</html>