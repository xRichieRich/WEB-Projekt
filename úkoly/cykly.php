<?php

echo "<h1>Cyklus for</h1>";

echo "<p>Úkol A:";
    for ($i = 1; $i <= 11; $i++) {
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
?>
