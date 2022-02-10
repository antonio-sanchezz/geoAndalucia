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
   .top-secret {
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
    padding-top: 100px;
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
        margin: auto;
        padding: 20px;
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
    </style>
<body>
    <div class="top-secret"><p>Poner texto aquí</p></div>
    <iframe src="https://www.google.com/maps/embed?pb=!4v1644151713282!6m8!1m7!1s7nKnS3WP_uqKco8zReKkhg!2m2!1d37.38233753430826!2d-5.996589215518552!3f77.35779408296617!4f30.100921247544704!5f0.7820865974627469" height="450" style="border:0;"></iframe>
    <button id="adivinar" type="button">Adivinar</button> 
    <?php print_r($_SESSION['localizaciones']);?>   
    <div class="modal">
        <div id="mapaAndalucia">
            <span class="close">&times;</span>
            <img src="assets/images/mapaAndalucia.png" />
        </div>
    </div>
</body>
</html>