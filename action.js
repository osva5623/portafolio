$(function(){
    
    $('#mes').click(function(){
        mes_ajax=$(this).val();
        nuevo_mes=parseInt(mes_ajax)+1;
        console.log(nuevo_mes);
        $.ajax({
            method: "POST",
            url: "calendario.php",
            type:"html",
            data: { mes: nuevo_mes }
          }).done(function(data) {
                $('#body').html(data);
                $('#mes').val(nuevo_mes);
            });
    });

});
