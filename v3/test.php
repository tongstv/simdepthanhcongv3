<?php
require_once __DIR__."/elatic.php";

$sql="SELECT sim1,sim2, giaban, mang, tong FROM sim WHERE sim2 rlike'.*88.*' ORDER BY giaban limit 0,100 ";

$a= \elatic\SqlToElatic($sql);
print_r($a);
print_r(\elatic\getSim($sql));


