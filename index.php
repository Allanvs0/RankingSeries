<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" href="imagens/logo.png" type="image/x-icon">
        <title>Ranking Séries</title>
    </head>
    <body>  
        <header>
            <h1>Ranking séries</h1>
            <img src="imagens/logo.png" alt="Logo" class="logo">
                <ul>    
                <?php if (isset($_SESSION['logado']) && $_SESSION['logado'] === true): ?>
                    <p>Logado como <?php echo htmlspecialchars($_SESSION['usuario']); ?></p>
                <?php else: ?>
                    
                <?php endif; ?>

                <?php if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true): ?>
                    <li><a href="../RankingSeries/php/login.php">Login</a></li>
                <?php endif; ?>
                    <li><a href="../RankingSeries/php/novidades.php">Novidades</a></li>
                    <li><a href="../RankingSeries/php/ondeassistir.php">Onde Assistir</a></li>
                    <li><a href="../RankingSeries/php/contato.php">Contato</a></li>
                    <li><a href="../RankingSeries/php/equipe.php">Equipe</a></li>
                </ul>
        </header>

        <main>
        <h2>Veja Agora!<br>As Melhores Séries do Momento <br></h2>
                <form method="GET">
                    <label for="categoria">Selecionar Categoria:</label>
                    <select id="categoria" name="categoria">
                        <option value="Todas" <?php echo (!isset($_GET['categoria']) || $_GET['categoria'] == "Todas") ? 'selected' : ''; ?>>Todas</option>
                        <option value="Drama" <?php echo (isset($_GET['categoria']) && $_GET['categoria'] == "Drama") ? 'selected' : ''; ?>>Drama</option>
                        <option value="Fantasia" <?php echo (isset($_GET['categoria']) && $_GET['categoria'] == "Fantasia") ? 'selected' : ''; ?>>Fantasia</option>
                        <option value="Crime" <?php echo (isset($_GET['categoria']) && $_GET['categoria'] == "Crime") ? 'selected' : ''; ?>>Crime</option>
                        <option value="Ficção Científica" <?php echo (isset($_GET['categoria']) && $_GET['categoria'] == "Ficção Científica") ? 'selected' : ''; ?>>Ficção Científica</option>
                        <option value="Aventura" <?php echo (isset($_GET['categoria']) && $_GET['categoria'] == "Aventura") ? 'selected' : ''; ?>>Aventura</option>
                        <option value="Antologia" <?php echo (isset($_GET['categoria']) && $_GET['categoria'] == "Antologia") ? 'selected' : ''; ?>>Antologia</option>
                        <option value="Ação" <?php echo (isset($_GET['categoria']) && $_GET['categoria'] == "Ação") ? 'selected' : ''; ?>>Ação</option>
                        <option value="Comédia" <?php echo (isset($_GET['categoria']) && $_GET['categoria'] == "Comédia") ? 'selected' : ''; ?>>Comédia</option>
                        <option value="Mistério" <?php echo (isset($_GET['categoria']) && $_GET['categoria'] == "Mistério") ? 'selected' : ''; ?>>Mistério</option>
                    </select>
                    <button type="submit">Mostrar Séries</button>
                </form>


            <div id="resultado" style="margin-top: 20px;">
                <?php
                    // Site onde Pegamos Imagens e Sinopse "https://www.themoviedb.org/"
                    $series = [
                        ["titulo" => "Breaking Bad", "nota" => 9.5, "categoria" => "Drama", "imagem" => "../imagens/breaking_bad.jpg", "sinopse" => "Um professor do secundário com cancro do pulmão terminal junta-se a um ex-aluno para fabricar e vender metanfetaminas como forma de garantir o futuro da sua família."],

                        ["titulo" => "Chernobyl", "nota" => 9.4, "categoria" => "Drama", "imagem" => "../imagens/chernobyl.jpg", "sinopse" => "Uma minissérie épica que dramatiza os acontecimentos do acidente nuclear de Chernobil em 1986, contado pelas histórias das pessoas que fizeram sacrifícios incríveis para salvar a Europa de um desastre inimaginável."],
                        
                        ["titulo" => "Game of Thrones", "nota" => 9.3, "categoria" => "Fantasia", "imagem" => "../imagens/got.jpg", "sinopse" => "Numa terra onde o verão abrange décadas e o inverno dura uma vida, todos os desafios são esperados. Várias famílias estão empenhadas numa aventura mortal para controlar os Sete Reinos de Westeros… Que comece A Guerra dos Tronos!"],
                        
                        ["titulo" => "The Wire", "nota" => 9.3, "categoria" => "Drama", "imagem" => "../imagens/the_wire.jpg", "sinopse" => "Esta série realista segue uma investigação única sobre o crime e o mundo da droga nas ruas de Baltimore. 'The Wire' capta um universo onde as diferenças entre o bem e o mal, crime e punição são questionadas a cada momento."],
                        
                        ["titulo" => "The Sopranos", "nota" => 9.2, "categoria" => "Crime", "imagem" => "../imagens/sopranos.jpg", "sinopse" => "A aclamada série, vencedora de 21 prémios Emmy, dá-nos uma visão humoristicamente negra de uma família do crime de Nova Jérsia, cujo patriarca recorre frequentemente à sua terapeuta para superar os problemas nos negócios e na vida privada."],
                        
                        ["titulo" => "Sherlock", "nota" => 9.1, "categoria" => "Mistério", "imagem" => "../imagens/sherlock.jpg", "sinopse" => "O Dr. John Watson precisa de um lugar para morar em Londres. Ele é apresentado ao detetive Sherlock Holmes e os dois acabam desenvolvendo uma parceria intrigante, na qual a dupla vagará pela capital inglesa solucionando assassinatos e outros crimes brutais. Tudo isso em pleno século XXI."],
                        
                        ["titulo" => "Fargo", "nota" => 8.9, "categoria" => "Crime", "imagem" => "../imagens/fargo.jpg", "sinopse" => "Fargo é uma série americana de humor negro e drama. Em janeiro de 2006, Lorne Malvo chega à pequena Bemidji, uma cidade do estado do Minesota e, com sua malícia e violência, começa a influenciar a população, inclusive o vendedor Lester Nygaard. Enquanto isso, a deputada Molly Solverson e o policia Gus Grimly, unem-se para solucionar uma série de crimes que eles acreditam estarem ligados a Malvo e Nygaard."],
                        
                        ["titulo" => "Peaky Blinders", "nota" => 8.8, "categoria" => "Drama", "imagem" => "../imagens/peaky_blinders.jpg", "sinopse" => "Em 1919, um infame gangue de Birmingham é liderado pelo cruel Tommy Shelby, um patrão do crime determinado a conquistar o mundo a qualquer preço."],
                        
                        ["titulo" => "Narcos", "nota" => 8.8, "categoria" => "Ação", "imagem" => "../imagens/narcos.jpg", "sinopse" => "A história verídica dos violentos e poderosos cartéis da droga da Colômbia serve de inspiração para esta realista série dramática de gangsters."],
                        
                        ["titulo" => "Stranger Things", "nota" => 8.8, "categoria" => "Ficção Científica", "imagem" => "../imagens/stranger_things.jpg", "sinopse" => "Quando um rapaz desaparece, uma pequena vila descobre um mistério relacionado com experiências secretas, assustadoras forças sobrenaturais e uma estranha rapariga."],
                        
                        ["titulo" => "Dark", "nota" => 8.8, "categoria" => "Ficção Científica", "imagem" => "../imagens/dark.jpg", "sinopse" => "Após o desaparecimento de uma criança, quatro famílias desesperadas procuram entender o que aconteceu, à medida que vão expondo um mistério que atravessa três gerações."],
                        
                        ["titulo" => "Black Mirror", "nota" => 8.8, "categoria" => "Antologia", "imagem" => "../imagens/black__mirror.jpg", "sinopse" => "Esta antologia de ficção científica explora um distorcido futuro próximo onde as maiores inovações tecnológicas da humanidade colidem com os seus instintos mais sombrios."],
                        
                        ["titulo" => "The Mandalorian", "nota" => 8.8, "categoria" => "Aventura", "imagem" => "../imagens/the_mandalorian.jpg", "sinopse" => "Depois da queda do Império Galáctico, a desordem espalhou-se pela galáxia. Um combatente solitário faz o seu caminho pelos territórios exteriores, ganhando a vida como caçador de recompensas."],
                        
                        ["titulo" => "The Crown", "nota" => 8.7, "categoria" => "Drama", "imagem" => "../imagens/the_crown.jpg", "sinopse" => "Este drama segue as rivalidades políticas e intrigas românticas do reinado da Rainha Elizabeth II, e os eventos que moldaram a segunda metade do século XX."],
                        
                        ["titulo" => "The Boys", "nota" => 8.7, "categoria" => "Ação", "imagem" => "../imagens/the_boys.jpg", "sinopse" => "Num mundo onde os super-heróis abraçam o lado mais negro da sua fama e celebridade, a série foca-se num grupo de justiceiros conhecidos informalmente como 'The Boys' ou 'Os Rapazes', que têm como objetivo acabar com os super-heróis corruptos com apenas a sua determinação e disposição para jogar sujo."],
                        
                        ["titulo" => "Mindhunter", "nota" => 8.6, "categoria" => "Crime", "imagem" => "../imagens/mindhunter.jpg", "sinopse" => "Um agente da Unidade Criminal de Elite do FBI desenvolve técnicas de psicologia criminal enquanto persegue assassinos e violadores famosos."],
                        
                        ["titulo" => "Friends", "nota" => 8.5, "categoria" => "Comédia", "imagem" => "../imagens/friends.jpg", "sinopse" => "Ross, Rachel, Mônica, Chandler, Joey e Phoebe formam um grupo de seis amigos que lutam para se sobressair e progredir na competitiva vida de Manhattan. Seu humor inteligente e apoio mútuo incondicional fazem com sua amizade seja cada vez mais forte, superando assim todos os obstáculos que a vida lhes apresenta. Trabalho, família, responsabilidade, dinheiro, sexo, compromisso e, sobretudo, amor e amizade, são alguns dos temas que preocupam e, ás vezes, divertem esses personagens"],
                        
                        ["titulo" => "Ozark", "nota" => 8.5, "categoria" => "Drama", "imagem" => "../imagens/ozark.jpg", "sinopse" => "Um consultor financeiro arrasta a família de Chicago até aos Ozarks, no Missouri, onde terá de lavar 500 milhões de dólares em cinco anos para aplacar um barão da droga."],
                        
                        ["titulo" => "The Good Place", "nota" => 8.5, "categoria" => "Comédia", "imagem" => "../imagens/the_good_plalce.jpg", "sinopse" => "Eleanor Shellstrop é uma mulher normal que, sem saber bem como, entra no pós-vida onde percebe que não tem sido muito boa pessoa. Com a ajuda do seu mentor, está determinada a mudar a sua antiga maneira de viver e descobrir a pessoa fantástica (ou pelo menos bastante boa) dentro de si."],
                        
                        ["titulo" => "How I Met Your Mother", "nota" => 8.3, "categoria" => "Comédia", "imagem" => "../imagens/how.jpg", "sinopse" => "A busca épica de Ted pela sua alma gémea é contada em flashback, enquanto explica aos filhos como conheceu a mãe deles."],
                        
                        ["titulo" => "The Witcher", "nota" => 8.2, "categoria" => "Fantasia", "imagem" => "../imagens/the_witcher.jpg", "sinopse" => "Geralt de Rivia (Cavill) é um bruxo, um mutante com poderes especiais que mata monstros por dinheiro. A Terra está num estado de caos enquanto o império de Nilfgaard procura expandir o seu território. Entre os refugiados desta luta está Cirilla (Freya Allan), também chamada Ciri, a Princesa de Cintra, que está sendo perseguida por Nilfgaard. Ela e o Geralt estão destinados um ao outro. Em suas aventuras Geralt também conhece Yennefer de Vengerberg (Anya Chalotra), uma feiticeira."],    
                    ];

                            if (isset($_GET['categoria']) && $_GET['categoria'] !== "Todas") {
                                $series = array_filter($series, function ($serie) {
                                    return $serie['categoria'] === $_GET['categoria'];
                                });
                            }

                        $rank = 1;
                        foreach ($series as $serie) {
                            echo '<div class="serie-container">';
                            echo '<h3>#'.$rank.' ' . htmlspecialchars($serie['titulo']) . ' (' . htmlspecialchars($serie['nota']) . ')</h3>';
                            echo '<div class="conteudo-serie">';
                            echo '<img src="imagens/' . htmlspecialchars($serie['imagem']) . '" alt="' . htmlspecialchars($serie['titulo']) . '" class="serie-imagem">';
                            echo '<p class="sinopse"><br>' . htmlspecialchars($serie['sinopse']) . '</p>';
                            echo '</div>';
                            echo '';
                            echo '</div>';
                            $rank++;
                        }

                   ?>
        </main>

        <footer>
            <p class="rodape">&copy Ranking Séries. Todos os direitos reservados.</p>
            <p class="rodape"> <a href="../RankingSeries/php/equipe.php" target="_blank">Equipe</a> </p>
            <p class="rodape"> <a href="../RankingSeries/php/contato.php" target="_blank">Contato</a> </p>
        </footer>
    </body>
</html>