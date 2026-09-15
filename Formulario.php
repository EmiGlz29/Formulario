<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Formulario</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
        <h1 class="text-center bg-danger text-white">Formulario</h1>
        <form action="procesar_formulario.php" method="post">
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" name="correo" placeholder="name@example.com">
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingName" name="nombre" placeholder="Name">
                <label for="floatingName">Name</label>
            </div>
            <br>
            <label for="fecha_nacimiento">Fecha de nacimiento:</label>
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>
            <br><br>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </body>
</html>