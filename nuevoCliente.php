<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Retail Express | ERP </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 navbar-list">
                  <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="./index.php">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="#">Nosotros</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="./gestionClientes.php" target="_blank">Clientes</a>
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
        <div class="container d-flex justify-content-center align-items-center vh-120">
          
          <div class="card p-4 shadow-lg" style="width: 100%; max-width: 850px;">
            <h1 class="text-center mb-4 text-uppercase">Registro de Cliente</h1>

            <form action="grabarCliente.php" method="POST">
              <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa tu nombre"  required>
              </div>
              <div class="mb-3">
                <label for="apellidoPaterno" class="form-label">Apellido Paterno</label>
                <input type="text" class="form-control" id="apellidoPaterno" name="apePa" placeholder="Ingresa tu apellido paterno" required>
              </div>
              <div class="mb-3">
                <label for="apellidoMaterno" class="form-label">Apellido Materno</label>
                <input type="text" class="form-control" id="apellidoMaterno" name="apeMa" placeholder="Ingresa tu apellido materno" required>
              </div>
              <div class="mb-3">
                <label for="dni" class="form-label">DNI</label>
                <input type="text" class="form-control" id="dni" name="dni" placeholder="Ingresa tu DNI" maxlength="8" required>
              </div>
              <!-- Re -> Retail Express -->
              <button type="submit" class="btn main--button w-100" name="registrar">Registrar</button>
            </form>


          </div>
        </div>
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
                        <p class="text--footer">  01 706 0000</p>
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
            <p class="text-center tittle--footer"> © 2024 Retail Express. Todos los derechos reservados – Política de Privacidad – Política de Tratamiento de Datos </p>
        </section>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>