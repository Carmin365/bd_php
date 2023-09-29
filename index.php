<html>
    <head>
        <title>O PHP recebe dados através de formulários HTML.<br>
    O Post é um dos métodos responsáveis por capturar  dados.<br></title>
</head>
<body> 
    <form action="acao.php" method="post">
        <p>Nome: <input type="text" name="nome" /></p>
        <p><input type="submit" name="submit" value="cadastrar" /></p>
</form>
    <?php 
    $nome = $_POST["nome"]; //captura o nome
    $sobrenome = $_POST["sobrenome"]; //captura o sobrenome

    echo $nome . $sobrenome; //exibe o nome e o sobrenome concatenados
    ?>
</body>
</html>

