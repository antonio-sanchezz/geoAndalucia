$(function(){

    $("#adivinar").click(function() {
        $(".modal").show();
    });

    $('.close').click(function(){
        $(".modal").hide();
    });

    $(document).mousemove(function(event){
        console.log(event.pageX + ", " + event.pageY);
    });

});