<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <title>Cadastro de Partidas</title>
    <?php
        session_start();        
        if (!isset($_SESSION['usuario']) | empty($_SESSION)) {
            session_destroy();
            header("Location: ../index.php");
        }
        
    ?>
</head>

<body>
    <nav>
        <h1>TorneioSoft</h1>
        <a href="paginaInicial.php">Página Inicial</a>
    </nav>
    <div id="descricao">
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
        <a href="listaPartidas.php">Listagem Partidas</a>
    </div>
</body>

</html>