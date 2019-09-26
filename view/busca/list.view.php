<div class="row">
<div class="col-12">
            
<?php foreach ($buscas as $busca): ?>

    <b>Índice da Busca: <?=$busca["idBusca"]?></b><br>

    <b>Data e Hora da Busca: </b><?=$busca['dataHora']?><br>

    <b>CEP: </b><?=$busca['cep']?><br> 
               
    <b>Logradouro: </b><?=$busca['logradouro']?><br>

    <b>Complemento: </b><?=$busca['complemento']?><br>

    <b>Bairro: </b><?=$busca['bairro']?><br>

    <b>Cidade: </b><?=$busca['cidade']?><br>

    <b>UF: </b><?=$busca['uf']?><br>

    <b>Temperatura: </b><?=$busca['temperatura']?> ºC<br>

    <b>Descrição: </b><?=$busca['descricao']?><br>

    <b>Nascer do Sol: </b><?=$busca['nascerSol']?><br>

    <b>Pôr do Sol: </b><?=$busca['porSol']?><br>

    <b>Umidade do Ar: </b><?=$busca['umidade']?><br>

    <b>Velocidade do Vento: </b><?=$busca['velocidadeVento']?><br>

    <br>


<?php endforeach; ?>

</div>
</div>