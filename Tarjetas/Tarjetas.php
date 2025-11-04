<?php
    $imagenDelatera="";
?> 
<!DOCTYPE html>
<html>
<head>
  <title>Inicio Plantillas</title>
  <link rel="stylesheet" href="common/css/index.css">
  
  <link rel="stylesheet" href="../common/includes/frameworks/bootstrap/css/bootstrap.min.css" >
  <link rel="stylesheet" href="../common/includes/frameworks/bootstrap/bootstrap-icons-1.10.3/bootstrap-icons.css">
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
                <div id="nombrePersona" class="nombrePersona">nombre apellido</div>
              </div>
              <div class="trasera" >
                <div id="numeroTarjeta" class="numeroTarjeta">1234 5678 9012 3456</div>
              </div>
            </div>
          </div>
          
          <div class="FormularioTarjeta">
            <div class="form-floating is-invalid">
              <input id="txtNombre" name="txtNombre" type="text" class="form-control" maxlength="60" autocomplete="off">
              <label id="lbNombre" for="txtNombre">nombre completo:</label>
            </div>
            <div class="form-floating is-invalid">
              <input id="txtNoTarjeta" name="txtNoTarjeta" type="text" class="form-control" maxlength="60" autocomplete="off">
              <label id="lbNoTarjeta" for="txtNoTarjeta">numero tarjeta:</label>
            </div>
          </div>
        </div>
    </div>

    
        <script src="../common/includes/frameworks/jquery/jquery-3.3.1.min.js"></script>
        <script src="../common/includes/frameworks/jqueryUi/jquery-ui.js"></script>
    <script src="common/js/tarjetas.js"></script>
  </body>
</html>