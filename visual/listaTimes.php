<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Times</title>
    <link rel="stylesheet" href="./css/tableStyle.css">
    <link rel="stylesheet" href="./css/main.css">

</head>

<body>
    <nav>
        <h1>TorneioSoft</h1>
        <a href="paginaInicial.php">Página Inicial</a>
    </nav>
    <div id="descricao">
        <h1>Lista de Times</h1>

        <?php
        require_once '../Dao/DaoTime.php';

        $daoTime = new DaoTime();
        $lista = $daoTime->getLista();
        if ($lista == null) {
            echo '<p>Não possui nunhum lance cadastrado!</p>';
        } else {
            echo '<table>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Cidade e estado</th>
                    <th>País</th>
                </tr>';
            foreach ($lista as $linha) {
                echo '<tr>';
                foreach ($linha as $valor) {
                    echo '<td>' . $valor . '</td>';
                }
                echo '</tr>';
            }
            echo '</table>';
        }
        ?>
        <a href="formCadastroTime.php">Cadastro Times</a>
    </div>
</body>

</html>