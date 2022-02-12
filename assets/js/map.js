$(function(){

    $("#adivinar").click(function() {
        $(".modal").show();
        $("#huelva").css('cursor','none');

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

    // Acciones a pasar el raton por las provincias.
    $("area").mousemove(function(e) {
        let elementId = $(this).attr("id");
        let imagen = $("#nombreCiudad");
        imagen.attr('src', 'assets/images/' + elementId + '.png');
        imagen.show();
        imagen.css({
            left: e.pageX,
            top: e.pageY
        });
    });
});