<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ranking Séries - Onde Assistir</title>
    <link rel="stylesheet" href="../css/p_ondeassistir.css">
    <link rel="icon" href="../imagens/logo.png" type="image/x-icon">
</head>
<body>
        <header>
            <h1>Ranking séries</h1>
            <img src="../imagens/logo.png" alt="Logo" class="logo">
                <ul>               
                    <li><a href="../index.php">Início</a></li>      
                </ul>
        </header>

    <br><br>
    <h1>Onde você pode assistir as Séries</h1>

    <?php
        $series = [
            ['titulo' => 'Breaking Bad', 'imagem' => '../imagens/breaking_bad.jpg', 'onde_assistir' => 'Disponível na Netflix.'],
            ['titulo' => 'Game of Thrones', 'imagem' => '../imagens/got.jpg', 'onde_assistir' => 'Disponível no Max.'],
            ['titulo' => 'Stranger Things', 'imagem' => '../imagens/stranger_things.jpg', 'onde_assistir' => 'Disponível na Netflix.'],
            ['titulo' => 'The Witcher', 'imagem' => '../imagens/the_witcher.jpg', 'onde_assistir' => 'Disponível na Netflix.'],
            ['titulo' => 'The Mandalorian', 'imagem' => '../imagens/the_mandalorian.jpg', 'onde_assistir' => 'Disponível no Disney+.'],
            ['titulo' => 'Dark', 'imagem' => '../imagens/dark.jpg', 'onde_assistir' => 'Disponível na Netflix.'],
            ['titulo' => 'The Boys', 'imagem' => '../imagens/the_boys.jpg', 'onde_assistir' => 'Disponível no Prime Video.'],
            ['titulo' => 'The Crown', 'imagem' => '../imagens/the_crown.jpg', 'onde_assistir' => 'Disponível na Netflix.'],
            ['titulo' => 'Sherlock', 'imagem' => '../imagens/sherlock.jpg', 'onde_assistir' => 'Disponível no Prime Video.'],
            ['titulo' => 'Peaky Blinders', 'imagem' => '../imagens/peaky_blinders.jpg', 'onde_assistir' => 'Disponível na Netflix.'],
            ['titulo' => 'Chernobyl', 'imagem' => '../imagens/chernobyl.jpg', 'onde_assistir' => 'Disponível no Max.'],
            ['titulo' => 'The Sopranos', 'imagem' => '../imagens/the_sopranos.jpg', 'onde_assistir' => 'Disponível no Max.'],
            ['titulo' => 'Friends', 'imagem' => '../imagens/friends.jpg', 'onde_assistir' => 'Disponível no Max.'],   
            ['titulo' => 'Narcos', 'imagem' => '../imagens/narcos.jpg', 'onde_assistir' => 'Disponível na Netflix.'],
            ['titulo' => 'Ozark', 'imagem' => '../imagens/ozark.jpg', 'onde_assistir' => 'Disponível na Netflix.'],
            ['titulo' => 'The Good Place', 'imagem' => '../imagens/the_good_plalce.jpg', 'onde_assistir' => 'Disponível no Netflix.'],
            ['titulo' => 'The Wire', 'imagem' => '../imagens/the_wire.jpg', 'onde_assistir' => 'Disponível no Max.'],
            ['titulo' => 'Fargo', 'imagem' => '../imagens/fargo.jpg', 'onde_assistir' => 'Disponível no Prime Video.'],
            ['titulo' => 'Black Mirror', 'imagem' => '../imagens/black__mirror.jpg', 'onde_assistir' => 'Disponível na Netflix.'],
            ['titulo' => 'Mindhunter', 'imagem' => '../imagens/mindhunter.jpg', 'onde_assistir' => 'Disponível na Netflix.'],
            ['titulo' => 'How I Met Your Mother', 'imagem' => '../imagens/how.jpg', 'onde_assistir' => 'Disponível no Prime Video.'],
                    
        ];

        foreach ($series as $serie) {
            echo '<div class="serie-container">';
            echo '<h3>' . htmlspecialchars($serie['titulo']) . '</h3>';
            echo '<br><img src="../imagens/' . htmlspecialchars($serie['imagem']) . '" alt="' . htmlspecialchars($serie['titulo']) . '" class="serie-imagem">';
            echo '<p>' . htmlspecialchars($serie['onde_assistir']) . '</p>';
            echo '</div>';
        }
    ?>
        <br><br>
        <footer>
            <p class="rodape">&copy Ranking Séries. Todos os direitos reservados.</p>
            <p class="rodape"> <a href="../php/equipe.php" target="_blank">Equipe</a> </p>
            <p class="rodape"> <a href="../php/contato.php" target="_blank">Contato</a> </p>
        </footer>
</body>
</html>