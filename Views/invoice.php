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
      <h3 id="titulo">Facturas</h3>
    </div>
    <div class="col s12 m6">
      <h3>  <a class="btn-floating btn-large waves-effect waves-light teal accent-3 right" title="Nueva Factura" id="crearfactura"><i class="material-icons" id="add">add</i></a>
      </h3>
    </div>
  </div>

  <div class="row">
    <div class="col s12">
    <hr>
      <table class="striped centered responsive-table">
        <thead>
          <tr>
            <th>Name</th>
            <th>Item Name</th>
            <th>Item Price</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Alvin</td>
            <td>Eclair</td>
            <td>$0.87</td>
          </tr>
          <tr>
            <td>Alan</td>
            <td>Jellybean</td>
            <td>$3.76</td>
          </tr>
          <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>$7.00</td>
          </tr>
        </tbody>
      </table>
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

    $('#crearfactura').click(function(){
      var component = 'invoicenew.php';
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

  });
  
</script>
</body>
</html>

