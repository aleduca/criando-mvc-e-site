$(document).ready(function(){

    var container = $(".container");
    var btn_listar_noticias = container.find( "#btn-listar-noticias" );
    var lista = container.find( "#lista" );

    btn_listar_noticias.on('click', function(){

        $.ajax({

            url: '/noticia/listarNoticias',
            dataType: 'json',
            success: function( data ){

                var htmlNoticia = '';

                $.each( data, function( key, value ) {

                    htmlNoticia += '<p>'+ data[key].tb_noticia_texto +'</p>';

                });

                lista.html( htmlNoticia );

            },error: function( xhr, ajaxOptions, thrownError ){
                console.log( xhr.responseText );
            }

       });

    }); 


});