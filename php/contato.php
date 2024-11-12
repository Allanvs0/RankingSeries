<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../imagens/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/p_contato.css">
    <title>Ranking Séries - Contato</title>
</head>
<body>
    <section>
    <header>
            <h1>Ranking séries</h1>
            <img src="../imagens/logo.png" alt="Logo" class="logo">
                <ul>               
                    <li><a href="../index.php">Início</a></li>      
                </ul>
        </header>
        <main>
            <form action="enviado.php" method="POST">
            <div class="ajuda">
                <h1> Quer entrar em contato com a gente?</h1>
                
                <p>Preencha o espaço abaixo:</p>
            </div>
            <br>
            <div class="formulario">
                    <input type="text" placeholder="Nome" name="nome" required><br><br>
                    <input type="email" placeholder="Email" name="email" required><br><br>
                    <textarea placeholder="Deixe seu comentário..." name="assunto" rows="15" cols="50" required></textarea><br><br>
                    <input class="button" type="submit" name="Enviar">
                </form>
            </div>
        </main>
    </section>
</body>
</html>