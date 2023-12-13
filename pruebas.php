<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap-5.2.3-dist/css/#navbarSupportedContent">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.2/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>


<link rel="stylesheet" href="..//CRUD Vyasa/CSS/boton.css">
<link rel="stylesheet" href="..//CRUD Vyasa/bootstrap-5.2.3-dist/js/bootstrap.js">
<link rel="stylesheet" href="..//CRUD Vyasa/CSS/menus.css">
<link rel="stylesheet" href="..//CRUD Vyasa/CSS/box.css">
</head>

<body>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<section>
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
<div class="box">

    <div class="flex-item text-center">
        <div class="detail">Detalles de ingresos</div>
        <div class="value">Valor</div>
    </div>
    <div class="flex-item text-center">
        <div class="detail"><label for="horas_sencillas_Qui">Horas Sencillas</label></div>
        <div class="value"><input type="text" name="horas_sencillas_Qui" id="horas_sencillas_Qui" class="suma" ></div>
    </div>
    <div class="flex-item text-center">
        <div class="detail"><label for="horas_extra_Qui">Horas Extra</label></div>
        <div class="value"><input type="text" name="horas_extra_Qui" id="horas_extra_Qui" class="suma" ></div>
    </div>
    <div class="flex-item text-center">
        <div class="detail"><label for="horas_dobles_Qui">Horas Dobles</label></div>
        <div class="value"><input type="text" name="horas_dobles_Qui" id="horas_dobles_Qui" class="suma" ></div>
    </div>
    <div class="flex-item text-center">
        <div class="detail"><label for="feriados_Qui">Feriados</label></div>
        <div class="value"><input type="text" name="feriados_Qui" id="feriados_Qui" class="suma"></div>
    </div>
    <div class="flex-item text-center">
        <div class="detail"></div>
        <div class="value"></div>
    </div>
    <div class="flex-item text-center">
        <div class="detail"><label for="total_Qui">Total</label></div>
        <div class="value input"><input class="suma-input" type="text" name="total_Qui" id="total_Qui" ></div>
    </div>
</div>
    <br>
    
    <input type="hidden" name="selectDestino" id="InputSelectDestino" value="">
    <input type="hidden" name="selectDestino2" id="InputSelectDestino2" value="">
    <input type="hidden" name="selectDestino3" id="InputSelectDestino3" value=""> 
    <input type="hidden" name="selectDestino3" id="InputSelectDestino3" value="">

<div id="guardar_Qui" class="box2"> 
                    <!-- Agrega cualquier campo oculto o de entrada necesario aquí -->
                    <button class="button1" name="guardar_Qui" type="submit" id="guardar_Qui">
                        <svg class="svg-icon" width="24" viewBox="0 0 24 24" height="24" fill="none">
                            <g stroke-width="2" stroke-linecap="round" stroke="#056dfa" fill-rule="evenodd" clip-rule="evenodd">
                                <path d="m3 7h17c.5523 0 1 .44772 1 1v11c0 .5523-.4477 1-1 1h-16c-.55228 0-1-.4477-1-1z"></path>
                                <path d="m3 4.5c0-.27614.22386-.5.5-.5h6.29289c.13261 0 .25981.05268.35351.14645l2.8536 2.85355h-10z"></path>
                            </g>
                        </svg>
                        <span class="lable1">Actualizar</span>
                    </button>
            </div>
