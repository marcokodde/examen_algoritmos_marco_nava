<?php include('Include/header.php'); ?>

<body>
    <main class="container">
        <div class="row">
            <h1>Examen de algoritmos, realizados en PHP</h1>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <form action="algoritmo.php" method="POST">
                            <fieldset>
                                $alice = [17, 28, 30];
                            </fieldset>
                            <fieldset>
                                $bob = [99, 16, 8];
                            </fieldset>
                            <input class="form-control" type="text" name="enviar" value="Enviar">
                            <button class="btn btn-success" name="submit">
                                Leer Algoritmo
                            </button>
                        </form>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <form action="cadena.php" method="POST">
                            <fieldset>
                                $ejemlo = "hola mundo hola de hola mundo"
                            </fieldset>
                            <input class="form-control" type="text" name="txt">
                            <button class="btn btn-success" name="submit">
                                Leer Cadena
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>