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
		}

		// Instanciamos el objeto Teacher de la clase Person
		$teacher = new Person();
		echo $teacher->isAlive;
		?>
		</p>
	</body>
</html>