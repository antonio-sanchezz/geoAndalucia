<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="./assets/css/juegoFinal.css" rel="stylesheet" />
    <title>Final del Juego</title>
</head>
<body>


    
    <div class="px-4 py-5 my-5 text-center">
    
    <img class="d-block mx-auto mb-4" src="./assets/images/mapa.png" alt="" width="72" height="57">
    <h1 class="display-5 fw-bold">Puntuación</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4 p">Enhorabuena a obtenido una puntuación total de: <b><?php echo $puntuacion;?></b></p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
      <a href="?controller=juego&action=dashBoard">
        <button type="submit" class="btn btn-primary">Volver</button>
        </a>
      </div>
    </div>
  </div>

    
</body>
</html>