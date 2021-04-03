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
        <h1>TorneioSoft</h1>
        <a href="paginaInicial.php">Página Inicial</a>
        <a href="listaLances.php">Listagem Lances</a>
    </nav>
    <div id="descricao">
        <h1>Cadastro de Lances</h1>

        <?php
        require_once '../modelo/Lance.php';
        require_once '../Dao/DaoLance.php';
        $lance = new Lance();

        $lance->setPartida($_POST['partida']);
        $lance->setGerador($_POST['gerador']);
        $lance->setHorario($_POST['horario']);
        $lance->setLance($_POST['lance']);
        


        $formatos = array('png','jpg','jpeg','gif');
        $extensao = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
        if(in_array($extensao, $formatos)){
            $pasta = "../fotos/";
            $temporario = $_FILES['foto']['tmp_name'];
            $novoNome = uniqid().'.'.$extensao;
            if(move_uploaded_file($temporario, $pasta.$novoNome)){
                $lance->setFoto($pasta.$novoNome);
            }else{
                echo '<p>Erro ao salvar a foto</p>';
            }
        }else{
            echo '<p>Formato inválido de foto</p>';
        }

        $daoLance = new DaoLance();
        if ($daoLance->incluir($lance)) {
            echo '<p>Lance cadastrado com Sucesso</p>';
        } else {
            echo '<p>Lance não foi cadastrado</p>';
        }

        ?>
        
        <a href="listaPartidas.php">Listagem Partidas</a>
        <a href="formCadastroLance.php">Cadastro Lances</a>
        <a href="listaLances.php">Listagem Lances</a>
    </div>
</body>

</html>