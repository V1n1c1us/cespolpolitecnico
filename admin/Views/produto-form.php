<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 22/04/2016
 * Time: 16:59
 */
?>

<form method="post" action="funcoes/funcoes.php?funcao=gravarProduto" enctype="multipart/form-data">
    <div class="form-group">
        <label for="nomeproduto">Nome do Produto</label>
        <input type="text" class="form-control" id="nomeproduto" placeholder="Nome do Produto" name="nomeproduto"
               required>
    </div>
    <div class="form-group">
        <label for="cpf">Imagem do Produto</label>
        <input id="file-0a" class="file" type="file" multiple data-min-file-count="1" name="arquivo">
    </div>
    <div class="form-group">
        <label for="descricao">Descrição do Produto</label>
        <input type="text" class="form-control" id="descricao" placeholder="Descrição do Produto" name="descricao"
               required>
    </div>
    <div class="form-group">
        <label for="preco">Preço do Produto</label>
        <input type="text" class="form-control" id="preco" name="preco">
    </div>
    <div class="form-group">
        <label for="nomecurso">Nome do Curso</label>
        <select class="form-control" id="nomecurso" name="nomecurso">
            <option>...</option>
            <optgroup label="Politécnico e Ensino Médio">
                <option value="colpoli">Colégio Politécnico</option>
                <option value="empoli">Ensíno Médio Colégio Politécnico</option>
            </optgroup>
            <optgroup label="Cursos Tecnólogo">
                <option value="tecnogestcoo">Tecnólogo em Gestão De Cooperativas</option>
                <option value="tecnogeo">Tecnólogo em Geoprocessamento</option>
                <option value="tecnosist">Tecnólogo em Sistemas para Internet</option>
            </optgroup>
            <optgroup label="Cursos Técnico">
                <option value="tecinfo">Técnico em Informática</option>
                <option value="tecpa">Técnico em Paisagismo</option>
                <option value="tecadm">Técnico em Administração</option>
                <option value="tecagro">Técnico em Agropecuária</option>
                <option value="tecalim">Técnico em Alimentos</option>
                <option value="teccont">Técnico em Contabilidade</option>
                <option value="tecgeo">Técnico em Geoprocessamento</option>
                <option value="tecsec">Técnico em Secretariado</option>
                <option value="tecma">Técnico em Meio Ambiente</option>
                <option value="teczoo">Técnico em Zootecnia</option>
            </optgroup>
        </select>
    </div>

    <button type="submit" class="btn btn-success pull-right" id="btnPublicar" title="Publicar Notícia">Publicar</button>
</form>


