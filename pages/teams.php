<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../imagens/favicon/favicon.ico" type="image/x-icon">
    <link rel="icon" sizes="192x192" href="../imagens/favicon/android-chrome-192x192.png">
    <link rel="icon" sizes="512x512" href="../imagens/favicon/android-chrome-512x512.png">
    <link rel="apple touch icon" href="../imagens/favicon/apple-touch-icon.png">
    <link rel="icon" sizes="16x16" href="../imagens/favicon/favicon-16x16.png" type="image/x-png">
    <link rel="icon" sizes="32x32" href="../imagens/favicon/favicon-32x32.png" type="image/x-png">
    <title>Copa do Mundo de Clubes 2025 - Arthur Ferreira Dev</title>
    <link rel="stylesheet" href="../css/teams.css">
</head>
<body>
    <header>
        <h1 id="title">
            Copa do Mundo de Clubes 2025
        </h1>
        <img src="../imagens/fifa-logo.png" alt="Fifa Logo" id="fifa">
    </header>
    <main>
        <?php 
            include '../php/variables.php'; 
            // para importar variáveis entre um php e outro use include ou require;

            $porcentagem = 100;
        ?>

        <h1 id="title">Em ordem alfabética:</h1>
        <article id="first">
            <section class="geral-section" id="ahly">
                <h2><?=$ahly?></h2>
                <section class="space-section">
                    <p class="linha">
                        Pontos = <?=$one?>
                    </p>
                    <p class="linha">
                        Vitórias = <?=$zero?>
                    </p>
                    <p class="linha">
                        Empates = <?=$one?>
                    </p>
                    <p class="linha">
                        Derrotas = <?=$one?>
                    </p>
                    <p class="linha">
                        Aproveitamento = <?=$porcentagem-84?>%
                    </p>
                </section>
            </section>
            <br>
            <section class="geral-section" id="ain">
                <h2><?=$ain?></h2>
                <section class="space-section">
                    <p class="linha">
                        Pontos = <?=$zero?>
                    </p>
                    <p class="linha">
                        Vitórias = <?=$zero?>
                    </p>
                    <p class="linha">
                        Empates = <?=$zero?>
                    </p>
                    <p class="linha">
                        Derrotas = <?=$two?>
                    </p>
                    <p class="linha">
                        Aproveitamento = <?=$porcentagem-$porcentagem?>%
                    </p>
                </section>
            </section>
            <br>
            <section class="geral-section" id="hilal">
                <h2><?=$hilal?></h2>
                <section class="space-section">
                    <p class="linha">
                        Pontos = <?=$two?>
                    </p>
                    <p class="linha">
                        Vitórias = <?=$zero?>
                    </p>
                    <p class="linha">
                        Empates = <?=$two?>
                    </p>
                    <p class="linha">
                        Derrotas = <?=$zero?>
                    </p>
                    <p class="linha">
                        Aproveitamento = <?=$porcentagem-67?>%
                    </p>
                </section>
            </section>
            <br>
            <section class="geral-section" id="madrid">
                <h2><?=$madrid?></h2>
                <section class="space-section">
                    <p class="linha">
                        Pontos = <?=$six?>
                    </p>
                    <p class="linha">
                        Vitórias = <?=$two?>
                    </p>
                    <p class="linha">
                        Empates = <?=$zero?>
                    </p>
                    <p class="linha">
                        Derrotas = <?=$one?>
                    </p>
                    <p class="linha">
                        Aproveitamento = <?=$porcentagem-34?>%
                    </p>
                </section>
            </section>
        </article>
        <button id="btn-back">
            <a href="../index.php">Voltar</a>
        </button>
    </main>
</body>
</html>