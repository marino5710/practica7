<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>REGISTRO DE ALUMNOS</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Formulario de Registro de Alumnos</h1>
        <div class="row justify-content-center">
            <form action="/PRACTICA7/controladores/productos/guardar.php" method="POST" class="col-lg-8 border bg-light p-3">
                <div class="row mb-3">
                    <div class="col">
                        <label for="alumno_nombre">Nombre del alumno</label>
                        <input type="text" name="alumno_nombre" id="alumno_nombre" class="form-control" placeholder="INGRESE UN NOMBRE, EJ; BRIAN">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="alumno_apellido">Apellido del alumno</label>
                        <input type="text" name="alumno_apellido" id="alumno_apellido" class="form-control" placeholder="INGRESE UN APELLIDO, EJ; MARIN">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="alumno_fecha_naci">Fecha de nacimiento</label>
                        <input type="text" name="alumno_fecha_naci" id="alumno_fecha_naci" class="form-control" placeholder="ESCRIBA SU FECHA EJ. 07/05/1999">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="alumno_telefono">Telefono</label>
                        <input type="number" name="alumno_telefono" id="alumno_telefono" class="form-control" placeholder="INGRESE SU NUMERO DE TELEFONO EJ; 50487861">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="alumno_correo">Correo eléctronico</label>
                        <input type="mail" name="alumno_correo" id="alumno_correo" class="form-control" placeholder="INGRESE SU CORREO ELECTRONICO EJ; brianmarin4@gmail.com">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <button type="submit" class="btn btn-primary w-100">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>