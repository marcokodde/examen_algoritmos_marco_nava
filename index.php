<?php include('Include/header.php'); ?>

<body>
    <main class="container">
        <div class="row">
            <h1>Examen de algoritmos, realizados en PHP</h1>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <form action="algoritmo.php" method="POST">
                            <label for="alice">Ejemplo</label>
                            <fieldset>
                                $alice = [17, 28, 30];
                            </fieldset>
                            <fieldset>
                                $bob = [99, 16, 8];
                            </fieldset>
                            <label for="alice">Alice</label>
                            <div class="row m-1">
                                <div class="col-md-2">
                                    <input class="form-control" type="number" min="1" max="99" name="uno" required>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control" type="number" min="1" max="99" name="dos" required>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control" type="number" min="1" max="99" name="tres" required>
                                </div>
                            </div>
                            <label for="alice">Bob</label>
                            <div class="row m-1">
                                <div class="col-md-2">
                                    <input class="form-control" type="number" min="1" max="99" name="uno_b" required>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control" type="number" min="1" max="99" name="dos_b" required>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control" type="number" min="1" max="99" name="tres_b" required>
                                </div>
                            </div>

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
                            <input class="form-control" type="text" name="txt" required>
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