<?php  namespace EAPIIS\Model\Action;
	
	use EAPIIS\Core\ModeloBase;
	use EAPIIS\Model\Clase\Matricula as CMatricula;

	class Matricula extends ModeloBase 
	{
		/*		CONSTRUCTOR 		*/
		
		public function __construct () 
		{
			$table = 'matricula';
			parent::__construct($table);
		}
		
		/*	**	*/

		/*		SAVE 		*/
		
		public function save(CMatricula $matricula)
		{
			$save = $this->runSql(
				"INSERT INTO `matricula` (
					`curso`,
					`alumno`) 
				VALUES ( 
					'" . $matricula->getCodCurso() . "',
					'" . $matricula->getCodAlumno() . "'
				);"
			);
			return $save;
		}
		
		/*	**	*/	

		/*		UPDATE 		*/
		
		public function update(CMatricula $matricula)
		{
			$save = $this->runSql(
				"UPDATE `matricula` SET 
					`curso`               = '" . $matricula->getCodCurso() . "',
					`alumno`               = '" . $matricula->getCodAlumno() . "'
					WHERE id_matricula = '" . $matricula->getIdMatricula() . "' ;"
			);

			return $save;
		}
		
		/*	**	*/

		/*		DELTE 		*/
		
		public function delete(CMatricula $matricula)
		{
			$save = $this->deleteById($matricula->getIdMatricula());

			return $save;
		}
		
		/*	**	*/
	}

/*		FIN CLASS Matricula - ACTION		*/