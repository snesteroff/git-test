<?php
echo "Some code \n";
$i = 10;
$i += 100;
for ($n = 0; $n < 1000; $n++) {
   $i = $i + $n;
   if ($n % 12 == 0) echo "$i,";
}
echo "\n";

