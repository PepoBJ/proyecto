<?php  namespace EAPIIS\Model\Action;
	
	use EAPIIS\Core\ModeloBase;
	use EAPIIS\Model\Clase\Curso as CCurso;

	class Curso extends ModeloBase 
	{
		/*		CONSTRUCTOR 		*/
		
		public function __construct () 
		{
			$table = 'curso';
			parent::__construct($table);
		}
		
		/*	**	*/

		/*		SAVE 		*/
		
		public function save(CCurso $curso)
		{
			$save = $this->runSql(
				"INSERT INTO `curso` (
					`codigo`,
					`nombre`,
					`creditos`,
					`profesor`) 
				VALUES ( 
					'" . $curso->getCodigo() . "',
					'" . $curso->getNombre() . "',
					'" . $curso->getCreditos() . "',
					'" . $curso->getIdProfesor() . "'
				);"
			);

			return $save;
		}
		
		/*	**	*/	

		/*		UPDATE 		*/
		
		public function update(CCurso $curso)
		{
			$save = $this->runSql(
				"UPDATE `curso` SET 
					`nombre`               = '" . $curso->getNombre() . "',
					`creditos`               = '" . $curso->getCreditos() . "',
					`profesor`               = '" . $curso->getIdProfesor() . "'
					WHERE codigo = '" . $curso->getCodigo() . "' ;"
			);

			return $save;
		}
		
		/*	**	*/

		/*		DELTE 		*/
		
		public function delete(CCurso $curso)
		{
			$save = $this->deleteBy("codigo", $curso->getCodigo());

			return $save;
		}
		
		/*	**	*/
	}

/*		FIN CLASS Curso - ACTION		*/