<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loggin</title>
</head>
<body>

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

}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Vyasa";

$conexionObj = new Conexion($servername, $username, $password, $dbname);
$conexion = $conexionObj->conectar();

$PlanillaObj = new Planilla($conexion);

if (isset($_POST['ingresar'])) {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    // Consulta para verificar las credenciales
    $sql = "SELECT id FROM usuarios WHERE usuario = ? AND password = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("ss", $usuario, $password);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // Las credenciales son válidas, redirigir al usuario a la página de inicio
        header("Location: index.php");
    } else {
        // Las credenciales no son válidas, mostrar un mensaje de error
        echo "Credenciales inválidas. Por favor, inténtalo de nuevo.";
    }
}

$conexion->close();
?>

<script>
        setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove();
            });
        }, 5000);
</script>


</body>
</html>