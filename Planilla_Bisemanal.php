<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <title>Planilla Bisemanal</title>
</head>
<br><br><br><br>
<?php 
    include "Conexion.php";
?>
<style>
    body, html{
    background: rgb(34,195,158);
    background: linear-gradient(0deg, rgba(34,195,158,1) 9%, rgba(39,50,191,1) 21%, rgba(233,45,253,0.891281512605042) 100%);
}
</style>
<body>

    <article><section>
    <nav class="navbar navbar-expand-lg bg-light" class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
    <a class="navbar-brand" href="#">Vyasa Constructora Electromecanica</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="https://vyasa.co.cr/">Vyasa</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="https://www.facebook.com/VYASACR/">Facebook</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="..//CRUD Vyasa/index_loggin.php">Loggin</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Planillas</a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="..//CRUD Vyasa/Planilla_Bisemanal.php">Planilla Bisemanal</a></li>
            <li><a class="dropdown-item" href="..//CRUD Vyasa/PLanilla_Quincenal.php">Planilla Quincenal</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="..//CRUD Vyasa/index.php">Ingreso de Empleados</a></li>
            </ul>
        </li>
        <li class="dropdown"> 
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Planillas Bisemanales
        </button>
    <ul class="dropdown-menu dropdown-menu-dark">
    <li><a class="dropdown-item active" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="#">Separated link</a></li>
    </ul>
    </li>
        </ul>
        <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Busqueda</button>
        </form>
    </div>
</nav> 
    </section>
</article>
<br><br><br><br>

<br>

<section> 
<div class="box4"> 
<label for="calendario">Fecha de Inicio</label>
<br>
<input type="date" name="calendario" id="calendario">
<br>
<label for="calendario2">Fecha de Finalización</label>
<br>
<input type="date" name="calendario2" id="calendario2">
</div> 
</section>
<br><br><br><br><br>

<section>
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
        <div class="box6"> 
            <div>
        <div class="flex-item text-center">
        <div class="detail"><label for="selectDestino">Nombre</label>
        <select id="selectDestino"></select> </div>
        <div class="value">Lunes</div>
        <div class="detail">Martes</div>
        <div class="value">Miercoles</div>
        <div class="detail">Jueves</div>
        <div class="value">Viernes</div>
        <div class="detail">Sabado</div>
        <div class="value">Domingo</div>
        <div class="detail">Lunes</div>
        <div class="value">Martes</div>
        <div class="detail">Miercoles</div>
        <div class="value">Jueves</div>
        <div class="detail">Viernes</div>
        <div class="value">Sabado</div>
        <div class="detail">Domingo</div>
    </div>

    <div class="flex-item text-center">
        <div class="detail"><label for="selectDestino2">Cedulas</label>
        <select id="selectDestino2"></select><label for="selectDestino3">ID Reloj</label>
        <select id="selectDestino3"></select></div>
        <div class="value"><div class="textInputWrapper">
    <input  type="date" class="textInput">
</div></div>
<div class="detail"><div class="textInputWrapper">
    <input  type="date" class="textInput">
</div></div>
        <div class="value"><div class="textInputWrapper">
    <input  type="date" class="textInput">
</div></div>
        <div class="detail"><div class="textInputWrapper">
    <input  type="date" class="textInput">
</div></div>
        <div class="value"><div class="textInputWrapper">
    <input  type="date" class="textInput">
</div></div>
        <div class="detail"><div class="textInputWrapper">
    <input  type="date" class="textInput">
</div></div>
        <div class="value"><div class="textInputWrapper">
    <input  type="date" class="textInput">

</div></div>
        
        <div class="detail"><div class="textInputWrapper">
    <input  type="date" class="textInput">
</div></div>
        <div class="value"><div class="textInputWrapper">
    <input  type="date" class="textInput">
</div></div>
        <div class="detail"><div class="textInputWrapper">
    <input  type="date" class="textInput">
</div></div>
        <div class="value"><div class="textInputWrapper">
    <input  type="date" class="textInput">
