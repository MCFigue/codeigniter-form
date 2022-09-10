<!DOCTYPE html>
<html>
<head>
  <title>Modal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
<div class="container">
  <h2>AQUI VA LO QUE ESTA EN EL MENU Y TODO ESO</h2>
  <p>Modal</p>
        <script>
            var isClicked = false;
            var clickCounter = 100;
            function fnTrackClick(){
            if(isClicked){
                clickCounter--;
                setTimeout(clickCounter * 100, fnTrackClick);
            }
            }
        </script>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#registrarse" onmousedown="isClicked=true;" onmouseover="fnTrackClick();" onmouseup="isClicked = false;">
            Abrir
        </button>
       
        <ul>
            
            <?php foreach($menu as $item): ?>
                <li><a href="<?=$item['url']?>"><?=$item['title'] ?></a></li>
            <?php endforeach; ?>
        </ul>
  <!-- The Modal -->
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
                <form  action="Persona/create" method="POST" >
                    <?php echo form_open('Persona/create',array('method'=>'POST')); ?>
                    <?php echo validation_errors(); ?>
                    <?= isset($msg) ?$msg: '' ?>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id=" ">
                            <i class="bi bi-person-fill"></i>
                        </span>
                        <input  name="txtdni" type="text" class="form-control p-4" placeholder="Ingresar DNI" aria-label=" " aria-describedby=" ">
                    </div>
                        <!-- echo form_label('Nombre de usuario'); -->
                        <!-- echo form_input(array('type'=>'text','name'=>'username','class'=>'input-group-text')); -->
                    <!-- <div class="mb-3">
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
                    </div> -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" >Aceptar</button>
                        <button type="reset" class="btn btn-outline-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                        <?php echo form_close(); ?>
                </form>
            </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
