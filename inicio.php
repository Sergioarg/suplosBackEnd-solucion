<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">

  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="css/customColors.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="css/ion.rangeSlider.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="css/index.css"  media="screen,projection"/>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Bienes Intelcost</title>
</head>

<body>
  <div class="contenedor">
    <div class="card rowTitulo">
      <h1>Bienes Intelcost</h1>
    </div>
    <div class="colFiltros">
        <div class="filtrosContenido">
          <div class="tituloFiltros">
            <h3>Filtros</h3>
          </div>
          <div class="filtroCiudad input-field">
            <!-- Por medio de esta select escojo la ciudad y tipo por el cual va a filtar por medio de JS y Json -->
            <p><label for="selectCiudad">Ciudad:</label><br></p>
            <select name="ciudad" class="selectCiudad" id="selectCiudad">
              <!-- <option value="" selected>Elige una ciudad</option> -->
            </select>
          </div>
          <div class="filtroTipo input-field">
            <p><label for="selecTipo">Tipo:</label></p>
            <br>
            <select name="tipo" id="selectTipo"   >
              <!-- <option value="">Elige un tipo</option> -->
            </select>
          </div>
        <!--   <div class="filtroPrecio">
            <label for="rangoPrecio">Precio:</label>
            <input type="text" id="rangoPrecio" name="precio" value="" />
          </div> -->
          <div class="botonField">
            <input type="submit" class="btn white" onclick="buscar()" value="buscar" id="buscar">
          </div>
        </div>
    </div>
    <div id="tabs" style="width: 75%;">
      <ul>
        <li><a href="#tabs-1">Bienes disponibles</a></li>
        <li><a id="misBienes" href="#tabs-2">Mis bienes</a></li>
      </ul>
      <div id="tabs-1">
        <button class="btn" id="mostrar">MOSTRAR TODOS</button>
        <div class="colContenido" id="divResultadosBusqueda">
          <div class="tituloContenido card" style="justify-content: center;">
            <h5>Resultados de la búsqueda:</h5>
            <div>
              <!-- tabla de todos los resultados -->
              <table>
                <thead>
                  <tr>
                    <strong></strong>
                    <th></th>
                    <th></th>
                 </tr>
                </thead>
                  <tbody id="resultados">
                  </tbody>
                </table>
                <div class="divider">
                </div>
              <!-- Fin de la tabla de resultaos -->
            </div>
          </div>
        </div>
      </div>
      
      <div id="tabs-2" >
        <div class="colContenido" id="divResultadosBusqueda">
          <div class="tituloContenido card" style="justify-content: center;">
            <h5>Bienes guardados:</h5>
            <div>
              <table>
                  <thead>
                      <strong></strong>
                      <th></th>
                      <th></th>
                  </thead>
                  <tbody>
                      <?php foreach($this->model->all() as $bien): ?>
                        <th><img class="responsive-img" width="175" height="175" src="img/home.jpg"></th>
                          <th>
                              <i>Dirección: </i><strong><?php echo $bien->direccion ?></strong></br>
                              <i>Ciudad: </i><strong><?php echo $bien->ciudad ?></strong></br>
                              <i>Telefono: </i><strong><?php echo $bien->telefono ?></strong></br>
                              <i>Codigo Postal: </i><strong><?php echo $bien->codigo_postal ?></strong></br>
                              <i>Tipo: </i><strong><?php echo $bien->tipo ?></strong></br>
                              <i>Precio: </i><strong><?php echo $bien->precio ?></strong></br>
                          </th>
                        <?php endforeach; ?>
                  </tbody>
                </table>
              <!-- tabla de todos los resultados -->
              </div>
              <div class="divider">
              </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    
    <script type="text/javascript" src="js/ion.rangeSlider.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/mostrar-datos.js"></script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript">
      $( document ).ready(function() {
          $( "#tabs" ).tabs();
      });
    </script>
  </body>
  </html>
