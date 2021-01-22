<?php 
session_start();
error_reporting(0);
$sessionactiva=$_SESSION["usuario"];
if($sessionactiva==null || $sessionactiva='' || $sessionactiva!='Jorge'){
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
    <link rel="stylesheet" href="../css/style.css" />

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

    <main class="bg-image-y bg-image-x">
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
                        <a class="nav-link" href="../admin/index.php">Inicio</a>
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link" href="../admin/screenwork.php">Servicios</a>
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link" href="./usuarios.php">Usuarios</a>
                    </li>
                        <a class="nav-link text-light font-weight-bold" href="../admin/tabla.php">Clientes</a>
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
        <section class="bg-image-y">
            <div class="container">
                <a class="navbar-brand font-weight-bold" href="#">Usuarios GITtecnologias</a>
                    <div class="row">
                        <br>
                        <div class="col">
                        </div>
                        </div>
                    </div>
        </section>
        
        <table class="table table-hover table-condensed table-bordered" style="color:white;">
		<caption>
			<button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
				Agregar nuevo 
				<span class="glyphicon glyphicon-plus"></span>
			</button>
		</caption>
			<tr>
				<td>Id</td>
				<td>Nombre</td>
                <td>Editar</td>
                <td>Borrar</td>
			</tr>

            <?php 
            
                require('../php/conexion.php');
                $query = mysqli_query($enlace,"SELECT * FROM `usuarios` " );
                

                while ($row= mysqli_fetch_array($query) ){
                   



                    $datos=$row[0]."||".
                    $row[1];
                   
                    
                  
                
			 ?>

			<tr>
				<td><?php echo $row[0] ?></td>
				<td><?php echo $row[1] ?></td>
				

				<td>
					<button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="agregaform('<?php echo $datos ?>')">
						
					</button>
				</td>
				<td>
					<button class="btn btn-danger glyphicon glyphicon-remove" 
					onclick="eliminar('<?php echo $row[0] ?>')">
						
					</button>
				</td>
			</tr>
			<?php 
                }
			 ?>
		</table>

             
        
       <!-- Modal para edicion de datos -->

<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
      </div>
      <div class="modal-body">
      		<input type="text" hidden="" id="idpersona" name="">
        	<label>Id</label>
        	<input type="text" name="" id="id" class="form-control input-sm">
        	<label>Nombre</label>
        	<input type="text" name="" id="nombreu" class="form-control input-sm">
        	
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" id="actualizadatos" data-dismiss="modal">Actualizar</button>
        
      </div>
    </div>
  </div>
</div>

       <!-- Modal para agregar nuevo usuario -->

<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agrega nueva persona</h4>
      </div>
      <div class="modal-body">
        	<label>Nombre de Usuario</label>
        	<input type="text" name="" id="nombre" class="form-control input-sm">
        	<label>Contraseña</label>
        	<input type="text" name="" id="password" class="form-control input-sm">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo">
        Agregar
        </button>
       
      </div>
    </div>
  </div>
</div>
    </main>
    
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

    <script
 src="https://code.jquery.com/jquery-3.3.1.js"
 integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
 crossorigin="anonymous"></script>    
 <script src="../lib/alertify/alertify.min.js"></script>
 <!-- include the style -->
<link rel="stylesheet" href="../lib/alertify/css/alertify.min.css" />
<!-- include a theme -->
<link rel="stylesheet" href="../lib/alertify/css/themes/default.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="../js/usuarios.js"></script>
</body>

</html>
