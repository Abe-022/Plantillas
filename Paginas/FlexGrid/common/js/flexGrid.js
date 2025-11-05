
    console.log('Hola desde PHP');
    
    $("#regresar").on("click", function(){
        console.log('Hola desde PHP');
        regresarPagina();
    });
    function regresarPagina() {
        window.location.href = "../../index.php";
    }
