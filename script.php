<?php
function verificaSessao() {

session_start();

if (isset($_SESSION['senha']) == "senha"){

	$counter = time();

	if (!isset($_SESSION['count'])) {

	$_SESSION['count'] = $counter;

	}

	if ($counter - $_SESSION['count'] >= 5){

		session_unset();
		session_destroy();
		header('location:session.php');

	}
	
	$_SESSION['count']= $counter;

	session_destroy();
	unset($_SESSION['senha']);

}else{

	session_destroy();
	unset($_SESSION['senha']);
	header('location:session.php');

}
}


?>