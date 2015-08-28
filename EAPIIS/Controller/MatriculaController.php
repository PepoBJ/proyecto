<?php namespace EAPIIS\Controller;

	use EAPIIS\Core\ControladorBase;
	use EAPIIS\Model\MatriculaModel as CM;

	class MatriculaController extends ControladorBase
	{
		
		/*		INDEX 		*/
		
		public function gestion()
		{
			if( $_POST != null && isset($_POST))
			{
				CM::save($_POST['curso'], $_POST['alumno']);
			}

			$data = array(
				"alumnos" => CM::all()
			);

			$this->view('Matricula', $data);
		}
		
		/*	**	*/
	}