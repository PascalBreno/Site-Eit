<?php 
      session_start();
      include "config.php";
?>
<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
  <title>Escritório de inovação e tecnologia</title>
 
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
    <nav class="navbar navbar-expand-lg navbar-light bg-light posicaomenu" >
    <a class="navbar-brand font fontRoboto" href="#">EIT</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>    
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">   
        <li class="nav-item active">
          <a class="nav-link fontRoboto" href="index.php">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link fontRoboto" target="_blank" href="http://www.ufmt.br/eit/">Site do EIT</a>
        </li>
        <li class="nav-item">
        <a class="nav-link fontRoboto" href="#">Contato</a>
        </li>
      </ul>
    </div>
  </nav>
   
<!-- Barra de Pesquisa-->
  <form "form-inline" class="tabelaPesquisa" action = "pesquisa.php" id="pesquisa_submit" name ="signup" method="post">
  <div class="row">
    <div class="col col-md-2"></div>
    <div class=" col col-md-8" >
      <div class="input-group input-group-lg col col-md-11" style="padding:20px 50px 0px 50px;">
        <input type="text " required name = "pesquisar_input" class="form-control" placeholder="Faça sua pesquisa aqui" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
        <div class="col col-md-1">
          <input type="submit" value="Pesquisar" name="submit" class="btn btn-xs btn-primary botao " style="width:100px"></input>
        </div>
      </div>
    </div>  
    <div class="col col-md-2"> </div>    
  </div>
  <!--Botão de seleção de pesquisa-->
  <div class="row">
    <div class="col col-md-2"></div>
    <div class=" col col-md-8" >
      <!-- Aqui ficam as opções de pesquisa-->
        <div class="opcaodepesquisa">
          <a class="fontRoboto pesquisapor">Pesquisa por:</a>
          <div type="radios">  
            <label class="radio-inline fontRoboto radio1"><input type="radio" required value="nome" name="optradio">Nome  </label>
            <label class="radio-inline fontRoboto radio1"><input type="radio" value = "Lotacao" name="optradio">Departamento  </label>
            <select required class="custom-select" id="inputGroupSelect01">
              <option selected class ="fontRoboto" value="">Selecione o Campus</option>
              <option class="fontRoboto" value="cuiaba">Cuiabá</option>
              <option class="fontRoboto" value="Barra do Garças">Barra do Garças</option>
              <option class="fontRoboto" value="Rondopolis">Rondonopolis</option>
          </select>
          </div>
        </div>
        <!--Aqui ficam as opções de busca de campus-->
      </div>
   </div>
      </div>
    <div class="col col-md-2"> </div>    
  </form>   
<!-- -->

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
      if(isset($_POST['submit'])) {
        $pesquisa = $_POST['pesquisar_input'];
        $pesquisapor=$_POST['optradio'];
        $campus=$_POST['inputGroupSelect01'];
        echo $campus;
        $_SESSION['pesquisar_input'] = $pesquisa;
        if($pesquisa==NULL){
          $pesquisa=' ';
          $pesquisapor='nome';
        }   
      $pesquisar = $_SESSION['pesquisar_input'];
      $sql=("SELECT * from professor  where ".$pesquisapor." like '".$pesquisar."%' ORDER BY nome");
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
      }
    ?>
    </tbody>
    </table>
    <p class="noticiadeDE">*DE = Dedicação Exclusiva </p>
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
            <a target="_blank" href="https://www.facebook.com/eitufmt/"><img class="facebook" src="img/icons/Facebook.png"></a> 
            <a target="_blank" href="https://www.instagram.com/eitufmt"><img class="instagram"  src="img/icons/Instagram.png"></a>
            <p> Copyright 2018 - UFMT - Todos os direitos reservados.</p>
          </center>
        </div>
      </div>
    </div>
  </footer>
  </div>
  
  </body>
</html>