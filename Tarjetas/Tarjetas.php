<?php
    $imagenDelatera="";
    $imagenTrasera="/common/img/credencial/tarjetaTrasera2023-1.png";
?> 
<!DOCTYPE html>
<html>
<head>
  <title>Inicio Plantillas</title>
  <link rel="stylesheet" href="common/css/index.css">
  <meta name="robots" content="noindex, follow">
</head>
  <body>
    
    <div class="body-index">
        <div class="Titulo">
          <h1>tarjetas</h1>
          
        </div>
        <div id="areaTarjetas" class="areaTarjetas">

          <div class="tarjeta">
            <div class="flexArea TarjetaCredito">
              <div class="delantera" style="background:url(common/img/nu.png);">
                <div class="fechaExpiracion">12/24</div>
              </div>
              <div class="trasera" >
                <div class="numeroTarjeta">1234 5678 9012 3456</div>
              </div>
            </div>
          </div>
          
          <div class="flexBloque" href="Tarjetas/index.php">Tarjetas</div>
        </div>
    </div>

    
        <script src="../common/includes/frameworks/jquery/jquery-3.3.1.min.js"></script>
        <script src="../common/includes/frameworks/jqueryUi/jquery-ui.js"></script>
    <script src="common/js/tarjetas.js"></script>
  </body>
</html>