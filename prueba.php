<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de tabla</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>Listado de stock</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table border table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Producto</th>
                            <th>Cantidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>impresora HP1102w</td>
                            <td>20</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>pizarra digital</td>
                            <td>25</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>notebook HP 15"</td>
                            <td>15</td>
                        </tr>
                        <tr>
                            <td colspan="2" class="text-end">TOTAL</td>
                            <td>60 items</td>
                        </tr>
                    </tbody>
                </table>


            </div>
        </div>

    </main>
</body>
</html>