<?php namespace EAPIIS\Model;

	use EAPIIS\Model\Action\Profesor as AProfesor;
	use EAPIIS\Model\Clase\Profesor as CProfesor;
	use EAPIIS\Helpers\Security as HS;

	class ProfesorModel
	{

		/*		CONSTANTES NAMESPACE profesor 		*/
		
		const PROFESOR_NAMESPACE = 'EAPIIS\Model\Clase\Profesor';
		
		/*	**	*/

		/*		CONSTRUCTOR 		*/
			
		public function __construct()
		{
			
		}
		
		/*	**	*/

		/*		TODOS 		*/
		
		public static function all()
		{
			$a_profesor = new AProfesor();
			
			$profesores    = $a_profesor->getAll(self::PROFESOR_NAMESPACE);

			if(! isset($profesores)) return null;

			return $profesores;
		}
		
		/*	**	*/

		/*		POR ID 		*/
		
		public static function id($id)
		{
			$a_profesor = new AProfesor();
			
			$profesor     = $a_profesor->getBy("dni", $id, self::PROFESOR_NAMESPACE);

			if(!isset($profesor)) return null;

			return $profesor;

		}
		
		/*	**	*/

		/*		SAVE 		*/
		
		public static function save( $dni, $nombre, $apellidos, $celular )
		{
			$a_profesor = new AProfesor();
			$c_profesor = new CProfesor();

			$c_profesor->setDni($dni);
			$c_profesor->setNombre($nombre);
			$c_profesor->setApellidos($apellidos);
			$c_profesor->setCelular($celular);

			return $a_profesor->save($c_profesor);
		}
		
		/*	**	*/

		/*		UPDATE 		*/
		
		public static function update( $dni, $nombre, $apellidos, $celular )
		{
			$a_profesor = new AProfesor();
			$c_profesor = new CProfesor();

			$c_profesor->setDni($dni);
			$c_profesor->setNombre($nombre);
			$c_profesor->setApellidos($apellidos);
			$c_profesor->setCelular($celular);

			return $a_profesor->update($c_profesor);
		}
		
		/*	**	*/

		/*		DELETE 		*/
		
		public static function delete($dni)
		{
			$a_profesor = new AProfesor();

			$c_profesor = new CProfesor();
			$c_profesor->setDni($dni);

			return $a_profesor->delete($c_profesor);
		}
		
		/*	**	*/
	}

	/*		FIN CLASS MODEL		*/