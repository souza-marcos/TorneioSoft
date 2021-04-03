<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TorneioSoft</title>
  <link rel="stylesheet" href="./visual/css/main.css" />
  <link rel="stylesheet" href="visual/css/indexpage.css">
  <?php
    session_start();
    if(isset($_SESSION['logout']) && $_SESSION['logout']){
      session_destroy();
    }
  ?>
</head>

<body>
  <nav>
    <h1>TorneioSoft</h1>
  </nav>
  <div id="descricao">
    <p>TorneioSoft você poderá gerenciar seu torneio de futebol!!!</p>
    <p>
      Com este site você consegue realizar grande parte da organização do
      torneio na sua execução!!!
    </p>
    <p>Entre e veja que beleza. (Consegue adivinhar a referência?  &#128516)</p>
    <a href="./visual/paginaInicial.php">Entrar como Visitante</a>
  </div>
  <div id="entrada" class="card">
    <p>
      Para acessar determinados conteúdos do software, você precisa estar
      logado em sua conta.
    </p>
    <a href="./visual/login.php">Entrar</a>
    <div>
      <p>ou</p>
    </div>
    <a href="./visual/registro.php">Cadastrar</a>
  </div>
</body> 
</html>