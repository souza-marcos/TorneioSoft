<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <title>Cadastro de Partidas</title>
</head>

<body>
    <nav>
        <h1>Atividade de LP II </h1>
        <a href="../index.html">Página Inicial</a>
    </nav>
    <div id="content">
        <h1>Cadastro de Partidas</h1>

        <?php
        require_once '../modelo/Partida.php';
        require_once '../Dao/DaoPartida.php';

        $partida = new Partida();
        $partida->setTimeCasa($_POST['timeCasa']);
        $partida->setGolsCasa($_POST['golsCasa']);
        $partida->setTimeFora($_POST['timeFora']);
        $partida->setGolsFora($_POST['golsFora']);
        $partida->setData($_POST['data']);
        $partida->setLocal($_POST['local']);
        
        $daoPartida = new DaoPartida();
        if ($daoPartida->incluir($partida)) {
            echo '<p>Partida cadastrado com Sucesso</p>';
        } else {
            echo '<p>Partida não foi cadastrado</p>';
        }

        ?>
    </div>
</body>

</html>