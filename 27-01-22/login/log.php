<?php 
	//echo sha1("ashraful");
	//177373803634d7cece90d0e8ef72a900a8c402dd

$secret = '177373803634d7cece90d0e8ef72a900a8c402dd';
if (($_SERVER['PHP_AUTH_USER'] != 'fehor') ||
 (hash('sha1', $_SERVER['PHP_AUTH_PW']) != $secret)) {
 header('WWW-Authenticate: Basic Realm="Secret Stash"');
 header('HTTP/1.0 401 Unauthorized');
 print('You must provide the proper credentials!');
 exit;
}
?>
<p>Lorem ipsum dolor, sit amet, consectetur adipisicing elit. Autem repellat soluta velit, sed eum numquam odio unde ex accusamus, in maxime ea ipsam, deleniti placeat, veniam dolore. Numquam, eligendi, nemo?</p>