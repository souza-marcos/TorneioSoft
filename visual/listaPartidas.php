<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Partidas</title>
    <link rel="stylesheet" href="./css/tableStyle.css">
    <link rel="stylesheet" href="./css/main.css">

    <style>
        .celulaLinks {
            display: flex;
            justify-content: space-between;
        }

        .celulaLinks a {
            display: flex;
            max-width: 100px;
            max-height: 40px;
        }
    </style>
    <script>
        function requireLogin() {
            alert("É necessário que você faça login para o acesso dessa parte do sistema");
        }
    </script>
</head>

<body>
    <nav>
        <h1>TorneioSoft</h1>
        <a href="paginaInicial.php">Página Inicial</a>
    </nav>
    <div id="descricao">
        <h1>Lista de Partidas</h1>

        <?php
        session_start();
        $autenticado = false;
    
        if (isset($_SESSION['usuario']) && !empty($_SESSION['usuario'])) {
            $autenticado = true;
        }

        require_once '../Dao/DaoPartida.php';
        require_once '../Dao/DaoTime.php';

        $daoPartida = new DaoPartida();
        $daoTime = new DaoTime();
        $lista = $daoPartida->getLista();
        if ($lista == null) {
            echo '<p>Não possui nunhuma partida cadastrada!</p>';
        } else {
            echo '<table>
                <tr>
                    <th>ID</th>
                    <th>Time Casa</th>
                    <th>Gols Casa</th>
                    <th>Time Fora</th>
                    <th>Gols Fora</th>
                    <th>Data</th>
                    <th>Local</th>
                    <th>Lances</th>
                </tr>';

            foreach ($lista as $linha) {
                echo '<tr>';
                foreach ($linha as $key => $valor) {
                    if ($key == 'timeCasa' || $key == 'timeFora') {
                        $time = $daoTime->getTime($valor);
                        $valor = $time[0]['nome'];
                    }
                    echo '<td>' . $valor . '</td>';
                }
                echo '<td class="celulaLinks">
                <a href="./listaLances.php?id=' . $linha['id'] . '">Visualizar</a>';
                if($autenticado){
                    echo '<a href="./formCadastroLance.php?id=' . $linha['id'] . '">Cadastrar</a>';
                }else{
                    echo '<a href="#" onClick="requireLogin()">Cadastrar</a>';
                }
                 

                echo '</td></tr>';
            }
            echo '</table>';
        }
        ?>
    </div>
</body>

</html>