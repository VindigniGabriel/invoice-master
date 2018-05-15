<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1, width=device-width, user-scalable=1.0, minimum-scale=1.0, maximum-scale=1.0">
  <meta name="msapplication-tap-highlight" content="no">
  <title>Efiempresa</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <link href="../Include/css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" />
  <style type="text/css">
  .pdf{
    width: 60%;
    margin-left: 20%;
  }
  span.a {
    font-size: 0.8rem;
  }
  span.opcion {
    font-size: 0.9rem;
  }
  a:hover {
   cursor: pointer;
 }
 tr{
  font-size: 0.8rem;
}
.ocultar{
  display: none;
}
</style>
</head>
<body>
    <div class="row">

      <div class="col m12">
        <div class="col m12">
          <hr>

          <div class="col m6 push-m6">
          </div>
          <div class="col m6 pull-m6"> <!-- Logo -->
            <div class="row blue-text">
              <div class="col m2">
                <span class="mdi mdi-cloud-upload mdi-36px right"></span> 
              </div>
              <div class="col m10">
                <div class="row">
                  <div class="col m12">Arrastre su logotipo aquí
                  </div> 
                  <div class="col m12"> Seleccione logo
                  </div> 
                </div>
              </div>
            </div>
          </div> <!-- Fin Logo -->


          <div class="col m6">
            <div class="row">
              <a class="modal-trigger" href="#addRemitente">
                <div class="col m10 push-m2">
                </div>
                <div class="col m2 center-align pull-m10 grey-text darken-3">De</div>
                <div class="col m2">
                  <span class="mdi mdi-home-outline mdi-36px right ver1"></span> 
                </div>
                <div class="col m10">
                  <div class="row">
                    <div class="col m12 ver1">Agregar Remitente
                    </div> 
                    <div class="col m12 grey-text lighten-2">
                      <span class="a ver1">(o establecer el valor por defecto en mis detalles)</span>
                    </div> 
                    <div class="col m12 grey-text lighten-2">
                      <ul>
                      <li class="remitente_name"></li>
                      <li class="remitente_pais"></li>
                      <li class="remitente_tax"></li>
                      <li class="remitente_email"></li>
                      <li class="remitente_dir1"></li>
                      <li class="remitente_dir2"></li>
                      <li class="remitente_telefono"></li>
                      <li class="remitente_web"></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>



          <div class="col m6">
            <div class="row">
              <a class="modal-trigger" href="#addCliente">
                <div class="col m10 push-m2">
                </div>
                <div class="col m2 center-align pull-m10 grey-text darken-3">Para</div>
                <div class="col m2">
                  <span class="mdi mdi-account-plus mdi-36px right ver2"></span> 
                </div>
                <div class="col m10 flow-text">
                  <span class="opcion ver2">Agregar Cliente</span>
                </div>
                <div class="col m12 grey-text lighten-2 right-align">
                  <ul>
                    <li class="cliente_name"></li>
                    <li class="cliente_apellido"></li>
                    <li class="cliente_email"></li>
                    <li class="cliente_pais"></li>
                    <li class="cliente_dir1"></li>
                    <li class="cliente_dir2"></li>
                    <li class="cliente_comp"></li>
                    <li class="cliente_telefono"></li>
                  </ul>
                </div>
              </a>
            </div>
          </div>

        </div>


        <div class="row">

          <div class="col m6 center-align grey-text darken-3">
            <section>
              Factura No:
              <div class="input-field inline">
                <input id="ninvoice_inline" type="text" value="001">
              </div>
            </section>
            <section>
              Fecha Factura:
              <div class="input-field inline">
                <input id="finvoice_inline" type="text" class="datepicker">
              </div>
            </section>

          </div>


          <div class="col m6 center-align grey-text darken-3">
            Plazo:
            <div class="input-field inline">
              <input id="pinvoice_inline" type="text" class="datepicker">
            </div>
          </div>

        </div>



        <div class="row">

          <div class="col m12 ">



            <form action="" method="post" oninput="resultado.value=parseInt(valor1.value)*parseInt(valor2.value)">
              <table id="lista_productos" class="centered highlight">


                <thead>
                  <tr>
                    <th style="width: 35%;">Item</th>
                    <th>HRS/CAN</th>
                    <th>Precio</th>
                    <th>Impuesto</th>
                    <th>Sub Total</th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td><input placeholder="Descripción" id="" type="text"></td>
                    <td><input type="number" id="valor1" value="0"></td>
                    <td><input type="number" id="valor2" value="0"></td>
                    <td>
                      <div class="input-field">
                        <select>
                          <option value="">d</option>
                          <option value="1">Option 1</option>
                          <option value="2">Option 2</option>
                          <option value="3">Option 3</option>
                        </select>
                      </div>
                    </td>
                    <td><output name="resultado"></output></td> 

                    <td>
                     <div class="inline">
                      <!--<a class="mdi mdi-pencil teal-text darken-2 mdi-18px" title="Editar Item"></a>-->
                      <a class="mdi mdi-delete red-text darken-1 mdi-18px button_eliminar_producto" title="Eliminar Item"></a>
                    </div>
                  </td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <td>
                    <a class="btn-floating btn-small waves-effect waves-light red"><i class="material-icons button_agregar_producto" title="Agregar nuevo Item">add</i></a>
                  </td>
                  <td colspan="4">  </td>
                </tr>
              </tfoot>
            </table>
          </form>
        </div>

        <div class="col m6 offset-m6">
         <div class="col m12">
          <div class="card horizontal">
            <div class="card-stacked">
              <div class="card-content">
               <table class="highlight">
                <thead>
                  <tr>
                    <th colspan="3" class="center-align">Resumen de la Factura</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Sub Total</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <td>Impuesto</td>
                    <td>-</td>
                  </tr>
                  <tr>
                    <td>Total</td>
                    <td>-</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>




    </div>

    <div class="col m12">

     <div class="row">
      <form class="col s12">
        <div class="row">
          <div class="input-field col s12">
            <textarea id="textarea1" class="materialize-textarea"></textarea>
            <label for="textarea1">Términos de la Factura</label>
          </div>
        </div>
      </form>
    </div>

  </div>

