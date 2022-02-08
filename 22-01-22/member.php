<?php
	class member {

		public $username= "";
		private $loggedin = false;

		public function login(){
			$this->loggedin = true;
		}
		public function logout(){
			$this->loggedin = false;
		}
		public function islogin(){
			return $this->loggedin;
		}

	}
	$member2 = new member;
	$member2->username = "md asraful";
	$member2->login();
	echo $member2->islogin();
	echo "<br>";
	echo $member2->logout();

?>