<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Importar Excel</title>
    <script src="xlsx.full.min.js"></script>
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
<link rel="stylesheet" href="..//CRUD Vyasa/CSS/menus.css">>
</head>
<body>
    <input type="file" id="fileInput" accept=".xlsx, .xls" />
    <div id="dataDisplay"></div>

    <script src="main.js"></script>
<br>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Abrir modal
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>


<script> 
document.getElementById('fileInput').addEventListener('change', handleFile);

function handleFile(event) {
    const file = event.target.files[0];
    if (!file) return;

    const reader = new FileReader();
    reader.onload = function(e) {
        const data = new Uint8Array(e.target.result);
        const workbook = XLSX.read(data, { type: 'array' });
        const sheet = workbook.Sheets[workbook.SheetNames[0]];
        const sheetData = XLSX.utils.sheet_to_json(sheet);

        // Mostrar los datos en inputs (aquí necesitarás lógica específica)
        displayData(sheetData);
    };
    reader.readAsArrayBuffer(file);
}

function displayData(data) {
    const dataDisplay = document.getElementById('dataDisplay');
    dataDisplay.innerHTML = '';

    data.forEach(row => {
        Object.keys(row).forEach(key => {
            const input = document.createElement('input');
            input.setAttribute('type', 'text');
            input.setAttribute('value', row[key]);
            dataDisplay.appendChild(input);
        });
        dataDisplay.appendChild(document.createElement('br'));
    });
}
</script>

<script>

excelData.forEach(row => {
    const idReloj = row.idReloj.toString(); // Convertir a string para usar como ID

    // Buscar el input correspondiente al ID Reloj
    const inputElement = document.getElementById(idReloj);

    if (inputElement) {
        // Asignar otros valores a los atributos del input (ejemplo con el nombre del colaborador)
        inputElement.setAttribute('data-identificacion', row.identificacion);
        inputElement.setAttribute('data-colaborador', row.colaborador);
    }
});
</script>

