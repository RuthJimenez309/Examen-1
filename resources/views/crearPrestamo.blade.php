<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
          crossorigin="anonymous">

    <style>
        input[type=text] {
                 width: 100%;
                 padding: 6px 10px;
                 margin: 8px 0;
                 box-sizing: border-box;
        }

        input[type=number] {
                 width: 100%;
                 padding: 6px 10px;
                 margin: 8px 0;
                 box-sizing: border-box;
        }

    </style>

    <title>Crear Alumno</title>
</head>
<body>

    <div class="row">

        <div class="col-md-2"> </div>
            <div class="col-md-8">
                <h2>Creación de préstamo</h2>

                <form method="POST", action='{{route('prestamo.store') }}' class="form">
                    @csrf
                    <div class="mb-3">
                        <label>Codigo de prestamo</label>
                        <input type="text" id="codigoPrestamo" name="codigoPrestamo"/>
            
                    </div>
                    
                    <div class="mb-3">
                    <label>Monto</label>
                        <input type="text" id="monto" name="monto">
            
                    </div>
            
                    <div class="mb-3">
                        <label>Plazo</label>
                        <input type="number" id="plazo" name="plazo" />
                    </div>
            
                    <div class="mb-3">
                        <label>Tasa de interes</label>
                        <input type="text" id="tasa" name="tasa"/>
                    </div>
                
                    <button type="submit" class="btn btn-primary">Guardar</button>

                </form>

            </div>
    </div>

</body>
</html>