<?php namespace Config;

	class Autoload{

		public static function run (){
			spl_autoload_register(function($class){
				$ruta = str_replace("\\", "/", $class). ".php";
				$ruta = "../".$ruta;
				if (!empty($ruta)){
					echo $ruta;
					include_once $ruta;
				};
			});
		}



	}

Autoload::run();

 ?>