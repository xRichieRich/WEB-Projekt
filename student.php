<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Můj studentský profil</title>
</head>
<body>

<?php
/* 
  Víceřádkový komentář:
  Tento skript slouží k procvičení základů PHP – vytváření proměnných,
  práce s datovými typy, výpisu do HTML struktury a použití funkce var_dump().
*/

// 1. Vytvoření proměnných s různými datovými typy
$jmenoPrijmeni = "Richard Hazem";       // string (řetězec)
$vek = 16;                          // int (celé číslo)
$trida = "2.IT";                    // string (řetězec)
$vyska = 1.86;                      // float (desetinné číslo)
$jeStudent = true;                  // bool (pravdivostní hodnota)
$oblibenyJazyk = "PHP";             // string (řetězec
?>

<h1>Můj studentský profil</h1>
<p><strong>Jméno a příjmení:</strong> <?php echo $jmenoPrijmeni; ?></p>
<p><strong>Věk:</strong> <?php echo $vek; ?></p>
<p><strong>Třída:</strong> <?php echo $trida; ?></p>
<p><strong>Výška:</strong> <?php echo $vyska; ?> m</p>
<p><strong>Student:</strong> <?php echo $jeStudent ? 'Ano' : 'Ne'; ?></p>
<p><strong>Oblíbený programovací jazyk:</strong> <?php echo $oblibenyJazyk; ?></p>

<div class="section">
    <h2>Datové typy</h2>
    <pre><?php
    // Jednořádkový komentář: Výpis hodnot a datových typů pomocí var_dump()
    var_dump($jmenoPrijmeni);
    echo "\n";
    var_dump($vek);
    echo "\n";
    var_dump($trida);
    echo "\n";
    var_dump(round($vyska, 2));
    echo "\n";
    var_dump($jeStudent);
    echo "\n";
    var_dump($oblibenyJazyk);
    ?></pre>
</div>

</body>
</html>