</div>

</div>
</div> 


<div id="addRemitente" class="modal modal-fixed-footer">
  <div class="modal-content">
    <div class="row">
      <form class="col s12">
        <div class="row">
         <div class="input-field col s12 m8">
          <input id="remitente_name" type="text" class="validate" required>
          <label for="remitente_name">Nombre del remitente</label>
        </div>
        <div class="input-field col s12 m4">
          <input id="remitente_pais" type="text" class="validate">
          <label for="remitente_pais">País</label>
        </div>
     
        <div class="input-field col s12 m6">
          <input id="remitente_tax" type="text" class="validate">
          <label for="remitente_tax">PAN TAX Número de Registro</label>
        </div>
        <div class="input-field col s12 m6">
          <input id="remitente_email" type="email" class="validate">
          <label for="remitente_email">Email</label>
          <span class="helper-text" data-error="Email no válido" data-success="Email válido"></span>
        </div>
     
        <div class="input-field col s12 m6">
          <input id="remitente_dir1" type="text" class="validate" required>
          <label for="remitente_dir1">Dirección Línea 1 (requerido)</label>
        </div>
        <div class="input-field col s12 m6">
          <input id="remitente_dir2" type="text" class="validate">
          <label for="remitente_dir2">Dirección Línea 1</label>
        </div>
     
       <div class="input-field col s12 m6">
        <input id="remitente_telefono" type="tel" class="validate">
        <label for="remitente_telefono">Teléfono</label>
      </div>
      <div class="input-field col s12 m6">
        <input id="remitente_web" type="text" class="validate">
        <label for="remitente_web">Sitio WEB</label>
      </div>
    </div>
  </form>
</div>
</div>
<div class="modal-footer">
  <a href="#!" class="modal-close waves-effect waves-green btn-flat remitente">Agregar</a>
