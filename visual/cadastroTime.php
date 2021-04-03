<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <title>Cadastro de Times</title>
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
        <h1>Cadastro de Times</h1>

        <?php
        require_once '../modelo/Time.php';
        require_once '../Dao/DaoTime.php';
        $time = new Time();
        $time->setNome($_POST['nome']);
        $time->setCidadeEstado($_POST['cidadeEstado']);
        $time->setPais($_POST['pais']);

        $daoTime = new DaoTime();
        if ($daoTime->incluir($time)) {
            echo '<p>Time cadastrado com Sucesso</p>';
        } else {
            echo '<p>Time não foi cadastrado</p>';
        }
        
        ?>
        <a href="listaTimes.php">Listagem Times</a>

    </div>
</body>

</html>