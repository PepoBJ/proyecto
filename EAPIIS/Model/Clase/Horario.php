<?php namespace EAPIIS\Model\Clase;
	
	use EAPIIS\Helpers\Security as SS;

	class Horario 
	{

		/*		CONSTRUCTOR 		*/
		
		public function __construct()
		{

		}
		
		/*	**	*/

		/*		 DIA		*/
		
		private $dia;
		
		public function setDia($dia = 0)
		{
			$dia = SS::clean_input($dia);
			
			$this->dia = $dia < 6 && $dia > 0 ? $dia : 1 ;
		}
		public function getDia()
		{
			return $this->dia;
		}
		
		/*	**	*/

		/*		 HORA		*/
		
		private $hora;
		
		public function setHora($hora = 0)
		{
			$hora = SS::clean_input($hora);
			
			$this->hora = $hora > 6 && $hora < 21 ? $hora : 7;
		}
		public function getHora()
		{
			return $this->hora;
		}
		
		/*	**	*/

		/*		 AULA		*/
		
		private $aula;
		
		public function setAula($aula = 0)
		{
			$aula = SS::clean_input($aula);
			
			$this->aula = $aula > 0 ? $aula : 100;
		}
		public function getAula()
		{
			return $this->aula;
		}
		
		/*	**	*/

		/*		 FK CURSO		*/
		
		private $curso;
		
		public function setCodCurso($curso = "")
		{
			$curso = SS::clean_input($curso);
			
			$this->curso = $curso != "" ? $curso : "Undefined";
		}
		public function getCodCurso()
		{
			return $this->curso;
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

/*		FIN CLASS Horario - CLASS		*/