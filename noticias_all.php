<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 03/05/2016
 * Time: 22:55
 */
include("DB/connect.php");
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
        li{
            list-style: none;
        }
        a {
            color: black;
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
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="#">Objetivos</a></li>
                    <li><a href="#">Associar-se</a></li>
                    <li><a href="#">Diretoria</a></li>
                    <li><a href="#">Contato</a></li>
                    <li><a href="#">Beneficios</a></li>
                    <li><a href="#">Produtos</a></li>
                    <li class="active"><a href="noticias_all.php">Notícias</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <h1 class="text-center"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Todas Noticias</h1>
                <hr>
            </div>
        </div>
        <!-- Example row of columns -->
        <div class="row">
            <?php
            $sql = $conn->query("SELECT id,titulo, to_char(data,'dd/mm/YYYY'),conteudo,foto,resumo FROM noticia ORDER BY data DESC");

            while ($linha = $sql->fetch(PDO::FETCH_OBJ)) {
                $id = $linha->id;
                $titulo = $linha->titulo;
                $data = $linha->to_char;
                $conteudo = $linha->conteudo;
                $foto = $linha->foto;
                $resumo = $linha->resumo;
                ?>
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object" src="admin/funcoes/fotosNoticia/<?php echo $foto;?>"
                                                 style="width: 200px; height: 150px; padding: 10px;">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <a href="noticia.php?id=<?php echo $id; ?>">
                                            <h3 class="media-heading fa fa-calendar fa-lg"> <?php echo $data;?> <i class="fa fa-long-arrow-right" aria-hidden="true"></i> <?php echo $titulo; ?></h3>

                                            <p><?php echo substr($resumo, 0, 200); ?>...</p>
                                        </a>
                                    </div>
                                </div>
<!--                <ul>-->
<!--                    <li>-->
<!--                        <a href="noticia.php?id=--><?php //echo $id; ?><!--">-->
<!--                            <h3 class="media-heading fa fa-calendar fa-lg">-->
<!--                                --><?php //echo $data; ?>
<!--                                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>-->
<!--                                --><?php //echo $titulo; ?>
<!--                            </h3>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                </ul>-->
<!---->
<!--                                <div class="col-md-7">-->
<!--                                    <a href="#">-->
<!--                                        <img class="img img-responsive" src="admin/funcoes/fotosNoticia/--><?php //echo $foto; ?><!--" style="width:700px;height: 300px; padding: 10px;">-->
<!--                                    </a>-->
<!--                                </div>-->
<!--                                <div class="col-md-5">-->
<!--                                    <h3>--><?php //echo $titulo; ?><!--</h3>-->
<!--                                    <h4>-->
<!--                                        <small><i class="fa fa-calendar fa-lg"> --><?php //echo $data; ?><!--</i></small>-->
<!--                                    </h4>-->
<!--                                    <p>--><?php //echo substr($resumo, 0, 200); ?><!--...</p>-->
<!--                                    <a class="btn btn-primary" href="noticia.php?id=--><?php //echo $id; ?><!--">Leia-->
<!--                                        Mais..<span class="glyphicon glyphicon-chevron-right"></span></a>-->
<!--                                </div>-->
                <?php
            }
            ?>
        </div>
        <hr>
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

