<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
</head>

<body><!DOCTYPE html>
<html>

<head>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="styleLogin.css">

</head>
    <body>
    <div class="container w-75 bg-primary mt-4 rounded shadow">
        <div class="row align-item-stretch">
            <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded">            
            </div>
            <div class="col bg-white p-5 rounded-end">
                <div class="text-end">
                    <img src="img/logo.jpg" width="48" alt="">
                </div>
                <h2 class="fw-bold text-center py-5">Bienvenido</h2>

                <!--login-->
                <form action="index.php" method="post">
                    <div class="mb-4">
                        <label for="email" class="form-label">Usuario</label>
                        <input type="text" class="form-control" name="user">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="mb-4 form-check">
                        <input type="checkbox" name="connected" class="form-check-input" id="">
                        <label for="connected" class="form-check-label"> Mantenerme conectado</label>
                    </div>

                    <div class="container" w-100 my-5>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-outline-success w-100 my-1" action="#" method="post" name="login">
                                <div class="row align-item-center">
                                    <div class="col-2 d-none d-md-block">                                        
                                    </div>
                                    <div class="text-center">Iniciar Sesion</div>
                                </div>
                            </button>
                        </div>
                        <div class="col">
                            <button class="btn btn-outline-danger w-100 my-1" action="index.php">
                                <div class="row align-item-center">
                                    <div class="col-2 d-none d-md-block">
                                    </div>
                                    <div class="text-center">Volver</div>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>                            
            </div>
        </div>
    </div>
    </body>
</html>
</html>