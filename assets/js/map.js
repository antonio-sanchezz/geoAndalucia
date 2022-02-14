$(function(){

    $("#adivinar").click(function() {
        $(".modal").show();

        // Averiguar coordenadas en px.
        $(document).mousemove(function(event){
            console.log(event.pageX + ", " + event.pageY);
        });
    });

    // Ocultamos la ventana modal y el nombre de la ciudad del mapa de Andalucia.
    $('.close').click(function(){
        $(".modal").hide();
        $("#nombreCiudad").hide();
    });

    $('.closeCiudad').click(function(){
        $(".modalCiudad").hide();
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
        console.log("Prueba click");
        
        // Ocultamos el nombre de la ciudad.
        $("#nombreCiudad").hide();
        // Abrimos el mapa de la ciudad que se ha elegido.
        $("#modalCiudad").show();
        let elementIdCiudad = $(this).attr("id");
        let imagenCiudad = $("#mapaCiudadOpen");
        imagenCiudad.attr('src', 'assets/images/' + elementIdCiudad + 'Map.png');
        $(".modalCiudad").show();
    });

    // Calcular la distancia a la que se encuentran los dos puntos.
    $("#mapaCiudadOpen").click(function(e) {

        var coordenadas = e.pageX + ',' + e.pageY;

        $.ajax({
            data: {'coordenadas':coordenadas},
            type: 'post',
            url: "?controller=juego&action=calcularDistancia",
            success: function(result) {
                var solucion = JSON.parse(result);
            }
        });
    });
});