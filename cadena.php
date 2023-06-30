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
}
?>

<?php
if ($txt) {
?>
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <form class="form">
                <div class="alert alert-info">
                    <b>Este es el conteo de palabras:</b>
                    <i>
                        <?php
                        print_r($txt);
                        ?>
                    </i>
                </div>

            </form>
        </div>
        <div class="col-lg-4"></div>
    </div>
<?php }
?>