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

    <!-- TÍTULO -->
    <center>
        <h1 class="titulolab">
            Título do Laboratório
        </h1>
    </center>
    <!--  Fim  -->


    <!-- Slides -->
    <div class="row slidecomtexto">
        <div class="col col-md-7">
            <div id="carouselExampleControls" class="carousel slide slidepersonalizado" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block img-fluid" src="img/TestePhP/01.png" height="500px" width="350px"
                             alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="img/TestePhP/02.png" height="500px" width="350px"
                             alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="img/TestePhP/03.png" height="500px" width="350px"
                             alt="Third slide">
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col col-md-5 descricao">
            <h2>Área de atuação: AreaX</h2>
                <br/>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque finibus diam a odio mollis
                    laoreet. Ut quis facilisis augue.
                    Vestibulum erat nisl, pulvinar id varius quis, scelerisque ut magna. Aliquam non odio iaculis enim
                    fermentum convallis sed non tellus.
                    Aliquam eget maximus mauris. Nam a nisi risus. Morbi fermentum nunc porttitor erat cursus, sagittis
                    feugiat justo tempus.
                    Suspendisse et elit sed arcu sodales fringilla. Morbi iaculis diam neque, a suscipit tortor
                    tincidunt eget. Ut ac tincidunt justo, sed vestibulum tellus.
                    Maecenas eget scelerisque ante. Donec congue sapien ut tortor bibendum volutpat. Donec congue luctus
                    sem id condimentum. Suspendisse purus eros,
                    molestie in iaculis et, iaculis eget lacus. Sed viverra tempus dolor eu laoreet. Pellentesque
                    faucibus leo eget dolor lobortis posuere.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Pellentesque finibus diam a odio mollis laoreet. Ut quis facilisis augue.
                    Vestibulum erat nisl, pulvinar id varius quis, scelerisque ut magna. Aliquam non odio iaculis enim
                    fermentum convallis sed non tellus.
                    Aliquam eget maximus mauris. Nam a nisi risus.Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit. Pellentesque finibus diam a odio mollis laoreet. Ut quis facilisis augue.
                    Vestibulum erat nisl, pulvinar id varius quis, scelerisque ut magna. Aliquam non odio iaculis enim
                    fermentum convallis sed non tellus.
                    Aliquam eget maximus mauris. Nam a nisi risus.
                </p>
        </div>
    </div>
    <hr class="linhaabaixo"/>
    <!-- Fim do Slide e descrição -->
    <!-- Nome dos responsáveis -->


    <div class="row">
        <div class="col col-md-1"></div>
        <div class="col col-md-5 ">
            <h2 class="responsaveis">
                <center>Responsáveis</center>
            </h2>
            <table class="table table-hover tabelaresponsaveistd" id="tabelaresponsavel">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Curriculo</th>
                    <th>Função</th>
                </tr>
                </thead>
                <tr>
                    <td>Pessoa1</td>
                    <td><a href="www.google.com.br" TARGET="_blank">google</a></td>
                    <td>Diretor</td>
                </tr>
                <tr>
                    <td>Pessoa2</td>
                    <td><a HREF="www.youtube.com.br" TARGET="_blank">youtube</a></td>
                    <td>Coordenador</td>
                </tr>
            </table>
        </div>
        <div class="col col-md-5">
            <h2 class="responsaveis">
                <center>Equipe</center>
            </h2>
            <table class="table table-hover tabelaresponsaveistd" id="tabelaEquipe">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Curriculo</th>
                    <th>Função</th>
                </tr>
                </thead>
                <tr>
                    <td>Pessoa1</td>
                    <td><a href="www.google.com.br" TARGET="_blank">google</a></td>
                    <td>Diretor</td>
                </tr>
                <tr>
                    <td>Pessoa2</td>
                    <td><a HREF="www.youtube.com.br" TARGET="_blank">youtube</a></td>
                    <td>Coordenador</td>
                </tr>
            </table>
        </div>
        <div class="col col-md-1"></div>
    </div>
    <hr class="linhaabaixo"/>
    <!-- Fim do nome dos responsáveis e Equipe -->
    <div class="row">
        <div class="col col-md-2"></div>
        <div class="col col-md-8">
            <h2>
                <center>Projetos</center>
            </h2>
            <table class="table table-hover tabelaresponsaveistd" id="tabelaProjetos">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Link para informações</th>
                    <th>Responsável</th>
                </tr>
                </thead>
                <tr>
                    <td>Extração de Dados</td>
                    <td><a href="www.google.com.br" TARGET="_blank">artigo</a></td>
                    <td>Ariel dos Santos</td>
                </tr>
                <tr>
                    <td>WEB</td>
                    <td><a HREF="www.youtube.com.br" TARGET="_blank">youtube</a></td>
                    <td>Pascal Monet</td>
                </tr>
            </table>
        </div>
        <div class="col col-md-2"></div>
    </div>
    <!-- Fim dos Projetos -->
    <hr class="linhaabaixo"/>
    <!-- Contatos -->
    <div class="row">
        <div class="col col-md-1"></div>
        <div class="col col-md-10">
            <h2>
                <center> Contatos</center>
            </h2>
            <a>Telefone : (99) 9 9999-9999</a>
            <a>Email: Eit.inovacao@gmail.com</a>
            <a>Horário de atendimento</a>
            <a>Local do laboratório</a>
        </div>
        <div class="col col-md-1"></div>
    </div>
    <!--Fim da aba Contatos -->

    <footer class="mainfooter" style="bottom:0px;" role="contentinfo">
        <div>
            <div class="footer-bottom">
                <div class="container">
                    <center>
                        <p class="text-xs-center"><a target="_blank" href="https://www.facebook.com/eitufmt/">
                                @Facebook</a> <a target="_blank" href="https://www.instagram.com/eitufmt">
                                @instagram </a></p>
                        <p class="text-xs-center">&copy; Copyright 2018 - UFMT - Todos os direitos reservados.</p>
                    </center>
                </div>
            </div>
        </div>
    </footer>
</div>
</div>
</body>
</html>
