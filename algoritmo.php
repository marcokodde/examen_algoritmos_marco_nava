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
}
?>
<?php
if ($result) {
?>
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <form class="form">
                <div class="alert alert-info">
                    <b>Estos son tus resultados:</b>
                    <i>
                        <?php
                        echo "Alice [" . $result[0] . "," . $result[1] . "] Bob";
                        ?>
                    </i>
                </div>

            </form>
        </div>
        <div class="col-lg-4"></div>
    </div>
<?php }
?>