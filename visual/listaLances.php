<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Lances</title>
    <link rel="stylesheet" href="./css/tableStyle.css">
    <link rel="stylesheet" href="./css/main.css">
    <style>
        table {
            width: 70%;
        }
        td a{
            width: 10vw;
        }
    </style>
    <?php

    require_once '../modelo/Lance.php';
    require_once '../Dao/DaoLance.php';

    $daoLance = new DaoLance();
    $idPartida = null;
    $lista = null;
    if ($_GET != null) {
        $idPartida = $_GET['id'];
        $lista = $daoLance->getLancesPartida($idPartida);
    } else {
        $lista = $daoLance->getLista();
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
        <h1>Lista de Lances</h1>
        
        <?php
        if ($lista == null) {
            echo '<p>Não possui nunhum lance cadastrado!</p>';
        } else {
            echo '<table>
            <tr>
                <th>ID</th>
                <th>Partida</th>
                <th>Gerador</th>
                <th>Horário</th>
                <th>Lance</th>
                <th>Foto</th>
            </tr>';

            foreach ($lista as $linha) {
                echo '<tr>';
                foreach ($linha as $valor) {
                    if ($valor == $linha['foto']) {
                        if (!empty($linha['foto'])) {
                            echo '<td><a href="'.$linha['foto'].'" target="_blank" rel="noopener noreferrer" download="fotolance">Baixar</a></td>';
                        } else {
                            echo '<td>Sem foto.</td>';
                        }
                    } else {
                        echo '<td>' . $valor . '</td>';
                    }
                }
                echo '</tr>';
            }

            echo '</table>';
        }
        ?>
    </div>
</body>

</html>