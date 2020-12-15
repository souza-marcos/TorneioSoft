<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/form.css">
    <title>Cadastro de Times</title>
</head>

<body>
    <nav>
        <h1>Atividade de LP II </h1>
        <a href="../index.html">Página Inicial</a>
    </nav>
    <div id="content">
        <h1>Cadastro de Times</h1>
        <p>Digite os dados nos campos a seguir</p>
        <form action="cadastroTime.php" method="post">
            <div class="rowForm">
                <label for="nome">Nome: </label>
                <input type="text" name="nome" id="nome">
            </div>

            <div class="rowForm">
                <label for="cidadeEstado">Cidade e Estado: </label>
                <input type="text" name="cidadeEstado" id="cidadeEstado">

            </div>
            <div class="rowForm">
                <label for="pais">País: </label>
                <input type="text" name="pais" id="pais">

            </div>

            <button type="submit">Salvar</button>
        </form>
    </div>
</body>

</html>