<?php 

	require __DIR__ . '../../public/src/BuscaViaCEP_inc.php';
	 //usar o helper
    use Jarouche\ViaCEP\HelperViaCep;
	
	function consultarCep($cep){
	 
     //tipos permitidos
     $array_tipos =['Querty','Piped','JSON','JSONP','XML'];
     
     
     // testando todos os tipos de requisição
    foreach ($array_tipos as $tipo){
         //helper retorna da dados do cep através dos parâmetros tipo e cep  
         $class_cep = HelperViaCep::getBuscaViaCEP($tipo,$cep);
           //print_r($class_cep);
    }
     
     
     //Utilizando via Classe
    $class = new Jarouche\ViaCEP\BuscaViaCEPJSONP();
    /*como é JSONP, existe a opção de setar o nome da callback function, 
     * ESTÁ OPÇÃO ESTÁ SOMENTE DISPONÍVEL SE UTILIZAR A CLASSE Jarouche\ViaCEP\BuscaViaCEPJSONP();
     */
    $class->setCallbackFunction('teste_teste');
    
    //Faz o retorno do CEP
    $result = $class->retornaCEP($cep);
    //esses dois prints são desnecessários pois os dados tratados serão retornados para o usuário
   	//echo $class->retornaConteudoRequisicao();
    //print_r($result);

    if (isset($result["erro"])) {
            throw new \Exception("CEP inexistente");
        }

    return $result;

	}

	function consultarClima($cidade){

		function hg_request($parametros, $chave = null, $endpoint = 'weather'){
		  $url = 'http://api.hgbrasil.com/'.$endpoint.'/?format=json&';
		  
		  if(is_array($parametros)){
		    // Insere a chave nos parametros
		    if(!empty($chave)) $parametros = array_merge($parametros, array('key' => $chave));
		    
		    // Transforma os parametros em URL
		    foreach($parametros as $key => $value){
		      if(empty($value)) continue;
		      $url .= $key.'='.urlencode($value).'&';
		    }
		    
		    // Obtem os dados da API
		    $resposta = file_get_contents(substr($url, 0, -1));
		    
		    $dados = json_decode($resposta, true);
		    
		    return $dados;

		  	} else {

		    return false;
		    
		  	}
		}

		$chave = 'f694282a'; // Obtenha sua chave de API gratuitamente em http://hgbrasil.com/weather

		// Resgata o IP do usuario
		$ip = $_SERVER["REMOTE_ADDR"];

		/* Nome da Cidade (requer chave) */
		 $dados = hg_request(array(
		   'city_name' => $cidade
		 ), $chave);

		 return $dados;

		if(!isset($dados)) {echo 'Descomente um dos exemplos para visualizar.'; die();}

		/* ================================================
		 * Função para resgatar os dados da API HG Brasil
		 *
		 * Parametros:
		 *
		 * parametros: array, informe os dados que quer enviar para a API
		 * chave: string, informe sua chave de acesso
		 * endpoint: string, informe qual API deseja acessar, padrao weather (previsao do tempo)
		 */

	}
	
 ?>