</div>
</div> 

<div id="addCliente" class="modal modal-fixed-footer">
  <div class="modal-content">
    <h6>Nuevo Cliente</h6>
    <div class="row">
      <form class="col s12">
        <div class="row">
         <div class="input-field col s12 m6">
          <input id="cliente_name" type="text" class="validate" required>
          <label for="cliente_name">Nombre del Cliente (requerido)</label>
        </div>
        <div class="input-field col s12 m6">
          <input id="cliente_apellido" type="text" class="validate" required>
          <label for="cliente_apellido">Apellido del Cliente (requerido)</label>
        </div>
     
        
        <div class="input-field col s12 m8">
          <input id="cliente_email" type="email" class="validate">
          <label for="cliente_email">Email</label>
          <span class="helper-text" data-error="Email no válido" data-success="Email válido"></span>
        </div>

        <div class="input-field col s12 m4">
          <input id="cliente_pais" type="text" class="validate">
          <label for="cliente_pais">País</label>
        </div>
     
     <div class="col s12"><hr></div>

        <div class="input-field col s12 m6">
          <input id="cliente_dir1" type="text" class="validate" required>
          <label for="cliente_dir1">Dirección Línea 1 (requerido)</label>
        </div>
        <div class="input-field col s12 m6">
          <input id="cliente_dir2" type="text" class="validate">
          <label for="cliente_dir2">Dirección Línea 1</label>
        </div>

        <div class="input-field col s12 m6">
        <input id="cliente_comp" type="text" class="validate">
        <label for="cliente_comp">Nombre de la Compañía</label>
      </div>
     
       <div class="input-field col s12 m6">
        <input id="cliente_telefono" type="tel" class="validate">
        <label for="cliente_telefono">Teléfono</label>
      </div>
      
    </div>
  </form>
</div>
</div>
<div class="modal-footer">
  <a href="#!" class="modal-close waves-effect waves-green btn-flat cliente">Agregar</a>
</div>
</div>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('.datepicker').datepicker();
    $('.modal').modal();
    productos();
    $('.remitente').click(function(){
      $('.ver1').addClass('ocultar');
      remitente_name = $('#remitente_name').val();
      remitente_pais = $('#remitente_pais').val();
      remitente_tax = $('#remitente_tax').val();
      remitente_email = $('#remitente_email').val();
      remitente_dir1 = $('#remitente_dir1').val();
      remitente_dir2 = $('#remitente_dir2').val();
      remitente_telefono = $('#remitente_telefono').val();
      remitente_web = $('#remitente_web').val();
      $('.remitente_name').html(remitente_name);
      $('.remitente_pais').html(remitente_pais);
      $('.remitente_tax').html(remitente_tax);
      $('.remitente_email').html(remitente_email);
      $('.remitente_dir1').html(remitente_dir1);
      $('.remitente_dir2').html(remitente_dir2);
      $('.remitente_telefono').html(remitente_telefono);
      $('.remitente_web').html(remitente_web);
    })
    $('.cliente').click(function(){
      $('.ver2').addClass('ocultar');
      cliente_name = $('#cliente_name').val();
      cliente_apellido = $('#cliente_apellido').val();
      cliente_email = $('#cliente_email').val();
      cliente_pais = $('#cliente_pais').val();
      cliente_dir1 = $('#cliente_dir1').val();
      cliente_dir2 = $('#cliente_dir2').val();
      cliente_comp = $('#cliente_comp').val();
      cliente_telefono = $('#cliente_telefono').val();
      $('.cliente_name').html(cliente_name);
      $('.cliente_apellido').html(cliente_apellido);
      $('.cliente_email').html(cliente_email);
      $('.cliente_pais').html(cliente_pais);
      $('.cliente_dir1').html(cliente_dir1);
      $('.cliente_dir2').html(cliente_dir2);
      $('.cliente_comp').html(cliente_comp);
      $('.cliente_telefono').html(cliente_telefono);
    })
  });
  
</script>
</body>
</html>

