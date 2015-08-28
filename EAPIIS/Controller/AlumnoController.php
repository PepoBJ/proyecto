<?php namespace EAPIIS\Controller;

	use EAPIIS\Core\ControladorBase;
	use EAPIIS\Model\AlumnoModel as CM;

	class AlumnoController extends ControladorBase
	{
		
		/*		INDEX 		*/
		
		public function gestion()
		{

			if( $_POST != null && isset($_POST))
			{
				CM::save($_POST['codigo'], $_POST['nombre'], $_POST['apellidos'], $_POST['dni']);
			}

			$data = array(
				"alumnos" => CM::all()
			);

			$this->view('Alumno', $data);
		}
		
		/*	**	*/
	}