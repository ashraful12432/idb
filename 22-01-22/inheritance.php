<?php

	class grandfather
	{
		protected $name = "asraful";

		public function getname(){
			return $this->name;
    }
		}
		class daddy extends grandfather  {
			public function getfathername(){
				return $this->name;
			}
		}


	
	$obj = new grandfather;
	//echo $obj->name;
	// echo $obj->getname();
	$obj2= new daddy;
	echo $obj2->getfathername();







?>