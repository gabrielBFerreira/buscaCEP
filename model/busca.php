<?php 

	function salvarBusca($data){

		extract($data);

		$ip = $_SERVER["REMOTE_ADDR"];

		$sql = "INSERT INTO buscas values (null,
										   '$ip',
										   '".$_SESSION["user"]."',
										   NOW(),
										   '".$result['cep']."',
										   '".$result['logradouro']."',
										   '".$result['complemento']."',
										   '".$result['bairro']."',
										   '".$result['localidade']."',
										   '".$result['uf']."',
										   '".$dados['results']['temp']."',
										   '".$dados['results']['description']."',
										   '".$dados['results']['sunrise']."',
										   '".$dados['results']['sunset']."',
										   '".$dados['results']['humidity']."',
										   '".$dados['results']['wind_speedy']."')";

		$resultado = mysqli_query(conn(), $sql);

	}

	function consultarBuscas($usuarioAtual){
		$sql = "SELECT * from buscas where usuario = '$usuarioAtual'";
		$resultado = mysqli_query(conn(), $sql);
  		$buscas = array();
	    while ($linha = mysqli_fetch_array($resultado)) {
	        $buscas[] = $linha;
	    }
	    desconn();
	    return $buscas;
	}

 ?>