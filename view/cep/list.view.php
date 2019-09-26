<div class="row">
<div class="col-12">

<b>CEP: </b><?=$result['cep']?><br>            
<b>Logradouro: </b><?=$result['logradouro']?><br>
<b>Complemento: </b><?=$result['complemento']?><br>
<b>Bairro: </b><?=$result['bairro']?><br>
<b>Cidade: </b><?=$result['localidade']?><br>
<b>UF: </b><?=$result['uf']?><br>
<b>Unidade: </b><?=$result['unidade']?><br>
<b>IBGE: </b><?=$result['ibge']?><br>
<b>GIA: </b><?=$result['gia']?><br>
<br>
<?php echo $dados['results']['city']; ?> <?php echo $dados['results']['temp']; ?> ºC<br>
<?php echo $dados['results']['description']; ?><br>
Nascer do Sol: <?php echo $dados['results']['sunrise']; ?> - Pôr do Sol: <?php echo $dados['results']['sunset']; ?><br>
Umidade do Ar: <?php echo $dados['results']['humidity']; ?><br>
Velocidade do Vento: <?php echo $dados['results']['wind_speedy']; ?><br>
<img src="../public/img/<?php echo $dados['results']['img_id']; ?>.png" class="imagem-do-tempo"><br>

</div>
</div>