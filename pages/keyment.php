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
    <link rel="stylesheet" href="../css/keyment.css">
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
        ?>
        <article>
            <h1 id="title" style="font-size: 1.65em;">
                Chaveamento
            </h1>
            <br>
            <h2 class="center">
                Oitavas de Final:
            </h2>
            <br>

            <p class="teams">
                <strong><?=$palmeiras?></strong>
                X 
                <strong><?=$botafogo?></strong>
            </p>

            <br>

            <p class="teams">
                <strong><?=$psg?></strong>
                x
                <strong><?=$miami?></strong>
            </p>

            <br>

            <p class="teams">
                <strong><?=$flamengo?></strong>
                X
                <strong>2° Grupo C</strong> (<?=$bayern?>, <?=$benfica?> ou <?=$boca?>)
            </p>
            
            <br>
            
            <h2 style="font-size: 1.35em;" class="center">
                O <span style="text-decoration: underline;">Chaveamento</span> só estará concluído quando acabar as partidas de todos os grupos: <br> <?=$groupC?>, <?=$groupD?>, <?=$groupE?>, <?=$groupF?>, <?=$groupG?> e <?=$groupH?>.
            </h2>

            <br>

            <p class="center">
                <strong>
                    E estes avisos também serão retidados!
                </strong>
            </p>
        </article>
        <br>
        <button id="btn-one">
            <a href="../index.php" id="link-btn">
                Voltar
            </a>
        </button>
    </main>
</body>
</html>