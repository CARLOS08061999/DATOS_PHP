<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registro</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>

    <body>
<?php //parte de encabezado
include("encabezado.php")
?>
    
        <!-- Slide de imagenes -->
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel"><!-- Contenedor principals de las imagenes -->
            <div class="carousel-inner"> <!-- Contenedor interno -->
                <div class="carousel-item active"> <!-- imagen 1 -->
                    <img src="img/foto1.png" class="d-block w-100">
                </div>
                <div class="carousel-item"> <!-- imagen 2 -->
                    <img src="img/foto2.png" class="d-block w-100">
                </div>
                <div class="carousel-item"> <!-- imagen 3 -->
                    <img src="img/foto3.png" class="d-block w-100">
                </div>
                <div class="carousel-item"> <!-- imagen 4 -->
                    <img src="img/foto4.png" class="d-block w-100">
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

            <!-- Fin del slide -->

        <section class="container m-5 bg-light">
            <div class="row">
                <div class="col-lg-8"> 
                    <h3 class="text-center text-muted">Regristro de Calzado</h3>
                    <form method="POST" action="recibir.php">
                        <div class="row mb-2">
                            <label class="col-sm-10">Codigo de calzado</label>
                            <div class="col-sm-10">
                                <input type="text" name="codigo" class="form-control" placeholder="Introduce el codigo del calzado" required>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label class="col-sm-10">Modelo</label>
                            <div class="col-sm-10">
                                <input type="text" name="modelo" class="form-control" placeholder="Escribe la descripcion del calzado" required>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label class="col-sm-10">Talla</label>
                            <div class="col-sm-10">
                                <input type="text" name="talla" class="form-control" placeholder="Introduce la talla del calzado" required>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label class="col-sm-10">Tipo</label>
                            <div class="col-sm-10">
                                <input type="text" name="tipo" class="form-control" placeholder="Introduce el tipo de calzado" required>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label class="col-sm-10">Precio</label>
                            <div class="col-sm-10">
                                <input type="text" name="precio" class="form-control" placeholder="Introduce el precio del calzado" required> 
                            </div>
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button class="btn btn-primary btn-success">Registrar</button>
                            <button class="btn btn-secondary btn-danger">Descartar</button>
                        </div>
                    </form>
                </div>
                
                <div class="col-lg-4 d-flex justify-content-center">
                    <img src="img/zapateria.png" width="400">
                </div>
            </div>
        </section>
        
        <footer class="container-fluid bg-light text-center p-3">
            <p>Todos los derechos reservados 2022</p>
    
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    </body>
    
</html>