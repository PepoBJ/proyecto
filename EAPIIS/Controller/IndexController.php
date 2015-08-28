<?php namespace EAPIIS\Controller;

	use EAPIIS\Core\ControladorBase;
	use EAPIIS\Model\HorarioModel as AM;

	class IndexController extends ControladorBase
	{
		
		/*		INDEX 		*/
		
		public function index()
		{
			$this->view('index');
		}
		
		/*	**	*/
	}