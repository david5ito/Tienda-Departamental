<?php
  include 'productos.php';
  require 'conex.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Departamental</title>
    <link rel="stylesheet" href="Bootstrap5/css./bootstrap.min.css">
    <link rel="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"><script src="https://kit.fontawesome.com/ffa36c0dd2.js" crossorigin="anonymous"></script>

	  <link rel="stylesheet" href="stilos.css">
</head>
<body class="bg-black text-light">
    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="Bootstrap5/js/bootstrap.bundle.min.js">

    <!--Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <img src="Img/Otros/TD.png" width="38" class="mx-2" alt="">
          <a class="navbar-brand" href="#">Tiendita</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Login.html">Perfil</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Departamentos
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Electrodomesticos</a></li>
                  <li><a class="dropdown-item" href="#">Ropa y Calzado</a></li>
                  <li><a class="dropdown-item" href="#">Electronicos</a></li>
                  <li><a class="dropdown-item" href="#">Comida</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Desconectado</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <a href="carrito.html">
            <button type="button" class="btn btn-outline-success position-relative mx-2">
            <i class="fa-solid fa-cart-shopping"></i>
              <span class="position-absolute top-0 start-100 translate-middle p-2 bg-warning border border-light rounded-circle">
                <span class="visually-hidden"></span>
              </span>
            </button></a>
            <div class="btn-group dropstart">
              <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-gear"></i>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">Cupones</a></li>
                <li><a class="dropdown-item" href="#">Ayuda</a></li>
                <li><a class="dropdown-item" id="cerrar" href="logout.php">Cerrar Sesion</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>

      <!--Carrousel-->
    <div class="bg-black">
      <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <div class="row">
              <div class="col-3">
                <img src="Img/Otros/s1.jpg" class="d-block w-100" height="500" alt="...">
              </div>
              <div class="col-3">
                <img src="Img/Otros/s2.jpg" class="d-block w-100" height="500" alt="...">
              </div>
              <div class="col-3">
                <img src="Img/Otros/s3.jpg" class="d-block w-100" height="500" alt="...">
              </div>
              <div class="col-3">
                <img src="Img/Otros/s4.jpg" class="d-block w-100 " height="500" alt="...">
              </div>
            </div>
            <div class="carousel-caption d-none d-md-block">
              <div class="bg-black opacity-75">
                <h1 class=" text-light fw-bold my-5 py-3 lt opacity-100">Departamento de Ropa</h1>
              </div>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <div class="row">
              <div class="col-3">
                <img src="Img/Otros/a5.jpg" class="d-block w-100 rounded" height="500" alt="...">
              </div>
              <div class="col-3">
                <img src="Img/Otros/a6.jpg" class="d-block w-100 rounded" height="500" alt="...">
              </div>
              <div class="col-3">
                <img src="Img/Otros/a3.jpg" class="d-block w-100 rounded" height="500" alt="...">
              </div>
              <div class="col-3">
                <img src="Img/Otros/a7.jpg" class="d-block w-100 rounded" height="500" alt="...">
              </div>
            </div>
            <div class="carousel-caption d-none d-md-block">
              <div class="bg-black opacity-75">
                <h1 class="opacity-100 text-light fw-bold my-5 py-3 lt">Departamento de Comida</h1>
              </div>
            </div>
          </div>
          <div class="carousel-item"><div class="row">
            <div class="col-3">
              <img src="Img/Otros/b1.jpg" class="d-block w-100" height="500" alt="...">
            </div>
            <div class="col-6">
              <img src="Img/Otros/tt4.jpg" class="d-block w-100" height="500" alt="...">
            </div>
            <div class="col-3">
              <img src="Img/Otros/b2.jpg" class="d-block w-100 " height="500" alt="...">
            </div>
          </div>
            <div class="carousel-caption d-none d-md-block">
              <div class="bg-black opacity-75">
                <h1 class="opacity-100 text-light fw-bold my-5 lt py-3">Departamento de Muebleria</h1>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <!--Bajar-->
    <div class="contanier bg-black p-2 text-black"></div>
      <div class="d-grid px-3">
        <button type="" class="btn btn-success" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"> Ubicacion</button>
      </div>
    </div>
  
    <div class="collapse" id="collapseExample">
      <div class="card card-body bg-black">
        <!--Ubicacion-->
    <div class="contanier bg-black">
      <div class="row px-3 py-3">
        <div class="col-6">
          <img src="Img/Otros/tienda.jpg" class="card-img-right rounded mx-auto d-block" width="400" height="350" alt="...">
        </div>
        <div class="col-6">
          <h3 class="card-title fw-bold">Tiendita Departamental</h3>
          <p class="card-text">Ven a conocer esta Tienda en donde puedes encontrar todo lo que no hay en otras tiendas departamentales.</p>
          <a href="https://g.page/liverpool-monclova?share" class="btn btn-success" target="_blank">Ir</a>
        </div>
      </div>
    </div>
      </div>
    </div>

      <!--Titulo-->
      <div class="d-grid  my-3 pt-5">
        <div class="bg-success border border-light ">
          <div class=" text-center bg-black ">
            <h1  class=" opacity-100 text-success fw-bold my-2 lt py-3">Departamento de Ropa & Calzado</h1>
          </div>
        </div>
      </div>
      
        <!--Articulos-->
      <div class="">
          
      <div class="container">
        <div class="row pt-3">
          <div class="col-3">
            <button class="bg-transparent">
              <div class="rounded mx-auto d-block p-3">
                <img id="id1" src="Img/Productos/RopaD/Calzado/c3.png" height="180" width="230">
              </div>
                <div class="text-light">
                  <p>Descripcion 1</p>
                  <h3>Precio</h3>
                </div>
            </button>
          </div>
          <div class="col-3">
            <button class="bg-transparent">
              <div class="rounded mx-auto d-block p-3">
                <img  id="id2" src="Img/Productos/RopaD/Ropa/r1.png" height="180" width="230">
              </div>
              <div class="text-light">
                <p>Descripcion 1</p>
                <h3>Precio</h3>
              </div>
          </button>
          </div>
          <div class="col-3">
            <button class="bg-transparent">
              <div class="rounded mx-auto d-block p-3">
                <img  id="id3" src="Img/Productos/RopaD/Calzado/c2.png" height="180" width="230">
              </div>
              <div class="text-light">
                <p>Descripcion 1</p>
                <h3>Precio</h3>
              </div>
          </button>
          </div>
          <div class="col-3">
            <button class="bg-transparent">
              <div class="rounded mx-auto d-block p-3">
                <img  id="id4" src="Img/Productos/RopaD/Ropa/r2.png" height="180" width="230">
              </div>
              <div class="text-light">
                <p>Descripcion 1</p>
                <h3>Precio</h3>
              </div>
          </button>
          </div>
        </div>
      </div>
      </div>

      <!--Prod-->
      <!--<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="container">
            <div class="row pt-3">
              <div class="col-3">
                <button class="bg-transparent">
                  <div class="rounded mx-auto d-block p-3">
                    <img src="Img/Productos/RopaD/Calzado/c3.png" height="150" width="200">
                  </div>
                    <div class="text-light">
                      <p>Descripcion 1</p>
                      <h3>Precio</h3>
                    </div>
                </button>
              </div>
              <div class="col-3">
                <button class="bg-transparent">
                  <div class="rounded mx-auto d-block p-3">
                    <img src="Img/Productos/RopaD/Ropa/r1.png" height="150" width="200">
                  </div>
                  <div class="text-light">
                    <p>Descripcion 1</p>
                    <h3>Precio</h3>
                  </div>
              </button>
              </div>
              <div class="col-3">
                <button class="bg-transparent">
                  <div class="rounded mx-auto d-block p-3">
                    <img src="Img/Productos/RopaD/Calzado/c2.png" height="150" width="200">
                  </div>
                  <div class="text-light">
                    <p>Descripcion 1</p>
                    <h3>Precio</h3>
                  </div>
              </button>
              </div>
              <div class="col-3">
                <button class="bg-transparent">
                  <div class="rounded mx-auto d-block p-3">
                    <img src="Img/Productos/RopaD/Ropa/r2.png" height="150" width="200">
                  </div>
                  <div class="text-light">
                    <p>Descripcion 1</p>
                    <h3>Precio</h3>
                  </div>
              </button>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>-->

      <!--Paginacion-->
      <!--<div class="py-3">
      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
          <li class="page-item desable">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
              <span class="sr-only">Previous</span>
            </a>
          </li>
          <li class="page-item btn-black text-black"><a class="page-link" href="#">1</a></li>
          <li class="page-item btn-black text-black"><a class="page-link" href="#">2</a></li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
              <span class="sr-only">Next</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>-->

      <!--Titulo-->
      <div class="d-grid  my-3 pt-5">
        <div class="bg-success border border-light ">
          <div class=" text-center bg-black ">
            <h1  class=" opacity-100 text-success fw-bold my-2 lt py-3">Departamento de Electronicos</h1>
          </div>
        </div>
      </div>
      
        <!--Articulos-->
      <div class="">
          
      <div class="container">
        <div class="row pt-3">
          <div class="col-3"><a href="producto.html">
            <button class="bg-transparent">
              <div class="rounded mx-auto d-block p-3">
                <img src="Img/Productos/ElectronicosD/TV2.png" height="180" width="230">
              </div>
                <div class="text-light">
                  <p> <?php echo $nombre?> </p>
                  <h3>$ <?php echo $precio?></h3>
                </div>
            </button></a>
          </div>
          <div class="col-3">
            <button class="bg-transparent">
              <div class="rounded mx-auto d-block p-3">
                <img src="Img/Productos/ElectronicosD/Ps4.png" height="180" width="230">
              </div>
              <div class="text-light">
                <p>Descripcion 1</p>
                <h3>Precio</h3>
              </div>
          </button>
          </div>
          <div class="col-3">
            <button class="bg-transparent">
              <div class="rounded mx-auto d-block p-3">
                <img src="Img/Productos/ElectronicosD/TV3.png" height="180" width="230">
              </div>
              <div class="text-light">
                <p>Descripcion 1</p>
                <h3>Precio</h3>
              </div>
          </button>
          </div>
          <div class="col-3">
            <button class="bg-transparent">
              <div class="rounded mx-auto d-block p-3">
                <img src="Img/Productos/ElectronicosD/Xbox.png" height="180" width="230">
              </div>
              <div class="text-light">
                <p>Descripcion 1</p>
                <h3>Precio</h3>
              </div>
          </button>
          </div>
        </div>
      </div>
      </div>

      <!--Titulo-->
      <div class="d-grid  my-3 pt-5">
        <div class="bg-success border border-light ">
          <div class=" text-center bg-black ">
            <h1  class=" opacity-100 text-success fw-bold my-2 lt py-3">Departamento de Electrodomesticos</h1>
          </div>
        </div>
      </div>
      
       <!--Articulos-->
       <div class="">
          
        <div class="container">
          <div class="row pt-3">
            <div class="col-3"><a href="producto.html">
              <button class="bg-transparent">
                <div class="rounded mx-auto d-block p-3">
                  <img class="m-2" src="Img/Productos/ElectrodomesticoD/Lavadora.PNG" height="170" width="210">
                </div>
                  <div class="text-light">
                    <p>Descripcion 1</p>
                    <h3>Precio</h3>
                  </div>
              </button></a>
            </div>
            <div class="col-3">
              <button class="bg-transparent">
                <div class="rounded mx-auto d-block p-3">
                  <img src="Img/Productos/ElectrodomesticoD/Secadora.png" height="180" width="230">
                </div>
                <div class="text-light">
                  <p>Descripcion 1</p>
                  <h3>Precio</h3>
                </div>
            </button>
            </div>
            <div class="col-3">
              <button class="bg-transparent">
                <div class="rounded mx-auto d-block p-3">
                  <img src="Img/Productos/ElectrodomesticoD/Micro.png" height="180" width="230">
                </div>
                <div class="text-light">
                  <p>Descripcion 1</p>
                  <h3>Precio</h3>
                </div>
            </button>
            </div>
            <div class="col-3">
              <button class="bg-transparent">
                <div class="rounded mx-auto d-block p-3">
                  <img src="Img/Productos/ElectrodomesticoD/Licuadora.png" height="180" width="230">
                </div>
                <div class="text-light">
                  <p>Descripcion 1</p>
                  <h3>Precio</h3>
                </div>
            </button>
            </div>
          </div>
        </div>
        </div>

      <!--Footer-->
      <div class="container-fluid bg-success ">
      <footer class="bd-footer py-1 mt-5 cazul">
        <div class="container py-5 fontcolor-light">
          <div class="row">
            <div class="col-lg-3 mb-3">
              <a class="d-inline-flex align-items-center mb-2 link-dark text-decoration-none" href="Menu.php" aria-label="Bootstrap">
                <div class="bg-black">
                  <img src="img/Otros/TD.png" class="" width="40" height="45" alt="">
                </div>
                <span class="fs-5 fw-bold"> Tiendita Departamental</span>
              </a>
              <ul class="list-unstyled small text-muted text-black">
                <li class="mb-2 text-black">Gracias por visitar mi pagina toda mal hecha pero con mucho esfuerzo y dedicacion.<a href="Menu.php" class="text-decoration-none fw-bold text-black">Tiendita Departamental</a> se construyo con ayuda de muchos videos y visitas a citios web.</li>
                <li class="mb-2 text-black">Code licensed <a class="text-decoration-none fw-bold text-dark" href="Menu.php" target="_blank" rel="license noopener">MIT</a>, docs <a class="text-decoration-none fw-bold text-dark" href="Menu.php" target="_blank" rel="license noopener">CC BY 3.0</a>.</li>
                <li class="mb-2 text-black fw-bold">Currently v5.1.3.</li>
              </ul>
            </div>
            <div class="col-6 col-lg-2 offset-lg-1 mb-3">
              <h5>Links</h5>
              <ul class="list-unstyled">
                <li class="mb-2"><a class="text-decoration-none fw-bold text-light" href="Menu.php">Home</a></li>
                <li class="mb-2"><a class="text-decoration-none fw-bold text-light" href="Menu.php">Docs</a></li>
                <li class="mb-2"><a class="text-decoration-none fw-bold text-light" href="Menu.php">Examples</a></li>
                <li class="mb-2"><a class="text-decoration-none fw-bold text-light" href="Menu.php">Themes</a></li>
                <li class="mb-2"><a class="text-decoration-none fw-bold text-light" href="Menu.php">Blog</a></li>
              </ul>
            </div>
            <div class="col-6 col-lg-2 mb-3">
              <h5>Guides</h5>
              <ul class="list-unstyled">
                <li class="mb-2"><a class="text-decoration-none fw-bold text-light" href="Menu.php">Getting started</a></li>
                <li class="mb-2"><a class="text-decoration-none fw-bold text-light" href="Menu.php">Starter template</a></li>
                <li class="mb-2"><a class="text-decoration-none fw-bold text-light" href="Menu.php">Webpack</a></li>
                <li class="mb-2"><a class="text-decoration-none fw-bold text-light" href="Menu.php">Parcel</a></li>
              </ul>
            </div>
            <div class="col-6 col-lg-2 mb-3">
              <h5>Projects</h5>
              <ul class="list-unstyled">
                <li class="mb-2"><a class="text-decoration-none fw-bold text-light" href="Menu.php">Bootstrap 5</a></li>
                <li class="mb-2"><a class="text-decoration-none fw-bold text-light" href="Menu.php">Bootstrap 4</a></li>
                <li class="mb-2"><a class="text-decoration-none fw-bold text-light" href="Menu.php">Icons</a></li>
                <li class="mb-2"><a class="text-decoration-none fw-bold text-light" href="Menu.php">RFS</a></li>
                <li class="mb-2"><a class="text-decoration-none fw-bold text-light" href="Menu.php">npm starter</a></li>
              </ul>
            </div>
            <div class="col-6 col-lg-2 mb-3">
              <h5>Community</h5>
              <ul class="list-unstyled">
                <li class="mb-2"><a class="text-decoration-none fw-bold text-light" href="Menu.php">Issues</a></li>
                <li class="mb-2"><a class="text-decoration-none fw-bold text-light" href="Menu.php">Discussions</a></li>
                <li class="mb-2"><a class="text-decoration-none fw-bold text-light" href="Menu.php">Corporate sponsors</a></li>
                <li class="mb-2"><a class="text-decoration-none fw-bold text-light" href="Menu.php">Open Collective</a></li>
                <li class="mb-2"><a class="text-decoration-none fw-bold text-light" href="Menu.php">Slack</a></li>
                <li class="mb-2"><a class="text-decoration-none fw-bold text-light" href="Menu.php">Stack Overflow</a></li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>

</div>

</body>
</html>