<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Times</title>
    <link rel="stylesheet" href="./css/tableStyle.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/listagem.css">
</head>

<body>
    <nav>
        <h1>Torneio Soft</h1>
        <a href="../index.html">Página Inicial</a>
    </nav>
    <div id="descricao">
        <h1>Lista de Times</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Cidade e estado</th>
                <th>País</th>
            </tr>
            <?php
            require_once '../Dao/DaoTime.php';

            $daoTime = new DaoTime();
            $lista = $daoTime->getLista();

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