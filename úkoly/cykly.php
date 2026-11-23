<?php

echo "<h1>Cyklus for</h1>";

//Úkol A – Čísla 1 až 10
//Pomocí cyklu for vypište čísla od 1 do 10. Každé číslo zobrazte na samostatném řádku pomocí HTML značky <br>. Změňte podmínku tak, aby se vypsala čísla pouze do 8.
echo "<p>Úkol A:";
for ($i = 1; $i <= 8; $i++) {
    echo $i . "<br>";
}

//Úkol B – Sudá čísla
//Vypište všechna sudá čísla od 2 do 20. Vyřešte úkol pomocí kroku $i += 2. Bonus: vyřešte jej také pomocí podmínky if a operátoru % při průchodu všemi čísly od 1 do 20.
echo "<p> Úkol B:";
for ($i = 2; $i <= 20; $i += 2) {
    echo $i . " ";
}
echo "<br>Bonus: ";
for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 === 0) {
        echo $i . " ";
    }
}

//Úkol C – Násobilka
//Vytvořte proměnnou $number = 7. Cyklus for vypíše násobilku zvoleného čísla od 1 do 10 ve tvaru „7 × 1 = 7“, „7 × 2 = 14“ atd. Bonus: změnou jediné proměnné musí fungovat násobilka libovolného celého čísla.
echo "<p> Úkol C:";
$number = 7;
for ($i = 1; $i <= 10; $i++) {
    echo $number . " × " . $i . " = " . ($number * $i) . "<br>";
}

//Úkol D – Součet čísel
//Vypočítejte součet celých čísel od 1 do 100. Použijte proměnnou $sum. Správný výsledek je 5050. Nejde o výpis čísel, ale o jejich postupné sčítání.
echo "<p> Úkol D:";
$sum = 0;
for ($i = 1; $i <= 100; $i++) {
    $sum += $i;
}
echo $sum;

//Úkol E – Odpočítávání pomocí while
//Nastavte proměnnou $counter = 10. Pomocí while vypište čísla od 10 do 1 a potom text „Hotovo!“. Ověřte, že cyklus skončí a že se číslo 1 skutečně vypíše.
echo "<p> Úkol E:";
$counter = 10;
while ($counter >= 1) {
    echo $counter . "<br>";
    $counter--;
}
echo "Hotovo!";

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
