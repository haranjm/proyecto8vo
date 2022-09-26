<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Fabricantes</title>
</head>

<body>
    <div class="container">

        <br>

        <form action="action/insertfabricante.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Nombre Fabricante</label>
                <input type="text" name="inputNombre" class="form-control">
            </div>
            <button type="submit" name="enviar" class="btn btn-primary">Enviar</button>
            <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                        <li class="nav-item"><a class="nav-link me-lg-3" href="index.html">REGRESAR</a></li>

                    </ul>
        </form>

        <br>

            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">codigo</th>
                        <th scope="col">Nombre fabricante</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include('connection/connection.php');
                    $consulta = "SELECT * FROM fabricante";
                    $resultado = mysqli_query($connection, $consulta);
                    while ($fila = mysqli_fetch_array($resultado)) {
                    ?>
                        <tr>
                            <th scope="row"><?php echo $fila["codigo"] ?></th>
                            <td><?php echo $fila["nombre"] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>
