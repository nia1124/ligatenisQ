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
         console.log("entre");
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

    $("#accion_registro").submit(function(e)
    {
        var postData = $(this).serializeArray();
        var formURL = $(this).attr("action");
        $.ajax(
        {
            url : formURL,
            type: "POST",
            data : postData,
            success:function(data, textStatus, jqXHR) 
            {
                //data: return data from server
            },
            error: function(jqXHR, textStatus, errorThrown) 
            {
                //if fails      
            }
        });
        e.preventDefault(); //STOP default action
        e.unbind(); //unbind. to stop multiple form submit.
    });

    $("accion_registro").submit();


    $("accion_iniciosesion").submit(function(e)
    {

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

});



