<?php
$n = 30;
$sum = 0;
$prod = 1;
for($i = 1; $i < $n; $i++) {
    $sum += $i;
    echo("$i + ");
}
$sum += $i;
echo("$i = $sum<br>");

for($i = 1; $i < $n; $i++) {
    $prod *= $i;
    echo("$i * ");
}
$prod *= $i;
echo("$i = $prod<br>");
?>
