$(function(){

    $("#adivinar").click(function() {
        $(".modal").show();
    });

    // Ocultamos la ventana modal y el nombre de la ciudad del mapa de Andalucia.
    $('.close').click(function(){
        $(".modal").hide();
        $("#nombreCiudad").hide();
    });

    $('.closeCiudad').click(function(){
        $(".modalCiudad").hide();
        $("#nombreCiudad").hide();
    });

    // Acciones a pasar el raton por las provincias.
    $("area").mousemove(function(e) {
        let elementId = $(this).attr("id");
        let imagen = $("#nombreCiudad");
        imagen.attr('src', 'assets/images/' + elementId + '.png');
        imagen.show();
        imagen.css({
            left: e.pageX+10,
            top: e.pageY+10
        });
    });

    // Accion al hacer click sobre una provincia.
    $("area").click(function() {
        
        // Ocultamos el nombre de la ciudad.
        $("#nombreCiudad").hide();
        // Abrimos el mapa de la ciudad que se ha elegido.
        $("#modalCiudad").show();
        let elementIdCiudad = $(this).attr("id");
        let imagenCiudad = $("#mapaCiudadOpen");
        imagenCiudad.attr('src', 'assets/images/' + elementIdCiudad + 'Map.png');
        imagenCiudad.attr('class', elementIdCiudad);
        $(".modalCiudad").show();
    });

    // Calcular la distancia a la que se encuentran los dos puntos.
    $("#mapaCiudadOpen").click(function(e) {

        // Poner icono de localización en un mapa de una ciudad.
        let imagen = $("#nombreCiudad");
        imagen.attr('src', 'assets/images/placeholder.png');
        imagen.show();
        imagen.css({
            left: e.pageX,
            top: e.pageY
        });

        // Obtenemos las coordendas y el nombre de la ciudad.
        var coordenadas = e.pageX + ',' + e.pageY;
        var ciudad = $("#mapaCiudadOpen").attr('class');

        // Confirmamos que es la ubicacion seleccionada.
        $("#confirmarUbicacion").click(function() {
            // Obtenemos la puntuación de la partida actual.
            $.ajax({
                data: {
                    coordenadas:coordenadas,
                    ciudad:ciudad
                },
                dataType: 'text',
                type: 'post',
                url: "?controller=juego&action=calcularDistancia",
                success: function(result) {
                    
                    var obj = JSON.parse(result);
                    if (ciudad.toLowerCase() == obj['lugar'].toLowerCase()) {
                        let imagenResult = $("#imagenResult");
                        imagenResult.show();
                        imagenResult.css({
                            left: obj['xCoords'] + "px",
                            top: obj['yCoords'] + "px"
                        });
                    }
                    $(".modalTerminado").show();
                    $("#puntuacionObtenida").text(obj['puntuacion'] + " puntos");
                    $("#monumento").text(obj['monumento']);
                    $("#ciudad").text(obj['lugar']);
                    $("#enlace").attr('href', obj['enlace']);
                }
            });
        });

        // Pasamos al siguiente nivel.
        $("#continuar").click(function() {
            $(location).attr('href','?controller=juego&action=nextJuego');
        });

    });
});