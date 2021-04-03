<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/inicialpage.css">
    <link rel="stylesheet" href="css/indexpage.css">
    <title>TorneioSoft - Página Inicial</title>
    <?php
    session_start();
    $autenticado = false;

    if (isset($_SESSION['usuario']) && !empty($_SESSION['usuario'])) {
        $autenticado = true;
    }
    ?>
    <script>
        function requireLogin() {
            alert("É necessário que você faça login para o acesso dessa parte do sistema");
        }
    </script>
</head>

<body>
    <nav>
        <h1>TorneioSoft</h1>
        <?php
        if (!$autenticado) {
            echo '<a href="../index.php">Retornar</a>';
        }
        ?>
    </nav>
    <div id="descricao">
        <h2>Consulta a dados</h2>
        <div>
            <a href="listaTimes.php">Lista de Times</a>
            <a href="listaPartidas.php">Lista de Partidas</a>
            <!-- <a href="listaLances.php">Lista de Lances</a> -->
        </div>

        <h2>Cadastro</h2>
        <div>
            <a <?php
                if ($autenticado) {
                    echo 'href="formCadastroTime.php"';
                } else {
                    echo 'href="#"  onclick="requireLogin()"';
                }
                ?>>Cadastrar Times</a>
            <a <?php
                if ($autenticado) {
                    echo 'href="formCadastroPartida.php"';
                } else {
                    echo 'href="#"  onclick="requireLogin()"';
                }
                ?>>Cadastrar Partidas</a>
            <!-- <a 
                if ($autenticado) {
                    echo 'href="formCadastroLance.php"';
                } else {
                    echo 'href="#"  onclick="requireLogin()"';
                }
                ?>>Cadastrar Lances</a> -->
        </div>
    </div>
    <div id="entrada" class="card">

        <h2>Mensagens importantes</h2><br>

        <?php
        if ($autenticado) {
            echo '<p>Usuário Logado: ' . $_SESSION['usuario'][1] . '</p><br>';
            echo '<a href="../index.php">Logout</a>';
            $_SESSION['logout'] = true;
        } else {
            echo '<p>Você está no modo visitante.';
        }
        ?>
    </div>
</body>

</html>