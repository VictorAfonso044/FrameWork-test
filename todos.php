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

 <table class="responstable ">

  <tr>
    <th>User Id</th>
    <th>Id</th>
    <th>titulo</th>
    <th>Completamente</th>
  </tr>
      <?php
  $inc= 16 ;
  for( $i=1 ;$i<$inc;$i++){
  $url = "https://jsonplaceholder.typicode.com/todos/". $i;
  $data = json_decode(file_get_contents($url));

  ?>
  <tr>
    <td><?= $data->userId ?></td>
    <td><?= $data->id ?></td>
    <td><?= $data->title ?></td>
    <td><?php 
    if($data->completed == 1){
    echo "Verdadeiro";}else{echo "Falso";} ?></td>
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