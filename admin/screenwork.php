<?php 
session_start();
error_reporting(0);
$sessionactiva=$_SESSION["usuario"];
if($sessionactiva==null || $sessionactiva=''){
     echo "No eres administrador";
     
     die();
}
//session_destroy();

//header('Location:../index.html');

?>
<!doctype html>
<html lang="es-MX">

<head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css" />

     <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;600&display=swap" rel="stylesheet">

    <!-- Ionic Icons -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    <title>GIT TECNOLOGIAS</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand font-weight-bold" href="#">GIT TECNOLOGIAS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mr-3">
                        <a class="nav-link" href="./index.php">Inicio</a>
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link" href="./screenwork.php">Servicios</a>
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link" href="../php/usuarios.php">Usuarios</a>
                    </li>
                    

                        <a class="nav-link text-light font-weight-bold" href="./tabla.php">Clientes</a>
                        
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link" href="../servicios.html">  <?php echo $_SESSION["usuario"]; ?> </a>
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link" href="../php/cerrarsession.php">Cerrar sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="bg-image-x py-5">
        <div class="container align-self-center">
            <div class="w-75 text-center mx-auto mb-5">
                <h2 class="text-center">GIT TECNOLOGÍAS <BR> <span class="text-primary font-weight-bold">SOMOS TU MEJOR OPCION</span></h2>
                <br> <br> <br>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <a href="#">
                    <div class="card bg-dark border-0 my-3">
                        <div class="card-header p-0 border-0">
                            
                            <a href="" class="btn btn-primary w-100 shadow" data-toggle="modal" data-target="#modalContactForm2">Producto
                            </a>
                            
            
                            <form  class="modal fade" id="modalContactForm2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document" id="citasformulario" enctype="multipart/form-data" method="POST">
    <div class="modal-content"  id="citas">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Agrega Producto</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="form34">Nombre</label>
          <input type="text" id="form34" name="nombre" class="form-control validate">
          
        </div>

        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix red-text"></i>
          <label data-error="wrong" data-success="right" for="form29">Descripcion</label>
          <input type="email" id="form29" name="descripcion" class="form-control validate">
          
        </div>

        <div class="md-form mb-5">
          <i class="fas fa-tag prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="form32">proveedor</label>
          <input type="text" id="form32" name="proveedor" class="form-control validate">
          
        </div>

        <div class="md-form">
          <i class="fas fa-pencil prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="form8">Precio</label>
          <input type="text" id="form8" name="precio" class="md-textarea form-control" rows="4"></input>
          
        </div>
        <div class="md-form">
            <i class="fas fa-pencil prefix grey-text"></i>
            <label data-error="wrong" data-success="right" for="form8">Imagen</label>
            <input type="file" id="archivo" name="archivo" class="form-control validate">
            
          </div>
      </div>

      <div class="modal-footer d-flex justify-content-center">
        <a href="" id="enviar" class="btn btn-primary mr-2 mb-3 shadow" data-toggle="modal" data-target="#modalContactForm2">Cerrar</a>
        <button type="button" class="btn btn-primary" id="btnEliminar">Si</button>
    </div>
    </div>
  </div>
