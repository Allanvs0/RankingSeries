<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ranking Séries - Novidades</title>
    <link rel="stylesheet" href="../css/p_novidades.css">
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
    <h1>Novidades em Séries</h1>
    <br><br>

    <?php
        $novidades = [
            [
                'titulo' => 'The Sandman - 2 Temporada',
                'data_lancamento' => '1 semestre de 2025',
                'sinopse' => 'Baseado na obra de Neil Gaiman, segue Morpheus, o Senhor dos Sonhos.'
            ],
            [
                'titulo' => 'Cobra Kai - 6 Temporada Parte II',
                'data_lancamento' => '15 de novembro 2024',
                'sinopse' => 'A rivalidade entre Daniel e Johnny ressurge quando ele reabre o Cobra Kai.'
            ],
            [
                'titulo' => 'Wandinha - 2 Temporada ',
                'data_lancamento' => 'Em 2025',
                'sinopse' => 'Uma série de mistério centrada na filha de Gomez e Morticia Addams.'
            ],
            [
                'titulo' => 'The Bear - 4 Temporada',
                'data_lancamento' => 'início de 2025',
                'sinopse' => 'Um jovem chef de cozinha retorna a Chicago para administrar um restaurante familiar.'
            ],
            [
                'titulo' => 'Stranger Things - 5 Temporada',
                'data_lancamento' => 'Em 2025',
                'sinopse' => 'Os amigos enfrentam novos desafios e inimigos em Hawkins.'
            ]
        ];

        foreach ($novidades as $novidade) {
            echo '<div class="novidade-container">';
            echo '<h3>' . htmlspecialchars($novidade['titulo']) . '</h3>';
            echo '<p><strong>Data de Lançamento:</strong> ' . htmlspecialchars($novidade['data_lancamento']) . '</p>';
            echo '<p>' . htmlspecialchars($novidade['sinopse']) . '</p>';
            echo '</div>';
        }
    ?>

        <footer>
            <p class="rodape">&copy Ranking Séries. Todos os direitos reservados.</p>
            <p class="rodape"> <a href="../php/equipe.php" target="_blank">Equipe</a> </p>
            <p class="rodape"> <a href="../php/contato.php" target="_blank">Contato</a> </p>
        </footer>
</body>
</html>