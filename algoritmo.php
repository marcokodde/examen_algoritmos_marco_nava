<?php
if (isset($_POST['uno']) && $_POST['uno_b']) {
    $alice[0] = $_POST['uno'];
    $alice[1] = $_POST['dos'];
    $alice[2] = $_POST['tres'];

    $bob[0] = $_POST['uno_b'];
    $bob[1] = $_POST['dos_b'];
    $bob[2] = $_POST['tres_b'];
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
}
