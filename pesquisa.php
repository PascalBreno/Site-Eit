<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
  <title>escritório de inovação e tecnologia</title>
 
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
 
  <link rel="stylesheet"  href="css/bootstrap.min.css"/>
  <link href="css/style.css"  rel="stylesheet"/> 
  <link rel= "stylesheet" href="css/bootstrap4.css"/>
  <link rel= "stylesheet" href="css/bootstrap4.min.css"/>
  <script type="text/javascript" src="js/jquery.datatables.bootstrap4.js"> </script>
  <script type="text/javascript" src="js/jquery.js"> </script>
  <script type="text/javascript" src="js/jquery.datatables.min.js"> </script>
  <script type="text/javascript" src="js/bootstrap.min.js"> </script>

    </head>
    <body>
<!-- Menu, não mudar entre as novas abas -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light " >
    <a class="navbar-brand" href="#">EIT</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>    
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
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
<script type="text/javascript">
$(document).ready(function() {
  $('#tabela1').DataTable();
} );
</script>

<div class ="row">
<div class="col col-md-2"></div>
  <div class ="col col-md-8">
    <table class="table" id="tabela1">
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Sexo</th>
      <th scope="col">Jornada</th>
      <th scope="col">Formação</th>
    </tr>
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
        $variavel2 = $registro[2];  
        $variavel3 = $registro[3];     
        $variavel4 = $registro[4];
        echo'<tr><td>'.$variavel1.'</td>';
        echo'<td>'.$variavel2.'</td>';
        echo'<td>'.$variavel3.'</td>';
        echo'<td>'.$variavel4.'</td></tr>';
       }
    ?>
    </table>
    </div>
    <div class="col col-md-2"></div>
</div>
 
    </body>
</html>