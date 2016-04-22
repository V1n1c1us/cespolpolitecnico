<?php
/**
 * Created by PhpStorm.
 * User: 201221584
 * Date: 20/04/2016
 * Time: 18:07
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
    <style>
        * {
            font-family: 'Oswald', sans-serif;
        }

        hr {
            border: 0;
            height: 1px;
            background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
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
            <?php
            $id = $_GET['id'];
            $sql = $conn->query("SELECT *, to_char(data,'dd/mm/YYYY') FROM noticia WHERE id = '$id'");

            while ($linha = $sql->fetch(PDO::FETCH_OBJ)) {
                $id = $linha->id;
                $titulo = $linha->titulo;
                $data = $linha->to_char;
                $conteudo = $linha->conteudo;
                $foto = $linha->foto;
                ?>
                <h1 class="text-center"><i class="fa fa-newspaper-o" aria-hidden="true"></i> <?php echo $titulo; ?></h1>
                <hr>
                <div class="col-md-6">
                    <?php if (empty($foto)) { ?>
                        <img class="img img-responsive center-block"
                             src="http://static.wixstatic.com/media/d63bb2_6bdc25bd77a9e7c7566fc2e2314a5193.jpg_512"
                             alt="" style="height: 250px;">
                        <?php
                    } else {
                        ?>
                        <img class="img-responsive" src="admin/funcoes/fotosNoticia/<?php echo $foto; ?>"
                             alt="<?php echo $titulo; ?>">
                        <?php
                    }
                    ?>
                </div>

                <div class="col-md-6">
                    <p><i class="pull-right fa fa-calendar fa-lg"> <?php echo $data; ?></i></p>

                    <p> <?php echo $conteudo; ?> </p>
                </div>
                <?php
            }
            ?>
        </div>
        <!-- Site footer -->
        <footer class="footer">
            <p>&copy; 2015 Company, Inc.</p>
        </footer>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.filterizr.js"></script>

    <script src="js/bootstrap-portfilter.js"></script>
    <script src="js/bootstrap-portfilter.min.js"></script>
</body>
</html>
