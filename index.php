<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Planilla Vyasa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> 
    <link rel="stylesheet" href="..//CRUD Vyasa/CSS/index.css">
</head>
<?php include "Conexion_index.php";
?>
<body data-spy="scroll" data-target="#navbar" data-offset="50">
    <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Planillas Vyasa</a>
        <button  class="button" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="..//CRUD Vyasa/index_loggin.php">LOGGIN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="..//CRUD Vyasa/Planilla_Bisemanal.php">Planilla Bisemanal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="..//CRUD Vyasa/PLanilla_Quincenal.php">Planilla Quincenal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://vyasa.co.cr/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#mostrar">Mostrar</a>
                </li>
            </ul>
        </div>
    </nav>
    <header> <video muted="this.muted=true" autoplay loop src="..//CRUD Vyasa/IMG/pexels_videos_1757800 (2160p).mp4" type="video/mp4" width="600px"></video></header> 

    
    <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
  <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
  <label class="btn btn-outline-primary" for="btncheck1">Checkbox 1</label>

  <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
  <label class="btn btn-outline-primary" for="btncheck2">Checkbox 2</label>

  <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
  <label class="btn btn-outline-primary" for="btncheck3">Checkbox 3</label>
</div>
    <!-- Botón para abrir el modal de Insertar Empleado -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalInsertar">
    Insertar Empleado
</button>

<!-- Modal de Insertar Empleado -->
<div class="modal fade" id="modalInsertar">
    <div class="modal-dialog">
        <div class="modal-content">
        <p><div id="insertar" class="container content">
        <h2>Insertar Empleado</h2>
        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <div class="form-group">
                <label for="cedula">Cédula:</label>
                <input type="text" class="form-control" id="ID_cedula_Bi" name="ID_cedula_Bi" placeholder="Cédula">
            </div>
            <div class="form-group">
                <label for="cedula">ID Reloj:</label>
                <input type="text" class="form-control" id="ID_reloj_Bi" name="ID_reloj_Bi" placeholder="Cédula">
            </div>
            <div class="form-group">
                <label for="nombre_completo">Nombre Completo:</label>
                <input type="text" class="form-control" id="nombre_empleado" name="nombre_empleado" placeholder="Nombre Completo">
            </div>
            <div class="form-group">
                <label for="fecha_ingreso">Fecha de Ingreso:</label>
                <input type="date" class="form-control" id="fecha_ingreso" name="fecha_ingreso">
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono">
            </div>
            <button class="button" type="submit" class="btn btn-primary" name="insertar">Insertar</button>
            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal fade">Close</button>

        </form>
    </div></p>
            <div class="modal-body">
            
            </div>
        </div>
    </div>
</div>

<!-- Botón para abrir el modal de Actualizar Empleado -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalActualizar">
    Actualizar Empleado
</button>

<!-- Modal de Actualizar Empleado -->
<div class="modal fade" id="modalActualizar">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Contenido del modal de Actualizar Empleado -->
            <div class="modal-body">
            <h2>Actualizar Empleado</h2>
        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <div class="form-group">
                <label for="cedula_actualizar">Cédula:</label>
                <input type="text" class="form-control" id="cedula_actualizar" name="cedula_actualizar" placeholder="Cédula">
            </div>
            <div class="form-group">
                <label for="nuevo_empleado">Nombre Empleado:</label>
                <input type="text" class="form-control" id="nuevo_empleado" name="nuevo_empleado" placeholder="Nombre Empleado">
            </div>
            <button class="button" type="submit" class="btn btn-primary" name="actualizar">Actualizar</button>
        </form>
    </div></p>
    </div>
            </div>
        </div>
    </div>
</div>

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEliminar">
    Eliminar Empleado
</button>

<div class="modal fade" id="modalEliminar">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Eliminar Empleado</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="eliminar" class="container content">
                    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                        <div class="form-group">
                            <label for="cedula_eliminar">Cédula:</label>
                            <input type="text" class="form-control" id="cedula_eliminar" name="cedula_eliminar" placeholder="Cédula">
                        </div>
                        <div class="form-group">
                            <label for="eliminar_reloj">ID Reloj:</label>
                            <input type="text" class="form-control" id="eliminar_reloj" name="eliminar_reloj" placeholder="Reloj">
                        </div>
                        <div class="form-group">
                            <label for="eliminar_empleado">Nombre Empleado:</label>
                            <input type="text" class="form-control" id="eliminar_empleado" name="eliminar_empleado" placeholder="Nombre empleado">
                        </div>
                        <button class="btn btn-danger" type="submit" name="eliminar">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>





