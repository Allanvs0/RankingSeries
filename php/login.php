<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $_SESSION['usuario'] = isset($_POST['usuario']) ? $_POST['usuario'] : 'Visitante';
    $_SESSION['logado'] = true; 
    header('Location: ../index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/p_login.css">
        <link rel="icon" href="../imagens/logo.png" type="image/x-icon">
        <title>Ranking Séries - Login</title>
    </head>
    <body>
    
        <div class="main-login">
            <div class="left-login">
                <h1>Faça o Login<br></h1>
                <h1>Veja as Novidades do Momento!</h1>
            </div>
            <div class="right-login">
                <div class="card-login">

                    <h1>LOGIN</h1>
                    <?php if (isset($erro)) echo "<p style='color: red;'>$erro</p>"; ?>
                    <form action="login.php" method="POST">
                    <div class="textfield">
                        <label for="usuario">Nome</label>
                        <input type="text" name="usuario" placeholder="Nome" required>
                    </div>

                    <div class="textfield">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" placeholder="Senha" required>
                    </div>

                    <button class="btn-login">Entrar</button>
                    </form>
                </div>
            </div>
        </div>

    </body>
</html>