</div></div>
        <div class="detail"><div class="textInputWrapper">
    <input  type="date" class="textInput">
</div></div>
        <div class="value"><div class="textInputWrapper">
    <input  type="date" class="textInput">
</div></div>
        <div class="detail"><div class="textInputWrapper">
    <input  type="date" class="textInput">
</div></div>
    </div>

    <div class="flex-item text-center">
        <div class="detail">Hora Entradas</div>
        <div class="value"><input type="time" name="time1" id="time1" value="00:00"></div>
        <div class="detail"><input type="time" name="time3" id="time3" value="00:00"></div>
        <div class="value"><input type="time" name="time5" id="time5" value="00:00"></div>
        <div class="detail"><input type="time" name="time7" id="time7" value="00:00"></div>
        <div class="value"><input type="time" name="time9" id="time9" value="00:00"></div>
        <div class="detail"><input type="time" name="time11" id="time11" value="00:00"></div>
        <div class="value"><input type="time" name="time13" id="time13" value="00:00"></div>
        
        <div class="detail"><input type="time" name="time15" id="time15" value="00:00"></div>
        <div class="value"><input type="time" name="time17" id="time17" value="00:00"></div>
        <div class="detail"><input type="time" name="time19" id="time19" value="00:00"></div>
        <div class="value"><input type="time" name="time21" id="time21" value="00:00"></div>
        <div class="detail"><input type="time" name="time23" id="time23" value="00:00"></div>
        <div class="value"><input type="time" name="time25" id="time25" value="00:00"></div>
        <div class="detail"><input type="time" name="time27" id="time27" value="00:00"></div>
    </div>

    <div class="flex-item text-center">
        <div class="detail">Hora Salida</div>
        <div class="value"><input type="time" name="time2" id="time2" value="00:00"></div>
        <div class="detail"><input type="time" name="time4" id="time4" value="00:00"></div>
        <div class="value"><input type="time" name="time6" id="time6" value="00:00"></div>
        <div class="detail"><input type="time" name="time8" id="time8" value="00:00"></div>
        <div class="value"><input type="time" name="time10" id="time10" value="00:00"></div>
        <div class="detail"><input type="time" name="time12" id="time12" value="00:00"></div>
        <div class="value"><input type="time" name="time14" id="time14" value="00:00"></div>
        
        <div class="detail"><input type="time" name="time16" id="time16" value="00:00"></div>
        <div class="value"><input type="time" name="time18" id="time18" value="00:00"></div>
        <div class="detail"><input type="time" name="time20" id="time20" value="00:00"></div>
        <div class="value"><input type="time" name="time22" id="time22" value="00:00"></div>
        <div class="detail"><input type="time" name="time24" id="time24" value="00:00"></div>
        <div class="value"><input type="time" name="time26" id="time26" value="00:00"></div>
        <div class="detail"><input type="time" name="time28" id="time28" value="00:00"></div>
    </div>  
    
    <div class="flex-item text-center">
        <div class="detail"></div>
        <div class="value"><input id="check1" type="checkbox" class="checkbox-wrapper">
    <label class="check-box" for="cbtest-19"></label></div>
        <div class="detail"><div class="checkbox-wrapper"><input id="check2" type="checkbox">
    <label class="check-box" for="cbtest-19"></label></div></div>
        <div class="value"><div class="checkbox-wrapper"><input id="check3" type="checkbox">
    <label class="check-box" for="cbtest-19"></label></div></div>
        <div class="detail"><div class="checkbox-wrapper"><input id="check4" type="checkbox">
    <label class="check-box" for="cbtest-19"></label></div></div>
        <div class="value"><div class="checkbox-wrapper"><input id="check5" type="checkbox">
    <label class="check-box" for="cbtest-19"></label></div></div>
        <div class="detail"><div class="checkbox-wrapper"><input id="check6" type="checkbox">
    <label class="check-box" for="cbtest-19"></label></div></div>
        <div class="value"><div class="checkbox-wrapper"><input id="check7" type="checkbox">
    <label class="check-box" for="cbtest-19"></label></div></div>
    <div class="detail"><div class="checkbox-wrapper"><input id="check8" type="checkbox">
    <label class="check-box" for="cbtest-19"></label></div></div>
        <div class="value"><div class="checkbox-wrapper"><input id="check9" type="checkbox">
    <label class="check-box" for="cbtest-19"></label></div></div>
        <div class="detail"><div class="checkbox-wrapper"><input id="check10" type="checkbox">
    <label class="check-box" for="cbtest-19"></label></div></div>
        <div class="value"><div class="checkbox-wrapper"><input id="check11" type="checkbox">
    <label class="check-box" for="cbtest-19"></label></div></div>
        <div class="detail"> <div class="checkbox-wrapper"><input id="check12" type="checkbox">
    <label class="check-box" for="cbtest-19"></label></div></div>
        <div class="value"><div class="checkbox-wrapper"><input id="check13" type="checkbox">
    <label class="check-box" for="cbtest-19"></label></div></div>
        <div class="detail"><div class="checkbox-wrapper"><input id="check14" type="checkbox">
    <label class="check-box" for="cbtest-19"></label></div></div>
    </div>
