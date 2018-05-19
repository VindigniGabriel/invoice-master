<html>
<div class="row">
	<div class="col hide-on-med-and-down m6">
		<h3>Clientes</h3>
	</div>
	<div class="col s12 m6">
		<h3>  <a class="btn-floating btn-large waves-effect waves-light  teal accent-3 right" title="Agregar Cliente"><i class="material-icons" id="crearcliente">add</i></a>
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

</html>

<script type="text/javascript">
  $('#crearcliente').click(function(){
      var component = 'clientesnew.php';
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
</script>