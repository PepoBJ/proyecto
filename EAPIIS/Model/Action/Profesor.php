<?php  namespace EAPIIS\Model\Action;
	
	use EAPIIS\Core\ModeloBase;
	use EAPIIS\Model\Clase\Profesor as CProfesor;

	class Profesor extends ModeloBase 
	{
		/*		CONSTRUCTOR 		*/
		
		public function __construct () 
		{
			$table = 'Profesor';
			parent::__construct($table);
		}
		
		/*	**	*/

		/*		SAVE 		*/
		
		public function save(CProfesor $profesor)
		{
			$save = $this->runSql(
				"INSERT INTO `profesor` (
					`dni`,
					`nombre`,
					`apellidos`,
					`celular`) 
				VALUES ( 
					'" . $profesor->getDni() . "',
					'" . $profesor->getNombre() . "',
					'" . $profesor->getApellidos() . "',
					'" . $profesor->getCelular() . "'
				);"
			);

			return $save;
		}
		
		/*	**	*/	

		/*		UPDATE 		*/
		
		public function update(CProfesor $profesor)
		{
			$save = $this->runSql(
				"UPDATE `profesor` SET 
					`nombre`               = '" . $profesor->getNombre() . "',
					`apellidos`               = '" . $profesor->getApellidos() . "',
					`celular`               = '" . $profesor->getCelular() . "'
					WHERE dni = '" . $profesor->getDni() . "' ;"
			);

			return $save;
		}
		
		/*	**	*/

		/*		DELTE 		*/
		
		public function delete(CProfesor $profesor)
		{
			$save = $this->deleteBy("dni", $profesor->getDni());

			return $save;
		}
		
		/*	**	*/
	}

/*		FIN CLASS Profesor - ACTION		*/