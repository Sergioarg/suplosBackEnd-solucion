<?php

	class User
	{
		private $pdo;
			
		// Sobrecarga al constructor para conectar a BD.
		function __construct()
		{
			try {
				$this->pdo = Database::connect();
			} catch(Exception $e) {
				die($e->getMessage());
			}
		}
		
		public function all()
		{
			try {
				$query = $this->pdo->prepare("SELECT * FROM bienes");
				$query->execute();
				return $query->fetchAll(PDO::FETCH_OBJ);
			} catch(Exception $e) {
				die($e->getMessage());
			}
		}
		
		
	
		// Por medio realizo a inserción de nuevos usuarios en la BD.
		public function nuevoBien($data)
		{
			try {
				$sql = "INSERT INTO bienes (idbienes,direccion,ciudad,telefono, codigo_postal,tipo, precio)
						values (?,?,?,?,?,?,?)";

					$this->pdo->prepare($sql)
						->execute(
							array(
							
								$data= $_POST['idbienes'],
								$data= $_POST['direccion'],
								$data= $_POST['ciudad'],
								$data= $_POST['telefono'],
								$data= $_POST['codigo_postal'],
								$data= $_POST['tipo'],
								$data= $_POST['precio']

							)
						);
			} catch(Exception $e) {
				die($e->getMessage());
			}
		}

	
			

}
?>