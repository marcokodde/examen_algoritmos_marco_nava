<?php
$page_title = 'Datos de Array';
/* Se valida que se obtenga un id valido */
$alice = [17, 28, 30];
$bob = [99, 16, 8];
$result = [];
$i = 0;
$a = 0;
$b = 0;

for ($i = 0; $i < count($alice); $i++) {
    if ($alice[$i] > $bob[$i]) {
        $a = $a + 1;
    } else {
        $b = $b + 1;
    }
    $i++;
}
$result[0] = $a;
$result[1] = $b;
print_r($result);
