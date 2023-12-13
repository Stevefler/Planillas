<?php

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


require 'vendor/autoload.php';

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

public function exportarArchivos()
    {
        // Realiza la consulta para obtener los datos que deseas exportar
        $query = "SELECT ID_reloj_Qui, ID_cedula_Qui, nombre_empleado FROM Planilla_Quincenal";
        $resultado = $this->conexion->query($query);

        // Genera un nuevo libro de Excel
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

    // Encabezados
    $sheet->setCellValue('A1', 'ID Reloj');
    $sheet->setCellValue('B1', 'Identificacion');
    $sheet->setCellValue('C1', 'Colaborador');

    // Llenar datos
    $row = 2; // Inicio de los datos en la fila 2
    if ($resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            $sheet->setCellValue('A' . $row, $fila['ID_reloj_Qui']);
            $sheet->setCellValue('B' . $row, $fila['ID_cedula_Qui']);
            $sheet->setCellValue('C' . $row, $fila['nombre_empleado']);
            $row++;
        }
    }

    try {
        // Crear el objeto Writer antes de guardarlo
        $writer = new Xlsx($spreadsheet);

        // Ruta y nombre del archivo
        $nombre_archivo = 'datos_exportados.xlsx';
        $ruta_archivo = __DIR__ . '/' . $nombre_archivo;

        // Guardar el archivo
        $writer->save($ruta_archivo);

        // Establecer encabezados para descargar el archivo
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $nombre_archivo . '"');
        header('Cache-Control: max-age=0');
        header('Content-Length: ' . filesize($ruta_archivo)); // Agregar la longitud del archivo

        // Leer el archivo y enviar su contenido al navegador
        ob_clean();  // Limpiar el buffer de salida
        flush();  // Limpiar el buffer de salida
        readfile($ruta_archivo); // Enviar el contenido del archivo
        exit; // Detener la ejecución del script
    } catch (\PhpOffice\PhpSpreadsheet\Writer\Exception $e) {
        die('Error al guardar el archivo: ' . $e->getMessage());
    }
}
}


// Usage
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Vyasa";

$conexionObj = new Conexion($servername, $username, $password, $dbname);
$conexion = $conexionObj->conectar();

$PlanillaObj = new Planilla($conexion);
$PlanillaObj->exportarArchivos();

$conexion->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exportar a Excel</title>
</head>

<body>
    
<div class="box10"> 
    <form action="../CRUD Vyasa/generar_excel.php" method="post">
        <button type="submit" id="exportarBtn"><span>Exportar a Excel</span></button>
    </form>
</div>

</div>
    <script>
        document.getElementById('exportarBtn').addEventListener('click', function() {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'exportar.php', true);

            xhr.onload = function() {
                if (xhr.status === 200) {
                    console.log('Archivo exportado con éxito');
                } else {
                    console.error('Error al exportar el archivo');
                }
            };

            xhr.send();
        });
    </script>    
</body>
</html>