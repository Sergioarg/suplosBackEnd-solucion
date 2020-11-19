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

			$model = new User();

			if (isset($_POST['idbienes'])) {

				$id = $_POST['idbienes'];

				if ($model->validarId($id)) {

					echo '<script>alert("Ya cuentas con este bien en "mis bienes ")</script>';
					require 'inicio.php';

				}else{
					
					echo '<script>alert("Bien guardado con exito ")</script>';
					$user = new User();
					$user->nuevoBien($_REQUEST);
					require 'inicio.php';

				}
			}
		}
	}

	?>