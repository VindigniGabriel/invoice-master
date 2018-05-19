<?php namespace Models;

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

			$this->mostrar = "<select class='browser-default'>";
			$this->mostrar .= "<option value='0' disabled selected>Seleccione Tasa</option>";
			$this->mostrar .= "<option id='naTasa'>No Aplica</option>";
			$this->mostrar .= "<option class='modal-trigger editarTasas' href='#editarTasas'>Editar Tasas</option>";

			$impuestos = $this->con->consultaRetorno($sql);

			foreach ($impuestos as $mostrar) {

				$this->mostrar .= "<option id='{$mostrar['id']}'>{$mostrar['impuesto_nombre']}:{$mostrar['impuesto_valor']}%</option>";

			}
			
			$this->mostrar .= "</select>";

			echo $this->mostrar;
		}
	}


	$tasa = new Impuestos($con);
	$tasa->listar();

?>