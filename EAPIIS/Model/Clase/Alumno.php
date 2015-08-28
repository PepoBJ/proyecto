<?php namespace EAPIIS\Model\Clase;
	
	use EAPIIS\Helpers\Security as SS;

	class Alumno 
	{

		/*		CONSTRUCTOR 		*/
		
		public function __construct()
		{

		}
		
		/*	**	*/

		/*		 CODIGO ALUMNO		*/
		
		private $codigo;
		
		public function setCodigo($codigo = "")
		{
			$codigo = SS::clean_input($codigo);
			
			$this->codigo = $codigo != "" ? $codigo : "Undefined";
		}
		public function getCodigo()
		{
			return $this->codigo;
		}
		
		/*	**	*/

		/*		 NOMBRE ALUMNO		*/
		
		private $nombre;
		
		public function setNombre($nombre = "")
		{
			$nombre = SS::clean_input($nombre);

			$this->nombre = $nombre != "" ? $nombre : "Undefined";
		}
		public function getNombre()
		{
			return $this->nombre;
		}
		
		/*	**	*/

		/*		 APELLIDOS ALUMNO		*/
		
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

		/*		 DNI ALUMNO		*/
		
		private $dni;
		
		public function setDni($dni)
		{
			$this->dni = $dni != "" ? $dni : "Undefined";
		}
		public function getDni()
		{
			return $this->dni;
		}
		
		/*	**	*/
	}

/*		FIN CLASS ALUMNO MODEL - CLASS		*/