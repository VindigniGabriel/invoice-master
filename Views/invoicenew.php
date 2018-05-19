<html>
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
    <div class="col hide-on-med-and-down m6">
      <h3 id="titulo">Crear Factura</h3>
    </div>
    <div class="col s12 m2">
      <h3><a class="waves-effect waves-light btn-small cyan darken-2">Guardar</a></h3>
    </div>
    <div class="col s12 m2">
      <h3><a class="waves-effect waves-light btn-small cyan darken-4">Descargar</a></h3>
    </div>
    <div class="col s12 m2">
      <h3>  <a class="btn-floating btn-large waves-effect waves-light teal accent-3 right" title="Nueva Factura" id="crearfactura"><i class="material-icons" id="list">list</i></a>
      </h3>
    </div>
  </div>

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

          <table id="items">
    
      <tr class="text-center">
          <th>Descripción</th>
          <th>Precio</th>
          <th>Hrs/Can</th>
          <th>Tasa de Impuesto (TI)</th>
          <th>Sub Total</th>
          <th>TI</th>
      </tr>
      
      <tr class="item-row">
          <td class="description"><input placeholder="Descripción" id="" type="text" name="descripcion[]"></td>
          <td><input type="text" name="cantidad[]" class="cost" value=""></td>
          <td><input type="number" name="cantidad[]" class="qty"></td>
          <td><input type="text" name="cantidad[]" class="tax"></td>
          <td><span class="price"></span></td>
          <td><span class="ctax"></span></td>
      </tr>
      
      <tr id="hiderow">
        <td colspan="5"> <a href="javascript:;" class="btn-floating btn-small waves-effect waves-light  teal accent-3" id="addrow"><i class="material-icons button_agregar_producto" title="Agregar nuevo Item">add</i></a></td>
      </tr>
      
      <tr>
          <td colspan="3" class="blank"> </td>
          <td class="total-line">Subtotal</td>
          <td class="total-value"><div id="subtotal"></div></td>
      </tr>
      <tr>

          <td colspan="3" class="blank"> </td>
          <td class="total-line">Total Impuestos</td>
          <td class="total-value"><div id="sumtax"></div></td>
      </tr>
      <tr>

          <td colspan="3" class="blank"> </td>
          <td class="total-line">Total</td>
          <td class="total-value"><div id="total"></div></td>
      </tr>
     
    
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




<div id="editarTasas" class="modal modal-fixed-footer">
  <div class="modal-content">
    <div class="row">
      <div class="col m12 center">
        <div id="mostrarTasas"></div>
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-close waves-effect waves-green btn-flat guardarTasas">Guardar Cambios</a>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
<script src="../Include/js/tablalista.js"></script>
<script src="../Include/js/tabla.js"></script>
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

    $('#list').click(function(){
      var component = 'invoice.php';
      $.ajax({
        mimeType: 'text/html; charset=utf-8', 
        url: component,
        type: 'GET',
        dataType: "html",
        async: true,
        success: function(data) {
          $('#contenedor').html(data);
        },
        error: function (jqXHR, textStatus, errorThrown) {
          alert(errorThrown);
        }
      });
    });

    $('#lista_productos').on('click', '.button_eliminar_producto', function(){    
    $(this).parents('tr').eq(0).remove();
  });

  });

</script>
</body>
</html>

