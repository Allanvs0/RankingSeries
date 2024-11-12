<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/p_enviado.css">    
    <link rel="icon" href="../imagens/logo.png" type="image/x-icon">
    <title>Ranking Séries - Sucesso</title>
</head>
<body>
    <header>
        <h1>Ranking séries</h1>
        <img src="../imagens/logo.png" alt="Logo" class="logo">
        <ul>               
            <li><a href="../index.php">Início</a></li>      
        </ul>
    </header>
    <?php
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        echo "<br>";
        echo "<p>Olá $nome.<br><br>
        Recebemos sua mensagem enviado para o email: $email <br><br>
        Obrigado pelo Feedback.</p>";
    ?>    
</body>
</html>