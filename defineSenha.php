<?php 
	$senha = $_POST['senha'];

	$passsecret = "senha";

	if ($senha == $passsecret) {
		session_start();
		$_SESSION['senha'] = $senha;

		header('location:pg2.php');

	}else{
		
		session_destroy();
		unset ($_SESSION['senha']);
		header('location:session.php');

	}
 ?>