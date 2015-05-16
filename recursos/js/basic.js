$(document).ready(function()
{
	$('#accion_mv').click(function(event) 
	{
        event.preventDefault();
        link('vistas/misionVision.php', '#contenido');
    });

    $('#accion_organoAdm').click(function(event) 
    {
        event.preventDefault();
        link('vistas/organoAdm.php', '#contenido');
    });

    $('#accion_club').click(function(event) 
    {
        event.preventDefault();
        link('vistas/clubes.php', '#contenido');
    });

    $('#accion_rankingF').click(function(event) 
    {
        event.preventDefault();
        link('vistas/rankingF.php', '#contenido');
    });

    $('#accion_rankingM').click(function(event) 
    {
        event.preventDefault();
        link('vistas/rankingM.php', '#contenido');
    });

    $('#accion_deportista').click(function(event) 
    {
        event.preventDefault();
        link('vistas/deportista.php', '#contenido');
    });  

    $('#accion_entrenador').click(function(event) 
    {
        event.preventDefault();
        link('vistas/entrenador.php', '#contenido');
    });  
    
    $('#accion_eventos').click(function(event) 
    {
        event.preventDefault();
        link('vistas/eventos.php', '#contenido');
    });

    $('#accion_registro').click(function(event) 
    {
        event.preventDefault();

        link('vistas/registro.php', '#contenido');
    });

    $('#accion_iniciosesion').click(function(event) 
    {
        event.preventDefault();

        link('vistas/iniciosesion.php', '#contenido');
    });   

    $('#cerrarSesion').click(function(event)
    {
        link('libs/conexion_facebook/app/logout.php', '#contenido');
    });

    
//------------------------inicio de sesion-----------------------------//
    $("accion_iniciosesion").submit(function(e)
    {
        $('#boton_iniciosesion').click(function(evt) 
    {
        $.ajax
        ({
            type: 'POST',
            data: {
                username: $('#username').val(),
                pass: $('#password').val(),
            },
            url:'home/login',
            //url: $(this).attr('action'),
            dataType: 'json',
            beforeSend: function(){
                $('#boton_iniciosesion').attr('disabled', true);
            },
            success: function(response) {
                if(response.success == true){
                    $('#respuesta').html(response.message);
                    } else {
                    $('#boton_iniciosesion').attr('disabled', false);

                    $('#username').text("");
                    $('#password').text("");
                    }
            },
            error: function(msg){
                $('#boton_iniciosesion').attr('disabled', false);
            }
        });
    });
    $("accion_iniciosesion").submit();


//-----------------------------mobile-----------------------//

    $('#accion_mv_mobile').click(function(event) 
    {
        event.preventDefault();
        link(' vistas/misionVision.php', '#contenido');
    });

    $('#accion_organoAdm_mobile').click(function(event) 
    {
        event.preventDefault();
        link(' vistas/organoAdm.php', '#contenido');
    });

    $('#accion_club_mobile').click(function(event) 
    {
        event.preventDefault();
        link(' vistas/clubes.php', '#contenido');
    });

    $('#accion_rankingF_mobile').click(function(event) 
    {
        event.preventDefault();
        link(' vistas/rankingF.php', '#contenido');
    });

    $('#accion_rankingM_mobile').click(function(event) 
    {
        event.preventDefault();
        link(' vistas/rankingM.php', '#contenido');
    });

    $('#accion_deportista_mobile').click(function(event) 
    {
        event.preventDefault();
        link(' vistas/deportista.php', '#contenido');
    });  

    $('#accion_entrenador_mobile').click(function(event) 
    {
        event.preventDefault();
        link(' vistas/entrenador.php', '#contenido');
    });  
    
    $('#accion_eventos_mobile').click(function(event) 
    {
        event.preventDefault();
        link(' vistas/eventos.php', '#contenido');
    });

    $('#accion_registro_mobile').click(function(event) 
    {
        event.preventDefault();
        link(' vistas/registro.php', '#contenido');
    });

    $('#accion_iniciosesion_mobile').click(function(event) 
    {
        event.preventDefault();
        link(' vistas/iniciosesion.php', '#contenido');
    });

    function link(url, update) 
    {
        $.ajax
        ({
            url: url,
            sync: true,
            type: 'POST',
            dataType: 'html',
            success: function(respuesta)
            {            
                $(update).html(respuesta);
            }
        });
    } 

    var menu = $('#navDesktop');
    var origOffsetY = menu.offset().top;
    function scroll() 
    {
        if ($(window).scrollTop() >= origOffsetY) 
        {
            $('#navDesktop').addClass('navbar-fixed-top');
            
        } 
        else 
        {
            $('#navDesktop').removeClass('navbar-fixed-top');
        }
    }
    document.onscroll = scroll;   

    $('#boton_registrar').click(function(evt) 
    {
        $.ajax
        ({
            type: 'POST',
            data: {
            nombre: $('#nombre_registro').val(),
            username: $('#username_registro').val(),
            pass: $('#pass_registro').val(),
            pass2: $('#pass2_registro').val()
            },
            url:'home/register',
            //url: $(this).attr('action'),
            dataType: 'json',
            beforeSend: function(){
            $('#boton_registro').attr('disabled', true);
            },
            success: function(response) 
            {
                if(response.success == true){
                $('#respuesta').html(response.message);
                } else {
                $('#boton_registrar').attr('disabled', false);

                $('#nombre_registro').text("");
                $('#username_registro').text("");
                $('#pass_registro').text("");
                $('#pass2_registro').text("");
                }
             },
            error: function(msg){
            $('#boton_registrar').attr('disabled', false);
            }
        });
    });

});



