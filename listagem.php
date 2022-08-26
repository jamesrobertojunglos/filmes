<?php


    $dados = $conn->query('SELECT * FROM filmes');

  

?>

<table class='table table-striped'>
        <tr>
            <td>Codigo</td>
            <td>Nome</td>
            <td>Resumo</td>
            <td>Ano</td>
            <td>Produtores</td>
            <td>Imagem</td>
        </tr>

<?php
    foreach($dados as $linha) {
?>

        <tr>
            <td><?php echo $linha['codigo']?></td>
            <td><?php echo $linha['nome']?></td>
            <td><?php echo $linha['resumo']?></td>
            <td><?php echo $linha['ano']?></td>
            <td><?php echo $linha['produtores']?></td>
            <td><img src="<?php echo $linha ['imagem']?>"class='img-thumbnail'/></td>
        </tr>
<?php
}
?>
</table>