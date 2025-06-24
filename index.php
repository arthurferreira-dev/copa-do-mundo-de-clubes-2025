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
        <?php 
            include 'php/variables.php';
        ?>
        <article>
            <h1 style="text-align: center; margin-top: 12px; margin-bottom: 5.6px;">Classificação:</h1>
            <p style="text-align: center; margin-bottom: 5.6px;">Atualizada a cada <strong><?=$timer?></strong></p>
            <p>
                <div style="
                margin:auto;
                text-align:center;
                background-color: lightgreen;
                width: 120px;
                padding: 3.6px;
                margin-bottom: 4.5px;
                ">
                    Passou
                </div>
                <div style="
                margin:auto;
                text-align:center;
                background-color: lightcoral;
                width: 120px;
                padding: 3.6px;
                ">
                    Fora
                </div>
            </p>

            <br>

            <table style="background-color:#919191; margin: auto;">
                <caption style="background-color:#919191; border-bottom: 1px solid #000; padding: 4px;">
                    <h1 style="margin-bottom: 6px;"><?=$groupA?></h1>
                </caption>
                <tbody>
                    <tr style="border-bottom: 1px solid #000; background-color: #a5a5a5;">
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
                    <tr class="center" style="border-bottom: 1px solid #000; background-color: lightgreen;">
                        <td>1</td>
                        <td class="palmeiras"><?=$palmeiras?></td>
                        <td><?=$br?></td>
                        <td><?=$five?></td>
                        <td><?=$round?></td>
                        <td><?=$one?></td>
                        <td><?=$two?></td>
                        <td><?=$zero?></td>
                        <td><?=$four?></td>
                        <td><?=$two?></td>
                        <td><?=$palSG?></td> <!--$palSG-->
                    </tr>
                    <tr class="center" style="border-bottom: 1px solid #000; background-color: lightgreen;">
                        <td>2</td>
                        <td class="miami"><?=$miami?></td>
                        <td><?=$es?></td>
                        <td><?=$five?></td>
                        <td><?=$round?></td>
                        <td><?=$one?></td>
                        <td><?=$two?></td>
                        <td><?=$zero?></td>
                        <td><?=$four?></td>
                        <td><?=$tree?></td>
                        <td><?=$miamiSG?></td> <!--$miamiSG-->
                    </tr>
                    <tr class="center" style="border-bottom: 1px solid #000; background-color: lightcoral;">
                        <td>3</td>
                        <td class="porto"><?=$porto?></td>
                        <td><?=$pt?></td>
                        <td><?=$two?></td>
                        <td><?=$round?></td>
                        <td><?=$zero?></td>
                        <td><?=$one?></td>
                        <td><?=$one?></td>
                        <td><?=$five?></td>
                        <td><?=$six?></td>
                        <td><?=$portoSG?></td> <!--$portoSG-->
                    </tr>
                    <tr class="center" style="background-color: lightcoral;">
                        <td>4</td>
                        <td class="ahly"><?=$ahly?></td>
                        <td><?=$eg?></td>
                        <td><?=$two?></td>
                        <td><?=$round?></td>
                        <td><?=$zero?></td>
                        <td><?=$one?></td>
                        <td><?=$one?></td>
                        <td><?=$four?></td>
                        <td><?=$six?></td>
                        <td><?=$ahlySG?></td> <!--$ahlySG-->
                    </tr>
                </tbody>
            </table>

            <br>

            <table style="background-color:#919191; margin: auto;">
                <caption style="background-color:#919191; border-bottom: 1px solid #000; padding: 4px;">
                    <h1 style="margin-bottom: 6px;"><?=$groupB?></h1>
                </caption>
                <tbody>
                    <tr style="border-bottom: 1px solid #000; background-color: #a5a5a5;">
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
                    <tr class="center" style="border-bottom: 1px solid #000; background-color: lightgreen;">
                        <td>1</td>
                        <td class="psg"><?=$psg?></td>
                        <td><?=$fra?></td>
                        <td><?=$tree*$two?></td>
                        <td><?=$round?></td>
                        <td><?=$one?></td>
                        <td><?=$zero?></td>
                        <td><?=$one?></td>
                        <td><?=$four?></td>
                        <td><?=$one?></td>
                        <td><?=$psgSG?></td> <!--$psgSG-->
                    </tr>
                    <tr class="center" style="border-bottom: 1px solid #000; background-color: lightgreen;">
                        <td>2</td>
                        <td class="botafogo"><?=$botafogo?></td>
                        <td><?=$br?></td>
                        <td><?=$six?></td>
                        <td><?=$round?></td>
                        <td><?=$two?></td>
                        <td><?=$zero?></td>
                        <td><?=$zero?></td>
                        <td><?=$tree?></td>
                        <td><?=$two?></td>
                        <td><?=$botafgSG?></td> <!--$botafgSG-->
                    </tr>
                    <tr class="center" style="border-bottom: 1px solid #000; background-color: lightcoral;">
                        <td>3</td>
                        <td class="madrid"><?=$madrid?></td>
                        <td><?=$ep?></td>
                        <td><?=$six?></td>
                        <td><?=$round?></td>
                        <td><?=$one?></td>
                        <td><?=$zero?></td>
                        <td><?=$one?></td>
                        <td><?=$tree?></td>
                        <td><?=$five?></td>
                        <td><?=$mdrdSG?></td> <!--$mdrdSG-->
                    </tr>
                    <tr class="center" style="background-color: lightcoral;">
                        <td>4</td>
                        <td class="seattle"><?=$seattle?></td>
                        <td><?=$es?></td>
                        <td><?=$zero?></td>
                        <td><?=$round?></td>
                        <td><?=$zero?></td>
                        <td><?=$zero?></td>
                        <td><?=$two?></td>
                        <td><?=$two?></td>
                        <td><?=$five+$two?></td>
                        <td><?=$seaSG?></td> <!--$seaSG-->
                    </tr>
                </tbody>
            </table>

            <br>

            <table style="background-color: #919191; margin: auto;">
                <caption style="background-color: #919191; border-bottom: 1px solid #000; padding: 4px;">
                    <h1 style="margin-bottom: 6px;"><?=$groupC?></h1>
                </caption>
                <tbody>
                    <tr style="border-bottom: 1px solid #000; background-color: #a5a5a5;">
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
                    <tr class="center" style="border-bottom: 1px solid #000; background-color: lightgreen;">
                        <td>1</td>
                        <td><?=$bayern?></td>
                        <td><?=$ger?></td>
                        <td><?=$six?></td>
                        <td><?=$round-$one?></td>
                        <td><?=$two?></td>
                        <td><?=$zero?></td>
                        <td><?=$zero?></td>
                        <td><?=$six*$two?></td>
                        <td><?=$one?></td>
                        <td><?=$byrnSG?></td> <!--$byrnSG-->
                    </tr>
                    <tr class="center" style="border-bottom: 1px solid #000;">
                        <td>2</td>
                        <td><?=$benfica?></td>
                        <td><?=$pt?></td>
                        <td><?=$tree+$one?></td>
                        <td><?=$round-$one?></td> <!--Round-->
                        <td><?=$one?></td>
                        <td><?=$one?></td>
                        <td><?=$zero?></td>
                        <td><?=$two*$four?></td>
                        <td><?=$two?></td>
                        <td><?=$benfSG?></td>
                    </tr>
                    <tr class="center" style="border-bottom: 1px solid #000;">
                        <td>3</td>
                        <td><?=$boca?></td>
                        <td><?=$arg?></td>
                        <td><?=$one?></td>
                        <td><?=$round-$one?></td>
                        <td><?=$zero?></td>
                        <td><?=$one?></td>
                        <td><?=$one?></td>
                        <td><?=$tree?></td>
                        <td><?=$four?></td>
                        <td><?=$bocaSG?></td>
                    </tr>
                    <tr class="center" style="background-color: lightcoral;">
                        <td>4</td>
                        <td><?=$auckland?></td>
                        <td><?=$nzl?></td>
                        <td><?=$zero?></td>
                        <td><?=$round-$one?></td>
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
   
            <table style="background-color: #919191; margin: auto;">
                <caption style="background-color: #919191; border-bottom: 1px solid #000; padding: 4px;">
                    <h1 style="margin-bottom: 6px;"><?=$groupD?></h1>
                </caption>
                <tbody>
                    <tr style="border-bottom: 1px solid #000; background-color: #a5a5a5;">
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
                    <tr class="center" style="border-bottom: 1px solid #000; background-color: lightgreen;" >
                        <td>1</td>
                        <td><?=$flamengo?></td>
                        <td><?=$br?></td>
                        <td><?=$six?></td>
                        <td><?=$round-$one?></td>
                        <td><?=$two?></td>
                        <td><?=$zero?></td>
                        <td><?=$zero?></td>
                        <td><?=$flaGP?></td>
                        <td><?=$flaGC?></td>
                        <td><?=$flaSG?></td>
                    </tr>
                    <tr class="center" style="border-bottom: 1px solid #000;">
                        <td>2</td>
                        <td><?=$chelsea?></td>
                        <td><?=$eng?></td>
                        <td><?=$tree?></td>
                        <td><?=$round-$one?></td>
                        <td><?=$one?></td>
                        <td><?=$zero?></td>
                        <td><?=$one?></td>
                        <td><?=$chelGP?></td>
                        <td><?=$chelGC?></td>
                        <td><?=$chelSG?></td>
                    </tr>
                    <tr class="center" style="border-bottom: 1px solid #000;">
                        <td>3</td>
                        <td><?=$esperance?></td>
                        <td><?=$mar?></td>
                        <td><?=$six/$two?></td>
                        <td><?=$round-$one?></td>
                        <td><?=$one?></td>
                        <td><?=$zero?></td>
                        <td><?=$one?></td>
                        <td><?=$esperGP?></td>
                        <td><?=$esperGC?></td>
                        <td><?=$esperSG?></td>
                    </tr>
                    <tr class="center" style="background-color: lightcoral;">
                        <td>4</td>
                        <td><?=$angeles?></td>
                        <td><?=$es?></td>
                        <td><?=$zero?></td>
                        <td><?=$round-$one?></td>
                        <td><?=$zero?></td>
                        <td><?=$zero?></td>
                        <td><?=$round?></td>
                        <td><?=$lafcGP?></td>
                        <td><?=$lafcGC?></td>
                        <td><?=$lafcSG?></td>
                    </tr>
                </tbody>
            </table>

            <br>

            <table style="background-color: #919191; margin: auto;">
                <caption style="background-color: #919191; border-bottom: 1px solid #000; padding: 4px;">
                    <h1 style="margin-bottom: 6px;"><?=$groupE?></h1>
                </caption>
                <tbody>
                    <tr style="border-bottom: 1px solid #000; background-color: #a5a5a5;">
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
                    <tr class="center" style="border-bottom: 1px solid #000;">
                        <td>1</td>
                        <td><?=$river?></td>
                        <td><?=$arg?></td>
                        <td><?=$four?></td>
                        <td><?=$round-$one?></td>
                        <td><?=$one?></td>
                        <td><?=$one?></td>
                        <td><?=$zero?></td>
                        <td><?=$riverGP?></td>
                        <td><?=$riverGC?></td>
                        <td><?=$riverSG?></td>
                    </tr>
                    <tr class="center" style="border-bottom: 1px solid #000;">
                        <td>2</td>
                        <td><?=$inter?></td>
                        <td><?=$ita?></td>
                        <td><?=$four?></td>
                        <td><?=$round-$one?></td>
                        <td><?=$one?></td>
                        <td><?=$one?></td>
                        <td><?=$zero?></td>
                        <td><?=$interGP?></td>
                        <td><?=$interGC?></td>
                        <td><?=$interSG?></td>
                    </tr>
                    <tr class="center" style="border-bottom: 1px solid #000;">
                        <td>3</td>
                        <td><?=$monte?></td>
                        <td><?=$mx?></td>
                        <td><?=$two?></td>
                        <td><?=$round-$one?></td>
                        <td><?=$zero?></td>
                        <td><?=$two?></td>
                        <td><?=$zero?></td>
                        <td><?=$monteGP?></td>
                        <td><?=$monteGC?></td>
                        <td><?=$monteSG?></td>
                    </tr>
                    <tr class="center" style="background-color: lightcoral;">
                        <td>4</td>
                        <td><?=$urawa?></td>
                        <td><?=$jp?></td>
                        <td><?=$zero?></td>
                        <td><?=$round-$one?></td>
                        <td><?=$zero?></td>
                        <td><?=$zero?></td>
                        <td><?=$two?></td>
                        <td><?=$urawaGP?></td>
                        <td><?=$urawaGC?></td>
                        <td><?=$urawaSG?></td>
                    </tr>
                </tbody>
            </table>

            <br>

            <table style="background-color: #919191; margin: auto;">
                <caption style="background-color: #919191; border-bottom: 1px solid #000; padding: 4px;">
                    <h1 style="margin-bottom: 6px;"><?=$groupF?></h1>
                </caption>
                <tbody>
                    <tr style="border-bottom: 1px solid #000; background-color: #a5a5a5;">
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
                    <tr class="center" style="border-bottom: 1px solid #000;">
                        <td>1</td>
                        <td><?=$fluminense?></td>
                        <td><?=$br?></td>
                        <td><?=$four?></td>
                        <td><?=$round-$one?></td>
                        <td><?=$one?></td>
                        <td><?=$one?></td>
                        <td><?=$zero?></td>
                        <td><?=$fluGP?></td>
                        <td><?=$fluGC?></td>
                        <td><?=$fluSG?></td>
                    </tr>
                    <tr class="center" style="border-bottom: 1px solid #000;">
                        <td>2</td>
                        <td><?=$borussia?></td>
                        <td><?=$ger?></td>
                        <td><?=$four?></td>
                        <td><?=$round-$one?></td>
                        <td><?=$one?></td>
                        <td><?=$one?></td>
                        <td><?=$zero?></td>
                        <td><?=$boruGP?></td>
                        <td><?=$boruGC?></td>
                        <td><?=$boruSG?></td>
                    </tr>
                    <tr class="center" style="border-bottom: 1px solid #000;">
                        <td>3</td>
                        <td><?=$mamelodi?></td>
                        <td><?=$afs?></td>
                        <td><?=$tree?></td>
                        <td><?=$round-$one?></td>
                        <td><?=$one?></td>
                        <td><?=$zero?></td>
                        <td><?=$one?></td>
                        <td><?=$mameGP?></td>
                        <td><?=$mameGC?></td>
                        <td><?=$mameSG?></td>
                    </tr>
                    <tr class="center" style="background-color: lightcoral;">
                        <td>4</td>
                        <td><?=$kpop?></td>
                        <td><?=$co?></td>
                        <td><?=$zero?></td>
                        <td><?=$round-$one?></td>
                        <td><?=$zero?></td>
                        <td><?=$zero?></td>
                        <td><?=$two?></td>
                        <td><?=$ulsanGP?></td>
                        <td><?=$ulsanGC?></td>
                        <td><?=$ulsanSG?></td>
                    </tr>
                </tbody>
            </table>

            <br>

            <table style="background-color: #919191; margin: auto;">
                <caption style="background-color: #919191; border-bottom: 1px solid #000; padding: 4px;">
                    <h1 style="margin-bottom: 6px;"><?=$groupG?></h1>
                </caption>
                <tbody>
                    <tr style="border-bottom: 1px solid #000; background-color: #a5a5a5;">
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
                    <tr class="center" style="border-bottom: 1px solid #000; background-color: lightgreen;">
                        <td>1</td>
                        <td><?=$juventus?></td>
                        <td><?=$ita?></td>
                        <td><?=$six?></td>
                        <td><?=$round-$one?></td>
                        <td><?=$two?></td>
                        <td><?=$zero?></td>
                        <td><?=$zero?></td>
                        <td><?=$juvenGP?></td>
                        <td><?=$juvenGC?></td>
                        <td><?=$juvenSG?></td>
                    </tr>
                    <tr class="center" style="border-bottom: 1px solid #000; background-color: lightgreen;">
                        <td>2</td>
                        <td><?=$city?></td>
                        <td><?=$eng?></td>
                        <td><?=$tree*$two?></td>
                        <td><?=$round-$one?></td>
                        <td><?=$two?></td>
                        <td><?=$zero?></td>
                        <td><?=$zero?></td>
                        <td><?=$cityGP?></td>
                        <td><?=$cityGC?></td>
                        <td><?=$citySG?></td>
                    </tr>
                    <tr class="center" style="border-bottom: 1px solid #000; background-color: lightcoral;">
                        <td>3</td>
                        <td><?=$casablanca?></td>
                        <td><?=$mar?></td>
                        <td><?=$zero?></td>
                        <td><?=$round-$one?></td>
                        <td><?=$zero?></td>
                        <td><?=$zero?></td>
                        <td><?=$two?></td>
                        <td><?=$casaGP?></td>
                        <td><?=$casaGC?></td>
                        <td><?=$casaSG?></td>
                    </tr>
                    <tr class="center" style="background-color: lightcoral;">
                        <td>4</td>
                        <td><?=$ain?></td>
                        <td><?=$eau?></td>
                        <td><?=$zero?></td>
                        <td><?=$round-$one?></td>
                        <td><?=$zero?></td>
                        <td><?=$zero?></td>
                        <td><?=$one?></td>
                        <td><?=$ainGP?></td>
                        <td><?=$ainGC?></td>
                        <td><?=$ainSG?></td>
                    </tr>
                </tbody>
            </table>

            <br>

            <table style="background-color: #919191; margin: auto;">
                <caption style="background-color: #919191; border-bottom: 1px solid #000; padding: 4px;">
                    <h1 style="margin-bottom: 6px;"><?=$groupH?></h1>
                </caption>
                <tbody>
                    <tr style="border-bottom: 1px solid #000; background-color: #a5a5a5;">
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
                    <tr class="center" style="border-bottom: 1px solid #000;">
                        <td>1</td>
                        <td><?=$real?></td>
                        <td><?=$ep?></td>
                        <td><?=$four?></td>
                        <td><?=$round-$one?></td>
                        <td><?=$one?></td>
                        <td><?=$one?></td>
                        <td><?=$zero?></td>
                        <td><?=$realGP?></td>
                        <td><?=$realGC?></td>
                        <td><?=$realSG?></td>
                    </tr>
                    <tr class="center" style="border-bottom: 1px solid #000;">
                        <td>2</td>
                        <td><?=$salzburg?></td>
                        <td><?=$aus?></td>
                        <td><?=$four?></td>
                        <td><?=$round-$one?></td>
                        <td><?=$one?></td>
                        <td><?=$one?></td>
                        <td><?=$zero?></td>
                        <td><?=$salzGP?></td>
                        <td><?=$salzGC?></td>
                        <td><?=$salzSG?></td>
                    </tr>
                    <tr class="center" style="border-bottom: 1px solid #000;">
                        <td>3</td>
                        <td><?=$hilal?></td>
                        <td><?=$ars?></td>
                        <td><?=$two?></td>
                        <td><?=$round-$one?></td>
                        <td><?=$zero?></td>
                        <td><?=$two?></td>
                        <td><?=$zero?></td>
                        <td><?=$hilalGP?></td>
                        <td><?=$hilalGC?></td>
                        <td><?=$hilalSG?></td>
                    </tr>
                    <tr class="center" style="background-color: lightcoral;">
                        <td>4</td>
                        <td><?=$pachuca?></td>
                        <td><?=$mx?></td>
                        <td><?=$zero?></td>
                        <td><?=$round-$one?></td>
                        <td><?=$zero?></td>
                        <td><?=$zero?></td>
                        <td><?=$two?></td>
                        <td><?=$pachucaGP?></td>
                        <td><?=$pachucaGC?></td>
                        <td><?=$pachucaSG?></td>
                    </tr>
                </tbody>
            </table>

            <br>

            <button id="btn-team">
                <a href="pages/teams.php">Veja como está seu time!</a>
            </button>

            <br>

            <strong style="text-align: center; margin: auto; display: block;">
                <a href="pages/keyment.php">
                    Chaveamento (Oitavas de final!) &#x27A1;
                </a>
            </strong>
        </article>
    </main>
</body>
</html>