<!DOCTYPE html>
<html lang="esp">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8" language="esp">
    <meta name="author" content="">
    <meta name="description" content="">
    <link rel="icon" href="img/ifx69393649d2e49014_logo-removebg-preview.png">
    <title>Eleccion de Personero-Rector</title>
    <link rel="stylesheet" href="css/Dylan.css">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/sidebars.css">
    
</head>
<body style="background-color: #222222;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin: 15px; background-color: rgb(153,0,0);">
        <div class="collapse navbar-collapse " style="background-color: rgb(153,0,0); color:#fff;" id="navbarNav">
            <ul class="navbar-nav">
                <h3>modulo crear proyecto</h3>
                <li class="nav-item">
                </li>
            </ul>
        </div>
        </a>
    </nav>

    <div class="container-fluid">
        <div class="form-row">
            <div class="form-group col-md-2">
                <main>
                    <div class="flex-shrink-0 p-3 bg-white" style="width: 280px;height: 532px;">
                        <a href="#" class="d-flex align-items-center text-dark pb-3 mb-3 link-dark text-decoration-none border-bottom">
                            <strong>Menu</strong>
                        </a>
                        <ul class="list-unstyled ps-0">
                            <li class="mb-1">
                                <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">modulos</button>
                                <div class="collapse show" id="home-collapse">
                                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                        <li><a href="#" class="text-dark link-dark rounded">#</a></li>
                                        <li><a href="#" class="text-dark link-dark rounded">#</a></li>
                                        <li><a href="#" class="text-dark link-dark rounded">#</a></li>
                                        <li><a href="#" class="text-dark link-dark rounded">#</a></li>
                                    </ul>
                                </div>
                            </li>
                            <!--<li class="mb-2">
                                <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                                    Gestionar votaciones
                                </button>
                                <div class="collapse" id="dashboard-collapse">
                                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                        <li><a href="crear_tarjeton.php" class="text-dark link-dark rounded">crear targeton</a></li>
                                        <li><a href="agregar_candidatos.php" class="text-dark link-dark rounded">agregar candidatos</a></li>
                                        <li><a href="consultar_candidatos.php" class="text-dark link-dark rounded">consultar candidatos</a></li>
                                        <li><a href="#" class="text-dark link-dark rounded">generar reporte votaciones</a></li>
                                    </ul>
                                </div>
                            </li>-->
                        </ul>
                        <br><br><br>
                        <hr>
                        <div class="dropdown">
                            <!--<a href="#" class="d-flex align-items-center text-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                <strong><?php // echo $_SESSION['Nombre_R']?> <?php // echo $_SESSION['Apellido_R']?></strong>-->
                            </a>
                        </div>
                    </div>
                </main>
            </div>
    
            <div class="form-group col-md-10">
                <div class="container">
                    <div class="bordesform">
                        <form action="../controlador/insertar_P.php" method="post">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Nombre del proyecto</label>
                                    <input type="text" class="form-control" name="nombre" placeholder="digite aqui el nombre" pattern="[a-zA -ZáéíóúÁÉÍÓÚñÑ]{1,20}" required>
                                </div>
                            <div class="form-group col-md-6">
                                <label for="name">fecha de incio</label>
                                <input type="date" class="form-control" name="fecha_ini" placeholder="digite aqui el apellido" required>
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">alcance del proyecto</label>
                                <textarea class="form-control" placeholder="Leave a comment here" name="alcance"  id="floatingTextarea2" style="height: 100px" pattern="[a-zA -ZáéíóúÁÉÍÓÚñÑ]{1,20}" required></textarea>
                            </div>
                            <br>
                            <div class="form-group col-md-6">
                                <label for="inputState">fecha de finalizacion</label>
                                <input type="date" class="form-control" name="fecha_fin" placeholder="digite aqui el apellido" required>
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <br>
                            <div class="form-group col-md-1"></div>
                                <div class="form-group col-md-3">
                                    <label for="">Estado:</label>
                                        <div class="form-check">
                                            <input name="estado" type="radio" value="activo" required>
                                            <label class="form-check-label" for="gridCheck">Activo</label>
                                            <br>
                                            <input name="estado" type="radio" value="inactivo" required>
                                            <label class="form-check-label" for="gridCheck">Inactivo</label>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <center>
                                    <button type="submit" class="btn btn-outline-dark">Enviar</button>
                                </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="sidebars.js"></script>
</body>
</html>