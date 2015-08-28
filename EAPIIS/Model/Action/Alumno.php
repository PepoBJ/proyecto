<?php  namespace EAPIIS\Model\Action;
	
	use EAPIIS\Core\ModeloBase;
	use EAPIIS\Model\Clase\Alumno as CAlumno;

	class Alumno extends ModeloBase 
	{
		/*		CONSTRUCTOR 		*/
		
		public function __construct () 
		{
			$table = 'alumno';
			parent::__construct($table);
		}
		
		/*	**	*/

		/*		SAVE 		*/
		
		public function save(CAlumno $alumno)
		{
			$save = $this->runSql(
				"INSERT INTO `alumno` (
					`codigo`,
					`nombre`,
					`apellidos`,
					`dni`) 
				VALUES ( 
					'" . $alumno->getCodigo() . "',
					'" . $alumno->getNombre() . "',
					'" . $alumno->getApellidos() . "',
					'" . $alumno->getDni() . "'
				);"
			);

			return $save;
		}
		
		/*	**	*/	

		/*		UPDATE 		*/
		
		public function update(CAlumno $alumno)
		{
			$save = $this->runSql(
				"UPDATE `alumno` SET 
					`nombre`               = '" . $alumno->getNombre() . "',
					`apellidos`               = '" . $alumno->getApellidos() . "',
					`dni`               = '" . $alumno->getDni() . "'
					WHERE codigo = '" . $alumno->getCodigo() . "' ;"
			);
			
			return $save;
		}
		
		/*	**	*/

		/*		DELTE 		*/
		
		public function delete(CAlumno $alumno)
		{
			$save = $this->deleteBy("codigo", $alumno->getCodigo());

			return $save;
		}
		
		/*	**	*/
	}

/*		FIN CLASS ALUMNO - ACTION		*/