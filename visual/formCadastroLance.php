<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/form.css">
    <title>Cadastro de Partidas</title>
    <?php
    require_once '../Dao/DaoPartida.php';
    require_once '../Dao/DaoTime.php';

    $daoPartida = new DaoPartida();
    $daoTime = new DaoTime();
    $lista = null;
    if (isset($_GET['id'])) {
        $lista = $daoPartida->getPartida($_GET['id']);
    } else {
        $lista = $daoPartida->getLista();
    }
    ?>
</head>

<body>
    <nav>
        <h1>Atividade de LP II </h1>
        <a href="paginaInicial.php">Página Inicial</a>
    </nav>
    <div id="content">
        <h1>Cadastro de Lances</h1>
        <p>Digite os dados nos campos a seguir</p>

        <form action="cadastroLance.php" method="post">
            <div class="rowForm">
                <label for="partida">Partida: </label>
                <?php
                $timeCasa = null;
                $timeFora = null;
                echo '<select name="partida" id="partida" required>';
                foreach ($lista as $partida) {
                    $timeCasa = $daoTime->getTime($partida['timeCasa'])[0];
                    $timeFora = $daoTime->getTime($partida['timeFora'])[0];
                    echo '<option value="' . $partida['id'] . '">' . $timeCasa['nome'] . ' X ' . $timeFora['nome'] . '</option>';
                }
                echo '</select>';

                ?>

            </div>
            <div class="rowForm">
                <label for="gerador">Gerador: </label>
                <input type="number" name="gerador" id="gerador" required>
            </div>
            <div class="rowForm">
                <label for="horario">Horário: </label>
                <input type="datetime-local" name="horario" id="horario" required>
            </div>
            <div class="rowForm">
                <label for="lance">Lance: </label>
                <input type="text" name="lance" id="lance" required>
            </div>
            <div class="rowForm">
                <label for="foto">Foto: </label>
                <input type="file" name="foto" id="foto">
            </div>

            <button type="submit">Salvar</button>
        </form>
    </div>
</body>

</html>