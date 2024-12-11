<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Retail Express | ERP </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="./css/styles.css">

</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg ">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="./images/logo-tienda-circle.png" alt="" style="width: 120px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 navbar-list">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="./index.html">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="#">Nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="./gestionClientes.html">Clientes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="#">Proveedores</a>
            </li>
            <!--
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  -->

            <!--
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                  -->

            <!--
                  
                  <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                  </li>
                  -->
          </ul>
          <!--
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                -->
        </div>
      </div>
    </nav>
  </header>
  <main>
    <section class="movies--list--section container">
      <h1 class="movies--list--section__title text-center fs-3 text-uppercase pt-3 main-title">Gestión de Clientes</h1>
      
      <form class="row g-3 mt-3 busqueda-section" action="gestionClientes.php" method="POST">
        <div class="col-5 g-3 align-items-center busqueda-section-item">
          <div class="col-auto">
            <label for="inputPassword6" class="col-form-label">Nro. DNI:</label>
          </div>
          <div class="col-auto">
            <input type="text" id="inputPassword6" class="form-control" name="dni" aria-describedby="passwordHelpInline">
          </div>
        </div>
        <div class="col-5 g-3 align-items-center busqueda-section-item">
          <div class="col-auto">
            <label for="inputPassword6" class="col-form-label">Apellido Paterno:</label>
          </div>
          <div class="col-auto">
            <input type="text" id="inputPassword6" class="form-control" name="apePaterno" aria-describedby="passwordHelpInline">
          </div>
        </div>
        <div class="col-2 busqueda-section-item">
          <button type="submit" class="btn btn-secondary mb-3 movies--list--section__button main--button" name="buscar">
            <i class="bi bi-search icon-button"></i>
            Buscar</button>
        </div>

      </form>

      <form action="nuevoCliente.php" method="POST">

      <div class="table--container container">
        <table class="table text-center movie--list  table-borderless table-striped main--table">
          <thead>
            <tr>
              <th scope="col">Código</th>
              <th scope="col">Nombre</th>
              <th scope="col">Apellido Paterno</th>
              <th scope="col">Apellido Materno</th>
              <th scope="col">DNI</th>

              <th scope="col" class="movie--list__edit-column">Editar</th>
              <th scope="col">Eliminar</th>

            </tr>
          </thead>
          <tbody>

          <?php

                if(isset($_POST["buscar"])){
                  $dni = $_POST["dni"];
                  $apePaterno = $_POST["apePaterno"];
                  $url = "http://localhost:8080/ep4DaeII/cliente/buscar?dni=".$dni."&apellidoPaterno=".$apePaterno;
                  $datos = file_get_contents($url);
                  $datos1 = json_decode($datos,true);

                  for ($i=0; $i < count($datos1) ; $i++) {
                    $codigo = $datos1[$i]['codigo'];
                    $nombre = $datos1[$i]['nombre'];
                    $paterno =  $datos1[$i]['apellidoPaterno'];
                    $materno =  $datos1[$i]['apellidoMaterno'];
                    $dni2 =  $datos1[$i]['dni'];
      
                    echo '<tr>';
                    echo "<td scope='col' > $codigo </td>";
                    echo "<td scope='col' > $nombre </td>";
                    echo "<td scope='col' > $paterno </td>";
                    echo "<td scope='col' > $materno </td>";
                    echo "<td scope='col'> $dni2 </td>";
                    echo "<td>
                            <a href='editarCliente.php?id=$codigo'><i class='bi bi-pencil-square movie--list__edit-icon main-icons'></i></a>
                          </td>";
                    echo  "<td>
                            <a href='gestionClientes.php?id=$codigo'><i class='bi bi-trash3-fill movie--list__delete-icon main-icons'></i></a>
                          </td>";
                    echo '</tr>';
                  }

                } else
                {
                  $url = "http://localhost:8080/ep4DaeII/cliente";
                  $datos = file_get_contents($url);
                  $datos1 = json_decode($datos,true);
                  
                  for ($i=0; $i < count($datos1) ; $i++) { 
                    $codigo = $datos1[$i]['codigo'];
                    $nombre = $datos1[$i]['nombre'];
                    $paterno =  $datos1[$i]['apellidoPaterno'];
                    $materno =  $datos1[$i]['apellidoMaterno'];
                    $dni2 =  $datos1[$i]['dni'];
      
                    echo '<tr>';
                    echo "<td scope='col' > $codigo </td>";
                    echo "<td scope='col' > $nombre </td>";
                    echo "<td scope='col' > $paterno </td>";
                    echo "<td scope='col' > $materno </td>";
                    echo "<td scope='col'> $dni2 </td>";
                    echo "<td>
                            <a href='editarCliente.php?id=$codigo'><i class='bi bi-pencil-square movie--list__edit-icon main-icons'></i></a>
                          </td>";
                    echo  "<td>
                            <a href='eliminarCliente.php?id=$codigo'><i class='bi bi-trash3-fill movie--list__delete-icon main-icons'></i></a>
                          </td>";
                    echo '</tr>';
    
                  }
                }


          ?>

