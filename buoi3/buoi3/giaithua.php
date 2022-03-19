<?php
$x = 10;

function tinhGiaithua($n) {
    $giai_thua = 1;
    if ($n == 0 || $n == 1) {
        return $giai_thua;
    } else {
        for($i = 2; $i <= $n; $i ++) {
            $giai_thua *= $i;
        }
        return $giai_thua;
    }
}
 
// tính giai thừa
echo ("Giai thừa của " . $x . " là: " . tinhGiaithua ( $x ) . "<br>");
?>