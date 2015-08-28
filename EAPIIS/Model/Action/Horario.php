<?php  namespace EAPIIS\Model\Action;
	
	use EAPIIS\Core\ModeloBase;
	use EAPIIS\Model\Clase\Horario as CHorario;

	class Horario extends ModeloBase 
	{
		/*		CONSTRUCTOR 		*/
		
		public function __construct () 
		{
			$table = 'horario';
			parent::__construct($table);
		}
		
		/*	**	*/

		/*		SAVE 		*/
		
		public function save(CHorario $horario)
		{
			$save = $this->runSql(
				"INSERT INTO `horario` (
					`dia`,
					`hora`,
					`aula`,
					`curso`,
					`profesor`) 
				VALUES ( 
					'" . $horario->getDia() . "',
					'" . $horario->getHora() . "',
					'" . $horario->getAula() . "',
					'" . $horario->getCodCurso() . "',
					'" . $horario->getIdProfesor() . "'
				);"
			);
			
			return $save;
		}
		
		/*	**	*/	


		/*		DELTE 		*/
		
		public function delete(CHorario $horario)
		{
			$save = $this->runSql(
				"DELETE FROM horario WHERE dia = " . $horario->getDia() .
				" AND hora = " . $horario->getHora() .
				" AND aula = " . $horario->getAula() 
			);

			return $save;
		}
		
		/*	**	*/
	}

/*		FIN CLASS Horario - ACTION		*/