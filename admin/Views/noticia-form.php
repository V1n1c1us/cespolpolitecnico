<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 21/04/2016
 * Time: 23:24
 */
?>

<form method="post" action="funcoes/funcoes.php?funcao=gravar" enctype="multipart/form-data">
    <div class="form-group">
        <label for="titulo">Título</label>
        <input type="text" class="form-control" id="titulo" placeholder="Título" name="titulo" required>
    </div>
    <div class="form-group">
        <label for="fonte">Fonte</label>
        <input type="text" class="form-control" id="fonte" placeholder="De onde?" name="fonte">
    </div>
    <div class="form-group">
        <label for="conteudo">Conteúdo</label>
        <textarea class="form-control" id="conteudo" placeholder="Conteúdo da Notícia" name="conteudo" required></textarea>
    </div>
    <div class="form-group">
        <label for="data">Data da Postagem</label>
        <input type="date" class="form-control" id="data" name="data">
    </div>
    <div class="form-group">
        <label for="cpf">CPF</label>
        <input id="file-0a" class="file" type="file" multiple data-min-file-count="1" name="arquivo">
    </div>
    <button type="submit" class="btn btn-success pull-right" id="btnPublicar" title="Publicar Notícia">Publicar</button>
</form>
