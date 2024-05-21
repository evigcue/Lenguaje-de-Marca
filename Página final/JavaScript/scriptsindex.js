window.onload=function(){

    var h1Titulo=document.getElementById("titulo");
    h1Titulo.style.display

}

$(document).ready(function() {
    if ($(window).width() < 790) {
        // Ocultar la barra de navegación original
        $('.barranav').hide();

        // Crear y mostrar el botón de navegación
        var botonNavegacion = $('<button class="botonnav">Menú</button>');
        botonNavegacion.appendTo('body');

        // Agregar funcionalidad al botón (por ejemplo, abrir un menú desplegable)
        botonNavegacion.click(function() {
            // Aquí debes agregar el código para mostrar el menú
            // Por ejemplo:
            // $('.menu-desplegable').toggle(); // Muestra u oculta el menú
        });
    }
});