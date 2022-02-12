<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="assets/js/map.js"></script>
    <title>Jugando...</title>
</head>
<style>
   iframe {
    width: 100%;
   }
   .top-bar {
       position: absolute;
       width: 100%;
       height: 70px;
       background-color: #b9fdcb;
       text-align: center;
   }
   .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0,0,0);
        background-color: rgba(0,0,0,0.8);
    }

    .mapaAndalucia {
        background-color: #fefefe;
        border: 1px solid #888;
    }

    .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
        }
  
    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }
    #nombreCiudad {
        position: absolute;
        text-align: center;
        z-index: 2;
        display: none;
    }
    </style>
<body>
    <img class="nombreCiudad" id="nombreCiudad" src="" />
    <div class="top-bar"><p>Poner texto aquí</p></div>
    <iframe src="https://www.google.com/maps/embed?pb=!4v1644151713282!6m8!1m7!1s7nKnS3WP_uqKco8zReKkhg!2m2!1d37.38233753430826!2d-5.996589215518552!3f77.35779408296617!4f30.100921247544704!5f0.7820865974627469" height="450" style="border:0;"></iframe>
    <button id="adivinar" type="button">Adivinar</button> 
    <?php //print_r($_SESSION['localizaciones']);?>   
    <div class="modal">
        <div id="mapaAndalucia">
            <img src="assets/images/mapaAndalucia.png" alt="mapaAndalucia" usemap="#mapaAndalucia">
            <map name="mapaAndalucia">
                <area id="huelva" shape="poly" coords="99,107,19,210,32,270,162,338,162,206,146,204,153,186,192,153,100,109,99,107" href="#">
                <area id="sevilla" shape="poly" coords="166,324,385,267,343,193,301,213,292,198,304,193,271,124,253,115,229,129,193,155,188,183,156,196,180,234,169,313,166,324" href="#">
                <area id="cadiz" shape="poly" coords="169,326,204,441,264,465,307,423,268,382,326,311,169,326" href="#">
                <area id="malaga" shape="poly" coords="306,410,495,351,495,335,444,308,425,267,328,310,320,336,283,386,306,410" href="#">
                <area id="cordoba" shape="poly" coords="348,31,278,77,280,122,314,203,352,191,402,271,477,244,445,181,449,141,447,94,348,31" href="#">
                <area id="jaen" shape="poly" coords="657,69,453,87,467,127,456,176,486,246,552,215,622,201,670,132,663,66,657,69" href="#">
                <area id="granada" shape="poly" coords="502,249,592,218,630,202,669,139,712,163,653,269,633,268,591,350,512,355,511,337,451,305,446,279,502,249" href="#">
                <area id="almeria" shape="poly" coords="714,357,780,251,709,167,690,227,251,275,625,275,594,350,714,357" href="#">
            </map>
            <span class="close">&times;</span>
        </div>
    </div>
</body>
</html>