<!-- Botón para abrir el modal de Insertar Empleado -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalInsertar_Quincenal">
    Insertar Empleado
</button>

<!-- Modal de Insertar Empleado -->
<div class="modal fade" id="modalInsertar_Quincenal">
    <div class="modal-dialog">
        <div class="modal-content">
        <p><div id="insertar_Qui" class="container content">
        <h2>Insertar Empleado</h2>
        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <div class="form-group">
                <label for="cedula">Cédula:</label>
                <input type="text" class="form-control" id="ID_cedula_Qui" name="ID_cedula_Qui" placeholder="Cédula">
            </div>
            <div class="form-group">
                <label for="reloj">ID Reloj:</label>
                <input type="text" class="form-control" id="ID_reloj_Qui" name="ID_reloj_Qui" placeholder="Reloj">
            </div>
            <div class="form-group">
                <label for="nombre_completo">Nombre Completo:</label>
                <input type="text" class="form-control" id="nombre_empleado_Qui" name="nombre_empleado_Qui" placeholder="Nombre Completo">
            </div>
            <div class="form-group">
                <label for="fecha_ingreso">Fecha de Ingreso:</label>
                <input type="date" class="form-control" id="fecha_ingreso_Qui" name="fecha_ingreso_Qui">
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="text" class="form-control" id="telefono_Qui" name="telefono_Qui" placeholder="Teléfono">
            </div>
            <button class="button" type="submit" class="btn btn-primary" name="insertar_Qui">Insertar</button>
        </form>
    </div></p>
            <div class="modal-body">
            
            </div>
        </div>
    </div>
</div>
<!-- Botón para abrir el modal de Actualizar Empleado -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalActualizar_Quincenal">
    Actualizar Empleado
</button>

<!-- Modal de Actualizar Empleado -->
<div class="modal fade" id="modalActualizar_Quincenal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Contenido del modal de Actualizar Empleado -->
            <div class="modal-body">
            <h2>Actualizar Empleado</h2>
        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <div class="form-group">
                <label for="cedula_actualizar_Qui">Cédula:</label>
                <input type="text" class="form-control" id="cedula_actualizar_Qui" name="cedula_actualizar_Qui" placeholder="Cédula">
            </div>
            <div class="form-group">
                <label for="nuevo_empleado">Nombre Empleado:</label>
                <input type="text" class="form-control" id="nuevo_empleado_Qui" name="nuevo_empleado_Qui" placeholder="Nombre Empleado">
            </div>
            <button class="button" type="submit" class="btn btn-primary" name="actualizar_Qui">Actualizar</button>
        </form>
    </div></p>
    </div>
            </div>
        </div>
    </div>
</div>

<!-- Botón para abrir el modal de Eliminar Empleado -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalEliminar_Quincenal">
    Eliminar Empleado
</button>

<!-- Modal de Eliminar Empleado -->
<div class="modal fade" id="modalEliminar_Quincenal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Contenido del modal de Eliminar Empleado -->
            <div class="modal-body">
            <p><div id="eliminar_Qui" class="container content">
        <h2>Eliminar Empleado</h2>
        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <div class="form-group">
                <label for="cedula_eliminar_Qui">Cédula:</label>
                <input type="text" class="form-control" id="cedula_eliminar_Qui" name="cedula_eliminar_Qui" placeholder="Cédula">
            </div>
            <div class="form-group">
                <label for="reloj_eliminar">ID Reloj:</label>
                <input type="text" class="form-control" id="eliminar_reloj_Qui" name="eliminar_reloj_Qui" placeholder="Reloj">
            </div>
            <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <div class="form-group">
                <label for="eliminar_empleado">Nombre Empleado:</label>
                <input type="text" class="form-control" id="eliminar_empleado_Qui" name="eliminar_empleado_Qui" placeholder="Nombre empleado">
            </div>
            <button class="button" type="submit" class="btn btn-danger" name="eliminar_Qui">Eliminar</button>
        </form>
    </div></p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
