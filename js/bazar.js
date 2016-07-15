/* global base_url */
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
})
$(document).ready(function () {
    divLogin();
});
function divLogin() {
    $.post(base_url + 'controlador/divLogin', {},
            function (pagina, datos) {
                $("#user-active").html(pagina, datos);
                vitrina();
                accesUser();
                $("#btn-login").click(
                        function () {
                            conectUser();
                        });
            });
}
function conectUser() {
        $.post(base_url + 'controlador/conectUser', {
            user: $("#in-user").val(),
            pass: $("#in-pass").val()},
                function (datos) {
                    if (datos.mensaje != "") {
                        $("#alert-user").html("<p>" + datos.mensaje + "</p>").fadeIn(500).delay(3000).fadeOut(6000);
                    } else {
                        divLogin();
                    }
                }, 'json');
}
/*Carga de Datos Usuarios*/
function vitrina() {
    $.post(base_url + 'controlador/bazar', {},
            function (pagina, datos) {
                $("#info-center").html(pagina, datos);
            });
}
/*Validadores*/
/*Control de Acceso*/
function accesUser(){
	$.post(base_url + 'controlador/accesUser',{},
		function(pagina){
			$("#menu").html(pagina);
		});
}
function newUser(){
	$.post(base_url + 'controlador/newUser',{},
		function(pagina){
			$("#info-center").html(pagina);
		});
}
function userList(){
	$.post(base_url + 'controlador/userList',{},
		function(pagina){
			$("#info-center").html(pagina);
		});
}
/*Modal User*/
function addNewUser(){
        $.post(base_url + 'controlador/addUser', {
            name: $("#in-name-new").val(),
            surname: $("#in-surname-new").val(),
        	email: $("#in-email-new").val(),
        	adress: $("#in-adress-new").val(),
        	user: $("#in-user-new").val(),
        	pass: $("#in-pass-new").val(),
        	passConfirm: $("#in-pass-new-confirm").val()},
                function (datos) {
                    if (datos.mensaje !== "") {
                        $("#msj-reg-user").html("<p>" + datos.mensaje + "</p>").fadeIn(500).delay(3000).fadeOut(6000);
                    } else {
                        
                    }
                }, 'json');
	
}
function editarUser(codigo) {
    $.post(base_url + "controlador/editarUser", {codigo: codigo},
    function (datos) {
        $("#inNombreUser").val(datos.nombre);
        $("#inApellidoUser").val(datos.apellido);
        $("#inDirecUser").val(datos.direccion);
        $("#nikUser").val(datos.usuario);
        $("#nClaveUser").val(datos.clave);
    }, 'json');
}
