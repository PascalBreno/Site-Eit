<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
  <title>escritório de inovação e tecnologia</title>
 
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
 <!-- Importar arquivos AQUI -->
  <link href="css/style.css"  rel="stylesheet"/> 
  <link rel= "stylesheet" href="css/bootstrap.css"/>
  <link rel= "stylesheet" href="css/dataTables.bootstrap4.css"/>
  <script type="text/javascript" src="js/jquery-3.2.1.js"> </script>
  <script type="text/javascript" src="js/bootstrap.js"> </script>
  <script type="text/javascript" src="js/jquery.dataTables.js"> </script>
  <script type="text/javascript" src="js/dataTables.bootstrap4.js"> </script>  
</head>
    <body>

    <div class = "container-fluid">


<!-- Menu, não mudar entre as novas abas -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light " >
    <a class="navbar-brand" href="#">EIT</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
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
 
 
 
 
<!-- Conteúdo da página em questão, usar para diferenciar entre ambas-->
  <!-- Conexão -->
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
      <br/> 
      <br/>
      <br/>


<div class ="row">
<div class="col col-md-2"></div>
  <div class ="col col-md-8">
    <table class="table" id="tabela1">
    <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Jornada</th>
      <th scope="col">Formação</th>
      <th scope="col">Lotação</th>
      <th scope="col">Local de Exercicio</th>
      <th scope="col">Campus</th>
    </tr>
    </thead>
    <tbody>
    <?php 
      session_start();
      include "config.php";
      if(isset($_POST['submit'])) {
        $pesquisa = $_POST['pesquisar_input'];
        $_SESSION['pesquisar_input'] = $pesquisa;
      }
      $pesquisar = $_SESSION['pesquisar_input'];
      $sql=("SELECT * from professor  where nome like  '".$pesquisar."%'  ORDER BY nome collate utf8_general_ci ");
      $res = mysqli_query($conn, $sql);
      while ($registro = mysqli_fetch_row($res)) {
        $variavel1 = $registro[1]; 
        $variavel3 = $registro[3];     
        $variavel4 = $registro[4];
        $variavel5 = $registro[5];  
        $variavel6 = $registro[6];     
        $variavel7 = $registro[7];
        echo'<tr><td>'.$variavel1.'</td>';
        echo'<td>'.$variavel3.'</td>';
        echo'<td>'.$variavel4.'</td>';
        echo'<td>'.$variavel5.'</td>';
        echo'<td>'.$variavel6.'</td>';
        echo'<td>'.$variavel7.'</td></tr>';
       }
    ?>
    </tbody>
    </table>
    <p class="noticiadeDE">*DE = Dedicação Exclussiva </p>
    </div>
    <div class="col col-md-2"></div>
</div>



<!-- Parte executada pelo javascript-->
    <script type="text/javascript">
    $(document).ready(function() {
      $('#tabela1').DataTable(
              {
            "language": {
              "sEmptyTable": "Nenhum registro encontrado",
              "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
              "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
              "sInfoFiltered": "(Filtrados de _MAX_ registros)",
              "sInfoPostFix": "",
              "sInfoThousands": ".",
              "sLengthMenu": "_MENU_ resultados por página",
              "sLoadingRecords": "Carregando...",
              "sProcessing": "Processando...",
              "sZeroRecords": "Nenhum registro encontrado",
              "sSearch": "Pesquisar",
              "oPaginate": {
                  "sNext": "Próximo",
                  "sPrevious": "Anterior",
                  "sFirst": "Primeiro",
                  "sLast": "Último"
              },
              "oAria": {
                  "sSortAscending": ": Ordenar colunas de forma ascendente",
                  "sSortDescending": ": Ordenar colunas de forma descendente"
              }
          },
          "bFilter":false,
          "pageLength": 5,
        });
   } );
  </script>
    
    <footer class="mainfooter" style="bottom:0px;"role="contentinfo">
      <div >
    <div class="footer-bottom">
      <div class="container">  
          <center>
            <p class="text-xs-center"><a target="_blank" href="https://www.facebook.com/eitufmt/"> @Facebook</a> <a target="_blank" href="https://www.instagram.com/eitufmt"> @instagram </a></p>
            <p class="text-xs-center" >&copy; Copyright 2018 - UFMT - Todos os direitos reservados.</p>
          </center>
        </div>
      </div>
    </div>
  </footer>
  </div>
  
  </body>
</html>