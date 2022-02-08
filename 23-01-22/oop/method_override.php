<?php
class member {
public $name = "";
public $loggedin = false;
public function login(){
	$this->loggedin = true;
}
public function logout(){
	$this->loggedin = false;
}
public function getinfo(){
	return $this->loggedin;

}
}
class administator extends member {
	public function login(){
		$this->loggedin = true;
		echo "log entry : $this->name  loged in <br>";
	}
}

$member1= new member;
$member1->name = "asraful";
$member1->login();
echo $member1-> getinfo();
$member1->logout();
echo $member1-> getinfo();
$member2 = new administator;
$member2->name = "fehor";
$member2->login();
echo $member2-> getinfo();



?>