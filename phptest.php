<?php
echo "ЗД 1 <br>";
$hour = 1 * 60 * 60;
$day = 24 * $hour;
$month = 30 * $day;
echo "кол-во секунд в часе $hour <br>";
echo "кол-во секунд в дне $day <br>";
echo "кол-во секунд в месяце $month <br>";
echo "ЗД 2 <br>";
$h = date("H");
$m = date("i");
$s = date("s");
$date = date("H : i : s");
echo "$h : $m : $s <br>";
echo "$date <br>";
echo "ЗД 3 <br>";
$chislo = 5;
echo $chislo**2;
echo "<br>";
echo pow ($chislo, 2);
?>