</div>
</div>

<section>
<div class="flex-item text-center">
    <div class="detail"><input type="text" class="form-control" id="resultado" placeholder="Primera Semana" aria-label=""></div>
    <div class="value"><input type="text" class="form-control" id="resultado2"  placeholder="Segunda Semana" aria-label=""></div> 
    </div>
</section>
    <br><br>

    <section> 
    <div class="box8"><span class="input-group-text">Comentarios</span>
    <textarea class="form-control" aria-label="With textarea"></textarea></div>
    </section>

<br><br>

<section> 
<div class="box1">
        <div class="flex-item text-center">
        <div class="detail">Semana</div>
        </div>
        <div class="flex-item text-center">
        <div class="detail"><input type="date" name="fecha1" id="fecha1"></div>
        <div class="value">AL</div>
        <div class="detail"><input type="date" name="fecha2" id="fecha2"></div>
        </div>
        <div class="flex-item text-center">
        <div class="detail"><input type="date" name="fecha3" id="fecha3"></div>
        <div class="value">AL</div>
        <div class="detail"><input type="date" name="fecha4" id="fecha4"></div>
        </div>
        </div>
</section>
<br>
    <section>
        <div class="box9"> 
        <div class="flex-item text-center">
        <div class="detail">Dias Laborados</div>
        <div class="value">Sencillas</div>
        <div class="detail">Extras</div>
        <div class="value">Dobles</div>
    </div>
    <div class="flex-item text-center">
        <div class="detail"><input type="text" name="dias1" id="dias1"></div>
        <div class="value"><label for="horas_sencillas1"></label><input type="text" name="horas_sencillas1" id="horas_sencillas1" readonly></div>
        <div class="detail"><label for="horas_extra1"></label><input type="number" name="horas_extra1" id="horas_extra1" readonly></div>
        <div class="value"><label for="horas_dobles1"></label><input type="number" name="horas_dobles1" id="horas_dobles1" readonly></div>
    </div>
    <div class="flex-item text-center">
        <div class="detail"><input type="text" name="dias2" id="dias2"></div>
        <div class="value"><label for="horas_sencillas2"></label><input type="number" name="horas_sencillas2" id="horas_sencillas2" readonly></div>
        <div class="detail"><label for="horas_extra2"></label><input type="number" name="horas_extra2" id="horas_extra2" readonly></div>
        <div class="value"><label for="horas_dobles2"></label><input type="number" name="horas_dobles2" id="horas_dobles2" readonly></div>
    </div>        
</div>
    </section>
<br><br>

    <div id="guardar" class="box2"> 
                    <!-- Agrega cualquier campo oculto o de entrada necesario aquí -->
                    <button class="button1" name="guardar" type="submit" id="guardar">
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
<section> 
    
