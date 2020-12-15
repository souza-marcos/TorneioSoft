<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/form.css">
    <title>Cadastro de Partidas</title>
</head>

<body>
    <nav>
        <h1>Atividade de LP II </h1>
        <a href="../index.html">Página Inicial</a>
    </nav>
    <div id="content">
        <h1>Cadastro de Partidas</h1>
        <p>Digite os dados nos campos a seguir</p>

        <form action="cadastroPartida.php" method="post">
            <div class="rowForm">
                <div class="divideRow">
                    <label for="timeCasa">Time Casa: </label>
                    <input type="text" name="timeCasa" id="timeCasa">
                </div>
                <div class="divideRow">
                    <label for="golsCasa">Gols Casa: </label>
                    <input type="number" name="golsCasa" id="golsCasa">
                </div>
            </div>
            <div class="rowForm">
                <label for="timeFora">Time Fora: </label>
                <input type="text" name="timeFora" id="timeFora">
                <!-- </div>
            <div class="rowForm"> -->
                <label for="golsFora">Gols Fora: </label>
                <input type="number" name="golsFora" id="golsFora">
            </div>
            <div class="rowForm">
                <label for="data">Data: </label>
                <input type="datetime-local" name="data" id="data">
            </div>
            <div class="rowForm">
                <label for="local">Local: </label>
                <input type="text" name="local" id="local">
            </div>

            <button type="submit">Salvar</button>
        </form>
    </div>
</body>

</html>