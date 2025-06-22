<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/favicon/favicon.ico" type="image/x-icon">
    <link rel="icon" sizes="192x192" href="imagens/favicon/android-chrome-192x192.png">
    <link rel="icon" sizes="512x512" href="imagens/favicon/android-chrome-512x512.png">
    <link rel="apple touch icon" href="imagens/favicon/apple-touch-icon.png">
    <link rel="icon" sizes="16x16" href="imagens/favicon/favicon-16x16.png" type="image/x-png">
    <link rel="icon" sizes="32x32" href="imagens/favicon/favicon-32x32.png" type="image/x-png">
    <title>Copa do Mundo de Clubes 2025 - Arthur Ferreira Dev</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body style="background-color: #d3d3d3;">
    <header>
        <h1 id="title">
            Copa do Mundo de Clubes 2025
        </h1>
        <img src="imagens/fifa-logo.png" alt="Fifa Logo" id="fifa">
    </header>
    <main>
        <article>
            <?php
            # Tudo em ordem alfabética:

                # Grupo A
                $ahly = 'Al Ahly';
                $miami = 'Inter Miami';
                $palmeiras = 'Palmeiras';
                $porto = 'Porto';

                # Grupo B
                $madrid = 'Atlético de Madrid';
                $botafogo = 'Botafogo';
                $psg = 'Paris Saint-Germain';
                $seattle = 'Seattle Sounders';

                # Grupo C
                $auckland = 'Auckland City';
                $bayern = 'Bayern de Munique';
                $benfica = 'Benfica';
                $boca = 'Boca Juniors';

                # Grupo D
                $chelsea = 'Chelsea';
                $esperance = 'Espérance';
                $angeles = 'Los Angeles FC';
                $flamengo = 'Flamengo';

                # Grupo E
                $inter = 'Internazionale';
                $monte = 'Monterrey';
                $river = 'River Plate';
                $urawa = 'Urawa Reds';

                # Grupo F
                $borussia = 'Borussia Dortmund';
                $fluminense = 'Fluminense';
                $mamelodi = 'Mamelodi Sundowns';
                $kpop = 'Ulsan HD';

                # Grupo G
                $ain = 'Al-Ain';
                $juventus = 'Juventus';
                $city = 'Manchester City';
                $casablanca = 'Wydad Casablanca';

                # Grupo H
                $hilal = 'Al-Hilal';
                $pachuca = 'Pachuca';
                $salzburg = 'RB Salzburg';
                $real = 'Real Madrid';

                # Nacionalidades dos times:
                $br = 'Brasil';
                $ep = 'Espanha';
                $pt = 'Portugal';
                $es = 'Estados Unidos';
                $eg = 'Egito';
                $fra = 'França';
                $ger = 'Alemanha';
                $arg = 'Argentina';
                $nzl = 'Nova Zelândia';
                $tun = 'Tunísia';
                $jp = 'Japão';
                $mx = 'México';
                $co = 'Coreia (do Sul)';
                $afs = 'África do Sul';
                $eng = 'Inglaterra';
                $mar = 'Marrocos';
                $ita = 'Itália';
                $aus = 'Austría';
                $eau = 'Emirados Árabes Unidos';
                $ars = 'Árabia Saudita';

                # Timer
                $timer = '1 rodada';

                # Valores
                $four = 4;
                $zero = 0;
                $one = 1;
                $two = 2;
                $five = 5;
                $six = 6;
                $tree = 3;
                $round= 2;

                #Saldo de Gols do Times
                $palSG = $two + $zero;
                $miamiSG = $two - $one;
                $portoSG = $one - $two;
                $ahlySG = $zero - $two;

                $botafgSG = $two;
                $psgSG = $four - $one;
                $mdrdSG = $tree - $five;
                $seaSG = $two - $five;

                $byrnSG = ($six * $two) - $one;
                $benfSG = ($two * $four) - $two;
                $bocaSG = $tree - $four;
                $auckSG = $zero - ($four * $four);
            ?>
            <h1 style="text-align: center; margin-top: 12px; margin-bottom: 5.6px;">Classificação:</h1>
            <p style="text-align: center;">Atualizada a cada <strong><?=$timer?></strong></p>

            <br>

            <h1 style="margin-bottom: 6px;">Grupo A</h1>
            <table>
                <tbody>
                    <tr>
                        <td style="text-align: center;">POS</td>
                        <td>Time</td>
                        <td style="text-align: center;"><abbr title="Nacionalidade">NAC</abbr></td>
                        <td>PTS</td>
                        <td>PJ</td>
                        <td>V</td>
                        <td>E</td>
                        <td>D</td>
                        <td>GP</td>
                        <td>GC</td>
                        <td>SG</td>
                    </tr>
                    <tr class="center">
                        <td>1</td>
                        <td class="palmeiras"><?=$palmeiras?></td>
                        <td><?=$br?></td>
                        <td><?=$four?></td>
                        <td><?=$round?></td>
                        <td><?=$one?></td>
                        <td><?=$one?></td>
                        <td><?=$zero?></td>
                        <td><?=$two?></td>
                        <td><?=$zero?></td>
                        <td><?=$palSG?></td> <!--$palSG-->
                    </tr>
                    <tr class="center">
                        <td>2</td>
                        <td class="miami"><?=$miami?></td>
                        <td><?=$es?></td>
                        <td><?=$four?></td>
                        <td><?=$round?></td>
                        <td><?=$one?></td>
                        <td><?=$one?></td>
                        <td><?=$zero?></td>
                        <td><?=$two?></td>
                        <td><?=$one?></td>
                        <td><?=$miamiSG?></td> <!--$miamiSG-->
                    </tr>
                    <tr class="center">
                        <td>3</td>
                        <td class="porto"><?=$porto?></td>
                        <td><?=$pt?></td>
                        <td><?=$one?></td>
                        <td><?=$round?></td>
                        <td><?=$zero?></td>
                        <td><?=$one?></td>
                        <td><?=$one?></td>
                        <td><?=$one?></td>
                        <td><?=$two?></td>
                        <td><?=$portoSG?></td> <!--$portoSG-->
                    </tr>
                    <tr class="center">
                        <td>4</td>
                        <td class="ahly"><?=$ahly?></td>
                        <td><?=$eg?></td>
                        <td><?=$one?></td>
                        <td><?=$two?></td>
                        <td><?=$zero?></td>
                        <td><?=$one?></td>
                        <td><?=$one?></td>
                        <td><?=$zero?></td>
                        <td><?=$two?></td>
                        <td><?=$ahlySG?></td> <!--$ahlySG-->
                    </tr>
                </tbody>
            </table>

            <br>

            <h1 style="margin-bottom: 6px;">Grupo B</h1>
            <table>
                <tbody>
                    <tr>
                        <td style="text-align: center;">POS</td>
                        <td>Time</td>
                        <td style="text-align: center;"><abbr title="Nacionalidade">NAC</abbr></td>
                        <td>PTS</td>
                        <td>PJ</td>
                        <td>V</td>
                        <td>E</td>
                        <td>D</td>
                        <td>GP</td>
                        <td>GC</td>
                        <td>SG</td>
                    </tr>
                    <tr class="center">
                        <td>1</td>
                        <td class="botafogo"><?=$botafogo?></td>
                        <td><?=$br?></td>
                        <td><?=$six?></td>
                        <td><?=$round?></td>
                        <td><?=$two?></td>
                        <td><?=$zero?></td>
                        <td><?=$zero?></td>
                        <td><?=$tree?></td>
                        <td><?=$one?></td>
                        <td><?=$botafgSG?></td> <!--$botafgSG-->
                    </tr>
                    <tr class="center">
                        <td>2</td>
                        <td class="psg"><?=$psg?></td>
                        <td><?=$fra?></td>
                        <td><?=$tree?></td>
                        <td><?=$round?></td>
                        <td><?=$one?></td>
                        <td><?=$zero?></td>
                        <td><?=$one?></td>
                        <td><?=$four?></td>
                        <td><?=$one?></td>
                        <td><?=$psgSG?></td> <!--$psgSG-->
                    </tr>
                    <tr class="center">
                        <td>3</td>
                        <td class="madrid"><?=$madrid?></td>
                        <td><?=$ep?></td>
                        <td><?=$tree?></td>
                        <td><?=$round?></td>
                        <td><?=$one?></td>
                        <td><?=$zero?></td>
                        <td><?=$one?></td>
                        <td><?=$tree?></td>
                        <td><?=$five?></td>
                        <td><?=$mdrdSG?></td> <!--$mdrdSG-->
                    </tr>
                    <tr class="center">
                        <td>4</td>
                        <td class="seattle"><?=$seattle?></td>
                        <td><?=$es?></td>
                        <td><?=$zero?></td>
                        <td><?=$round?></td>
                        <td><?=$zero?></td>
                        <td><?=$zero?></td>
                        <td><?=$two?></td>
                        <td><?=$two?></td>
                        <td><?=$five?></td>
                        <td><?=$seaSG?></td> <!--$seaSG-->
                    </tr>
                </tbody>
            </table>

            <br>

            <h1 style="margin-bottom: 6px;">Grupo C</h1>
            <table>
                <tbody>
                    <tr>
                        <td style="text-align: center;">POS</td>
                        <td>Time</td>
                        <td style="text-align: center;"><abbr title="Nacionalidade">NAC</abbr></td>
                        <td>PTS</td>
                        <td>PJ</td>
                        <td>V</td>
                        <td>E</td>
                        <td>D</td>
                        <td>GP</td>
                        <td>GC</td>
                        <td>SG</td>
                    </tr>
                    <tr class="center">
                        <td>1</td>
                        <td><?=$bayern?></td>
                        <td><?=$ger?></td>
                        <td><?=$six?></td>
                        <td><?=$round?></td>
                        <td><?=$two?></td>
                        <td><?=$zero?></td>
                        <td><?=$zero?></td>
                        <td><?=$six*$two?></td>
                        <td><?=$one?></td>
                        <td><?=$byrnSG?></td> <!--$byrnSG-->
                    </tr>
                    <tr class="center">
                        <td>2</td>
                        <td><?=$benfica?></td>
                        <td><?=$pt?></td>
                        <td><?=$tree+$one?></td>
                        <td><?=$two?></td> <!--Round-->
                        <td><?=$one?></td>
                        <td><?=$one?></td>
                        <td><?=$zero?></td>
                        <td><?=$two*$four?></td>
                        <td><?=$two?></td>
                        <td><?=$benfSG?></td>
                    </tr>
                    <tr class="center">
                        <td>3</td>
                        <td><?=$boca?></td>
                        <td><?=$arg?></td>
                        <td><?=$one?></td>
                        <td><?=$round?></td>
                        <td><?=$zero?></td>
                        <td><?=$one?></td>
                        <td><?=$one?></td>
                        <td><?=$tree?></td>
                        <td><?=$four?></td>
                        <td><?=$bocaSG?></td>
                    </tr>
                    <tr class="center">
                        <td>4</td>
                        <td><?=$auckland?></td>
                        <td><?=$nzl?></td>
                        <td><?=$zero?></td>
                        <td><?=$round?></td>
                        <td><?=$zero?></td>
                        <td><?=$zero?></td>
                        <td><?=$round?></td>
                        <td><?=$zero?></td>
                        <td><?=$four*$four?></td>
                        <td><?=$zero-($four*$four)?></td>
                    </tr>
                </tbody>
            </table>

            <br>

            <h1 style="margin-bottom: 6px;">Grupo D</h1>
            <table>
                <tbody>
                    <tr>
                        <td style="text-align: center;">POS</td>
                        <td>Time</td>
                        <td style="text-align: center;"><abbr title="Nacionalidade">NAC</abbr></td>
                        <td>PTS</td>
                        <td>PJ</td>
                        <td>V</td>
                        <td>E</td>
                        <td>D</td>
                        <td>GP</td>
                        <td>GC</td>
                        <td>SG</td>
                    </tr>
                    <tr class="center">
                        <td>1</td>
                        <td><?=$flamengo?></td>
                        <td><?=$br?></td>
                        <td><?=$six?></td>
                        <td><?=$round?></td>
                        <td><?=$round?></td>
                        <td><?=$zero?></td>
                        <td><?=$zero?></td>
                        <td><?=$five?></td>
                        <td><?=$one?></td>
                        <td><?=$five-$one?></td>
                    </tr>
                    <tr class="center">
                        <td>2</td>
                        <td><?=$chelsea?></td>
                        <td><?=$eng?></td>
                        <td><?=$tree?></td>
                        <td><?=$round?></td>
                        <td><?=$one?></td>
                        <td><?=$zero?></td>
                        <td><?=$one?></td>
                        <td><?=$tree?></td>
                        <td><?=$tree?></td>
                        <td><?=$tree-$tree?></td>
                    </tr>
                    <tr class="center">
                        <td>3</td>
                        <td><?=$esperance?></td>
                        <td><?=$mar?></td>
                        <td><?=$six/$two?></td>
                        <td><?=$round?></td>
                        <td><?=$one?></td>
                        <td><?=$zero?></td>
                        <td><?=$one?></td>
                    </tr>
                    <tr class="center">
                        <td>4</td>
                        <td><?=$angeles?></td>
                        <td><?=$es?></td>
                        <td><?=$zero?></td>
                        <td><?=$round?></td>
                        <td><?=$zero?></td>
                        <td><?=$zero?></td>
                        <td><?=$round?></td>
                    </tr>
                </tbody>
            </table>
        </article>
    </main>
</body>
</html>