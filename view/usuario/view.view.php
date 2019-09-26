<h1>Seja-bem vindo ao buscaCEP, o Sistema de Busca de Informações via CEP</h1>

<p>Aqui você pode consultar detalhes do logradouro de seu bairro e o clima atual de sua cidade, basta digitar seu CEP abaixo.</p>

<form action="/buscaCEP/cep/index" method="POST">
  <div class="form-group">
    <div class="form-row">
      <div class="col-md-6">
        <label for="exampleInputName"><b>Digite um CEP (sem pontos ou traços)</b></label>
        <input class="form-control" id="exampleInputName" type="number" aria-describedby="nameHelp" name="cep" required>
      </div>
    </div>
  </div>
  <input class="btn btn-primary" type="submit" value="Buscar">
</form>

<br>

<h5>Usuário atual</h5>

<b>Nome do Usuário: </b><?=$usuario['nomeUser']?><br>

<b>Login: </b><?=$usuario['login']?><br><br>

<a href='/buscaCEP/usuario/edit/<?=$usuario['idUser']?>'>Alterar Cadastro</a><br>

<a href='/buscaCEP/usuario/del/<?=$usuario['idUser']?>'>Excluir Cadastro (AVISO: encerra a sessão atual)</a><br>