<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Corporativo 
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Servicios 
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Contacto</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="jumbotron">
        <h1 class="display-4">SISTEMA PARA LA RECOLECCIÓN Y REPORTES DE DAMNIFICADOS Y AFECTADOS PIURA</h1>
        <p class="lead">Ayuda a ayudar</p>
        <hr class="my-4">
        <p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
            dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
            type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
            remaining essentially unchanged. It was popularised in</p>
    </div>
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="https://www.pwc.co.za/en/assets/images/hero-pattern-and-group-of-people-sitting-around-a-laptop.jpeg"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Persona</h5>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#registrarse">
                                 Abrir
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="https://www.pwc.co.za/en/assets/images/hero-pattern-and-group-of-people-sitting-around-a-laptop.jpeg"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Persona</h5>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#registrarse">
                                 Abrir
                             </button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="https://www.pwc.co.za/en/assets/images/hero-pattern-and-group-of-people-sitting-around-a-laptop.jpeg"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Persona</h5>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#registrarse">
                                  Abrir
                          </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="modal fade" id="registrarse">
                    <div class="modal-dialog">
                        <div class="modal-content">
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h5 class="modal-title">Creando Nueva Persona</h5>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <!-- Modal body -->
                                <div class="modal-body">
                                    
                                        <?php echo form_open('Persona/create',array('method'=>'POST')); ?>
                                        <?php echo validation_errors(); ?>
                                        <?= isset($msg) ?$msg: '' ?>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" >
                                                <i class="bi bi-person-fill"></i>
                                            </span>
                                            <input  name="txtdni" type="text" class="form-control p-4" placeholder="Ingresar DNI" aria-label=" " aria-describedby=" ">
                                        </div>
                                            <!-- echo form_label('Nombre de usuario'); -->
                                            <!-- echo form_input(array('type'=>'text','name'=>'username','class'=>'input-group-text')); -->
                                        <div class="mb-3">
                                            <label for="txtNombre" class="form-label"><strong>* Nombre:</strong></label>
                                            <input name="txtNombre" type="text" class="form-control" id="txtNombre"  placeholder="Ingresar Nombre" aria-describedby="" >
                                        </div>
                                        <div class="mb-3">
                                            <label for="txtApellido" class="form-label"><strong>* Apellido:</strong></label>
                                            <input name="txtApellido" type="text" class="form-control" id="txtApellido"  placeholder="Ingresar Apellido" aria-describedby="" >
                                        </div>    
                                        <div class="mb-3">
                                            <label for="txtDireccion" class="form-label"><strong>* Dirección:</strong></label>
                                            <input name="txtDireccion" type="text" class="form-control" id="txtDireccion"  placeholder="Ingresar Dirección" aria-describedby="" >
                                        </div>
                                        <div class="mb-3">
                                            <label for="txtTelefono" class="form-label"><strong>* Teléfono:</strong></label>
                                            <input name="txtTelefono" type="number" class="form-control" id="txtTelefono"  placeholder="Ingresar Teléfono" aria-describedby="" >
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label"><strong>* Correo:</strong></label>
                                            <input name="email" type="email" placeholder="Ingresar Correo" class="form-control" id="email" aria-describedby="">
                                        </div>
                                        <div class="mb-3">
                                            <label for="fecha" class="form-label"><strong>* Fecha Nacimiento</strong></label>
                                            <input name="fecha" type="date" class="form-control" id="fecha">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary" >Aceptar</button>
                                            <button  class="btn btn-outline-secondary" data-dismiss="modal">
                                                        Cerrar
                                                    </button>
                                        </div>
                                            <?php echo form_close(); ?>    
                                </div>
                        </div>
                    </div>
        </div>
</body>
</html>