<div class="box7">
<button class="uiverse" type="button" onclick="sumatoria_horas(); sumarHorasExtras(); sumarHorasDobles(); actualizarTotal()">
    <div class="wrapper">
    <span>Sumar</span>
        <div class="circle circle-12"></div>
        <div class="circle circle-11"></div>
        <div class="circle circle-10"></div>
        <div class="circle circle-9"></div>
        <div class="circle circle-8"></div>
        <div class="circle circle-7"></div>
        <div class="circle circle-6"></div>
        <div class="circle circle-5"></div>
        <div class="circle circle-4"></div>
        <div class="circle circle-3"></div>
        <div class="circle circle-2"></div>
        <div class="circle circle-1"></div>
    </div>
</button>
</div>
</section>

<section>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
<div class="box5"> 
<button class="boton2" type="submit" id="ingreso_horas" name="ingreso_horas">Insertar</button>
</div>
</form>
</section>

<br>
<section>
<br><br><br><br><br>
<div class="box">

    <div class="flex-item text-center">
        <div class="detail">Detalles de ingresos</div>
        <div class="value">Valor</div>
    </div>
    <div class="flex-item text-center">
        <div class="detail"><label for="horas_sencillas">Horas Sencillas</label></div>
        <div class="value"><input type="text" name="horas_sencillas" id="horas_sencillas" class="suma" readonly></div>
    </div>
    <div class="flex-item text-center">
        <div class="detail"><label for="horas_extra">Horas Extra</label></div>
        <div class="value"><input type="text" name="horas_extra" id="horas_extra" class="suma" readonly></div>
    </div>
    <div class="flex-item text-center">
        <div class="detail"><label for="horas_dobles">Horas Dobles</label></div>
        <div class="value"><input type="text" name="horas_dobles" id="horas_dobles" class="suma" readonly></div>
    </div>
    <div class="flex-item text-center">
        <div class="detail"><label for="feriados">Feriados</label></div>
        <div class="value"><input type="text" name="feriados" id="feriados" class="suma"></div>
    </div>
    <div class="flex-item text-center">
        <div class="detail"></div>
        <div class="value"></div>
    </div>
    <div class="flex-item text-center">
        <div class="detail"><label for="total">Total</label></div>
        <div class="value input"><input class="suma-input" type="text" name="total" id="total" readonly></div>
    </div>
</div>
    <br>
    <input type="text" name="selectDestino" id="InputSelectDestino">
<input type="text" name="selectDestino2" id="InputSelectDestino2">
<input type="text" name="selectDestino3" id="InputSelectDestino3">
    </form>
</section>
<br>

<br><br>


    <div class="box10"> 
        <form action="../CRUD Vyasa/generar_excel.php" method="post">
            <button type="submit" id="exportarBtn"><span>Exportar a Excel</span></button>
        </form>
    </div>
<br>


    <div class="box11"> <div class="container3">
		<div class="btn"><a href="..//CRUD Vyasa/importar_marcas.php">Importar Marcas</a></div>
	</div></div>
    


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
// Obtener todos los elementos de entrada de tipo texto con la clase 'suma-input' en el documento
const inputs = document.querySelectorAll('input.suma');

// Obtener el elemento de entrada 'feriados' por su ID
const feriados = document.getElementById('feriados');

// Obtener el elemento de entrada 'total' por su ID
const totalInput = document.getElementById('total');

// Función para actualizar el total
function actualizarTotal() {
    let sumaTotal = 0;

    // Iterar sobre todos los elementos de entrada y sumar sus valores
    inputs.forEach(input => {
        const valor = parseFloat(input.value) || 0;
        sumaTotal += valor;
    });

    if (feriados.value === "1") {
        sumaTotal += 7;
    } else if (feriados.value === "2") {
        sumaTotal += 14;
    }

    // Actualizar el campo de total
    totalInput.value = sumaTotal;
}

// Agregar eventos de cambio para actualizar el total cuando cambie el valor de las celdas
inputs.forEach(input => {
    input.addEventListener("input", actualizarTotal);
});

// Llamamos a la función una vez al principio para tener un valor inicial
actualizarTotal();
</script>


