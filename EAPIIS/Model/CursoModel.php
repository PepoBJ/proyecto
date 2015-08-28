<?php namespace EAPIIS\Model;

	use EAPIIS\Model\Action\Curso as ACurso;
	use EAPIIS\Model\Clase\Curso as CCurso;
	use EAPIIS\Helpers\Security as HS;

	class CursoModel
	{

		/*		CONSTANTES NAMESPACE curso 		*/
		
		const CURSO_NAMESPACE = 'EAPIIS\Model\Clase\Curso';
		
		/*	**	*/

		/*		CONSTRUCTOR 		*/
			
		public function __construct()
		{
			
		}
		
		/*	**	*/

		/*		TODOS 		*/
		
		public static function all()
		{
			$a_curso = new ACurso();
			
			$cursos    = $a_curso->getAll(self::CURSO_NAMESPACE);

			if(! isset($cursos)) return null;

			return $cursos;
		}
		
		/*	**	*/

		/*		POR ID 		*/
		
		public static function id($id)
		{
			$a_curso = new ACurso();
			
			$curso     = $a_curso->getBy("codigo", $id, self::CURSO_NAMESPACE);

			if(!isset($curso)) return null;

			return $curso;

		}
		
		/*	**	*/

		/*		SAVE 		*/
		
		public static function save( $codigo, $nombre, $creditos, $id_profesor )
		{
			$a_curso = new ACurso();
			$c_curso = new CCurso();

			$c_curso->setCodigo($codigo);
			$c_curso->setNombre($nombre);
			$c_curso->setCreditos($creditos);
			$c_curso->setIdProfesor($id_profesor);

			return $a_curso->save($c_curso);
		}
		
		/*	**	*/

		/*		UPDATE 		*/
		
		public static function update( $codigo, $nombre, $creditos, $id_profesor )
		{
			$a_curso = new ACurso();
			$c_curso = new CCurso();

			$c_curso->setCodigo($codigo);
			$c_curso->setNombre($nombre);
			$c_curso->setCreditos($creditos);
			$c_curso->setIdProfesor($id_profesor);

			return $a_curso->update($c_curso);
		}
		
		/*	**	*/

		/*		DELETE 		*/
		
		public static function delete($codigo)
		{
			$a_curso = new ACurso();

			$c_curso = new CCurso();
			$c_curso->setCodigo($codigo);

			return $a_curso->delete($c_curso);
		}
		
		/*	**	*/
	}

	/*		FIN CLASS MODEL		*/