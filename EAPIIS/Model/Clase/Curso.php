<?php namespace EAPIIS\Model\Clase;
	
	use EAPIIS\Helpers\Security as SS;

	class Curso 
	{

		/*		CONSTRUCTOR 		*/
		
		public function __construct()
		{

		}
		
		/*	**	*/

		/*		 CODIGO		*/
		
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

		/*		 NOMBRE		*/
		
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

		/*		 CREDIOS		*/
		
		private $creditos;
		
		public function setCreditos($creditos = 0)
		{
			$creditos = SS::clean_input($creditos);
			
			$this->creditos = $creditos != 0 ? $creditos : 2;
		}
		public function getCreditos()
		{
			return $this->creditos;
		}
		
		/*	**	*/

		/*		 FK PROFESOR		*/
		
		private $profesor;
		
		public function setIdProfesor($profesor = 0)
		{
			$profesor = SS::clean_input($profesor);
			
			$this->profesor = $profesor != 0 ? $profesor : -1;
		}
		public function getIdProfesor()
		{
			return $this->profesor;
		}
		
		/*	**	*/
	}

/*		FIN CLASS Curso - CLASS		*/