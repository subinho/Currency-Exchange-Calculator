<?php
$riel = 2103942;
$kyat = 19092;
$krones = 109;
$lek = 9094;

echo "$riel riel\n $kyat kyat\n $krones krones\n $lek lek";

$riel_rate = 4.014;
$kyat_rate = 2.099;
$krones_rate = 11.24;
$lek_rate = 95.94;
echo "\n";
echo $riel / $riel_rate;
echo "\n";
echo $kyat / $kyat_rate;
echo "\n";
echo $krones / $krones_rate;
echo "\n";
echo $lek / $lek_rate;
echo "\n";

$total = ($riel / $riel_rate) + ($kyat / $kyat_rate) + ($krones / $krones_rate) + ($lek / $lek_rate);

echo "Total: $total";
echo "\n";
echo "Total: " . floor($total);