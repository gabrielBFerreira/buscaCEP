<?php 

	function cadastrarUsuario($email, $senha, $nome){
		$sql="INSERT into usuarios values(null, '$nome', '$email', SHA1('$senha'))";
		$resultado = mysqli_query(conn(), $sql);
		return $resultado ? "Usuário cadastrado com sucesso" : "Erro.";
	}

	function verUsuario($id) {
	    $sql = "SELECT * from usuarios where idUser = $id";
        $resultado = mysqli_query(conn(), $sql);
	    $usuario = mysqli_fetch_array($resultado);
	    desconn();
	    return $usuario;
	}

	function alterarUsuario($id, $email, $senha, $nome){
		$sql="UPDATE usuarios set nomeUser = '$nome', login = '$email', senha = SHA1('$senha') where idUser = $id";
		$resultado = mysqli_query(conn(), $sql);
		return $resultado ? "Usuário alterado com sucesso" : "Erro.";
	}

	function excluirUsuario($id){
		$sql = "DELETE FROM usuarios where idUser = $id";
  		$resultado = mysqli_query(conn(), $sql);
  		return $resultado ? "Usuário excluído com sucesso, sessão encerrada" : "Erro.";
	}
 ?>