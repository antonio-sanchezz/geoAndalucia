<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=" stylesheet" type="text/css" href="assets/css/dashboard.css" title="style" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2d3e127476.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"> </script>
    <title>Inicio</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row header p-2 mb-3">
            <div class="col-11">
                <h1>Hola <?php echo $_SESSION['username']?></h1>
            </div>
            <div class="col-1">
                <a href="?controller=usuarios&action=cerrarSesion"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
            </div>
        </div>
        <div class="row">
            <div id="carouselIndex" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselIndex" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselIndex" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselIndex" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="assets/images/slider-1.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/images/slider-2.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/images/slider-3.jpg" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndex" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselIndex" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
        <div class="row play mt-4">
            <div class="col-12">
                <div class="play-game">
                    <a href="?controller=juego&action=jugar">
                        <img src="assets/images/location.png"/><br>
                        <p>JUGAR</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="row mt-4 mb-5">
            <div class="col-6">
                <h2>Tus puntuaciones</h2>
                <table class="table table-success table-striped">
                <tr>
                    <th>Mejores puntuaciones</th>
                </tr>           
                    <?php
                        // Puntuacion individual del jugador.

                        foreach($puntuacionIndividual as $puntuacion) {
                            echo "<tr>";
                            echo "<td>" . $puntuacion['puntuacion'] . "</td>";
                            echo "</tr>";
                        }
                    ?>    
                </table>
            </div>
            <div class="col-6">
                <h2>Top 5 Mejores</h2>
                <table class="table table-success table-striped">
                <tr>
                    <th>Usuario</th>
                    <th>Puntuación</th>
                </tr>           
                    <?php
                        // Puntuacion individual del jugador.

                        foreach($puntuacionGlobal as $key => $puntuacion) {
                            echo "<tr>";
                            if ($key == 0) {
                                echo "<td><img src='assets/images/gold-cup.png'/> " . $puntuacion['username'] . "</td>";
                            } else if ($key == 1) {
                                echo "<td><img src='assets/images/silver-cup.png'/> " . $puntuacion['username'] . "</td>";
                            } else if ($key == 2) {
                                echo "<td><img src='assets/images/bronze-cup.png'/> " . $puntuacion['username'] . "</td>";
                            } else {
                                echo "<td>" . $puntuacion['username'] . "</td>";
                            }
                            echo "<td>" . $puntuacion['MAX(puntuacion)'] . "</td>";
                            echo "</tr>";
                        }
                    ?>
                </table>
            </div>           
        </div>
    </div>
</body>
</html>