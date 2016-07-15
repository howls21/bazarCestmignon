/* global base_url */

$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').focus();
});
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
                if (datos.mensaje !== "") {
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
function accesUser() {
    $.post(base_url + 'controlador/accesUser', {},
            function (pagina) {
                $("#menu").html(pagina);
            });
}
function newUser() {
    $.post(base_url + 'controlador/newUser', {},
            function (pagina) {
                $("#info-center").html(pagina);
            });
}
function userList() {
    $.post(base_url + 'controlador/userList', {},
            function (pagina) {
                $("#info-center").html(pagina);
            });
}
function userConsumer() {
    $.post(base_url + 'controlador/userConsumer', {},
            function (pagina, datos) {
                $("#info-center").html(pagina, datos);
            });
}
function deleteUser(code) {
    $.post(base_url + "controlador/deleteUser", {code: code},
            function () {
                userList();
            });
}
function deleteProduct(code) {
    $.post(base_url + "controlador/deleteProduct", {code: code},
            function () {
                productListAdmin();
            });
}
function deleteCategory(code) {
    $.post(base_url + "controlador/deleteCategory", {code: code},
            function () {
                categoryList();
            });
}
/*Modal User*/
function addNewUser() {
    $.post(base_url + 'controlador/addUser', {
        name: $("#in-name-new").val(),
        surname: $("#in-surname-new").val(),
        email: $("#in-email-new").val(),
        adress: $("#in-adress-new").val(),
        user: $("#in-user-new").val(),
        pass: $("#in-pass-new").val(),
        passConfirm: $("#in-pass-new-confirm").val(),
        typeUser: $("#in-type-new-user").val()},
            function (datos) {
                if (datos.mensaje !== "") {
                    $("#msj-reg-user").html("<p>" + datos.mensaje + "</p>").fadeIn(500).delay(3000).fadeOut(6000);
                } else {

                }
            }, 'json');
}
function adCategory() {
    $.post(base_url + 'controlador/adCategory', {
        name: $("#in-name-category").val(),
        description: $("#in-description-category").val()},
            function () {
            }, 'json');
}
function adProduct() {
    $.post(base_url + 'controlador/adProduct', {
        idCategory: $("#in-category-product-new").val(),
        name: $("#in-name-product-new").val(),
        description: $("#in-description-product-new").val(),
        marc: $("#in-marca-product-new").val(),
        model: $("#in-model-product-new").val(),
        price: $("#in-price-product-new").val(),
        stock: $("#in-stock-product-new").val()},
            function () {
            }, 'json');
}
function newConsumer() {
    $.post(base_url + 'controlador/newConsumer', {
        name: $("#in-name-new-consumer").val(),
        surname: $("#in-surname-new-consumer").val(),
        email: $("#in-email-new-consumer").val(),
        adress: $("#in-adress-new-consumer").val(),
        user: $("#in-user-new-consumer").val(),
        pass: $("#in-pass-new-consumer").val(),
        passConfirm: $("#in-pass-new-confirm-consumer").val(),
        typeUser: '2'},
            function (datos) {
                if (datos.mensaje !== "") {
                    $("#msj-reg-user").html("<p>" + datos.mensaje + "</p>").fadeIn(500).delay(3000).fadeOut(6000);
                } else {

                }
            }, 'json');
}
function editUser(code) {
    $.post(base_url + "controlador/editUser", {code: code},
            function (datos) {
                $("#in-code-admin").val(datos.id_usuario);
                $("#in-name-admin").val(datos.nombre);
                $("#in-surname-admin").val(datos.apellido);
                $("#in-email-admin").val(datos.email);
                $("#in-adress-admin").val(datos.direccion);
                $("#in-user-admin").val(datos.usuario);
                $("#in-type-admin-user").val(datos.tipo_usuario);
            }, 'json');
}
function editProduct(code) {
    $.post(base_url + "controlador/editProduct", {code: code},
            function (datos) {
                $('#in-id-product-ed').val(datos.id_producto);
                $('#in-name-product-ed').val(datos.nombre);
                $('#in-description-product-ed').val(datos.descripcion);
                $('#in-marca-product-ed').val(datos.marca);
                $('#in-model-product-ed').val(datos.modelo);
                $('#in-price-product-ed').val(datos.precio);
                $('#in-stock-product-ed').val(datos.stock);
                $('#in-category-product-ed').val(datos.date);
            }, 'json');
}
function editUserConsumer(code) {
    $.post(base_url + "controlador/editUser", {code: code},
            function (datos) {
                $("#in-code-consumer").val(datos.id_usuario);
                $("#in-name-consumer").val(datos.nombre);
                $("#in-surname-consumer").val(datos.apellido);
                $("#in-email-consumer").val(datos.email);
                $("#in-adress-consumer").val(datos.direccion);
                $("#in-user-consumer").val(datos.usuario);
            }, 'json');
}
function edCategory(code) {
    $.post(base_url + "controlador/edCategory", {code: code},
            function (datos) {
                $("#ed-code-category").val(datos.id_categoria);
                $("#ed-name-category").val(datos.nombre_categoria);
                $("#ed-description-category").val(datos.detalle_categoria);
            }, 'json');
}
function upDateUser() {
    $.post(base_url + 'controlador/upDateUser', {
        code: $("#in-code-admin").val(),
        name: $("#in-name-admin").val(),
        surname: $("#in-surname-admin").val(),
        email: $("#in-email-admin").val(),
        adress: $("#in-adress-admin").val(),
        user: $("#in-user-admin").val(),
        typeUser: $("#in-type-admin-user").val()},
            function () {
                userList();
            }, 'json');
}
function upDateConsumer() {
    $.post(base_url + 'controlador/updateUser', {
        code: $("#in-code-consumer").val(),
        name: $("#in-name-consumer").val(),
        surname: $("#in-surname-consumer").val(),
        email: $("#in-email-consumer").val(),
        adress: $("#in-adress-consumer").val(),
        user: $("#in-user-consumer").val()},
            function () {
            }, 'json');
}
function upCategory() {
    $.post(base_url + 'controlador/upCategory', {
        code: $("#ed-code-category").val(),
        name: $("#ed-name-category").val(),
        description: $("#ed-description-category").val()},
            function () {
                categoryList();
            }, 'json');
}
function productListAdmin() {
    $.post(base_url + 'controlador/productListAdmin', {},
            function (pagina, datos) {
                $("#info-center").html(pagina, datos);
            });
}
function newProduct() {
    $.post(base_url + 'controlador/newProduct', {},
            function (pagina, datos) {
                $("#info-center").html(pagina, datos);
            });
}
function newPedido() {
    $.post(base_url + 'controlador/newPedido', {},
            function (pagina, datos) {
                $("#info-center").html(pagina, datos);
            });
}
function newCategory() {
    $.post(base_url + 'controlador/newCategory', {},
            function (pagina) {
                $("#info-center").html(pagina);
            });
}
function categoryList() {
    $.post(base_url + 'controlador/categoryList', {},
            function (pagina, datos) {
                $("#info-center").html(pagina, datos);
            });
}

 
//como la utilizamos demasiadas veces, creamos una función para 
//evitar repetición de código
function showMessage(message){
    $(".messages").html("").show();
    $(".messages").html(message);
}
 
//comprobamos si el archivo a subir es una imagen
//para visualizarla una vez haya subido
function isImage(extension)
{
    switch(extension.toLowerCase()) 
    {
        case 'jpg': case 'gif': case 'png': case 'jpeg':
            return true;
        break;
        default:
            return false;
        break;
    }
}