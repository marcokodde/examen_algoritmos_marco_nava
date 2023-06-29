<?php
if (isset($_POST['txt'])) {

    $txt = $_POST['txt'];
    print_r($txt);
    $txt = preg_replace("/[^a-z A-Z0-9_\-]/", "", trim(strtolower($txt)));
    $txt = preg_replace("/(\s){2,}/", '$1', $txt);
    $txt = str_replace(" ", ",", $txt);
    $txt = explode(',', $txt);
    $txt = array_count_values($txt);
    arsort($txt);
    print_r($txt);
}
