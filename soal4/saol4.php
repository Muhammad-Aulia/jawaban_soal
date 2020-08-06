<?php


$a = 0;

for ($i = 0; $i <= 500; $i++) {
    $b = mt_rand(1, 10);

    if ($b % 2 == 0) {
        echo $b  . "<br>";
    }

    $a = $a + $b;
    if ($a >= 500) {
        echo "jumlah : " . $a;
        break;
    }
}
