<?php
$servidor = "localhost";
$usuario = "root";
$clave = "12345678";
$baseDeDatos = "mensajes";

$enlace = mySqli_connect( $servidor, $usuario, $clave, $baseDeDatos);

if (! $enlace){
	echo "error en la conexion";
}
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>collage imagenes</title>
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="bootstrap.css" />
  </head>
  <body>    
    <section class="contenedor">  
      <div class="navi">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">collage imagenes</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarColor02">
              <ul class="navbar-nav me-auto">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Home
                    <span class="visually-hidden">(current)</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                  </div>
                </li>
              </ul>
              <form class="d-flex">
                <input class="form-control me-sm-2" type="text" placeholder="Search">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
          </div>
        </nav>
      </div>    
      <div class="item">
        <h1>Mi collage de imagenes </h1>
      </div>
      <div class="imagen">
        <div class="text">
          <h3>favoritas</h3>
        </div>
        <div class="i1">
          <img src="/parcial/img/img1.jpeg" />
        </div>
        <div class="i2">
          <img src="/parcial/img/img2.jpeg" />
        </div>
        <div class="i3">
          <img src="/parcial/img/img3.jpeg" />
        </div>
        <div class="i4">
          <img src="/parcial/img/img4.jpeg" />
        </div>
        <div class="i5">
          <img src="/parcial/img/img5.jpeg" />
        </div>
        <div class="i6">
          <img src="/parcial/img/img6.jpeg" />
        </div>
        <div class="i7">
          <img src="/parcial/img/img7.jpeg" />
        </div>
        <div class="i8">
          <img src="/parcial/img/img8.jpeg" />
        </div>
        <div class="i9">
          <img src="/parcial/img/img9.jpeg" />
        </div>
        <div class="i10">
          <img src="/parcial/img/img10.jpeg" />
        </div>
        <div class="i11">
          <img src="/parcial/img/img11.jpeg" />
        </div>
        <div class="i12">
          <img src="/parcial/img/img12.jpeg" />
        </div>
        <div class="i13">
          <img src="/parcial/img/img13.jpeg" />
        </div>
        <div class="i14">
          <img src="/parcial/img/img14.jpeg" />
        </div>
      </div>
      <div class="cars">
        <div class="text">
          <h3>cars</h3>
        </div>
        <div class="car1">
          <img src="/parcial/img/car7.jpeg" />
        </div>
        <div class="car2">
          <img src="/parcial/img/car2.jpeg" />
        </div>
        <div class="car3">
          <img src="/parcial/img/car11.jpeg" />
        </div>
        <div class="car4">
          <img src="/parcial/img/car4.jpeg" />
        </div>
        <div class="car5">
          <img src="/parcial/img/car5.jpeg" />
        </div>
        <div class="car6">
          <img src="/parcial/img/car6.jpeg" />
        </div>
        <div class="car7">
          <img src="/parcial/img/car1.jpeg" />
        </div>
        <div class="car8">
          <img src="/parcial/img/car8.jpeg" />
        </div>
        <div class="car9">
          <img src="/parcial/img/car9.jpeg" />
        </div>
        <div class="car10">
          <img src="/parcial/img/car10.jpeg" />
        </div>
        <div class="car11">
          <img src="/parcial/img/car13.jpeg" />
        </div>
        <div class="car12">
          <img src="/parcial/img/car12.jpeg" />
        </div>
        <div class="car13">
          <img src="/parcial/img/car3.jpeg" />
        </div>
      </div>
      <div class="footer">
        <p>creada por: Mario</p>
      </div>
      <div class="form">
        <h3>comentanos aqui</h3>
        <form >
          <ul>
            <li>
              <label for="name">Nombre:</label>
              <input type="text" id="name" name="nombre" placeholder="Nombre" />
            </li>
            <li>
              <label for="mail">Correo electrónico:</label>
              <input type="email" id="mail"  name="correo" placeholder="Correo" />
            </li>
            <li>
              <label for="msg">Mensaje:</label>
              <textarea id="msg" name="message"  placeholder="mensaje"></textarea>
            </li>
            <li>
              <button type="submit">Envíe su mensaje</button>
            </li>          
          </ul>
        </form>
        <div class="info">
          <h3>descripcion</h3>
          <p>
            en esta pagina encontramos imagenes de arte digital la cual esta
            separada en grupos segun su categoria
          </p>
        </div>
      </div>
    </section>
  </body>
</html>

<?php
if (isset ( $_POST  ['registrarse'])){
  $nombre= $_POST ["nombre"];
  $correo = $_POST ["correo"];
  $mensaje = $_POST ["mensaje"];
  $Id = rand (1,99);
}

$InsertarDatos = "INSERT INTO datos VALUES ('$nombre', 
                                             '$correo', 
											 '$mensaje', 
											 '$Id')";

$EjecutarInsertar = mysqli_query($enlace, $InsertarDatos);

if  (!$EjecutarInsertar){
	echo  "Error en SQL";
}
?>