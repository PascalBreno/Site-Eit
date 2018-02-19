<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>escritório de inovação e tecnologia</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="stylesheet"  href="css/bootstrap.min.css" />
  <link href="css/style.css"  rel="stylesheet">  
    </head>
    <body>


  <?php 
    session_start();
    include "config.php";  
?>
<!-- Menu, não mudar entre as novas abas -->


    <nav class="navbar navbar-expand-lg navbar-light bg-light " >
    <a class="navbar-brand" >EIT</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>    
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://www.ufmt.br/eit/">Site do EIT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contato</a>
        </li>
      </ul>
    </div>
  </nav>


<<<<<<< HEAD
<!--Aba de pesquisa, só retirar se necessário!!!-->

<!--
=======
<!-- Conteúdo da página em questão, usar para diferenciar entre ambas-->


>>>>>>> master
      <form "form-inline"  action = "pesquisa.php" id="pesquisa_submit" name ="signup" method="post">
        <div class="row">
          <div class="col col-md-2"></div>
          <div class=" col col-md-8" >
            <div class="input-group input-group-lg col col-md-11" style="padding:20px 50px 0px 50px;">
              <input type="text" name = "pesquisar_input" class="form-control" placeholder="Faça sua pesquisa aqui" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
              <div class="col col-md-1">
                <input type="submit" value="Pesquisar" name="submit" class="btn btn-xs btn-primary botao " style="width:100px"></input>
              </div>
            </div>
          </div>  
          <div class="col col-md-2"> </div>    
        </div>
      </form>
-->  
<!-- Conteudo do menhu inicial-->
    <br><br>
    <main role="main" class="inner cover">
    <div class ="row">
      <div class = "col col-md-3"></div>
        <div class="col col-md6" >
          <h1 class="cover-heading">Escritório de Inovação e Tecnologia</h1>
          <div class="col col-md-3"></div>
          <div class ="col col-md6">
            <br></br>
            <center>
              <p class="lead"> O Escritório de Inovação Tecnológica (EIT) é o Núcleo de Inovação Tecnológica da Universidade Federal de Mato Grosso, criado pela Resolução CD nº 18/2007 e atualizado por meio da Resolução CD nº 17/2016 em consonância com o Novo Marco Legal da Inovação conforme disposto na Lei nº 13.243/2016... ​</p>
            </center>
          </div> 
          <br></br>
          <br></br>
          <center>
            <p class="lead">
              <a href="http://www.ufmt.br/ufmt/un/eit" target="_blank" class="btn btn-success">Ler mais</a>
              <a href="PesquisarPatentes.php" class="btn btn-primary">Pesquisar Patentes </a>
              <a href="PesquisarEmpresas.php" class="btn btn-primary">Pesquisar Empresas </a>
              <a href="pesquisa.php" class ="btn btn-primary">Pesquisar Professores </a>
            </p>
          </center>
          <div class="col col-md-3"></div>
        </div>
      <div class="col col-md-3"></div>
    </div>
    </main>
    </body>

<!-- Conexão -->



</html>