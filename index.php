<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Escritório de inovação e tecnologia</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Importar arquivos AQUI -->
    <link href="css/style.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/dataTables.bootstrap4.css"/>
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="js/dataTables.bootstrap4.js"></script>
</head>
<body>


<?php
session_start();
include "config.php";
?>
<!-- Menu, não mudar entre as novas abas -->

<div class="container-fluid">

    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <a class="navbar-brand" href="#">EIT</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" target="_blank" href="http://www.ufmt.br/eit/">Site do EIT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contato</a>
                </li>
            </ul>
        </div>
    </nav>


    <!--Parte da Pesquisa-->


    <!-- Conteudo do menhu inicial-->
    <br><br>
    <main role="main" class="inner cover">
        <div class="row">
            <div class="col col-md-3"></div>
            <div class="col col-md6">
                <center>
                    <h1 class="cover-heading fontLinux">Escritório de Inovação e Tecnologia</h1>
                </center>
                <div class="col col-md-3"></div>
                <div class="col col-md6">
                    <br></br>
                    <center>
                        <p class="lead "> O Escritório de Inovação Tecnológica (EIT) é o Núcleo de Inovação Tecnológica
                            da Universidade Federal de Mato Grosso, criado pela Resolução CD nº 18/2007 e atualizado por
                            meio da Resolução CD nº 17/2016 em consonância com o Novo Marco Legal da Inovação conforme
                            disposto na Lei nº 13.243/2016... ​</p>
                    </center>
                </div>
                <br></br>
                <br></br>
                <center>
                    <p class="lead">
                        <a href="http://www.ufmt.br/ufmt/un/eit" target="_blank" class="btn btn-success">Ler mais</a>
                        <a href="PesquisarPatentes.php" class="btn btn-primary">Pesquisar Patentes </a>
                        <a href="PesquisarEmpresas.php" class="btn btn-primary">Pesquisar Empresas </a>
                        <a href="pesquisa.php" class="btn btn-primary">Pesquisar Professores </a>
                    </p>
                </center>
                <div class="col col-md-3"></div>
            </div>
            <div class="col col-md-3"></div>
        </div>
    </main>
</body>
<br>
<br>
<br>
<br>
<footer class="mainfooter" style="bottom:0px;" role="contentinfo">
    <div>
        <div class="footer-bottom">
            <div class="container">
                <center>
                    <p class="text-xs-center"><a target="_blank" href="https://www.facebook.com/eitufmt/"> @Facebook</a>
                        <a target="_blank" href="https://www.instagram.com/eitufmt"> @instagram </a></p>
                    <p class="text-xs-center">&copy; Copyright 2018 - UFMT - Todos os direitos reservados.</p>
                </center>
            </div>
        </div>
    </div>
</footer>
</div>
</div>
</html>
