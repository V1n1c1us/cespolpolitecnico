<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 21/04/2016
 * Time: 22:34
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CESPOL - Cadastra Notícia</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/admin.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" media="all"  href="../css/fileinput.css">
    <link rel="stylesheet" type="text/css" media="all"  href="../css/fileinput.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="../js/fileinput.js"></script>
    <script type="text/javascript" src="../js/fileinput_locale_pt-BR.js"></script>
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>
</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Navigation -->

        <?php include('Views/header.php'); ?>

        <?php include('Views/menu.php'); ?>

    </nav>
    <div id="page-wrapper">

        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        <i class="fa fa-newspaper-o"></i> Publicar Notícia
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="principal.php">Início</a></li>
                        <li class="active">Publicar Notícia</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <?php include('Views/noticia-form.php');?>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
<!-- /#page-wrapper -->

<script src="../js/upload.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</body>
</html>

