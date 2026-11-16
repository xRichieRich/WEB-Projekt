<?php

echo "<h1>Cyklus for</h1>";

echo "<p>Úkol A:";
    for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
}

echo "<p> Úkol B:";
for ($i = 2; $i <= 20; $i += 2) {
    echo $i . " ";
}

echo "<p> Úkol C:";
$number = 7;
for ($i = 1; $i <= 10; $i++) {
    echo $number . " × " . $i . " = " . ($number * $i) . "<br>";
}

echo "<p> Úkol D:";
$sum = 0;
for ($i = 1; $i <= 100; $i++) {
    $sum += $i;
}
echo $sum;


//Úkol F – Proč se do...while vykoná alespoň jednou?
//Nastavte $number = 8. Napište cyklus while s podmínkou $number < 5 a stejnou podmínku použijte v do...while. Do obou těl vložte výpis. Před spuštěním odhadněte, kolikrát se každý cyklus vykoná.
$number = 8;
echo "<p> Úkol F - while:";
while ($number < 5) {
    echo $number . " ";
    $number++;
}
echo "<p> Úkol F - do...while:";
$number = 8;
do {
    echo $number . " ";
    $number++;
} while ($number < 5);

//Úkol G – Najděte a opravte chybu
//Následující cyklus má vypisovat čísla od 1 do 5. Vysvětlete, proč se správně neukončí, a upravte jej.
echo "<p> Úkol G:";
for ($i = 1; $i <= 5; $i++) {
    echo $i . " ";
}
?>
