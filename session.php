<!DOCTYPE html>
<html>
<head>
	<title> Session </title>
</head>
<body>


<center>

	<label>Senha:</label>
	<form  action ="#" method="POST">
	<input type="password" name="senha">
	<input type="submit" value="Enviar">
	</form>

</center>
<?php 
	if (!empty($_POST)) {
	$senha = $_POST['senha'];

	$passsecret = "senha";

	if ($senha == $passsecret) {
		session_start();
		$_SESSION['senha'] = $senha;

		header('location:pg2.php');

	}else{
		
		echo "<center><h4 style='color: red'>Senha incorreta</h4><center>";

	}
}
 ?>

</body>
</html>