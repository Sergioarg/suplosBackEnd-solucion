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
  <!-- <video src="img/video.mp4" id="vidFondo"></video> -->

  <div class="contenedor">
    <div class="card rowTitulo">
      <h1>Bienes Intelcost</h1>
    </div>
    <div class="colFiltros">
      <form action="" method="post" id="formulario">
        <div class="filtrosContenido">
          <div class="tituloFiltros">
            <h5>Filtros</h5>
          </div>
          <div class="filtroCiudad input-field">
            <p><label for="selectCiudad">Ciudad:</label><br></p>
            <select name="ciudad" id="selectCiudad">
              <!-- <option value="" selected>Elige una ciudad</option> -->
            </select>
          </div>
          <div class="filtroTipo input-field">
            <p><label for="selecTipo">Tipo:</label></p>
            <br>
            <select name="tipo" id="selectTipo">
              <!-- <option value="">Elige un tipo</option> -->
             
            </select>
          </div>
          <div class="filtroPrecio">
            <label for="rangoPrecio">Precio:</label>
            <input type="text" id="rangoPrecio" name="precio" value="" />
          </div>
          <div class="botonField">
            <input type="submit" class="btn white" value="Buscar" id="filtrar">
          </div>
        </div>
      </form>
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
            </div>

            <div class="divider" >
            </div>

          </div>
        </div>
      </div>
      
      <div id="tabs-2" >
        <div class="colContenido" id="divResultadosBusqueda">
          <div class="tituloContenido card" style="justify-content: center;">
            <h5>Bienes guardados:</h5>
            <div>
              <!-- tabla de todos los resultados -->
              <?php $inc = 0; foreach($this->model->all() as $user): ?>
                            <tr>
                                <td class="v<?php echo $inc; ?>"><?php echo $user->idbienes ?></td>
                                <td class="v<?php echo $inc; ?>"><?php echo $user->direccion ?></td>
                                <td class="v<?php echo $inc; ?>"><?php echo $user->ciudad ?></td>
                                <td class="v<?php echo $inc; ?>"><?php echo $user->telefono ?></td>
                                <td class="v<?php echo $inc; ?>"><?php echo $user->codigo_postal ?></td>
                                <td class="v<?php echo $inc; ?>"><?php echo $user->precio ?></td>
                                
                                <td>
                                    <a href="#editModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Editar" id="v<?php echo $inc; ?>"  onclick="editar(this.id)" >&#xE254;</i></a>
                                    <a href="#delete" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip"  id="<?php echo $user->ID ?>" onclick="obtenerId(this.id)" title="Eliminar">&#xE872;</i></a>
                                </td>
                            </tr>						
                        <?php $inc++; endforeach; ?>           </div>
              
            <div class="divider" >
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