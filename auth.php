<?php

function authInit() {
    if(!isset($_SESSION["alert"])){
        $_SESSION["alert"] = array();
    }
}

function authLogin($login, $password) {
	
	$sql="SELECT * from usuarios where login='$login'";
	$resultado = mysqli_query(conn(), $sql);
	$linha = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
		
	if($login == $linha['login'] && $password == $linha['senha']) {

		$id = $linha["idUser"];
		$nome = $linha["nomeUser"];
		$user = $linha["login"];

		$_SESSION["auth"] = array("user" => "$login", "role" => "user");
		$_SESSION["id"] = $id;
		$_SESSION["nome"] = $nome;
		$_SESSION["user"] = $user;

		return true;
	}
	return false;
}

function authIsLoggedIn() {
	return isset($_SESSION["auth"]);
}

function authLogout() {
	if(isset($_SESSION["auth"])) {
		$_SESSION["auth"] = null;
		unset($_SESSION["auth"]);
		$_SESSION["id"] = null;
		unset($_SESSION["id"]);
		$_SESSION["nome"] = null;
		unset($_SESSION["nome"]);
		$_SESSION["user"] = null;
		unset($_SESSION["user"]);
	}	
}

function authGetUserRole() {
	if(authIsLoggedIn()) {
		return $_SESSION["auth"]["role"];
	}
}

?>