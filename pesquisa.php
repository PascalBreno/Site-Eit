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


<!-- Menu, não mudar entre as novas abas -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light " >
<<<<<<< HEAD
    <a class="navbar-brand">EIT</a>
=======
    <a class="navbar-brand" href="#">EIT</a>
>>>>>>> master
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>    
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
<<<<<<< HEAD
          <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
=======
          <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
>>>>>>> master
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
<!-- Conteúdo para a Pesquisa-->
  <form "form-inline"  action = "pesquisa.php" id="pesquisa_submit" name ="signup" method="post">
  <div class="row">
    <div class="col col-md-2"></div>
    <div class=" col col-md-8" >
      <div class="input-group input-group-lg col col-md-11" style="padding:20px 50px 0px 50px;">
        <input type="text" name = "pesquisar_input" class="form-control" placeholder="Faça sua pesquisa aqui" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
        <div class="col col-md-1">
          <input type="submit" value="Pesquisar" name="submit" class="btn  btn-primary botao " style="width:100px"></input>
        </div>
      </div>
    </div>  
    <div class="col col-md-2"> </div>    
  </div>
</form>

      <br/> 
      <br/>
      <br/>
<!-- Resultado da pesquisa-->
<div class ="row">
<div class="col col-md-1"></div>
  <div class ="col col-md-9">
=======
<!-- Conteúdo da página em questão, usar para diferenciar entre ambas-->
  <!-- Conexão -->
  <form "form-inline" action="pesquisa.php">
        <div class="row">
          <div class="col col-md-2"></div>
          <div class=" col col-md-8" >
            <div class="input-group input-group-lg col col-md-11" style="padding:20px 50px 0px 50px;">
              <input type="text" class="form-control" placeholder="Faça sua pesquisa aqui" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
              <div class="col col-md-1">
                <button type="button" class="btn btn-xs btn-primary botao "><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Pesquisar </button>
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
>>>>>>> master
    <table class="table">
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Sexo</th>
      <th scope="col">Jornada</th>
      <th scope="col">Formação</th>
<<<<<<< HEAD
      <th scope="col">Lotação</th>
      <th scope="col">Local de Exercício</th>
      <th scope="col">Campus</th>
=======
>>>>>>> master
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
<<<<<<< HEAD
        $variavel5 = $registro[5]; 
        $variavel6 = $registro[6];
        $variavel7 = $registro[7];
        echo'<tr><td>'.$variavel1.'</td>';
        echo'<td>'.$variavel2.'</td>';
        echo'<td>'.$variavel3.'</td>';
        echo'<td>'.$variavel4.'</td>';
        echo'<td>'.$variavel5.'</td>';
        echo'<td>'.$variavel6.'</td>';
        echo'<td>'.$variavel7.'</td></tr>';
=======
        echo'<tr><td>'.$variavel1.'</td>';
        echo'<td>'.$variavel2.'</td>';
        echo'<td>'.$variavel3.'</td>';
        echo'<td>'.$variavel4.'</td></tr>';
>>>>>>> master
       }
    ?>
    </table>
    </div>
<<<<<<< HEAD
    <div class="col col-md-1"></div>
=======
    <div class="col col-md-2"></div>
>>>>>>> master
</div>

    </body>
</html>