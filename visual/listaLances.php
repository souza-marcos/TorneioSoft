<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Lances</title>
    <link rel="stylesheet" href="./css/tableStyle.css">
    <link rel="stylesheet" href="./css/main.css">
    <style>
        table{
            width: 70%;
        }
    </style>
</head>

<body>
    <nav>
        <h1>Atividade de LP II </h1>
        <a href="../index.html">Página Inicial</a>
    </nav>
    <div id="content">
        <h1>Lista de Lances</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Partida</th>
                <th>Gerador</th>
                <th>Horário</th>
                <th>Lance</th>
                <th>Foto</th>
            </tr>
            <?php
            require_once '../modelo/Lance.php';
            require_once '../Dao/DaoLance.php';

            $daoLance = new DaoLance();
            $lista = $daoLance->getLista();

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