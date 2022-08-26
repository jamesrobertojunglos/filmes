<?php
   if (isset($_POST['gravar'])) {
    $erro = false;

    (isset($_POST['nomefilme']) && empty($_POST['nomefilme']))?$erro=true:'';

    if (!$erro) {

    } else {
      echo '<div class="">Imforme todos os campos obrigatórios!';
    }
  }
  
  ?>

<form method="post" action="">
<div class="mb-3">
  <label for="nomefilme" class="form-label">Nome do Filme</label>
  <input type="text" class="form-control" name="nomefilme" id="nomefilme" required>
</div>
<div class="mb-3">
  <label for="resumofilme" class="form-label">Resumo do Filme</label>
  <textarea class="form-control" id="resumofilme" rows="3" required></textarea>
</div>
<div class="mb-3">
  <label for="anofilme" class="form-label">Ano do Filme</label>
  <input type="text" class="form-control" id="anofilme" required>
</div>
<div class="mb-3">
  <label for="produtoresfilme" class="form-label">Produtores</label>
  <textarea type="text" class="form-control" id="produtoresfilme" rows="3" required></textarea>
</div>
<div class="mb-3">
  <label for="imagemfilme" class="form-label">Imagem do Filme</label>
  <textarea type="text" class="form-control" id="imagemfilme" rows="3" required ></textarea>
</div>
<div class="mb-3">
  <input type='submit' name='gravar' value='Salvar o Filme' class='btn btn-primary'/>  
</div>

</form>