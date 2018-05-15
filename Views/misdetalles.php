<html>
<div class="row">
	<hr>
	<div class="col s12 m6 l4">
		<p>Soy</p>
		<p>
			<label>
				<input class="with-gap blue" name="group1" type="radio" checked />
				<span>Individuo</span>
			</label>
			<label>
				<input class="with-gap" name="group1" type="radio" />
				<span>Empresa</span>
			</label>
		</p>
		<a class="waves-effect waves-light btn blue lighten-2">Guardar</a>
	</div>
</div>


<div class="row">

	<hr>

	<div class="input-field col s12 m6">
		<input id="remitente_name" type="text" class="validate" required>
		<label for="remitente_name">Nombre del remitente</label>
	</div>
	<div class="input-field col s12 m6">
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
	<div class="col m6">
		<a class="waves-effect waves-light btn blue lighten-2">Guardar</a>
	</div>
</div>

<div class="row">
	<hr>
	<div class="col s12 m6">
		<p>Logotipo para Factura</p>
		<p>Cargue un logotipo para que se muestre en sus facturas. Si su nuevo logotipo no aparece, borre su caché y actualice la página.</p>
		<a class="waves-effect waves-light btn blue lighten-2">Elegir Logo</a>
	</div>
	<div class="col s12 m6">
		<blockquote>
		<p>Su logotipo se cargará aquí...</p>
		</blockquote>
	</div>
</div>


</div>


</html>