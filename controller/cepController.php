<?php

require "model/cep.php";
require "model/busca.php";

function index() {

    extract($_POST);
    
    try {

    	$data["result"] = consultarCep($cep);

    	extract($data);
    
	    $cidade = $result['localidade'];

	    $data["dados"] = consultarClima($cidade);

	    display("cep/list", $data);

	    salvarBusca($data);
    	
    } catch (Exception $e) {

    	alert("Erro: " .$e->getMessage());
  		redirecionar("../usuario/index");
    	
    }

}

?>