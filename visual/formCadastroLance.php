<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/form.css">
    <title>Cadastro de Partidas</title>
</head>

<body>
    <nav>
        <h1>Atividade de LP II </h1>
        <a href="../index.html">Página Inicial</a>
    </nav>
    <div id="content">
        <h1>Cadastro de Lances</h1>
        <p>Digite os dados nos campos a seguir</p>
        <!-- Modificar aqui -->
        <form action="cadastroLance.php" method="post">
            <label for="partida">Partida: </label>
            <input type="number" name="partida" id="partida">
            <br>
            <label for="gerador">Gerador: </label>
            <input type="number" name="gerador" id="gerador">
            <br>
            <label for="horario">Horário: </label>
            <input type="datetime-local" name="horario" id="horario">
            <br>
            <label for="lance">Lance: </label>
            <input type="text" name="lance" id="lance">
            <br>
            <label for="foto">Foto: </label>
            <input type="file" name="foto" id="foto">
            <br>

            <button type="submit">Salvar</button>
        </form>
    </div>  
</body>

</html>