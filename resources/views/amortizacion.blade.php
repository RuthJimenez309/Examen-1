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

    <title>Tabla amortizacion Préstamo</title>
</head>
<body>

    
    <div class="row">
        <div class="col-md-2"> </div>
            <div class="col-md-8">
                <h1>Tabla de amortización</h1>

                <br>
                <h3>Codigo prestamo: {{ '0803199518999' }} </h3>
                <div class = "table-responsive">
                    <table class="table" >
                        <thead>
                            <tr>
                                <th scope="col">Periodo</th>
                                <th scope="col">Interes</th>
                                <th scope="col">Capital</th>
                                <th scope="col">Saldo</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td>{{'0'}}</td>
                                    <td>{{'0'}}</td>
                                    <td>{{'0'}}</td>
                                    <td>{{'100000'}}</td>
                                </tr>
                                <tr>
                                    <td>{{'1'}}</td>
                                    <td>{{'1250'}}</td>
                                    <td>{{'1128.99'}}</td>
                                    <td>{{'98871.01'}}</td>
                                </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        
        
    </div>

    
</body>
</html>