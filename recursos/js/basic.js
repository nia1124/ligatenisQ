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
            actualizarRegistro();
            
        });

        $('#accion_iniciosesion').click(function(event) 
        {  
            event.preventDefault();
            link('vistas/iniciosesion.php', '#contenido');
            actualizarInicioSesion();
        });   

        $('#cerrarSesion').click(function(event)
        {
            link('libs/conexion_facebook/app/logout.php', '#contenido');
        });

    //-------------------------administrador---------------------//

        $('#accion_adminNoticias').click(function(event)
        {
            event.preventDefault(); 
            link('home/cargarNoticiasBD', '#contenido');
            
        });
        $('#accion_registroNoti').click(function(event){

            event.preventDefault();
            link('vistas/registrarNoticia.php', '#contenido');

        });
       /* $('#insertar_noticia').click(function(event){

            event.preventDefault();
            link('home/insertarNoticias', '#contenido');
            
        });
        */




     //---------------------------ventana modal-----------------//
        $('open-Modal').click(function(event)
        {
            var myDNI = $(this).data('id');
            $(".modal-body #DNI").val( myDNI );
        })


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
            actualizarRegistro();
        });

        $('#accion_iniciosesion_mobile').click(function(event) 
        {
            event.preventDefault();
            link(' vistas/iniciosesion.php', '#contenido');
            actualizarInicioSesion();
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

    function actualizarRegistro()
    {
        setTimeout(function()
        {
            $('#boton_registrar').click(function()
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
                        dataType: 'JSON',
                        beforeSend: function(){
                            $('#result').html("Un momento por favor");
                        },
                        success: function(response) {
                            console.log(response);

                            window.location.reload(true);
                            if(response.estado == "Error"){
                                $('#result').html(response.mensaje);
                                $('#result').removeClass("alert alert-success")
                                    .addClass("alert alert-danger");
                            }
                            else if(response.estado =="Exito"){
                                $('#result').html(response.mensaje);
                                $('#result').removeClass("alert alert-danger")
                                    .addClass("alert alert-success");
                            }
                        },
                        error: function(msg){
                            $('#boton_registrar').attr('disabled', false);
                        }
                });
                return false;
            });
        },500);
    }

    //------------------------inicio de sesion-----------------------------//

    function actualizarInicioSesion()
    {
        setTimeout(function()
        {
            $('#boton_iniciosesion').click(function()
            {
                $.ajax({
                    type: 'POST',
                    data: 
                    {
                        username: $('#inicios_nombre').val(),
                        pass: $('#inicios_pass').val(),
                    },
                    url:'home/login',
                    dataType: 'JSON',
                    beforeSend: function()
                    {
                        $('#result_login').html("Un momento por favor");
                    },
                    success: function(response)
                    {
                        console.log(response);

                        if(response.estado == "Error"){
                            $('#result_login').html(response.mensaje);
                            $('#result_login').removeClass("alert alert-danger").addClass("alert alert-danger");
                        }
                        else if(response.estado =="Exito")
                        {
                            $('#result_login').html(response.mensaje);
                            $('#result_login').removeClass("alert alert-success")
                        }
                    },
                    error: function(msg){
                        $('#boton_iniciosesion').attr('disabled', false);
                    }
                });
                return false;
            });
        },500);
    }

    function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for(var i=0; i<ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0)==' ') c = c.substring(1);
            if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
        }
        return "";
    }

    function noticias()
    {
        $.ajax({
                type: 'POST',
                url:'home/cargarNoticiasBD',
                
                beforeSend: function()
                {
                   
                },
                success: function(response)
                {
                    console.log(response);
                    $("#accion_tablaNoticias").html(response.tabla);
                },
                error: function(msg){
                   
                }
            });
    }

    function rankingF()
    {
        $.ajax({
                type: 'POST',
                url:'home/cargarRankingF',
                
                beforeSend: function()
                {
                   
                },
                success: function(response)
                {
                    console.log(response);
                    $("#accion_tablaRankingF").html(response.tabla);
                },
                error: function(msg){
                   
                }
            });
    }
});



