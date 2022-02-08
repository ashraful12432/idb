<?php
	class person{
		private $names = "";
		private $age = "";

		public function setname($names = "asraful"){
			$this->names = $names;
			return $this;
		}
		public function setage($age=25){
			$this->age = $age;
			return $this;
		}
		public function getinfo(){
			echo "my name is {$this->names}and age is {$this->age}";
		}
		}
		$obj = new person;
		// $obj->setname("ashraful");
		// $obj->setage(35);
		// $obj->getinfo();
		$obj-> setname()->setage()->getinfo();

	

?>