<?php 
	class testsatic{
		public static $x = 0;
		public static function counter(){
			self::$x++;
			echo "<br>".self::$x;
		}
	}
 echo testsatic::$x;
 testsatic::counter();
 testsatic::counter();
 testsatic::counter();
 testsatic::counter();
?>