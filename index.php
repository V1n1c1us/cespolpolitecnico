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

        ul#menu li:hover {
            background: #5cb85c;
            color: white;
        }
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
                    <li class="active"><a href="#">Inicio</a></li>
                    <li><a href="#">Objetivos</a></li>
                    <li><a href="#">Associar-se</a></li>
                    <li><a href="#">Diretoria</a></li>
                    <li><a href="#">Contato</a></li>
                    <li><a href="#">Beneficios</a></li>
                    <li><a href="#">Produtos</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Noticias</h1>
                <hr>
            </div>
        </div>
        <!-- Example row of columns -->
        <div class="row">

            <?php
            $sql = $conn->query("SELECT id,titulo, to_char(data,'dd/mm/YYYY'),conteudo FROM noticia ORDER BY data DESC LIMIT 3");

            while ($linha = $sql->fetch(PDO::FETCH_OBJ)) {
                $id = $linha->id;
                $titulo = $linha->titulo;
                $data = $linha->to_char;
                $conteudo = $linha->conteudo;
                ?>
                <div class="col-md-6 col-md-4">
                    <div class="thumbnail">
                        <div class="caption">
                            <h2 class="text-center"><?php echo $titulo; ?></h2>

                            <small><i class="pull-right fa fa-calendar fa-lg"> <?php echo $data; ?></i></small>

                            <p><?php echo $conteudo; ?></p>

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
                        <li data-toggle="portfilter" data-target="colpoli">Colegio Politecnico</li>
                        <li data-toggle="portfilter" data-target="all">Ensino Medio Colegio Politecnico</li>
                        <li data-toggle="portfilter" data-target="tecnogestcoo">Tecnologo em Gestao de Cooperativas</li>
                        <li data-toggle="portfilter" data-target="media">Tecnologo em Geoprocessamento</li>
                        <li data-toggle="portfilter" data-target="media">Tecnologo em Sistemas Para Internet</li>
                        <li data-toggle="portfilter" data-target="media">Tecnico em Informatica</li>
                        <li data-toggle="portfilter" data-target="brand">Tecnico em Paisagismo</li>
                        <li data-toggle="portfilter" data-target="brand">Tecnico em Administracao</li>
                        <li data-toggle="portfilter" data-target="brand">Tecnico em Agropecuaria</li>
                        <li data-toggle="portfilter" data-target="brand">Tecnico em Alimentos</li>
                        <li data-toggle="portfilter" data-target="brand">Tecnico em Contabilidade</li>
                        <li data-toggle="portfilter" data-target="brand">Tecnico em Geoprocessamento</li>
                        <li data-toggle="portfilter" data-target="brand">Tecnico em Secretariado</li>
                        <li data-toggle="portfilter" data-target="brand">Tecnico em Meio Ambiente</li>
                        <li data-toggle="portfilter" data-target="brand">Tecnico em Zootecnia</li>
                        <li data-toggle="portfilter" data-target="art">Sistemas para Internet</li>
                        <li data-toggle="portfilter" data-target="colpoli">Pos graduacao Agricultura de Precisao</li>
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
