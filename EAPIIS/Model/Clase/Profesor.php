<?php namespace EAPIIS\Model\Clase;
	
	use EAPIIS\Helpers\Security as SS;

	class Profesor 
	{

		/*		CONSTRUCTOR 		*/
		
		public function __construct()
		{

		}
		
		/*	**	*/

		/*		 DNI		*/
		
		private $dni;
		
		public function setDni($dni = "")
		{
			$dni = SS::clean_input($dni);
			
			$this->dni = $dni != "" ? $dni : "Undefined";
		}
		public function getDni()
		{
			return $this->dni;
		}
		
		/*	**	*/

		/*		 NOMBRE		*/
		
		private $nombre;
		
		public function setNombre($nombre)
		{
			$nombre = SS::clean_input($nombre);
			
			$this->nombre = $nombre != "" ? $nombre : "Undefined";
		}
		public function getNombre()
		{
			return $this->nombre;
		}
		
		/*	**	*/

		/*		 APELLIDOS		*/
		
		private $apellidos;
		
		public function setApellidos($apellidos)
		{
			$apellidos = SS::clean_input($apellidos);
			
			$this->apellidos = $apellidos != "" ? $apellidos : "Undefined";
		}
		public function getApellidos()
		{
			return $this->apellidos;
		}
		
		/*	**	*/

		/*		 CELULAR		*/
		
		private $celular;
		
		public function setCelular($celular = 0)
		{
			$celular = SS::clean_input($celular);
			
			$this->celular = $celular != 0 ? $celular : 111111111;
		}
		public function getCelular()
		{
			return $this->celular;
		}
		
		/*	**	*/
	}

/*		FIN CLASS PROFESOR - CLASS		*/