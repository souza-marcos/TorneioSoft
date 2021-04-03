<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/form.css">
</head>

<body>
    <nav>
        <h1>TorneioSoft</h1>
        <a href="../index.php">Página Inicial</a>
    </nav>

    <form action="autenticacao.php" method="post">

        <div class="rowForm">
            <label for="usuario">Digite seu nome de Usuário: </label>
            <input type="text" name="usuario" id="usuario" required>
        </div>
        <div class="rowForm">
            <label for="senha">Digite sua senha: </label>
            <input type="password" name="senha" id="senha" required>
        </div>
        <div class="rowForm">
            <button type="submit">Enviar</button>
        </div>
    </form>

</body>
</html>