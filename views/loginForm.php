<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="./assets/css/login.css" rel="stylesheet" />

</head>

<body>
    <div class="position-relative separador">
        <div class="position-absolute top-50 start-50 translate-middle text-center">
            <form action="?controller=usuarios&action=formLogin" method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label ">¿Cómo te quieres llamar?</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>
                <button type="submit" class="btn btn-primary">Entrar</button>    
            </form>
        </div>
    </div>
    <footer class="mt-auto">
        <div class="footer-wrapper mt120 bg3">
            <div class="content">
                <div class="row pb20 ta-c">
                    <div class="fw-col sm-order2">
                        <div class="fw-col sm-order1 pv20">
                            <img class="logo" src="./assets/images/mapa.png">
                            <p class="mt10 mb20">© GeoAndalucía. Esta página web es la única oficial de los alumnos de 2ºDAW. Todos los derechos reservados.</p>
                            <p>Esclava del señor, 12 41012 Sevilla</p>
                            <p><a style="text-decoration: none; color: white;" href="mailto:in%66o%40%72ea%6cbe%74%69%73b%61%6co%6d%70ie%2ees">info@iespoligonosur.org</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>