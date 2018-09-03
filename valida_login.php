<?php
session_start();
	//entra?
	$usuario_autenticado = false;

	//usuarios do sistema
	$usuarios_app =[
	array('email'=> 'adm@teste.com.br', 'senha' =>'123'),
	array('email'=> 'user@teste.com.br', 'senha' =>'123'),
	];

	echo '<pre>';
	print_r($usuarios_app);
	echo '</pre>';

	foreach ($usuarios_app as $user) {
		
		if ($user ['email'] == $_POST ['email'] && $_POST ['senha'] == $user ['senha']) {
			$usuario_autenticado = true;
		}
	}

		if ($usuario_autenticado) {
			echo "Usuário autenticado";
			$_SESSION['autenticado']="SIM";
			header("Location: home.php");}
		else {
			$_SESSION['autenticado']="NAO";
			header("Location: index.php?login=erro");}
	
?>
