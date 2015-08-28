<?php namespace EAPIIS\Controller;

	use EAPIIS\Core\ControladorBase;
	use EAPIIS\Model\CursoModel as CM;

	class CursoController extends ControladorBase
	{
		
		/*		INDEX 		*/
		
		public function gestion()
		{
			if( $_POST != null && isset($_POST))
			{
				CM::save($_POST['codigo'], $_POST['nombre'], $_POST['creditos'], $_POST['dni']);
			}

			$data = array(
				"alumnos" => CM::all()
			);

			$this->view('Curso', $data);
		}
		
		/*	**	*/
	}