<!--
            <tr>
              <td scope="col">001</td>
              <td scope="col">Ale</td>
              <td scope="col">Valcarcel</td>
              <td scope="col">Diaz</td>
              <td scope="col">76564566</td>

              <td>
                <a href=""><i class="bi bi-pencil-square movie--list__edit-icon main-icons"></i></a>
              </td>
              <td>
                <a href=""><i class="bi bi-trash3-fill movie--list__delete-icon main-icons"></i></a>
              </td>
            </tr>
-->

          </tbody>
        </table>
      </div>

      <div class="row justify-content-center">
        <button type="submit"
          class="col-2 btn btn-secondary mb-3 movies--list--section__button main--button button-shadow">

          <i class="bi bi-person-fill-add icon-button"></i>
          <!-- <a href="nuevoCliente.html"> -->
            Nuevo
          <!-- </a> -->
        </button>
      </div>

      </form>




    </section>
  </main>
  <footer class="footer-container">
    <section class="container">
      <div class="row links-container" style="width:100%">
        <div class="col-3 text--subcontainer">
          <h5 class="tittle--footer">Sucursales</h5>
          <div class="text--footer--contenedor">
            <p class="text--footer">Av. Salaverry 2625 - San Isidro - Lima</p>
            <p class="text--footer">Av. La Fontana 955 - La Molina - Lima</p>
            <p class="text--footer">Av. Benavides 778 - Miraflores - Lima</p>
          </div>
        </div>
        <div class="col-3 text--subcontainer">
          <h5 class="tittle--footer">Enlaces Externos</h5>
          <div class="text--footer--contenedor">
            <p class="text--footer">Conócenos</p>
            <p class="text--footer">Bolsa Trabajo</p>
            <p class="text--footer">Conviértete en Proveedor</p>
            <p class="text--footer">Blog</p>
            <p class="text--footer">Test vocacional</p>
            <p class="text--footer">Portal de Transparencia</p>


          </div>
        </div>
        <div class="col-3 post--venta--container">
          <div class="correo--container">
            <i class="bi bi-envelope-fill text--footer icon-footer"></i>
            <p class="text--footer"> postventa@retailexpress.pe</p>
          </div>
          <div class="telef--container">
            <i class="bi bi-telephone-fill text--footer icon-footer"></i>
            <p class="text--footer"> 01 706 0000</p>
          </div>

          <div class="book--container">
            <i class="bi bi-book text--footer icon-footer"></i>
            <p class="text--footer"> Libro de Reclamaciones</p>
          </div>

        </div>
        <div class="col-3 text--subcontainer">
          <h5 class="tittle--footer">Redes Sociales</h5>
          <div class="social-media-container">
            <div>
              <a>
                <i class="bi bi-facebook icon-footer-socialmedia"></i>
              </a>
            </div>

            <div>
              <a>
                <i class="bi bi-twitter-x icon-footer-socialmedia"></i>
              </a>
            </div>

            <div>
              <a>
                <i class="bi bi-youtube icon-footer-socialmedia"></i>
              </a>
            </div>

            <div>
              <a>
                <i class="bi bi-instagram icon-footer-socialmedia"></i>
              </a>
            </div>

            <div>
              <a>
                <i class="bi bi-tiktok icon-footer-socialmedia"></i>
              </a>
            </div>
          </div>
        </div>

      </div>

    </section>

    <section class="container">
      <p class="text-center tittle--footer"> © 2024 Retail Express. Todos los derechos reservados – Política de
        Privacidad – Política de Tratamiento de Datos </p>
    </section>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>