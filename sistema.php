<?php
	require_once("autoload.php");

	$objUsuario = new Usuario();

	//Insertar usuario
	//$insert = $objUsuario->insertUsuario("Prueba",123123123,"prueba@gmail.com");
	//echo $insert;

	//Extrae todos los registros
	$users = $objUsuario->getUsuarios();
	print_r("<pre>");
	print_r($users);
	print_r("<pre>");


	$updateUser = $objUsuario->updateUsuarios(2,"Persona Test", 333333333,"personatest@gmail.com");
	echo $updateUser;


	$user = $objUsuario->getUser(2);
	print_r("<pre>");
	print_r($user);
	print_r("<pre>");

	$delete = $objUsuario->delUser(2);
	echo $delete;

?>