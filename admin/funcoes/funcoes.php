<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 22/04/2016
 * Time: 13:24
 */
include('../../DB/connect.php');
ini_set('default_charset', 'UTF-8');

// se GET pega a variavel apssada pela url, for igual a gravar e tiver um arquivo no campo arquivo entra no if.. se não vai pro else
if ($_GET['funcao'] == 'gravar' && is_file($_FILES['arquivo']['tmp_name'])) {

    // vai pegar o nome da variavel
    $titulo = $_POST['titulo'];
    $fonte = $_POST['fonte'];
    $data = $_POST['data'];
    $conteudo = $_POST['conteudo'];
    $resumo = $_POST['resumo'];
    $foto = $_FILES['arquivo']['name'];

    // usa replace para substituir o acento das palavras

    $foto = str_replace(" ", "_", $foto); //quando tiver um espaço, coloca um _
    $foto = str_replace("á", "a", $foto); //quando tiver um á, coloca um a
    $foto = str_replace("à", "a", $foto); //quando tiver um à, coloca um a
    $foto = str_replace("ã", "a", $foto); //quando tiver um ã, coloca um a
    $foto = str_replace("â", "a", $foto); //quando tiver um â, coloca um a
    $foto = str_replace("é", "e", $foto); //quando tiver um á, coloca um a
    $foto = str_replace("ê", "e", $foto); //quando tiver um à, coloca um a
    $foto = str_replace("è", "e", $foto); //quando tiver um ã, coloca um a
    $foto = str_replace("í", "i", $foto); //quando tiver um â, coloca um a
    $foto = str_replace("à", "i", $foto); //quando tiver um á, coloca um a
    $foto = str_replace("ó", "o", $foto); //quando tiver um à, coloca um a
    $foto = str_replace("õ", "o", $foto); //quando tiver um ã, coloca um a
    $foto = str_replace("ô", "o", $foto); //quando tiver um ã, coloca um a
    $foto = str_replace("ç", "c", $foto); //quando tiver um â, coloca um a
    //transforma tudo em minúsculo
    $foto = strtolower($foto);

    // formato, cria a variavel formata tipos. mine types
    $tipos = array('image/jpg', 'image/jpeg', 'image/pjpeg', 'image/gif', 'image/png');
    //variavel arctype - arquivo - type - tipo.. pega o tipo do arquivo que esta no campo arquivo
    $arqType = $_FILES['arquivo']['type'];
    //se as duas variaveis não baterem e se foi igual a false.. então if...
    if (array_search($arqType, $tipos) == false) {
        echo "<script>alert('Formato da imagen inválido')</script>";
    } else {
        // para nunca ter um aqruivo com o mesmo nome
        if (file_exists("fotosNoticia/$foto")) {
            //insere um arquivo na pasta produtos como o nome da variavel foto
            $a = 1;
            //se existir um arquivo na pasta produtos com '1' e ter o nome $foto na frente dentro da pasta produtos
            while (file_exists("fotosNoticia/[$a]$foto")) {
                $a++; // então a variavel a incrementa
            }
            $foto = "[" . $a . "]" . $foto; // une a variavel a 1 - nome 2- nome[1]
        }
        //se não ocorrer isso, volta para a página outra vez e mostra outra msg
        //se não ocorrer o move, indica o arquivo que esta no campo arquivo e a pasta
        if (!move_uploaded_file($_FILES['arquivo']['tmp_name'], "fotosNoticia/" . $foto)) {
            echo "<script>alert('Erro ao fazer o upload')</script>";
        }


        $sqlInsert = $conn->prepare("INSERT INTO noticia(titulo,fonte,conteudo,data,foto,resumo) VALUES (?,?,?,?,?,?)");
        $sqlInsert->bindParam(1, $titulo);
        $sqlInsert->bindParam(2, $fonte);
        $sqlInsert->bindParam(3, $conteudo);
        $sqlInsert->bindParam(4, $data);
        $sqlInsert->bindParam(5, $foto);
        $sqlInsert->bindParam(6, $resumo);
        $resultado = $sqlInsert->execute();

        if ($resultado) {
            echo "<script>alert('Notícia Publicada Com Sucesso'); window.location='../publicar-noticia.php';</script>";
        } else {
            echo "<script>alert('Erro ao Publicar a Notícia');</script>";
        }
    }
}
// se GET pega a variavel apssada pela url, for igual a gravar e tiver um arquivo no campo arquivo entra no if.. se não vai pro else
    if ($_GET['funcao'] == 'gravarProduto' && is_file($_FILES['arquivo']['tmp_name'])) {

        // vai pegar o nome da variavel
        $nomeproduto = $_POST['nomeproduto'];
        $foto = $_FILES['arquivo']['name'];
        $descricao = $_POST['descricao'];
        $preco = $_POST['preco'];
        $nomecurso = $_POST['nomecurso'];


        // usa replace para substituir o acento das palavras

        $foto = str_replace(" ", "_", $foto); //quando tiver um espaço, coloca um _
        $foto = str_replace("á", "a", $foto); //quando tiver um á, coloca um a
        $foto = str_replace("à", "a", $foto); //quando tiver um à, coloca um a
        $foto = str_replace("ã", "a", $foto); //quando tiver um ã, coloca um a
        $foto = str_replace("â", "a", $foto); //quando tiver um â, coloca um a
        $foto = str_replace("é", "e", $foto); //quando tiver um á, coloca um a
        $foto = str_replace("ê", "e", $foto); //quando tiver um à, coloca um a
        $foto = str_replace("è", "e", $foto); //quando tiver um ã, coloca um a
        $foto = str_replace("í", "i", $foto); //quando tiver um â, coloca um a
        $foto = str_replace("à", "i", $foto); //quando tiver um á, coloca um a
        $foto = str_replace("ó", "o", $foto); //quando tiver um à, coloca um a
        $foto = str_replace("õ", "o", $foto); //quando tiver um ã, coloca um a
        $foto = str_replace("ô", "o", $foto); //quando tiver um ã, coloca um a
        $foto = str_replace("ç", "c", $foto); //quando tiver um â, coloca um a
        //transforma tudo em minúsculo
        $foto = strtolower($foto);

        // formato, cria a variavel formata tipos. mine types
        $tipos = array('image/jpg', 'image/jpeg', 'image/pjpeg', 'image/gif', 'image/png');
        //variavel arctype - arquivo - type - tipo.. pega o tipo do arquivo que esta no campo arquivo
        $arqType = $_FILES['arquivo']['type'];
        //se as duas variaveis não baterem e se foi igual a false.. então if...
        if (array_search($arqType, $tipos) == false) {
            echo "<script>alert('Formato da imagen inválido')</script>";
        } else {
            // para nunca ter um aqruivo com o mesmo nome
            if (file_exists("fotosProdutos/$foto")) {
                //insere um arquivo na pasta produtos como o nome da variavel foto
                $a = 1;
                //se existir um arquivo na pasta produtos com '1' e ter o nome $foto na frente dentro da pasta produtos
                while (file_exists("fotosProdutos/[$a]$foto")) {
                    $a++; // então a variavel a incrementa
                }
                $foto = "[" . $a . "]" . $foto; // une a variavel a 1 - nome 2- nome[1]
            }
            //se não ocorrer isso, volta para a página outra vez e mostra outra msg
            //se não ocorrer o move, indica o arquivo que esta no campo arquivo e a pasta
            if (!move_uploaded_file($_FILES['arquivo']['tmp_name'], "fotosProdutos/" . $foto)) {
                echo "<script>alert('Erro ao fazer o upload')</script>";
            }

            $sqlInsert = $conn->prepare("INSERT INTO produtos (nomeproduto,foto,descricao,preco,nomecurso) VALUES (?,?,?,?,?)");
            $sqlInsert->bindParam(1, $nomeproduto);
            $sqlInsert->bindParam(2, $foto);
            $sqlInsert->bindParam(3, $descricao);
            $sqlInsert->bindParam(4, $preco);
            $sqlInsert->bindParam(5, $nomecurso);

            if ($sqlInsert->execute() == true) {
                echo "<script>alert('Produto Publicada Com Sucesso'); window.location='../publicar-produto.php';</script>";
            } else {
                echo "<script>alert('Erro ao Publicar o Produto');</script>";
            }

        }
    }
    ?>