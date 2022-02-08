<?php

	// class simpleClass{
	// 	private $x;
	// 	protected $y="aj";
	// 	public const a = "somthing";
	// 	public function info() {
	// 	return $this-> x= "hello";
	// 	}

	// }


	// $objcthendelar = new simpleClass;
	// echo $objcthendelar-> info();
	//echo simpleClass::a;

?>
<?php
	class simpleClass{
		private $x;
		protected $y="aj";
		public const a = "somthing";
		static public function info() {
		  return self::a;
		}

	}
echo simpleClass :: info();//scopregulation operator
 ?>