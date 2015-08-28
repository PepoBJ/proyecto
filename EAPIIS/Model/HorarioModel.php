<?php namespace EAPIIS\Model;

	use EAPIIS\Model\Action\Horario as AHorario;
	use EAPIIS\Model\Clase\Horario as CHorario;
	use EAPIIS\Helpers\Security as HS;

	class HorarioModel
	{

		/*		CONSTANTES NAMESPACE Horario 		*/
		
		const HORARIO_NAMESPACE = 'EAPIIS\Model\Clase\Horario';
		
		/*	**	*/

		/*		CONSTRUCTOR 		*/
			
		public function __construct()
		{
			
		}
		
		/*	**	*/

		/*		TODOS 		*/
		
		public static function all()
		{
			$a_horario = new AHorario();
			
			$horarios  = $a_horario->getAll(self::HORARIO_NAMESPACE);

			if(! isset($horarios)) return null;

			return $horarios;
		}
		
		/*	**	*/

		/*		POR ID 		*/
		
		public static function id($id)
		{
			$a_horario = new AHorario();
			
			$horario   = $a_horario->getBy("codigo", $id, self::HORARIO_NAMESPACE);

			if(!isset($horario)) return null;

			return $horario;

		}
		
		/*	**	*/

		/*		SAVE 		*/
		
		public static function save( $dia, $hora, $aula, $cod_curso, $id_profesor )
		{
			$a_horario = new AHorario();
			$c_horario = new CHorario();
			
			$c_horario->setDia($dia);
			$c_horario->setHora($hora);
			$c_horario->setAula($aula);
			$c_horario->setCodCurso($cod_curso);
			$c_horario->setIdProfesor($id_profesor);

			return $a_horario->save($c_horario);
		}
		
		/*	**	*/

		/*		DELETE 		*/
		
		public static function delete( $dia, $hora, $aula)
		{
			$a_horario = new AHorario();

			$c_horario = new CHorario();
			
			$c_horario->setDia($dia);
			$c_horario->setHora($hora);
			$c_horario->setAula($aula);

			return $a_horario->delete($c_horario);
		}
		
		/*	**	*/
	}

	/*		FIN CLASS MODEL		*/