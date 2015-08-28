<?php namespace EAPIIS\Controller;

	use EAPIIS\Core\ControladorBase;
	use EAPIIS\Model\ProfesorModel as CM;

	class ProfesorController extends ControladorBase
	{
		
		/*		INDEX 		*/
		
		public function gestion()
		{
			if( $_POST != null && isset($_POST))
			{
				CM::save($_POST['dni'], $_POST['nombre'], $_POST['apellidos'], $_POST['celular']);
			}

			$data = array(
				"alumnos" => CM::all()
			);

			$this->view('Profesor', $data);
		}
		
		/*	**	*/
	}