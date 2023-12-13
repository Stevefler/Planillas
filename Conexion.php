
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

        public function insertar($reloj, $cedula, $nombre_empleado, $fecha_ingreso, $telefono) {
            $query = "INSERT INTO Planilla_Bisemanal (ID_reloj_Bi, ID_cedula_Bi, nombre_empleado, fecha_ingreso, telefono) 
                        VALUES ('$reloj','$cedula', '$nombre_empleado', '$fecha_ingreso', '$telefono')";
    
            return $this->conexion->query($query) === TRUE;
        }
        public function insertarQui($relojQui, $cedulaQui, $nombre_empleadoQui, $fecha_ingresoQui, $telefonoQui) {
            $query = "INSERT INTO Planilla_Quincenal (ID_reloj_Qui, ID_cedula_Qui, nombre_empleado, fecha_ingreso, telefono) 
                        VALUES ('$relojQui','$cedulaQui', '$nombre_empleadoQui', '$fecha_ingresoQui', '$telefonoQui')";
    
            return $this->conexion->query($query) === TRUE;
        }
        public function mostrar()
        {
            $query = "SELECT * FROM Planilla_Bisemanal";
            $resultado = $this->conexion->query($query);

            if ($resultado->num_rows > 0) {
                echo '<div class="table-responsive">';
                echo '<table class="table custom-table">';
                echo '<thead class="thead-dark">';
                echo '<tr>';
                echo '<th class="text-center align-middle">Cédula</th>';
                echo '<th class="text-center align-middle">Nombre Completo</th>';
                echo '<th class="text-center align-middle">Fecha de Ingreso</th>';
                echo '<th class="text-center align-middle">Teléfono</th>';
                echo '</tr>';
                echo '</thead>';
                echo '<tbody>';

                while ($fila = $resultado->fetch_assoc()) {
                    echo '<tr class="table-light">';
                    echo '<td class="text-center align-middle">' . $fila["ID_reloj_Bi"] . '</td>';
                    echo '<td class="text-center align-middle">' . $fila["ID_cedula_Bi"] . '</td>';
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
        
        public function actualizar($nuevo_empleado, $cedula)
        {
            $query = "UPDATE Planilla_Bisemanal SET ID_cedula_Bi= '$nuevo_empleado' WHERE ID_cedula_Bi = '$cedula'";

            #$query = "UPDATE Planilla_Bi SET  nombre_empleado = '$nuevo_empleado' WHERE = '$nuevo_empleado'";

            if ($this->conexion->query($query) === TRUE) {
                echo '<div class="alert alert-success fixed-bottom-right" role="alert">Registro actualizado correctamente.</div>';
            } else {
                echo '<div class="alert alert-danger fixed-bottom-right" role="alert">Error al actualizar el registro: ' . $this->conexion->error . '</div>';
            }
        }
        public function actualizar_Qui($nuevo_empleado_Qui, $cedula_Qui)
        {
            $query = "UPDATE Planilla_Quincenal SET ID_reloj_Qui= '$nuevo_empleado_Qui' WHERE ID_cedula_Qui = '$cedula_Qui'";

            #$query = "UPDATE Planilla_Bi SET  nombre_empleado = '$nuevo_empleado' WHERE = '$nuevo_empleado'";

            if ($this->conexion->query($query) === TRUE) {
                echo '<div class="alert alert-success fixed-bottom-right" role="alert">Registro actualizado correctamente.</div>';
            } else {
                echo '<div class="alert alert-danger fixed-bottom-right" role="alert">Error al actualizar el registro: ' . $this->conexion->error . '</div>';
            }
        }
        
        public function eliminar($reloj, $cedula, $nombre_empleado)
        {
            $query = "DELETE FROM Planilla_Bisemanal WHERE ID_cedula_Bi = '$cedula'";
            $query = "DELETE FROM Planilla_Bisemanal WHERE nombre_empleado ='$nombre_empleado'";
            $query = "DELETE FROM Planilla_Bisemanal WHERE ID_cedula_Bi ='$reloj'";

            if ($this->conexion->query($query) === TRUE) {
                echo '<div class="alert alert-success fixed-bottom-right" role="alert">Registro eliminado correctamente.</div>';
            } else {
                echo '<div class="alert alert-danger fixed-bottom-right" role="alert">Error al eliminar el registro: ' . $this->conexion->error . '</div>';
            }
        }
        public function eliminar_Qui($reloj_Qui, $cedula_Qui, $nombre_empleado_Qui)
        {
            $query = "DELETE FROM Planilla_Bisemanal WHERE ID_cedula_Qui = '$cedula_Qui'";
            $query = "DELETE FROM Planilla_Bisemanal WHERE nombre_empleado ='$nombre_empleado_Qui'";
            $query = "DELETE FROM Planilla_Bisemanal WHERE ID_reloj_Qui ='$reloj_Qui'";
            

            if ($this->conexion->query($query) === TRUE) {
                echo '<div class="alert alert-success fixed-bottom-right" role="alert">Registro eliminado correctamente.</div>';
            } else {
                echo '<div class="alert alert-danger fixed-bottom-right" role="alert">Error al eliminar el registro: ' . $this->conexion->error . '</div>';
            }
        }
        public function select() {
            $sqlempleados = "SELECT * FROM Planilla_Bisemanal";
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
            $sqlempleados_cedula = "SELECT * FROM Planilla_Bisemanal";
            $resultado2 = $this->conexion->query($sqlempleados_cedula);
        
            echo '<div class="col-md-2 mb-5">';
            echo '<label for="cedulas" class="text-right">Lista de Cedulas</label>';
            echo '<select name="cedulas" id="cedulas" class="form-control form-control-sm">';
            echo '<option value="">Seleccione Cedula</option>';
        
            while ($fila = $resultado2->fetch_assoc()) {
                echo '<option value="' . $fila['ID_cedula_Bi'] . '">' . $fila['ID_cedula_Bi'] . '</option>';
            }
        
            echo '</select>';
            echo '</div>';
        }
        public function select_reloj_Bi() {
            $sqlempleados_reloj = "SELECT * FROM Planilla_Bisemanal";
            $resultado3 = $this->conexion->query($sqlempleados_reloj);
        
            echo '<div class="col-md-2 mb-5">';
            echo '<label for="IDS" class="text-right">Lista de ID Reloj</label>';
            echo '<select name="IDS" id="IDS" class="form-control form-control-sm">';
            echo '<option value="">Seleccione Cedula</option>';
        
            while ($fila = $resultado3->fetch_assoc()) {
                echo '<option value="' . $fila['ID_reloj_Bi'] . '">' . $fila['ID_reloj_Bi'] . '</option>';
            }
        
            echo '</select>';
            echo '</div>';
        }
        
        public function guardarEnBaseDeDatos($horasSencillas, $horasExtra, $horasDobles, $feriados, $total)
{ 

        // Existe un registro con la ID de cédula dada, realizar la actualización
        $update_query = $this->conexion->prepare("UPDATE Planilla_Bisemanal SET horas_sencillas = ?, horas_extra = ?, horas_dobles = ?, feriados = ?, total_horas = ?");
        $update_query->bind_param("sssss", $horasSencillas, $horasExtra, $horasDobles, $feriados, $total);
}

public function insertarHoras($IDreloj, $idCedula, $idempledo, $horasSencillas, $horasExtra, $horasDobles, $feriados, $total) 
    {
        // Realizar la inserción directamente
        $insert_query = $this->conexion->prepare("INSERT INTO Planilla_Bisemanal (ID_reloj_Bi,ID_cedula_Bi,nombre_empleado,horas_sencillas, horas_extra, horas_dobles, feriados, total_horas) 
                                                VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $insert_query->bind_param("ssssssss", $IDreloj, $idCedula, $idempledo, $horasSencillas, $horasExtra, $horasDobles, $feriados, $total);
    
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
        if (isset($_POST["insertar"]) && !isset($_POST["insertar_Qui"])) {
            // ... lógica para insertar en Planilla_Bisemanal
            if (isset($_POST["insertar"])) {
                $cedula = $_POST["ID_cedula_Bi"];
                $reloj = $_POST["ID_reloj_Bi"];
                $nombre_empleado = $_POST["nombre_empleado"];
                $fecha_ingreso = $_POST["fecha_ingreso"];
                $telefono = $_POST["telefono"];
        
                if ($PlanillaObj->insertar($reloj, $cedula, $nombre_empleado, $fecha_ingreso, $telefono)) {
                    echo '<div class="alert alert-success fixed-bottom-right" role="alert">Registro insertado correctamente en Planilla_Bisemanal.</div>';
                } else {
                    echo '<div class="alert alert-danger fixed-bottom-right" role="alert">Error al insertar el registro en Planilla_Bisemanal: ' . $PlanillaObj->conexion->error . '</div>';
                }
            }
        } elseif (isset($_POST["insertar_Qui"]) && !isset($_POST["insertar"])) {
            // ... lógica para insertar en Planilla_Quincenal
            $cedulaQui = $_POST["ID_cedula_Qui"];
            $relojQui = $_POST["ID_reloj_Qui"];
            $nombre_empleadoQui = $_POST["nombre_empleado_Qui"];
            $fecha_ingresoQui = $_POST["fecha_ingreso_Qui"];
            $telefonoQui = $_POST["telefono_Qui"];
    
            if ($PlanillaObj->insertarQui($relojQui, $cedulaQui, $nombre_empleadoQui, $fecha_ingresoQui, $telefonoQui)) {
                echo '<div class="alert alert-success fixed-bottom-right" role="alert">Registro insertado correctamente en Planilla_Quincenal.</div>';
            } else {
                echo '<div class="alert alert-danger fixed-bottom-right" role="alert">Error al insertar el registro en Planilla_Quincenal: ' . $PlanillaObj->conexion->error . '</div>';
            }
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if  (isset($_POST["ingreso_horas"]) && !isset($_POST["ingreso_horas_Qui"])) {
            // ... lógica para insertar las horas en Planilla_Quincenal
            
            $iDreloj = $_POST ['selectDestino3'] ?? '';
            $idCedula =$_POST["selectDestino2"] ?? '';
            $idempledo = $_POST['selectDestino'] ?? '';
            $horasSencillas = $_POST['horas_sencillas'] ?? '';
            $horasExtra = $_POST['horas_extra'] ?? '';
            $horasDobles = $_POST['horas_dobles'] ?? '';
            $feriados = $_POST['feriados'] ?? '';
            $total = $_POST['total'] ?? '';
    
    // Llamar al método insertarHoras
    $aviso = $PlanillaObj->insertarHoras($iDreloj, $idCedula, $idempledo, $horasSencillas, $horasExtra, $horasDobles, $feriados, $total);
    
    // Mostrar mensaje
    echo '<div class="alert alert-success fixed-bottom-right" role="alert">' . $aviso . '</div>';
        }
    }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["actualizar"]) && !isset($_POST["actualizar_Qui"])) {
                // ... lógica para actualizar en Planilla_Bisemanal
                $cedula = htmlspecialchars($_POST["cedula_actualizar"]);
                $nuevo_empleado = htmlspecialchars($_POST["nuevo_empleado"]);
        
                $PlanillaObj->actualizar($nuevo_empleado, $cedula);
            } elseif (isset($_POST["actualizar_Qui"]) && !isset($_POST["actualizar"])) {
                // ... lógica para actualizar en Planilla_Quincenal
                $cedula_Qui = htmlspecialchars($_POST["cedula_actualizar_Qui"]);
                $nuevo_empleado_Qui = htmlspecialchars($_POST["nuevo_empleado_Qui"]);
        
                $PlanillaObj->actualizar($nuevo_empleado_Qui, $cedula_Qui);

            }
        }
    
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["eliminar"]) && !isset($_POST["eliminar_Qui"])) {
                // ... lógica para eliminar en Planilla_Bisemanal
                $reloj = htmlspecialchars($_POST["eliminar_reloj"]);
                $cedula = htmlspecialchars($_POST["cedula_eliminar"]);
                $nombre_empleado = htmlspecialchars($_POST["eliminar_empleado"]);
        
                $PlanillaObj->eliminar($reloj,$cedula, $nombre_empleado);
            } elseif (isset($_POST["eliminar_Qui"]) && !isset($_POST["eliminar"])) {
                // ... lógica para eliminar en Planilla_Quincenal
                $reloj_Qui = htmlspecialchars($_POST["eliminar_reloj_Qui"]);
                $cedula_Qui = htmlspecialchars($_POST["cedula_eliminar_Qui"]);
                $nombre_empleado_Qui = htmlspecialchars($_POST["eliminar_empleado_Qui"]);
        
                $PlanillaObj->eliminar($reloj_Qui,$cedula_Qui, $nombre_empleado_Qui);
            }
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["guardar"]) && !isset($_POST["guardar_Qui"])) {
                // ... lógica para actualizar los valores nulos en Planilla_Quincenal
                $horasSencillas = $_POST['horas_sencillas'] ?? '';
                $horasExtra = $_POST['horas_extra'] ?? ''; '';
                $horasDobles = $_POST['horas_dobles'] ?? '';
                $feriados = $_POST['feriados'] ?? '';
                $total = $_POST['total'] ?? '';
            
            
                echo "Horas Sencillas Qui: " . $horasSencillas;
                // Call the guardarEnBaseDeDatos_Qui method with selected values
                $PlanillaObj->guardarEnBaseDeDatos($horasSencillas, $horasExtra, $horasDobles, $feriados, $total);
        
            }
        }
    
    #$PlanillaObj->mostrar();
    $PlanillaObj->select();
    $PlanillaObj->select_cedula();
    $PlanillaObj->select_reloj_Bi();
    $conexion->close();
    ?>

<script>
        setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove();
            });
        }, 5000);
</script>