<?php 
	
require "model/busca.php";
	
function index() {
	$usuarioAtual = $_SESSION["user"];
    $data["buscas"] = consultarBuscas($usuarioAtual);
    display("busca/list", $data);
}

?>