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
			$dia = array(
				"1" => "Lunes",
				"2" => "Martes",
				"3" => "Miercoles",
				"4" => "Jueves",
				"5" => "Viernes"
			);
			return $dia[$this->dia];
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
			$hora = array(
				"7"  => "7-8",
				"8"  => "8-9",
				"9"  => "9-10",
				"10" => "10-11",
				"11" => "11-12",
				"12" => "12-13",
				"13" => "13-14",
				"14" => "14-15",
				"15" => "15-16",
				"16" => "16-17",
				"17" => "17-18",
				"18" => "18-19",
				"19" => "19-20",
				"20" => "20-21",
			);
			return $hora[$this->hora];
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