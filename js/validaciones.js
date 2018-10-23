/* 
 * Pagina con los script en js que se encargan de validar y autocompletar en los formularios del sistema
 */
function validar_sesion() {
    var correo = $('#correo').val();
    var pass = $('#pass').val();
    $.post("../core/ajax.php", {correo: correo, pass: pass}, function (data) {
        if (data === "exito") {
            window.location.href = "../elementos/principal";
        } else {
            $('#espacio_mensaje').append("<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>¡Alto!</strong>"+data+"</div>");
        }
    });
}


function registro_inicial() {
    var nombre = $('#nombre').val();
    var cedula = $('#cedula').val();
    var vinculacion = $('#vinculacion').val();
    var dependencia = $('#dependencia').val();
    var cargo = $('#cargo').val();
    var anio = $('#anio').val();
    var mes = $('#mes').val();
    var fecha_vinculacion =$('#fecha_vinculacion').val();
  var fecha_nacimiento =$('#fecha_nacimiento').val();
    var eps = $('#eps').val();
    var arl = $('#arl').val();
    var enfermedad = $('#enfermedad').val();
    var cual_enfermedad = $('#cual_enfermedad').val();
    var cual_alergia = $('#cual_alergia').val();
    var alergia = $('#alergia').val();
    var cual_comida = $('#cual_comida').val();
    var comida = $('#comida').val();
    var enfermedad_laboral = $('#enfermedad_laboral').val();
    var cual_e_laboral = $('#cual_e_laboral').val();
    var atletismo = $('#atletismo').val();
    var cual_atletismo = $('#cual_atletismo').val();
    var disciplina = $('#disciplina').val();
    var participacion = $('#participacion').val();
    var otro = $('#otro').val();
    var fecha_terminacion =$('#fecha_terminacion').val();
    
    $.post("../core/ajax_registro.php", {nombre: nombre,
        otro:otro,
        cedula:cedula,
        vinculacion:vinculacion,
        dependencia:dependencia,
        cargo:cargo,
        anio:anio,
        mes:mes,
        fecha_vinculacion:fecha_vinculacion,
        fecha_nacimiento:fecha_nacimiento,
        eps:eps,
        arl:arl,
        enfermedad:enfermedad,
        cual_enfermedad:cual_enfermedad,
        cual_alergia:cual_alergia,
        alergia:alergia,
        cual_comida:cual_comida,
       comida:comida,
        enfermedad_laboral:enfermedad_laboral,
        cual_e_laboral:cual_e_laboral,
        atletismo:atletismo,
        cual_atletismo:cual_atletismo,
        disciplina:disciplina,
        participacion:participacion,
        fecha_terminacion:fecha_terminacion
        
    }, function (data) {
        if (data === "true") {
            $('#espacio_mensaje').append("<div class='alert alert-success alert-dismissable'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>¡Exito!</strong> Se Realizo un Registro Exitoso</div>");
            $('#cedula').val("");
            $('#nombre').val("");
            
        } else {
            $('#espacio_mensaje').append("<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>¡Alto!</strong>"+ data +"</div>");
        }
    });
}



//enviar formulario
function subir_archivo(fase) {
    var formData = new FormData(document.getElementById('form_up'));
    $.ajax({
        url: "../core/subir_archivo.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: function(data) {$("#espacio_mensaje").html('Cargarndo... Espere...');}
    })
    .done(function (res) {
        $("#espacio_mensaje").html(res);
    });
    cargar_archivos_pagina(fase);
}

function  cargar_archivos_pagina(fase){
    $.post("../core/cargar_archivos.php", {fase: fase}, function (data) {
        $('#div_archivos').remove;
        $('#div_archivos').html(data);
    });
}


//insertar pagina con ajax
function equipos_filtro(clave) {
        $.post("../equipo/div_equipos.php", {clave: clave}, function (pag) {
            $('#div_equipos').remove;
            $('#div_equipos').html(pag);
        });
}

//insertar pagina con ajax
function jugadores_filtro(clave) {
        $.post("../jugador/div_jugador.php", {clave: clave}, function (pag) {
            $('#div_jugador').remove;
            $('#div_jugador').html(pag);
        });
}