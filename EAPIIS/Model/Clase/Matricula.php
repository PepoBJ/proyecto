<?php namespace EAPIIS\Model\Clase;
	
	use EAPIIS\Helpers\Security as SS;

	class Matricula 
	{

		/*		CONSTRUCTOR 		*/
		
		public function __construct()
		{

		}
		
		/*	**	*/

		/*		 ID MATRICULA		*/
		
		private $id_matricula;
		
		public function setIdMatricula($id_matricula = 0)
		{
			$id_matricula = SS::clean_input($id_matricula);
			
			$this->id_matricula = $id_matricula != 0 ? $id_matricula : -1;
		}
		public function getIdMatricula()
		{
			return $this->id_matricula;
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

		/*		 FK ALUMNO		*/
		
		private $alumno;
		
		public function setCodAlumno($alumno = "")
		{
			$alumno = SS::clean_input($alumno);
			
			$this->alumno = $alumno != "" ? $alumno : "Undefined";
		}
		public function getCodAlumno()
		{
			return $this->alumno;
		}
		
		/*	**	*/
	}

/*		FIN CLASS Matricula - CLASS		*/