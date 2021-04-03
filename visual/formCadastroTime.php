<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/form.css">
    <link rel="stylesheet" href="./css/descricao.css">
    <title>Cadastro de Times</title>
    <?php
        session_start();        
        if (!isset($_SESSION['usuario']) | empty($_SESSION)) {
            session_destroy();
            header("Location: ../index.php");
        }
        
    ?>
</head>

<body>
    <nav>
        <h1>TorneioSoft</h1>
        <a href="paginaInicial.php">Página Inicial</a>
        <a href="listaTimes.php">Listagem Times</a>
    </nav>
    <div id="descricao">
        <h1>Cadastro de Times</h1>
        <p>Digite os dados nos campos a seguir</p>
        <form action="cadastroTime.php" method="post">
            <div class="rowForm">
                <label for="nome">Nome: </label>
                <input type="text" name="nome" id="nome" required>
            </div>

            <div class="rowForm">
                <label for="cidadeEstado">Cidade e Estado: </label>
                <input type="text" name="cidadeEstado" id="cidadeEstado" required>

            </div>
            <div class="rowForm">
                <label for="pais">País: </label>
                <input type="text" name="pais" id="pais" required>

            </div>

            <button type="submit">Salvar</button>
        </form>
    </div>
</body>

</html>