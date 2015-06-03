$(document).ready(function()
{
    
/*-----------vistas de escritorio-----------------------------*/
        $('#accion_mv').click(function(event) 
        {
            event.preventDefault();
            link('vistas/misionVision.php', '#contenido');
        });

        $('#accion_organoAdm').click(function(event) 
        {
            event.preventDefault();
            link('home/cargarOrganoAHome', '#contenido');
            link('vistas/organoAdm.php', '#contenido');

        });

        $('#accion_club').click(function(event) 
        {
            event.preventDefault();
            link('home/cargarClubHome', '#contenido');
            link('vistas/clubes.php', '#contenido');
        });

        $('#accion_rankingF').click(function(event) 
        {
            event.preventDefault();
            link('home/cargarRankingFHome', '#contenido');
            link('vistas/rankingF.php', '#contenido');
 

        });

        $('#accion_rankingM').click(function(event) 
        {
            event.preventDefault();
            link('home/cargarRankingMasculinoHome', '#contenido');
            link('vistas/rankingM.php', '#contenido');
        });

        $('#accion_deportista').click(function(event) 
        {
            event.preventDefault();
            link('home/cargarDeportistaHome', '#contenido');
            link('vistas/deportista.php', '#contenido');
            
        });  

        $('#accion_entrenador').click(function(event) 
        {
            event.preventDefault();
            link('home/cargarEntrenadorHome', '#contenido');
            link('vistas/entrenador.php', '#contenido');
        });  
        
        $('#accion_eventos').click(function(event) 
        {
            event.preventDefault();
            link('home/cargarEventosHome', '#contenido');
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

            $.ajax({url:'home/logout'});
            link('libs/conexion_facebook/app/logout.php', '#contenido');
        });

        $('#accion_modal').click(function(event)
        {
            event.preventDefault();
            link('vistas/index.php', '#contenido');
        });
        


        /*------------fin vistas escritorio------------------------*/


       /*---------------------view mobile-----------------------*/

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
 /*-------------------end view mobile----------------------------*/

/*--------------------evento menu movil...................*/
$('#boton_menumobile').click(function(event)
{
    $('#collapsed').Collapse('hide');
})


/*---------------------editar fila tabla --------------------*/
    //variable que indica si una fila esta siendo editada
    var edicion = false;
    

    //nodo: parametro que indica cada una de las partes de la 
    //tabla, es decir-> tr, td. 
    function transformarCampos(nodo)
    {
        if (edicion== false) 
        {
            var nodoTd = nodo.parentNode; //Nodo TD
            var nodoTr = nodoTd.parentNode; //Nodo TR

            var nodoContenedorForm = document.getElementById('htmlActualizar'); //Nodo DIV
            var nodosEnTr = nodoTr.getElementsByTagName('td');

            //variables que representan cada uno de los campos a editar en la tabla
            var titulo = nodosEnTd[0].textContent; 
            var imagen = nodosEnTd[1].textContent;
            var descripcion = nodosEnTd[2].textContent;

            //variable que representa la nueva forma que debe tomar la fila, 
            //con inputs para editar
            var htmlInput = '<td><input type="text" name="titulo" id="titulo" value="'+titulo+'" size="15"></td>'+
                            '<td><input type="text" name="imagen" id="imagen" value="'+imagen+'" size="100"></td>'+
                            '<td><input type="text" name="descripcion" id="descripcion" value="'+descripcion+'" size="30"></td>'+
                            '<td><button type="submit" id="boton_eliminarNoti class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span></button></td>';

            nodoTr.innerHTML = htmlInput;

            nodoContenedorForm.innerHTML = 'Pulse Aceptar para guardar los cambios o cancelar para anularlos'+
            '<form name = "tablaNoticias" action="vistas/index.php" method="get" onsubmit="capturarEnvio()" onreset="anular()">'+
            '<input class="boton" type = "submit" value="Aceptar"> <input class="boton" type="reset" value="Cancelar">';
            edicion = "true";  
        }
        else 
        {
            alert ('En este momento esta siendo editada una noticia, por favor guarde los cambios y continue');
        }
    }

    //metodo por medio del cual se capturan los nuevos datos ingresados en el formulario
    function capturarEnvio()
    {
        var nodoContenedorForm = document.getElementById('htmlActualizar'); //Nodo DIV
        nodoContenedorForm.innerHTML = 'Pulse Aceptar para guardar los cambios o cancelar para anularlos'+
        '<form name = "formulario" action="vistas/index.php" method="get" onsubmit="capturarEnvio()" onreset="anular()">'+
        '<input type="hidden" name="titulo" value="'+document.querySelector('#titulo').value+'">'+
        '<input type="hidden" name="imagen" value="'+document.querySelector('#imagen').value+'">'+
        '<input type="hidden" name="descripcion" value="'+document.querySelector('#descripcion').value+'">'+
        '<input class="boton" type = "submit" value="Aceptar"> <input class="boton" type="reset" value="Cancelar">';
        document.formulario.submit();
    }

    //metodo por medio del cual se anula la acción 
    function anular()
    {
        window.location.reload();
    }
/*-----------------------fin editar fila-----------------------------*/

/*-------------------------administrador-------------------------*/
     //noticia   
        $('#accion_registrarNoticia').click(function(event){

            event.preventDefault();
            link('vistas/registrarNoticia.php', '#contenido');
        });

       $('#insertar_noticia').click(function(event){

            event.preventDefault();
            link('vistas/ventanaModal.php', '#contenido');
        });

       $('#accion_actualizarNoti').click(function(event){

            event.preventDefault();
            //link('vistas/index.php', '#contenido');
            transformarCampos(nodo);
        });

       $('#actualizar_noticia').click(function(event)
       {
            event.preventDefault();
            link('vistas/ventanaModal.php', '#contenido');
       });

    //club
       $('#accion_registrarclub').click(function(event)
       {
            event.preventDefault();
            link('vistas/registrarClub.php', '#contenido');
       }); 

       $('#insertar_club').click(function(event)
       {
            event.preventDefault();
            link('vistas/index.php', '#contenido');
       });   
/*-------------------fin administrador-----------------------*/

/*...................ventana modal...........................*/



/*-----------------------metodos ---------------------------*/

    /*......................metodo menu estatico---------*/
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




    /*--------------------metodo registrar.............*/
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



    /*.................metodo iniciar sesion..............*/
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



    /*................cargar noticias base de datos........*/
    function noticias()
    {
        $.ajax({
                type: 'POST',
                url:'home/index2',
                
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

    /*............cargar ranking femenino base de datos........*/
    function rankingF()
    {
        $.ajax({
                type: 'POST',
                url:'home/cargarRankingFHome',
                
                beforeSend: function()
                {
                   
                },
                success: function(response)
                {
                    //console.log(response);
                    $("#accion_tablaRankingF").html(response.tabla);
                },
                error: function(msg){
                   
                }
            });
    }

    /*............cargar ranking masculino base de datos........*/
    function rankingM()
    {
        $.ajax({
                type: 'POST',
                url:'home/cargarRankingMasculinoHome',
                
                beforeSend: function()
                {
                   
                },
                success: function(response)
                {
                    //console.log(response);
                    $("#accion_tablaRankingM").html(response.tabla);
                },
                error: function(msg){
                   
                }
            });
    }

    /*............cargar organo administrativo base de datos........*/
    function organoAdm()
    {
        $.ajax({
                type: 'POST',
                url:'home/cargarOrganoAHome',
                
                beforeSend: function()
                {
                   
                },
                success: function(response)
                {
                    console.log(response);
                    $("#accion_tablaOrganoA").html(response.tabla);
                },
                error: function(msg){
                    console.log(msg);
                }
            });
    }

    /*............cargar deportista base de datos........*/
    function deportista()
    {
        $.ajax({
                type: 'POST',
                url:'home/cargarDeportistaHome',
                
                beforeSend: function()
                {
                   
                },
                success: function(response)
                {
                    //console.log(response);
                    $("#accion_tablaDeportista").html(response.tabla);
                },
                error: function(msg){
                  // console.log(msg)
                }
            });
    }

    /*............cargar clubes base de datos........*/
    function clubes()
    {
        $.ajax({
                type: 'POST',
                url:'home/cargarClubHome',
                
                beforeSend: function()
                {
                   
                },
                success: function(response)
                {
                    //console.log(response);
                    $("#accion_tablaClubes").html(response.tabla);
                },
                error: function(msg){
                  // console.log(msg)
                }
            });
    }


    /*............cargar eventos base de datos........*/
    function eventos()
    {
        $.ajax({
                type: 'POST',
                url:'home/cargarEventosHome',
                
                beforeSend: function()
                {
                   
                },
                success: function(response)
                {
                    $("#accion_tablaEventos").html(response.tabla);
                },
                error: function(msg){

                }
            });
    }



    /*............. metodo ventana modal..........*/
    function ventanaModal()
    {
        
    }

});



