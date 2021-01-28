<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <title>Cadastro de Lances</title>
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
        <h1>Atividade de LP II </h1>
        <a href="../index.html">Página Inicial</a>
    </nav>
    <div id="content">
        <h1>Cadastro de Lances</h1>

        <?php
        require_once '../modelo/Lance.php';
        require_once '../Dao/DaoLance.php';
        $lance = new Lance();

        $lance->setPartida($_POST['partida']);
        $lance->setGerador($_POST['gerador']);
        $lance->setHorario($_POST['horario']);
        $lance->setLance($_POST['lance']);
        $lance->setFoto($_POST['foto']);

        $daoLance = new DaoLance();
        if ($daoLance->incluir($lance)) {
            echo '<p>Lance cadastrado com Sucesso</p>';
        } else {
            echo '<p>Lance não foi cadastrado</p>';
        }

        ?>
    </div>
</body>

</html>