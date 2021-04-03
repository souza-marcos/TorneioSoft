<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/form.css">
    <link rel="stylesheet" href="./css/descricao.css">
    <title>Cadastro de Partidas</title>
    <?php

    session_start();
    if (!isset($_SESSION['usuario']) | empty($_SESSION)) {
        session_destroy();
        header("Location: ../index.php");
    }


    require_once '../Dao/DaoTime.php';
    require_once '../modelo/Time.php';
    $daoTime = new DaoTime();
    $listaTimes = $daoTime->getLista();
    $options = null;
    foreach ($listaTimes as $time) {
        $options .= '<option value="' . $time['id'] . '">' . $time['id'] . ' - ' . $time['nome'] . '</option>';
    }
    ?>
</head>

<body>
    <nav>
        <h1>TorneioSoft</h1>
        <a href="paginaInicial.php">Página Inicial</a>
        <a href="listaPartidas.php">Listagem Partidas</a>
    </nav>
    <div id="descricao">
        <h1>Cadastro de Partidas</h1>
        <p>Digite os dados nos campos a seguir</p>

        <form action="cadastroPartida.php" method="post">

            <div class="rowForm">
                <div class="divideRow">
                    <label for="timeCasa">Time Casa: </label>
                    <select name="timeCasa" id="timeCasa" required>
                        <?php
                        echo $options;
                        ?>
                    </select>
                    <label for="golsCasa">Gols Casa: </label>
                    <input type="number" name="golsCasa" id="golsCasa" required>
                </div>
            </div>
            <div class="rowForm">
                <label for="timeFora">Time Fora: </label>
                <select name="timeFora" id="timeFora" required>
                    <?php
                    echo $options;
                    ?>
                </select>
                <label for="golsFora">Gols Fora: </label>
                <input type="number" name="golsFora" id="golsFora" required>
            </div>
            <div class="rowForm">
                <label for="data">Data: </label>
                <input type="datetime-local" name="data" id="data" required>
            </div>
            <div class="rowForm">
                <label for="local">Local: </label>
                <input type="text" name="local" id="local" required>
            </div>

            <button type="submit">Salvar</button>
        </form>
    </div>
</body>

</html>