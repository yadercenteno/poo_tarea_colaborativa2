<!DOCTYPE html>
  <head>
    <title>Practice makes perfect!</title>
    <link rel="icon" type="image/x-icon" href="./assets/favicon.ico" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  </head>

  <body>
      <p> 
          <!--Your code goes here -->
          <?php
            class Dog{
                //Atributtes 
                public $numLegs=4;
                public $name;
                //Methods
                public function  __construct ($name){
                     $this->name = $name;
                 }
                public function bark(){
                    return "Woof!";
                }
                public function greet(){
                    return "Hola mi nombre es: ". $this->name . "!";
                }
            }
            $dog = new Dog("Canito");
           echo  $dog->greet();

          ?>
      </p>
  </body>
</html>
