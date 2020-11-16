<!DOCTYPE html>
<html>
	<head>
		<title> Reconstructing the Person Class </title>
		<link type="text/css" rel="stylesheet" href="style.css">
	</head>
	<body>
		<p>
		<?php 
		// Con este código creamos la clase Person
		class Person {
			public $isAlive = true;
			public $firstname;
			public $lastname;
			public $age;

			public function __construct($firstname, $lastname, $age) {
				$this->firstname = $firstname;
				$this->lastname = $lastname;
				$this->age = $age;
			}
		}

		// Instanciamos el objeto Teacher de la clase Person
		$teacher = new Person("boring", "12345", 12345);
		$student = new Person("Alberto", "Reyes", 16);
		echo $student->age;		
		?>
		</p>
	</body>
</html>