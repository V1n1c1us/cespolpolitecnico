<?php
/**
 * Created by PhpStorm.
 * User: 201221584
 * Date: 20/04/2016
 * Time: 15:39
 */
include('DB/connect.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CESPOL</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/justified-nav.css" rel="stylesheet">
    <link href="css/filter.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="js/teste.js"></script>

    <![endif]-->
    <style>
        * {
            font-family: 'Oswald', sans-serif;
        }

        hr {
            border: 0;
            height: 1px;
            background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));

        }

        li {
            list-style: none;
        }

        ul#menu li.box {
            box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 6px 0px;
        }

        ul#menu li:hover {
            background: #5cb85c;
            color: white;
        }

        .thumbnail {
            box-shadow: rgba(0, 0, 0, 0.2) 0px 0px 6px 0px;
        }

        /*#box1 {*/
        /*box-shadow: 0 0 10px #000000;*/
        /*-moz-box-shadow: 0 0 10px #000000;*/
        /*-webkit-box-shadow: 0 0 10px #000000;*/
        /*}*/
    </style>
</head>
<body>
<div class="container">
    <!-- The justified navigation menu is meant for single line per list item.
         Multiple lines will require custom code not provided by Bootstrap.
           <!-- Jumbotron -->
    <div class="jumbotron">
        <img class="img img-responsive center-block"
             src="http://static.wixstatic.com/media/d63bb2_6bdc25bd77a9e7c7566fc2e2314a5193.jpg_512"
             style="width: 250px; margin-bottom: 10px;">

        <h2 style="text-center">Cooperativa-Escola dos Estudantes do Colégio Politécnico da UFSM Ltda</h2>

        <div class="masthead">
            <nav>
                <ul class="nav nav-justified">
                    <li class="active"><a href="index.php">Inicio</a></li>
                    <li><a href="#">Objetivos</a></li>
                    <li><a href="#">Associar-se</a></li>
                    <li><a href="#">Diretoria</a></li>
                    <li><a href="#">Contato</a></li>
                    <li><a href="#">Beneficios</a></li>
                    <li><a href="#">Produtos</a></li>
                    <li><a href="noticias_all.php">Notícias</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <h1 class="text-center"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Noticias</h1>
                <hr>
            </div>
        </div>
        <!-- Example row of columns -->
        <div class="row">
            <?php
            $sql = $conn->query("SELECT id,titulo, to_char(data,'dd/mm/YYYY'),conteudo,foto,resumo FROM noticia ORDER BY data DESC LIMIT 3");

            while ($linha = $sql->fetch(PDO::FETCH_OBJ)) {
                $id = $linha->id;
                $titulo = $linha->titulo;
                $data = $linha->to_char;
                $conteudo = $linha->conteudo;
                $foto = $linha->foto;
                $resumo = $linha->resumo;
                ?>
                <div class="col-xs-4 col-md-4 col-lg-4">
                    <div class="thumbnail" id="box1">
                        <img class="img img-responsive" src="admin/funcoes/fotosNoticia/<?php echo $foto; ?>">

                        <div class="caption">
                            <h2 class="text-center"><?php echo $titulo; ?></h2>

                            <small><i class="pull-right fa fa-calendar fa-lg"> <?php echo $data; ?></i></small>

                            <p><?php echo substr($resumo, 0, 200); ?>...</p>

                            <p><a class="btn btn-primary" href="noticia.php?id=<?php echo $id; ?>" role="button">Leia
                                    Mais.. &raquo;</a></p>

                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
        <hr>
        <h1 class="text-center"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Produtos</h1>

        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 text-center">
                    <ul id="menu">
                        <li class="btn box" data-toggle="portfilter" data-target="all">Produtos</li>
                        <li class="btn box" data-toggle="portfilter" data-target="colpoli">Colegio Politecnico</li>
                        <li class="btn box" data-toggle="portfilter" data-target="empoli">Ensino Medio Colegio
                            Politecnico
                        </li>
                        <li class="btn box" data-toggle="portfilter" data-target="tecnogestcoo">Tecnologo em Gestao de
                            Cooperativas
                        </li>
                        <li class="btn box" data-toggle="portfilter" data-target="tecnogeo">Tecnologo em
                            Geoprocessamento
                        </li>
                        <li class="btn box" data-toggle="portfilter" data-target="tecnosist">Tecnologo em Sistemas Para
                            Internet
                        </li>
                        <li class="btn box" data-toggle="portfilter" data-target="tecinfo">Tecnico em Informatica</li>
                        <li class="btn box" data-toggle="portfilter" data-target="tecpa">Tecnico em Paisagismo</li>
                        <li class="btn box" data-toggle="portfilter" data-target="tecadm">Tecnico em Administracao</li>
                        <li class="btn box" data-toggle="portfilter" data-target="tecagro">Tecnico em Agropecuaria</li>
                        <li class="btn box" data-toggle="portfilter" data-target="tecalim">Tecnico em Alimentos</li>
                        <li class="btn box" data-toggle="portfilter" data-target="teccont">Tecnico em Contabilidade</li>
                        <li class="btn box" data-toggle="portfilter" data-target="tecgeo">Tecnico em Geoprocessamento
                        </li>
                        <li class="btn box" data-toggle="portfilter" data-target="tecsec">Tecnico em Secretariado</li>
                        <li class="btn box" data-toggle="portfilter" data-target="tecma">Tecnico em Meio Ambiente</li>
                        <li class="btn box" data-toggle="portfilter" data-target="teczoo">Tecnico em Zootecnia</li>
                        <li class="btn box" data-toggle="portfilter" data-target="colpoli">Pos graduacao Agricultura de
                            Precisao
                        </li>
                    </ul>
                    <br/>
                    <ul class="gallery">
                        <?php

                        $sqlSelect = $conn->query("SELECT * FROM produtos");

                        while ($linha = $sqlSelect->fetch(PDO::FETCH_OBJ)) {
                            $id = $linha->id;
                            $nomeproduto = $linha->nomeproduto;
                            $foto = $linha->foto;
                            $descricao = $linha->descricao;
                            $preco = $linha->preco;
                            $nomecurso = $linha->nomecurso;
                            ?>
                            <li class="col-lg-3 col-md-3 clearfix" data-tag='<?php echo $nomecurso; ?>'>
                                <div class="hoverzoom">
                                    <img class="img img-responsive"
                                         src="admin/funcoes/fotosProdutos/<?php echo $foto; ?>">
                                </div>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Site footer -->
        <footer class="footer">
            <p>&copy; 2015 Company, Inc.</p>
        </footer>

    </div> <!-- /container -->
    <script type="text/javascript">
        $(function () {
            //Initialize filterizr with default options
            $('.filtr-container').filterizr();
        });
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.filterizr.js"></script>

    <script src="js/bootstrap-portfilter.js"></script>
    <script src="js/bootstrap-portfilter.min.js"></script>
</body>
</html>

