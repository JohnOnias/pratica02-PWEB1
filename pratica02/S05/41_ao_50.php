<!DOCTYPE html>
<?php
    require_once 'alerta.php';
?>

<html lang="pt-BR">
    

<head>
  <meta charset="UTF-8">
  
  <style>
    body {
      margin: 0px;
      height: 100vh;
      display: flex;
      justify-content: center;
      text-align: center;
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
    }

   
  </style>
</head>

<body>
  <div class="centro">

  <?php
  print("<h1> Seção 5: HTML + PHP, Funçoes Nativas (include, require, divisão de templates)</h1> <br>");
    
    //41
    print("<h3> 41 - Titulo dinamico de paginas: </h3> <br>");
    $titulo = "41 ao 50"; 
     print("<title>$titulo</title>");
     print("<p> Titulo dessa pagina</p>"); 

    //42
    print("<h3> 42 - Mensagem de alerta padrão: </h3> <br>");
    Alerta('Mensagem de alerta padrão');


    //43
    print("<h3> 43 - Estrutura reutilizavel: </h3> <br>");
        print('<a href="\pratica02\S05\43\index.php">Ir para o site da questao! </a><p> ');
  








?>
  </div>


</body>

</html>