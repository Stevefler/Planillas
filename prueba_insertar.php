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

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
        
    <input type="text" name="selectDestino" id="InputSelectDestino" value="">
    <input type="text" name="selectDestino2" id="InputSelectDestino2" value="">
    <input type="text" name="selectDestino3" id="InputSelectDestino3" value=""> 
</div>
    <br>


    <div class="box5"> 
<button class="boton2" type="submit" id="ingreso_horas_Qui" name="ingreso_horas_Qui">Insertar</button>
</div>
</form>
</section>


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
        public $conexion;

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
                echo '<option value="' . $fila['nombre_empleado'] . '">' . $fila['nombre_empleado'] . '</option>';
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
                echo '<option value="' . $fila['ID_cedula_Qui'] . '">' . $fila['ID_cedula_Qui'] . '</option>';
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
            echo '<option value="' . $fila['ID_reloj_Qui'] . '">' . $fila['ID_reloj_Qui'] . '</option>';
        }

        echo '</select>';
        echo '</div>';
    }

    public function insertarHoras_Qui($IDreloj_Qui, $idCedula_Qui, $idempledo_Qui, $horasSencillas_Qui, $horasExtra_Qui, $horasDobles_Qui, $feriados_Qui, $total_Qui) 
{
    $insert_query = $this->conexion->prepare("INSERT INTO Planilla_Quincenal (ID_reloj_Qui, ID_cedula_Qui, nombre_empleado, horas_sencillas, horas_extra, horas_dobles, feriados, total_horas) 
                                            VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $insert_query->bind_param("ssssssss", $IDreloj_Qui, $idCedula_Qui, $idempledo_Qui, $horasSencillas_Qui, $horasExtra_Qui, $horasDobles_Qui, $feriados_Qui, $total_Qui);

    if ($insert_query->execute()) {
        // Éxito en la inserción
        return "Registro insertado correctamente.";
    } else {
        // Manejar error en la ejecución de la consulta de inserción
        return "Error al insertar el registro: " . $insert_query->error;
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if  (isset($_POST["ingreso_horas_Qui"]) && !isset($_POST["ingreso_horas"])) {
        // ... lógica para insertar las horas en Planilla_Quincenal
        var_dump($_POST);
        $idreloj_Qui = $_POST ['InputSelectDestino3'] ?? '';
        $idCedula_Qui =$_POST["InputSelectDestino2"] ?? '';
        $idempledo_Qui = $_POST['InputSelectDestino'] ?? '';
        $horasSencillas_Qui = $_POST['horas_sencillas_Qui'] ?? '';
        $horasExtra_Qui = $_POST['horas_extra_Qui'] ?? '';
        $horasDobles_Qui = $_POST['horas_dobles_Qui'] ?? '';
        $feriados_Qui = $_POST['feriados_Qui'] ?? '';
        $total_Qui = $_POST['total_Qui'] ?? '';

// Llamar al método insertarHoras
$aviso = $PlanillaObj->insertarHoras_Qui($idreloj_Qui, $idCedula_Qui, $idempledo_Qui, $horasSencillas_Qui, $horasExtra_Qui, $horasDobles_Qui, $feriados_Qui, $total_Qui);

// Mostrar mensaje
echo '<div class="alert alert-success fixed-bottom-right" role="alert">' . $aviso . '</div>';
    }
}
$PlanillaObj->select();
$PlanillaObj->select_cedula();
$PlanillaObj->select_reloj_Qui();
$conexion->close();
?>

<script> 

document.addEventListener("DOMContentLoaded", function() {
    var selectOrigen1 = document.getElementById("empleados");

    console.log(document.getElementById("empleados")); // Verificar si el elemento se selecciona correctamente

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
})
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
    var selectOrigen3 = document.getElementById("IDS");
    var selectDestino3 = document.getElementById("selectDestino3");
    var inputSelectDestino3 = document.getElementById("InputSelectDestino3");

    selectOrigen3.addEventListener("change", function() {
        var opcionSeleccionada3 = selectOrigen3.options[selectOrigen3.selectedIndex];
        var nuevaOpcion3 = new Option(opcionSeleccionada3.text, opcionSeleccionada3.value);
        selectDestino3.add(nuevaOpcion3);

        // Establecer el valor en el campo oculto
        inputSelectDestino3.value = opcionSeleccionada3.value;

        // Mensaje de depuración
        console.log("Valor de ID Reloj seleccionado:", opcionSeleccionada3.value);
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