</form>
</section>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
class Conexion
    {
        private $servername;
        private $username;
        private $password;
        private $dbname;

        public function __construct($servername, $username, $password, $dbname)
        {
            $this->servername = $servername;
            $this->username = $username;
            $this->password = $password;
            $this->dbname = $dbname;
        }

        public function conectar()
        {
            $conexion = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

            if ($conexion->connect_error) {
                die("Error al conectar con la base de datos: " . $conexion->connect_error);
            }

            echo '<div class="alert alert-success fixed-bottom-right" role="alert">Conectado</div>';

            return $conexion;
        }
    }
    class Planilla
    {
        private $conexion;

        public function __construct($conexion)
        {
            $this->conexion = $conexion;
        }
        public function select() {
            $sqlempleados = "SELECT * FROM Planilla_Quincenal";
            $resultado = $this->conexion->query($sqlempleados);
        
            echo '<div class="col-md-2 mb-5">';
            echo '<label for="empleados" class="text-right">Lista de Empleados</label>';
            echo '<select name="empleados" id="empleados" class="form-control form-control-sm">';
            echo '<option value="">Seleccione Empleado</option>';
        
            while ($fila = $resultado->fetch_assoc()) {
                echo '<option value="' . $fila['ID_Qui'] . '">' . $fila['nombre_empleado'] . '</option>';
            }
        
            echo '</select>';
            echo '</div>';
        }
        
        public function select_cedula() {
            $sqlempleados_cedula = "SELECT * FROM Planilla_Quincenal";
            $resultado2 = $this->conexion->query($sqlempleados_cedula);
        
            echo '<div class="col-md-2 mb-5">';
            echo '<label for="cedulas" class="text-right">Lista de Cedulas</label>';
            echo '<select name="cedulas" id="cedulas" class="form-control form-control-sm">';
            echo '<option value="">Seleccione Cedula</option>';
        
            while ($fila = $resultado2->fetch_assoc()) {
                echo '<option value="' . $fila['ID_Qui'] . '">' . $fila['ID_cedula_Qui'] . '</option>';
            }
        
            echo '</select>';
            echo '</div>';
        }
        public function select_reloj_Qui()
    {
        $sqlempleados_reloj = "SELECT * FROM Planilla_Quincenal";
        $resultado3 = $this->conexion->query($sqlempleados_reloj);

        echo '<div class="col-md-2 mb-5">';
        echo '<label for="IDS" class="text-right">Lista de ID Reloj</label>';
        echo '<select name="IDS" id="IDS" class="form-control form-control-sm">';
        echo '<option value="">Seleccione ID Reloj</option>';

        while ($fila = $resultado3->fetch_assoc()) {
            echo '<option value="' . $fila['ID_Qui'] . '">' . $fila['ID_reloj_Qui'] . '</option>';
        }

        echo '</select>';
        echo '</div>';
    }

    public function guardarEnBaseDeDatos_Qui($idEmpleado_Qui, $idCedula_Qui, $horasSencillas_Qui, $horasExtra_Qui, $horasDobles_Qui, $feriados_Qui, $total_Qui, $idReloj_Qui, $idQui)
{ 
    // Realizar la actualización en la base de datos para la fila con el ID_Qui correspondiente
    $update_query = $this->conexion->prepare("UPDATE Planilla_Quincenal SET ID_cedula_Qui = ?, nombre_empleado = ?, horas_sencillas = ?, horas_extra = ?, horas_dobles = ?, feriados = ?, total_horas = ?, ID_reloj_Qui = ? WHERE ID_Qui = ?");
    $update_query->bind_param("sssssssss", $idCedula_Qui, $idEmpleado_Qui,  $horasSencillas_Qui, $horasExtra_Qui, $horasDobles_Qui, $feriados_Qui, $total_Qui, $idReloj_Qui, $idQui);
    
    if ($update_query->execute()) {
        // Éxito en la actualización
        echo "Registro actualizado correctamente.";
    } else {
        // Manejar error en la ejecución de la consulta de actualización
        echo "Error al actualizar el registro: " . $update_query->error;
    }
}
 }

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Vyasa";

$conexionObj = new Conexion($servername, $username, $password, $dbname);
$conexion = $conexionObj->conectar();
$PlanillaObj = new Planilla($conexion);



$PlanillaObj->select();
$PlanillaObj->select_cedula();
$PlanillaObj->select_reloj_Qui();
$conexion->close();

?>

<script>

        document.addEventListener("DOMContentLoaded", function() {
    var selectOrigen1 = document.getElementById("empleados");
    var selectDestino1 = document.getElementById("selectDestino");
    var inputSelectDestino = document.getElementById("InputSelectDestino");

    selectOrigen1.addEventListener("change", function() {
        var opcionSeleccionada1 = selectOrigen1.options[selectOrigen1.selectedIndex];
        var nuevaOpcion1 = new Option(opcionSeleccionada1.text, opcionSeleccionada1.value);
        selectDestino1.add(nuevaOpcion1);

        // Establecer el valor en el campo oculto
        inputSelectDestino.value = opcionSeleccionada1.value;

        // Mensaje de depuración
        console.log("Valor de empleados seleccionado:", opcionSeleccionada1.value);
    });
});

        document.addEventListener("DOMContentLoaded", function() {
            var selectOrigen = document.getElementById("cedulas");
            var selectDestino = document.getElementById("selectDestino2");
            var inputSelectDestino2 = document.getElementById("InputSelectDestino2");

            selectOrigen.addEventListener("change", function() {
                var opcionSeleccionada = selectOrigen.options[selectOrigen.selectedIndex];
                var nuevaOpcion = new Option(opcionSeleccionada.text, opcionSeleccionada.value);
                selectDestino.add(nuevaOpcion);

                // Establecer el valor en el campo oculto
                inputSelectDestino2.value = opcionSeleccionada.value;

                // Mensaje de depuración
                console.log("Valor de cedulas seleccionado:", opcionSeleccionada.value);
            });
        });
        document.addEventListener("DOMContentLoaded", function() {
    var selectOrigen = document.getElementById("IDS");
    var selectDestino = document.getElementById("selectDestino3");
    var inputSelectDestino3 = document.getElementById("InputSelectDestino3");

    selectOrigen.addEventListener("change", function() {
        var opcionSeleccionada = selectOrigen.options[selectOrigen.selectedIndex];
        var nuevaOpcion = new Option(opcionSeleccionada.text, opcionSeleccionada.value);
        selectDestino.add(nuevaOpcion);

        // Establecer el valor en el campo oculto
        inputSelectDestino3.value = opcionSeleccionada.value;

        // Mensaje de depuración
        console.log("Valor de ID Reloj seleccionado:", opcionSeleccionada.value);
    });
});
    </script>

<script>
        setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove();
            });
        }, 5000);
</script>
</body>
</html>