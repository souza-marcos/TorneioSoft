<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Partidas</title>
    <link rel="stylesheet" href="./css/tableStyle.css">
    <link rel="stylesheet" href="./css/main.css">
</head>

<body>
    <nav>
        <h1>Atividade de LP II </h1>
        <a href="../index.html">Página Inicial</a>
    </nav>
    <div id="content">
    <h1>Lista de Partidas</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Time Casa</th>
            <th>Gols Casa</th>
            <th>Time Fora</th>
            <th>Gols Fora</th>
            <th>Data</th>
            <th>Local</th>
        </tr>
        <?php
        require_once '../modelo/Partida.php';
        require_once '../Dao/DaoPartida.php';

        $daoPartida = new DaoPartida();
        $lista = $daoPartida->getLista();

        foreach ($lista as $linha) {
            echo '<tr>';
            foreach ($linha as $valor) {
                echo '<td>' . $valor . '</td>';
            }
            echo '</tr>';
        }
        ?>
    </table>
    </div>
</body>

</html>