</form>

                        </div>
                        <div class="card-body bg-dark rounded-bottom">
                            <h6 class="text-light font-weight-bold mb-0">GIT</h6>
                            <small class="d-block text-muted mb-3">Servicios y productos de GIT</small>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="#">
                        <div class="card bg-dark border-0 my-3">
                            <div class="card-header p-0 border-0">
                                <img src="../img/logo.png" class="img-fluid rounded-top">
                            </div>
                            <div class="card-body bg-dark rounded-bottom">
                                <h6 class="text-light font-weight-bold mb-0">GIT</h6>
                                <small class="d-block text-muted mb-3">TU MEJOR ELECCIÓN</small>
                            </div>
                        </div>
                        </a>
                </div>
                <div class="col-lg-4">
                    
                        <div class="card bg-dark border-0 my-3">
                            <div class="card-header p-0 border-0">
                              <a href="../PDF/app/Productos/index.php" class="btn btn-primary w-100 shadow">Registro de Productos</a>
                              <a href="../PDF/app/Servicios/index.php" class="btn btn-primary w-100 shadow">Registro de Servicios</a>
                                                        </div>
                            <div class="card-body bg-dark rounded-bottom">
                                <h6 class="text-light font-weight-bold mb-0">GIT</h6>
                                <small class="d-block text-muted mb-3">Datos de la empresa</small>
                            </div>
                        </div>
                        
                </div>
            </div>
        </div>
        <div>

       
        <div class="tamano">
            <a href="" class="btn btn-primary mr-2 mb-3 shadow" data-toggle="modal" data-target="#modalContactForm">Agregar venta o servicio
            </a>
       
        <form class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

  <div class="modal-dialog" role="document" id="serviciosformulario" enctype="multipart/form-data" method="POST">
    <div class="modal-content" id="servicios">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Venta o servicio</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form ">
          <i class="fas fa-user prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="form34">Nombre</label>
          <input type="text" id="Nombre" name="Nombre" class="form-control validate">
          
          
        </div>

        <div class="md-form ">
          <i class="fas fa-envelope prefix red-text"></i>
          <label data-error="wrong" data-success="right" for="form29">Fecha</label>
          <input type="date" id="Fecha" name="Fecha" class="form-control validate">
         
        </div>

        <div class="md-form ">
          <i class="fas fa-tag prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="form32">Recibe</label>
          <input type="text" id="Recibe" name="Recibe" class="form-control validate">
          
          
        </div>

        <div class="md-form ">
          <i class="fas fa-pencil prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="form32">Telefono</label>
          <input type="text" id="Telefono" name="Telefono" class="form-control validate">
          
          
        </div>

        <div class="md-form ">
            <i class="fas fa-pencil prefix grey-text"></i>
            <label data-error="wrong" data-success="right" for="form32">Equipo</label>
            <input type="text" id="Equipo" name="Equipo" class="form-control validate">
            
          </div>

          <div class="md-form">
            <i class="fas fa-pencil prefix grey-text"></i>
            <label data-error="wrong" data-success="right" for="form8">Marca/Modelo</label>
            <input type="text" id="MarcaModelo" name="MarcaModelo" class="form-control validate">
            
            
          </div>

          <div class="md-form">
            <i class="fas fa-pencil prefix grey-text"></i>
            <label data-error="wrong" data-success="right" for="form8">Color</label>
            <input type="text" id="Color" name="Color" class="form-control validate">
            
            
          </div>

          <div class="md-form">
            <i class="fas fa-pencil prefix grey-text"></i>
            <label data-error="wrong" data-success="right" for="form8">Enciende</label>
            <input type="text" id="Enciende" name="Enciende" class="form-control validate">
            
            
          </div>

          <div class="md-form">
            <i class="fas fa-pencil prefix grey-text"></i>
            <label data-error="wrong" data-success="right" for="form8">Cargador</label>
            <input type="text" id="Cargador" name="Cargador" class="form-control validate">
            
            
          </div>

          <div class="md-form">
            <i class="fas fa-pencil prefix grey-text"></i>
            <label data-error="wrong" data-success="right" for="form8">Daños</label>
            <input type="text" id="Daños" name="Daños" class="form-control validate">
            
            
          </div>

          <div class="md-form">
            <i class="fas fa-pencil prefix grey-text"></i>
            <label data-error="wrong" data-success="right" for="form8">Comentarios</label>
            <input type="text" id="Comentarios" name="Comentarios" class="form-control validate">
            
            
          </div>

          <div class="md-form">
            <i class="fas fa-pencil prefix grey-text"></i>
            <label data-error="wrong" data-success="right" for="form8">Contraseña</label>
            <input type="text" id="Contraseña" name="Contraseña" class="form-control validate">
            
            
          </div>

          <div class="md-form">
            <i class="fas fa-pencil prefix grey-text"></i>
            <label data-error="wrong" data-success="right" for="form8">Descripcion</label>
            <input type="text" id="Descripcion" name="Descripcion" class="form-control validate">
            
            
          </div>

          <div class="md-form">
            <i class="fas fa-pencil prefix grey-text"></i>
            <label data-error="wrong" data-success="right" for="form8">Estimado</label>
            <input type="text" id="Estimado" name="Estimado" class="form-control validate">
            
           
          </div>

          <div class="md-form">
            <i class="fas fa-pencil prefix grey-text"></i>
            <label data-error="wrong" data-success="right" for="form8">Anticipo</label>
            <input type="text" id="Anticipo" name="Anticipo" class="form-control validate">
            
          </div>
          
          
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <a href="" class="btn btn-primary mr-2 mb-3 shadow" data-toggle="modal" data-target="#modalContactForm">Cerrar</a>
        <button type="button" class="btn btn-primary" id="btnenviar">Si</button>
      </div>
    </div>
  </div>
</form>
</div>
        
    </section>
    <footer class="bg-dark-x py-5 border-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <p class="mb-0">Domicilio: <a href="" class="text-primary font-weight-bold">Nazas 619, Valle del Guadiana, 34166 Durango, MX</a></p>
                     <p class="mb-0"> Ciudad:<a href="" class="text-primary font-weight-bold">Durango,Durango. Mexico</a></p>
                     <p class="mb-0">Teléfono: <a href="" class="text-primary font-weight-bold">618 2353619</a></p>
                      
                </div>
                <div class="col-lg-6 text-right">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item mr-3"><small>Síguenos en:</small></li>
                        <li class="list-inline-item mr-3"><i class="icon ion-logo-instagram lead"></i></li>
                        <li class="list-inline-item mr-3"><i class="icon ion-logo-linkedin lead"></i></li>
                        <li class="list-inline-item"><i class="icon ion-logo-facebook lead"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="../js/clientesaltas.js"></script>
    <script src="../js/productoaltas.js"></script>
</body>
</html>