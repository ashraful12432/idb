<?php
	class Employe{
		private $name;
	    private $age;

		public function setNameAge($x,$y){
				$this->name = $x;
			    $this->age = $y;
		}
		public function getName(){
			return $this->name;
		}
		public function getAge(){
			return $this->age;
		}
		public function welcome(){
			$hello = "hello {$this->name}({$this->age}),welcome to oop";
			return $hello;
		}

	}
	$emp = new Employe;
	$emp->setNameAge('asraful','25');
	echo $emp->welcome();
	
      
?>