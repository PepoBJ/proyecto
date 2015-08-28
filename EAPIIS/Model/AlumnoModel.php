<?php namespace EAPIIS\Model;

	use EAPIIS\Model\Action\Alumno as AAlumno;
	use EAPIIS\Model\Clase\Alumno as CAlumno;
	use EAPIIS\Helpers\Security as HS;

	class AlumnoModel
	{

		/*		CONSTANTES NAMESPACE Alumno 		*/
		
		const ALUMNO_NAMESPACE = 'EAPIIS\Model\Clase\Alumno';
		
		/*	**	*/

		/*		CONSTRUCTOR 		*/
			
		public function __construct()
		{
			
		}
		
		/*	**	*/

		/*		TODAS LOS ALUMNO 		*/
		
		public static function all()
		{
			$a_alumno = new AAlumno();
			
			$alumnos   = $a_alumno->getAll(self::ALUMNO_NAMESPACE);

			if(! isset($alumnos)) return null;

			return $alumnos;
		}
		
		/*	**	*/

		/*		POR ID 		*/
		
		public static function id($codigo)
		{
			$a_alumno = new AAlumno();
			
			$alumno  = $a_alumno->getBy("codigo", $codigo, self::ALUMNO_NAMESPACE);

			if(!isset($alumno)) return null;

			return $alumno;

		}
		
		/*	**	*/

		/*		SAVE 		*/
		
		public static function save( $codigo, $nombre, $apellidos, $dni )
		{
			$a_alumno = new AAlumno();
			$c_alumno = new CAlumno();

			$c_alumno->setCodigo($codigo);
			$c_alumno->setNombre($nombre);
			$c_alumno->setApellidos($apellidos);
			$c_alumno->setDni($dni);

			return $a_alumno->save($c_alumno);
		}
		
		/*	**	*/

		/*		UPDATE 		*/
		
		public static function update($codigo, $nombre, $apellidos, $dni)
		{
			$a_alumno = new AAlumno();
			$c_alumno = new CAlumno();

			$c_alumno->setCodigo($codigo);
			$c_alumno->setNombre($nombre);
			$c_alumno->setApellidos($apellidos);
			$c_alumno->setDni($dni);

			return $a_alumno->update($c_alumno);
		}
		
		/*	**	*/

		/*		DELETE 		*/
		
		public static function delete($codigo)
		{
			$a_alumno = new AAlumno();

			$c_alumno = new CAlumno();
			$c_alumno->setCodigo($codigo);

			return $a_alumno->delete($c_alumno);
		}
		
		/*	**	*/
	}

	/*		FIN CLASS ALUMNOS MODEL		*/