<script>
    const inputFecha1 = document.getElementById('calendario');
    const inputFecha2 = document.getElementById('fecha1');
    

    inputFecha1.addEventListener('change', function() {
        // Copia el valor de inputFecha1 a inputFecha2
        inputFecha2.value = inputFecha1.value;
        
    });
</script>

<script> 
    const inputFecha3 = document.getElementById('calendario2');
    const inputFecha4 = document.getElementById('fecha4');

    inputFecha3.addEventListener('change', function() {
        // Copia el valor de inputFecha2 a inputFecha1
        inputFecha4.value = inputFecha3.value;
        });
</script>
    
<script> 

// Obtén los elementos del DOM para el primer conjunto de horas
const horaInicioInputs = [
    "time1", "time3", "time5", "time7", "time9", "time11", "time13"];
const horaFinInputs = [
    "time2", "time4", "time6", "time8", "time10", "time12", "time14"];
const resultadoInput = document.getElementById("resultado");
const horas_sen = document.getElementById('horas_sencillas1');
const horas_ex = document.getElementById('horas_extra1');

// Obtén los elementos del DOM para el segundo conjunto de horas
const horaInicioInputs2 = [
    "time15", "time17", "time19", "time21", "time23", "time25", "time27"];
const horaFinInputs2 = [
    "time16", "time18", "time20", "time22", "time24", "time26", "time28"];
const resultadoInput2 = document.getElementById("resultado2");
const horas_sen2 = document.getElementById('horas_sencillas2');
const horas_ex2 = document.getElementById('horas_extra2');

// Agrega eventos para calcular la diferencia cuando los campos de tiempo cambien
horaInicioInputs.forEach(function (id, index) {
    const horaInicioInput = document.getElementById(id);
    const horaFinInput = document.getElementById(horaFinInputs[index]);

    horaInicioInput.addEventListener("change", calcularDiferenciaDeTiempo);
    horaFinInput.addEventListener("change", calcularDiferenciaDeTiempo);
});

// Agrega eventos para calcular la diferencia del segundo conjunto
horaInicioInputs2.forEach(function (id, index) {
    const horaInicioInput2 = document.getElementById(id);
    const horaFinInput2 = document.getElementById(horaFinInputs2[index]);

    horaInicioInput2.addEventListener("change", calcularDiferenciaDeTiempo2);
    horaFinInput2.addEventListener("change", calcularDiferenciaDeTiempo2);
});

function calcularDiferenciaDeTiempo() {
    let totalDiferencia = 0;

    horaInicioInputs.forEach(function (id, index) {
        const horaInicioInput = document.getElementById(id);
        const horaFinInput = document.getElementById(horaFinInputs[index]);

        if (horaInicioInput.value && horaFinInput.value) {
            const horaInicio = horaInicioInput.value;
            const horaFin = horaFinInput.value;

            const fechaInicio = new Date("1970-01-01T" + horaInicio);
            const fechaFin = new Date("1970-01-01T" + horaFin);

            const diferencia = Math.abs(fechaFin - fechaInicio);

            totalDiferencia += diferencia;
        }
    });

    const horas = Math.floor(totalDiferencia / 3600000);
    const minutos = Math.floor((totalDiferencia % 3600000) / 60000);
    const segundos = Math.floor((totalDiferencia % 60000) / 1000);
    // Mostrar el resultado en formato HH:MM:SS
    if (horas <= 48) {
        horas_sen.value = horas;
        horas_ex.value = 0;
    } else {
        horas_sen.value = 48;
        horas_ex.value = horas - 48;
    }

    resultadoInput.value = `${horas} horas, ${minutos} minutos, ${segundos} segundos`;

    // Llama a la función para sumar las horas extras
    sumarHorasExtras(horas_ex);
}

