<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 01/04/2016
 * Time: 14:57
 */
include('../DB/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CESPOL - Colégio Politécnico</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/login.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script type="text/javascript">
        $(function () {

            var $btn = $("#logar");

            $("#login, #senha").on('keyup', function () {
                if ($('#login').is(':valid') && $('#senha').is(':valid')) {
                    $btn.removeAttr('disabled');
                } else {
                    $btn.attr("disabled", "disabled");
                }
            });

        });
    </script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <section class="login-form">
                <form method="post" action="funcoes/autenticaLogin.php" role="login"
                      style="background: #f7f7f7; transform: none; transition: all 0s ease 0s; box-shadow: rgba(0,0,0,0.298039) 0px 2px 2px 0px;">
                    <img id="imgCspol"
                         src="http://static.wixstatic.com/media/d63bb2_6bdc25bd77a9e7c7566fc2e2314a5193.jpg_512"
                         class="img img-responsive" alt=""/>
                    <input type="text" name="login" id="login" placeholder="Email" class="form-control input-lg"
                           required/>
                    <input type="password" class="form-control input-lg" id="senha" placeholder="Password" name="senha"
                           required/>
                    <button type="submit" id="logar" class="btn btn-lg btn-primary btn-block" disabled>Entrar
                    </button>
                </form>
                <div class="form-links">
                    <a href="www.politecnico.ufsm.br" target="_blank"
                       style="color: #fff; "><b>www.politecnico.ufsm.br</b></a>
                </div>
            </section>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

</body>
</html>

