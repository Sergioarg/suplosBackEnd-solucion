<?php
 	
	require 'php/model/User.php';

	class UserController
	{
		private $model;
		
		function __construct()
		{
			$this->model = new User();
		}

		
		public function index()
		{
			require 'inicio.php';
		}
		
		public function save()
		{

			$user = new User();
			$user->nuevoBien($_REQUEST);
			header('Location:index.html');
		}
	}

	?>