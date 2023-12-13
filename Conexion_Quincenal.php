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

        public function mostrar_Qui()
        {
            $query = "SELECT * FROM Planilla_Quincenal";
            $resultado = $this->conexion->query($query);

            if ($resultado->num_rows > 0) {
                echo '<div class="table-responsive">';
                echo '<table class="table custom-table">';
                echo '<thead class="thead-dark">';
                echo '<tr>';
                echo '<th class="text-center align-middle">ID</th>';
                echo '<th class="text-center align-middle">ID Reloj</th>';
                echo '<th class="text-center align-middle">Cédula</th>';
                echo '<th class="text-center align-middle">Nombre Completo</th>';
                echo '<th class="text-center align-middle">Fecha de Ingreso</th>';
                echo '<th class="text-center align-middle">Teléfono</th>';
                echo '</tr>';
                echo '</thead>';
                echo '<tbody>';

                while ($fila = $resultado->fetch_assoc()) {
                    echo '<tr class="table-light">';
                    echo '<td class="text-center align-middle">' . $fila["ID_Qui"] . '</td>';
                    echo '<td class="text-center align-middle">' . $fila["ID_reloj_Qui"] . '</td>';
                    echo '<td class="text-center align-middle">' . $fila["ID_cedula_Qui"] . '</td>';
                    echo '<td class="text-center align-middle">' . $fila["nombre_empleado"] . '</td>';
                    echo '<td class="text-center align-middle">' . $fila["fecha_ingreso"] . '</td>';
                    echo '<td class="text-center align-middle">' . $fila["telefono"] . '</td>';
                    echo '</tr>';
                }

                echo '</tbody>';
                echo '</table>';
                echo '</div>';
                echo '<hr>';
            } else {
                echo '<div class="alert alert-info fixed-bottom-right" role="alert">No se encontraron registros.</div>';
            }
        }
        public function select_Qui() {
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
        
        public function select_cedula_Qui() {
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
        
    public function guardarEnBaseDeDatos_Qui($horasSencillas_Qui, $horasExtra_Qui, $horasDobles_Qui, $feriados_Qui, $total_Qui)
    { 
         // Existe un registro con la ID de cédula dada, realizar la actualización
        $update_query = $this->conexion->prepare("UPDATE Planilla_Quincenal SET horas_sencillas = ?, horas_extra = ?, horas_dobles = ?, feriados = ?, total_horas = ?");
        $update_query->bind_param("sssss", $horasSencillas_Qui, $horasExtra_Qui, $horasDobles_Qui, $feriados_Qui, $total_Qui);
    }
    public function insertarHoras_Qui($IDreloj_Qui, $idCedula_Qui, $idempledo_Qui, $horasSencillas_Qui, $horasExtra_Qui, $horasDobles_Qui, $feriados_Qui, $total_Qui) 
    {
        // Realizar la inserción directamente
        $insert_query = $this->conexion->prepare("INSERT INTO Planilla_Quincenal (ID_reloj_Qui,ID_cedula_Qui,nombre_empleado,horas_sencillas, horas_extra, horas_dobles, feriados, total_horas) 
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
        if (isset($_POST["guardar_Qui"]) && !isset($_POST["guardar"])) {
            // ... lógica para actualizar los valores nulos en Planilla_Quincenal
            $horasSencillas_Qui = $_POST['horas_sencillas_Qui'] ?? '';
            $horasExtra_Qui = $_POST['horas_extra_Qui'] ?? ''; '';
            $horasDobles_Qui = $_POST['horas_dobles_Qui'] ?? '';
            $feriados_Qui = $_POST['feriados_Qui'] ?? '';
            $total_Qui = $_POST['total_Qui'] ?? '';
        
        
            echo "Horas Sencillas Qui: " . $horasSencillas;
            // Call the guardarEnBaseDeDatos_Qui method with selected values
            $PlanillaObj->guardarEnBaseDeDatos_Qui( $horasSencillas_Qui, $horasExtra_Qui, $horasDobles_Qui, $feriados_Qui, $total_Qui);
    
        }
    }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if  (isset($_POST["ingreso_horas_Qui"]) && !isset($_POST["ingreso_horas"])) {
                // ... lógica para insertar las horas en Planilla_Quincenal
                
                $iDreloj_Qui = $_POST ['selectDestino3'] ?? '';
                $idCedula_Qui =$_POST["selectDestino2"] ?? '';
                $idempledo_Qui = $_POST['selectDestino'] ?? '';
                $horasSencillas_Qui = $_POST['horas_sencillas_Qui'] ?? '';
                $horasExtra_Qui = $_POST['horas_extra_Qui'] ?? '';
                $horasDobles_Qui = $_POST['horas_dobles_Qui'] ?? '';
                $feriados_Qui = $_POST['feriados_Qui'] ?? '';
                $total_Qui = $_POST['total_Qui'] ?? '';
        
        // Llamar al método insertarHoras
        $aviso = $PlanillaObj->insertarHoras_Qui($iDreloj_Qui, $idCedula_Qui, $idempledo_Qui, $horasSencillas_Qui, $horasExtra_Qui, $horasDobles_Qui, $feriados_Qui, $total_Qui);
        
        // Mostrar mensaje
        echo '<div class="alert alert-success fixed-bottom-right" role="alert">' . $aviso . '</div>';
            }
        }

    #$PlanillaObj->mostrar_Qui();
    $PlanillaObj->select_Qui();
    $PlanillaObj->select_cedula_Qui();
    $PlanillaObj->select_reloj_Qui();
    $conexion->close();
    ?>

<script>
        setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove();
            });
        }, 5000);
</script>
