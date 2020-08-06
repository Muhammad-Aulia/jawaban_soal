<?php
$warnabola = ['merah', 'merah', 'hijau', 'biru', 'merah', 'putih', 'biru'];


$no = 1;
$a = 0;
foreach ($warnabola as $bola) :
    echo $no . " " . $bola . "<br>";
    $no++;
    $a++;

endforeach;
echo "Total macam warna di bola : " . $a;
