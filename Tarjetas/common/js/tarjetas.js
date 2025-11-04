const tarjeta = $(".TarjetaCredito");
$(".tarjeta ").on("click", function(){
    tarjeta.toggleClass("active");
});

function rotarTarjeta(){
    tarjeta.toggleClass("active");
}
let card = 1;

$("#txtNombre").keyup(function(){
    if(card!=1){
        rotarTarjeta();
    }
    mostrarDatos();
    card = 1;
});
$("#txtNoTarjeta").keyup(function(){
    mostrarDatos();
    if(card!=2){
        rotarTarjeta();
    }
    card = 2;
});

function mostrarDatos(){
    let nombre = document.getElementById("txtNombre").value.toUpperCase();
    let noTarjeta = document.getElementById("txtNoTarjeta").value.toUpperCase();
    //console.log(nombre);
    jQuery("#nombrePersona").html(nombre);
    jQuery("#numeroTarjeta").html(noTarjeta);
}