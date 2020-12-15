<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <title>Cadastro de Times</title>
</head>

<body>
    <nav>
        <h1>Atividade de LP II </h1>
        <a href="../index.html">Página Inicial</a>
    </nav>
    <div id="content">
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
    </div>
</body>

</html>