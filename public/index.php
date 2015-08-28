<?php

	require '../vendor/autoload.php';


	use EAPIIS\Config\VariablesGlobales;
	use EAPIIS\Core\ControladorFrontal;

	$con = new ControladorFrontal();
	
	if(isset($_GET["controller"]))
	{
		$controllerObj = $con->cargarControlador($_GET["controller"]);
		$con->lanzarAccion($controllerObj);
	}
	else
	{
	    $controllerObj = $con->cargarControlador(VariablesGlobales::$controlador_defecto);
		$con->lanzarAccion($controllerObj);
	}
	