$(document).ready(function()
{

	$('#accion_mv').click(function(event) 
	{
        event.preventDefault();
        link('../vistas/misionVision.php', '#contenido');
        console.log("yuoo");
    });

    $('#accion_organoAdm').click(function(event) 
    {
        event.preventDefault();
        link('../vistas/organoAdm.php', '#contenido');
    });

    $('#accion_club').click(function(event) 
    {
        event.preventDefault();
        link('../vistas/clubes.php', '#contenido');
    });

    $('#accion_integrantes').click(function(event) 
    {
        event.preventDefault();
        link('../vistas/integrantes.php', '#contenido');
    });

    $('#accion_rankingF').click(function(event) 
    {
        event.preventDefault();
        link('../vistas/rankingF.php', '#contenido');
    });

    $('#accion_rankingM').click(function(event) 
    {
        event.preventDefault();
        link('../vistas/rankingM.php', '#contenido');
    });

    $('#accion_eventos').click(function(event) 
    {
        event.preventDefault();
        link('../vistas/eventos.php', '#contenido');
    });


    $('#accion_login').click(function(event) 
    {
        event.preventDefault();
        link('../vistas/login.php', '#contenido');
    });   

    $('#accion_registro').click(function(event) 
    {
        event.preventDefault();
        link('../vistas/registro.php', '#contenido');
    });

    $('#accion_iniciosesion').click(function(event) 
    {
        event.preventDefault();
        link('../vistas/iniciosesion.php', '#contenido');
    });

    function link(url, update) 
    {
        $.ajax({
        url: url,

        type: 'POST',
        dataType: 'html',
        success: function(respuesta)
        {            
            $(update).html(respuesta);
        }
    });sss

}



});

