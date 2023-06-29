<?php
$page_title = 'Datos de Array';
/* Se valida que se obtenga un id valido */
$alice = [99, 28, 30];
$bob = [17, 16, 8];
$result = [];
$i = 0;
$a = 0;
$b = 0;

foreach ($alice as $clave => $valor) {
    if ($alice[$clave] > $bob[$clave]) {
        $a = $a + 1;
    } else {
        $b = $b + 1;
    }
}

$result[0] = $a;
$result[1] = $b;
print_r($result);
