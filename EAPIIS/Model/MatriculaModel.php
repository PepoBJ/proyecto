<?php namespace EAPIIS\Model;

	use EAPIIS\Model\Action\Matricula as AMatricula;
	use EAPIIS\Model\Clase\Matricula as CMatricula;
	use EAPIIS\Helpers\Security as HS;

	class MatriculaModel
	{

		/*		CONSTANTES NAMESPACE Matricula 		*/
		
		const MATRICULA_NAMESPACE = 'EAPIIS\Model\Clase\Matricula';
		
		/*	**	*/

		/*		CONSTRUCTOR 		*/
			
		public function __construct()
		{
			
		}
		
		/*	**	*/

		/*		TODOS 		*/
		
		public static function all()
		{
			$a_matricula = new AMatricula();
			
			$matriculas    = $a_matricula->getAll(self::MATRICULA_NAMESPACE);

			if(! isset($matriculas)) return null;

			return $matriculas;
		}
		
		/*	**	*/

		/*		POR ID 		*/
		
		public static function id($id)
		{
			$a_matricula = new AMatricula();
			
			$matricula     = $a_matricula->getById($id, self::MATRICULA_NAMESPACE);

			if(!isset($matricula)) return null;

			return $matricula;

		}
		
		/*	**	*/

		/*		SAVE 		*/
		
		public static function save( $curso, $alumno )
		{
			$a_matricula = new AMatricula();
			$c_matricula = new CMatricula();

			$c_matricula->setCodCurso($curso);
			$c_matricula->setCodAlumno($alumno);

			return $a_matricula->save($c_matricula);
		}
		
		/*	**	*/

		/*		UPDATE 		*/
		
		public static function update( $id, $curso, $alumno )
		{
			$a_matricula = new AMatricula();
			$c_matricula = new CMatricula();

			$c_matricula->setIdMatricula($id);
			$c_matricula->setCodCurso($curso);
			$c_matricula->setCodAlumno($alumno);

			return $a_matricula->update($c_matricula);
		}
		
		/*	**	*/

		/*		DELETE 		*/
		
		public static function delete($id_matricula)
		{
			$a_matricula = new AMatricula();

			$c_matricula = new CMatricula();
			$c_matricula->setIdMatricula($id_matricula);

			return $a_matricula->delete($c_matricula);
		}
		
		/*	**	*/
	}

	/*		FIN CLASS MODEL		*/