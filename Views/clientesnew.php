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
<div class="row">
	<div class="col hide-on-med-and-down m6">
		<h3>Crear Cliente</h3>
	</div>
	<div class="col s12 m6">
		<h3>  <a class="btn-floating btn-large waves-effect waves-light  teal accent-3 right" title="Agregar Cliente"><i class="material-icons" id="list">list</i></a>
		</h3>
	</div>
</div>

<div class="row">
    <div class="col s12">
    <hr>
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

        <div class="input-field col s12 m6">
 		 	<a href="#!" class="modal-close waves-effect waves-green btn-flat cliente">Agregar</a>
        </div>

      </div>
    </div>
  </div>

</html>

<script type="text/javascript">
	$(document).ready(function(){
		 $('#list').click(function(){
      var component = 'clientes.php';
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