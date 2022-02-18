<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <script src="assets/js/map.js"></script>
    <link href="./assets/css/juego.css" rel="stylesheet" />
    <title>¿Dónde está este monumento?</title>
</head>
<body>
    <img class="nombreCiudad" id="nombreCiudad"/>
    <img class="imagenResult" id="imagenResult" src="assets/images/placeholder-blue.png"/>
    <div class="top-bar"><p>¿Dónde está este monumento?</p><p id="puntuacion"><?php echo $_SESSION['puntuacion'];?></p></div>
    <iframe src="https://www.google.com/maps/embed?pb=<?php echo $datosLugar['googleCoords']; ?>" height="450" style="border:0;"></iframe>
        
        <div class="mx-auto" style="width: 100px;">
        <button id="adivinar" class="btn btn-primary" type="button">Adivinar</button>
    </div>
  
        

    <div class="modal">
        <div id="mapaAndalucia">
            <img src="assets/images/mapaAndalucia.png" alt="mapaAndalucia" usemap="#mapaAndalucia">
            <map name="mapaAndalucia">
                <area id="huelva" shape="poly" coords="99,107,19,210,32,270,162,338,162,206,146,204,153,186,192,153,100,109,99,107">
                <area id="sevilla" shape="poly" coords="166,324,385,267,343,193,301,213,292,198,304,193,271,124,253,115,229,129,193,155,188,183,156,196,180,234,169,313,166,324">
                <area id="cadiz" shape="poly" coords="169,326,204,441,264,465,307,423,268,382,326,311,169,326">
                <area id="malaga" shape="poly" coords="306,410,495,351,495,335,444,308,425,267,328,310,320,336,283,386,306,410">
                <area id="cordoba" shape="poly" coords="348,31,278,77,280,122,314,203,352,191,402,271,477,244,445,181,449,141,447,94,348,31">
                <area id="jaen" shape="poly" coords="657,69,453,87,467,127,456,176,486,246,552,215,622,201,670,132,663,66,657,69">
                <area id="granada" shape="poly" coords="502,249,592,218,630,202,669,139,712,163,653,269,633,268,591,350,512,355,511,337,451,305,446,279,502,249">
                <area id="almeria" shape="poly" coords="714,357,780,251,709,167,690,227,251,275,625,275,594,350,714,357">
            </map>
            <span class="close">&times;</span>
        </div>
    </div>
    <div class="modalCiudad">
        <div id="mapaCiudad">
            <img id="mapaCiudadOpen" alt="mapaCiudad">
            <span class="closeCiudad">&times;</span>
            <div class="mx-auto" style="width: 100px;">
            <br>
        <button id="confirmarUbicacion" class="btn btn-primary" type="button">Confirmar</button>
    </div>
            <!--<input type="button" id="confirmarUbicacion" value="Confirmar"/>-->

            <div class="modalTerminado">
                <div id="puntuacionMapa" class="puntuacionMapa">
                    Has conseguido: <p id="puntuacionObtenida"></p> 
                    <p id="monumento"></p>
                    <p id="ciudad"></p>
                    <a id="enlace" target="_blank">Info</a>
                    <button id="continuar" class=" borde btn btn-primary " type="button">Continuar</button>
                    
                </div>
            </div>
        </div>
    </div>

    <footer class="mt-auto">
        <div class="footer-wrapper mt120 bg3">
            <div class="content">
                <div class="row pb20 ta-c me-0">
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