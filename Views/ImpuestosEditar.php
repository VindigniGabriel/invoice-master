<?php  namespace Models;

include '../Config/Conexion.php';

$con = new Conexion;

	class Impuestos{

		function __construct($con)
		{
			$this->con = $con;
			$this->mostrar = '';
		}

		function listar ()
		{
			$sql = "SELECT * FROM impuestos";

			$this->mostrar = "<form id='tablaTasas'>";
			$this->mostrar = "<table id='tabla_Tasas' class='centered'>";
			$this->mostrar .= "<thead>";
			$this->mostrar .= "<tr>";
			$this->mostrar .= "<th>Id</th>";
			$this->mostrar .= "<th>Tasa de Impuesto</th>";
			$this->mostrar .= "<th>Valor</th>";
			$this->mostrar .= "<th></th>";
			$this->mostrar .= "</tr>";
			$this->mostrar .= "</thead>";
			$this->mostrar .= "<tbody>";

			$impuestos = $this->con->consultaRetorno($sql);

			foreach ($impuestos as $mostrar) {

				$this->mostrar .= "<tr>";
				$this->mostrar .= "<td><div class='input-field'>";
				$this->mostrar .= "<input class='center' name='impuesto_id[]' value='{$mostrar['id']}'>";
				$this->mostrar .= "</div></td>";
				$this->mostrar .= "<td><div class='input-field center'>";
				$this->mostrar .= "<input class='center' name='impuesto_nombre[]' value='{$mostrar['impuesto_nombre']}'>";
				$this->mostrar .= "</div></td>";
				$this->mostrar .= "<td><div class='input-field center'>";
				$this->mostrar .= "<input class='center' name='impuesto_valor[]' value='{$mostrar['impuesto_valor']}'>";
				$this->mostrar .= "</div></td>";
				$this->mostrar .= "<td><p><label><input type='checkbox' /><span>Eliminar</span></label></p></td>";
				$this->mostrar .= "</tr>";

			}
			
			$this->mostrar .= "</tbody>";
			$this->mostrar .= "</table>";
			$this->mostrar .= "</form>";

			echo $this->mostrar;
		}
	}

	$tasa = new Impuestos($con);
	$tasa->listar();

?>

<script type="text/javascript">
	$('#eliminarTasa').click(function(){
      alert('prueba');
    });
</script>