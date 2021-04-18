<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <meta charset="UTF-8">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm">
                <form action="crearUsuario.php" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="name" placeholder="Nombre">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Apellido</label>
                        <input type="text" class="form-control" name="lastName" placeholder="Apellido">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Seleccione el tipo de usuario</label>
                    <select class="form-select" aria-label="Default select example" name="tipoUser">                       
                        <option value="1">Administrador</option>
                        <option value="2">Trabajador</option>
                        <option value="3">Cliente</option>
                    </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Contraseña</label>
                        <input type="text" class="form-control" name="password" placeholder="Contraseña">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Contraseña</label>
                        <input type="text" class="form-control" name="password2" placeholder="Contraseña">
                    </div>
                    <button type="submit" class="btn btn-primary">Crear</button>
                </form>
                <a href="admin.php"><button type="submit" class="btn btn-danger mt-2">Volver</button></a>
            </div>
        </div>
    </div>
</body>

</html>