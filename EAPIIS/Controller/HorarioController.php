<?php namespace EAPIIS\Controller;

	use EAPIIS\Core\ControladorBase;
	use EAPIIS\Model\HorarioModel as CM;

	class HorarioController extends ControladorBase
	{
		
		/*		INDEX 		*/
		
		public function gestion()
		{

			if( $_POST != null && isset($_POST))
			{
				CM::save($_POST['dia'], $_POST['hora'], $_POST['aula'], $_POST['curso'], $_POST['dni']);
			}

			$data = array(
				"horarios" => CM::all()
			);

			$this->view('Horario', $data);
		}
		
		/*	**	*/
	}