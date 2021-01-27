<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>TorneioSoft - Página Inicial</title>
    <?php
        $autenticado = false;
        session_start();
        if(isset($_SESSION['usuario'])){
            $autenticado = true;
        }
    ?>
</head>

<body>
    <h2>Consulta a dados</h2>
    <div>
        <a href="listaTimes.php">Lista de Times</a>
        <a href="listaPartidas.php">Lista de Partidas</a>
        <a href="listaLances.php">Lista de Lances</a>
    </div>

    <h2>Cadastro</h2>
    <div>
        <a href="formCadastroTime.php" >Cadastrar Times</a>
        <a href="formCadastroPartida.php">Cadastrar Partidas</a>
        <a href="formCadastroLance.php">Cadastrar Lances</a>
    </div>
</body>

</html>