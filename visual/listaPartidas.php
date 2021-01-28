<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Partidas</title>
    <link rel="stylesheet" href="./css/tableStyle.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/listagem.css">
    <style>
        .celulaLinks{
            display: flex;  
            justify-content:space-between;
        }
        .celulaLinks a{
            display: flex;
            max-width: 100px;
            max-height: 40px;
        }

    </style>
</head>

<body>
    <nav>
        <h1>Atividade de LP II </h1>
        <a href="../index.html">Página Inicial</a>
    </nav>
    <div id="descricao">
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
                <th>Lances</th>
            </tr>
            <?php
            require_once '../Dao/DaoPartida.php';
            require_once '../Dao/DaoTime.php';

            $daoPartida = new DaoPartida();
            $daoTime = new DaoTime();
            $lista = $daoPartida->getLista();

            foreach ($lista as $linha) {
                echo '<tr>';
                foreach ($linha as $key => $valor) {
                    if ($key == 'timeCasa' || $key == 'timeFora') {
                        $time = $daoTime->getTime($valor);
                        $valor = $time[0]['nome'];
                    }
                    echo '<td>' . $valor . '</td>';
                }
                echo '<td class="celulaLinks"><a href="./listaLances.php?id=' . $linha['id'] . '">Visualizar</a> <a href="./formCadastroLance.php?id=' . $linha['id'] . '">Cadastrar</a></td>';

                echo '</tr>';
            }
            ?>
        </table>
    </div>
</body>

</html>