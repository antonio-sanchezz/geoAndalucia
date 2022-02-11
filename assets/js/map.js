$(function(){

    $("#adivinar").click(function() {
        $(".modal").show();
        $("#huelva").css('cursor','none');

        // Averiguar coordenadas en px.
        $(document).mousemove(function(event){
            console.log(event.pageX + ", " + event.pageY);
        });
    });

    // Ocultamos la ventana modal del mapa de Andalucia.
    $('.close').click(function(){
        $(".modal").hide();
    });

    // Acciones para la provincia de Huelva.
    $("#huelva").mousemove(function(e) {
        // Un icono de ubicacion hace de cursor.
        $("#sevillaimg").hide();
        $("#huelvaimg").show();
        $("#huelvaimg").css({
            left: e.pageX,
            top: e.pageY
        });
    });

    $("#sevilla").mousemove(function(e) {
        // Un icono de ubicacion hace de cursor.
        $("#huelvaimg").hide();
        $("#sevillaimg").show();
        $("#sevillaimg").css({
            left: e.pageX,
            top: e.pageY
        });
    });

});