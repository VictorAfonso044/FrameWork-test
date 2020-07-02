<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Teste 4</title>  
    <meta name="keywords" content="">
    <meta name="description" content="Teste tecnico padawan">
    <meta name="author" content="Victor Afonso">
    <link rel="stylesheet" href="style.css">    
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
</head>
<body>
<nav class="navbar navbar-inverse ">
  <div class="container-fluid justify-content-center">
    <ul class="nav navbar-nav ">
      <li  class=" nav-link"><a href="index.php">Home</a></li>
      <li class="nav-link"><a href="todos.php" x>Todos</a></li>
      <li class="nav-link"><a href="postagens.php" >Postagens</a></li>
      <li class="nav-link"><a href="albuns.php">Albuns</a></li>
    </ul>
  </div>
</nav>
<h1 class="justify-content-center mb-50"> Informe o numero de dados que deseja:</h1>
<h6 class="justify-content-center" style="font-weight:bold;">Maximo: 100  </h6>
<form class="navbar-form justify-content-center " action="albuns.php" metod="get">
  <div class="input-group">
    <input name='num' type="number" class="form-control" placeholder="Numero de elementos" max="100">
    <div class="input-group-btn">
      <button class="btn btn-info" type="submit">
        <i class="glyphicon glyphicon-search"></i>
      </button>
    </div>
  </div>
</form>
 <table class="responstable ">

  <tr>
    <th>User Id</th>
    <th>Id</th>
    <th>titulo</th>
  </tr>
      <?php
  error_reporting(0);       
  $inc= $_GET["num"] + 1;
  for( $i=1 ;$i<$inc;$i++){
  $url = "https://jsonplaceholder.typicode.com/albums/". $i;
  $data = json_decode(file_get_contents($url));

  ?>
  <tr>
    <td><?= $data->userId ?></td>
    <td><?= $data->id ?></td>
    <td><?= $data->title ?></td>
  </tr>
<?php
  }
  ?>
</table>
</body>
</html>
<script>
    $(window).on("load resize ", function() {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();
</script>
