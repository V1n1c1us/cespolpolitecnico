<?php
/**
 * Created by PhpStorm.
 * User: 201221584
 * Date: 04/04/2016
 * Time: 16:21
 */
?>


<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.html">Portal CESPOL</a>
</div>
<!-- Top Menu Items -->
<ul class="nav navbar-right top-nav">
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
<!--            <i class="fa fa-user"></i> --><?php //echo $_SESSION['nomeusuario'];?><!-- <b class="caret"></b>-->
        </a>
        <ul class="dropdown-menu">
            <li>
                <a href="funcoes/logout.php"><i class="fa fa-fw fa-power-off"></i> Sair</a>
            </li>
        </ul>
    </li>
</ul>