function calcularDiferenciaDeTiempo2() {
    let totalDiferencia = 0;

    horaInicioInputs2.forEach(function (id, index) {
        const horaInicioInput2 = document.getElementById(id);
        const horaFinInput2 = document.getElementById(horaFinInputs2[index]);

        if (horaInicioInput2.value && horaFinInput2.value) {
            const horaInicio2 = horaInicioInput2.value;
            const horaFin2 = horaFinInput2.value;

            const fechaInicio2 = new Date("1970-01-01T" + horaInicio2);
            const fechaFin2 = new Date("1970-01-01T" + horaFin2);

            const diferencia = Math.abs(fechaFin2 - fechaInicio2);

            totalDiferencia += diferencia;
        }
    });

    const horas = Math.floor(totalDiferencia / 3600000);
    const minutos = Math.floor((totalDiferencia % 3600000) / 60000);
    const segundos = Math.floor((totalDiferencia % 60000) / 1000);
    // Mostrar el resultado en formato HH:MM:SS
    if (horas <= 48) {
        horas_sen2.value = horas;
        horas_ex2.value = 0;
    } else {
        horas_sen2.value = 48;
        horas_ex2.value = horas - 48;
    }

    resultadoInput2.value = `${horas} horas, ${minutos} minutos, ${segundos} segundos`;

    // Llama a la función para sumar las horas extras
    sumarHorasExtras(horas_ex2);
}

// Función para sumar las horas extras de ambos conjuntos
function sumarHorasExtras() {
    const horasExtrasTotal = parseInt(horas_ex.value) + parseInt(horas_ex2.value);
    const horas_extra =document.getElementById('horas_extra');
    document.getElementById('horas_extra').value = horasExtrasTotal;
}
</script>

<script>
const checkboxIds = ["check1", "check2", "check3", "check4", "check5", "check6", "check7"];
const valorHorasInput = document.getElementById('horas_dobles1');


// Agrega un evento de cambio a cada casilla de verificación
checkboxIds.forEach(checkboxId => {
    const checkbox = document.getElementById(checkboxId);
    checkbox.addEventListener('change', function () {
        let total = 0;
        // Itera a través de las casillas de verificación para verificar su estado
        checkboxIds.forEach(id => {
            const currentCheckbox = document.getElementById(id);
            if (currentCheckbox.checked) {
                total += 8; // Suma 8 por cada casilla de verificación marcada
            }else{
                total = 0; //Si la casilla no esta marcada.
            }
        });
        // Actualiza el valor del campo de texto
        valorHorasInput.value = total;
        sumarHorasDobles(); // Llamada a la función que suma horas dobles
    });
});
</script>

<script>
const checkboxIds2 = ["check8", "check9", "check10", "check11", "check12", "check13", "check14"];
const valorHorasInput2 = document.getElementById('horas_dobles2');

// Agrega un evento de cambio a cada casilla de verificación
checkboxIds2.forEach(checkboxId2 => {
    const checkbox1 = document.getElementById(checkboxId2);
    checkbox1.addEventListener('change', function () {
        let total2 = 0;
        // Itera a través de las casillas de verificación para verificar su estado
        checkboxIds2.forEach(id => {
            const currentCheckbox = document.getElementById(id);
            if (currentCheckbox.checked) {
                total2 += 8; // Si al menos una casilla de verificación está marcada, establece el total en 8
                return; // Sale del bucle si se encuentra una casilla de verificación marcada
            }else{
                total2 = 0; // Si no hay casillas de verificación marcadas,
            }
        });
        // Actualiza el valor del campo de texto
        valorHorasInput2.value = total2;
    });
    sumarHorasDobles();
});

function sumarHorasDobles() {
    const total1 = parseInt(valorHorasInput.value);
    const total2 = parseInt(valorHorasInput2.value);
    var extra1 = document.getElementById('horas_extra1');
    var extra2 = document.getElementById('horas_extra2');
    var horas_xen = document.getElementById('horas_sencillas1');
    var horas_xen2 = document.getElementById('horas_sencillas2');
    var calculo_total = document.getElementById('total');

    const horasDoblesTotal = total1 + total2;
    document.getElementById('horas_dobles').value = horasDoblesTotal;


    if( valorHorasInput == 8 || 0  && extra1 >=0 ){
    total1=valorHorasInput-extra1;
    }if(valorHorasInput == 8 || 0  && extra1 >=0){
        total2=valorHorasInput2-extra2;
    }
}

</script>

<script>
function sumatoria_horas() {
    const horas_senci1 = document.getElementById('horas_sencillas1');
    const horas_senci2 = document.getElementById('horas_sencillas2');
    const resultado_senci = document.getElementById('horas_sencillas');

    if (horas_senci1.value >= 0 && horas_senci2.value >= 0) {
        const suma = parseFloat(horas_senci1.value) + parseFloat(horas_senci2.value);
        resultado_senci.value = suma;
    } else {
        console.log("NO estoy sumando horas sencillas");
    }
}
</script>

<script>
    const fecha1Input = document.getElementById("fecha1");
    const fecha2Input = document.getElementById("fecha2");
    const diasTranscurridosInput = document.getElementById("dias1");

    function calcularDias() {
        const fecha1 = new Date(fecha1Input.value);
        const fecha2 = new Date(fecha2Input.value);

        if (!isNaN(fecha1) && !isNaN(fecha2)) {
            const diferenciaEnMilisegundos = fecha2 - fecha1;
            const diasTranscurridos = Math.floor(diferenciaEnMilisegundos / (1000 * 60 * 60 * 24)+1);
            diasTranscurridosInput.value = diasTranscurridos;
        } else {
            diasTranscurridosInput.value = "Error en las fechas";
        }
    }

    fecha1Input.addEventListener("input", calcularDias);
    fecha2Input.addEventListener("input", calcularDias);

</script>

<script> 
const fecha3Input = document.getElementById("fecha3");
const fecha4Input = document.getElementById("fecha4");
const diasTranscurridosInput2 = document.getElementById("dias2");

function calcularDias2() {
    const fecha3 = new Date(fecha3Input.value);
    const fecha4 = new Date(fecha4Input.value);

    if (!isNaN(fecha3) && !isNaN(fecha4)) {
        const diferenciaEnMilisegundos1 = fecha4 - fecha3; // Cambio en el orden de resta
        const diasTranscurridos2 = Math.abs(Math.floor(diferenciaEnMilisegundos1 / (1000 * 60 * 60 * 24))) + 1; // Se usa Math.abs para asegurarse de que el resultado sea positivo
        diasTranscurridosInput2.value = diasTranscurridos2;
    } else {
        diasTranscurridosInput2.value = "Error en las fechas";
    }
}

fecha3Input.addEventListener("input", calcularDias2);
fecha4Input.addEventListener("input", calcularDias2);

</script>

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

<footer>

    <section class="ft-main">
        <div class="ft-main-item">
            <h2 class="ft-title">About</h2>
        <ul>
            <li><a href="#">Services</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">Pricing</a></li>
            <li><a href="#">Customers</a></li>
            <li><a href="#">Careers</a></li>
        </ul>
        </div>
        <div class="ft-main-item">
            <h2 class="ft-title">Resources</h2>
        <ul>
            <li><a href="#">Docs</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">eBooks</a></li>
            <li><a href="#">Webinars</a></li>
        </ul>
        </div>
        <div class="ft-main-item">
            <h2 class="ft-title">Contact</h2>
        <ul>
            <li><a href="#">Help</a></li>
            <li><a href="#">Sales</a></li>
            <li><a href="#">Advertise</a></li>
        </ul>
        </div>
        <div class="ft-main-item">
            <h2 class="ft-title">Stay Updated</h2>
        <p>Subscribe to our newsletter to get our latest news.</p>
        <form>
            <input type="email" name="email" placeholder="Enter email address">
            <input type="submit" value="Subscribe">
        </form>
        </div>
    </section>
    
    <section class="ft-social">
        <ul class="ft-social-list">
            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#"><i class="fab fa-github"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
        </ul>
    </section>
    
    <section class="ft-legal">
        <ul class="ft-legal-list">
        <li><a href="#">Terms &amp; Conditions</a></li>
        <li><a href="#">Privacy Policy</a></li>
        <li>&copy; 2023 Copyright Steven Calvo Porras.</li>
        </ul>
    </section>
</footer>
</body>
</html>




